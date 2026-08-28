<?php
/**
 * Buildora theme bootstrap.
 *
 * @package Buildora
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'BUILDORA_VERSION', '0.1.0' );

/**
 * Theme setup.
 */
function buildora_setup(): void {
	load_theme_textdomain( 'buildora', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'appearance-tools' );
	add_theme_support( 'align-wide' );
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'buildora_setup' );

/**
 * Read the Vite production manifest.
 *
 * @return array<string, mixed>
 */
function buildora_get_vite_manifest(): array {
	static $manifest = null;

	if ( null !== $manifest ) {
		return $manifest;
	}

	$manifest_path = get_theme_file_path( 'assets/dist/manifest.json' );

	if ( ! is_readable( $manifest_path ) ) {
		$manifest = array();
		return $manifest;
	}

	$contents = file_get_contents( $manifest_path ); // phpcs:ignore WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents
	$decoded  = is_string( $contents ) ? json_decode( $contents, true ) : null;
	$manifest = is_array( $decoded ) ? $decoded : array();

	return $manifest;
}

/**
 * Resolve the Vite app entry.
 *
 * The production build is CSS-only today, but the JS entry fallback keeps the
 * loader future-proof if progressive enhancement is added later.
 *
 * @return array<string, mixed>|null
 */
function buildora_get_vite_entry(): ?array {
	$manifest = buildora_get_vite_manifest();
	$entry    = $manifest['src/scss/app.scss'] ?? $manifest['src/js/app.js'] ?? null;

	return is_array( $entry ) ? $entry : null;
}

/**
 * Enqueue frontend assets produced by Vite.
 */
function buildora_enqueue_assets(): void {
	wp_enqueue_style(
		'buildora-base',
		get_stylesheet_uri(),
		array(),
		BUILDORA_VERSION
	);

	$entry = buildora_get_vite_entry();

	if ( null === $entry || empty( $entry['file'] ) || ! is_string( $entry['file'] ) ) {
		return;
	}

	$entry_file = ltrim( $entry['file'], '/' );
	$css_files  = array();

	if ( '.css' === substr( $entry_file, -4 ) ) {
		$css_files[] = $entry_file;
	}

	if ( ! empty( $entry['css'] ) && is_array( $entry['css'] ) ) {
		foreach ( $entry['css'] as $css_file ) {
			if ( is_string( $css_file ) ) {
				$css_files[] = ltrim( $css_file, '/' );
			}
		}
	}

	$css_files = array_values( array_unique( $css_files ) );

	foreach ( $css_files as $index => $css_file ) {
		wp_enqueue_style(
			'buildora-app-' . absint( $index ),
			get_theme_file_uri( 'assets/dist/' . $css_file ),
			array( 'buildora-base' ),
			BUILDORA_VERSION
		);
	}

	if ( '.css' === substr( $entry_file, -4 ) ) {
		return;
	}

	$script_uri = get_theme_file_uri( 'assets/dist/' . $entry_file );

	if ( function_exists( 'wp_enqueue_script_module' ) ) {
		wp_enqueue_script_module(
			'buildora/app',
			$script_uri,
			array(),
			BUILDORA_VERSION,
			array( 'in_footer' => true )
		);
		return;
	}

	// Fallback for older WordPress versions.
	wp_enqueue_script( 'buildora-app', $script_uri, array(), BUILDORA_VERSION, true );
	wp_script_add_data( 'buildora-app', 'type', 'module' );
}
add_action( 'wp_enqueue_scripts', 'buildora_enqueue_assets' );

/**
 * Register a dedicated pattern category.
 */
function buildora_register_pattern_category(): void {
	register_block_pattern_category(
		'buildora',
		array(
			'label'       => __( 'Buildora', 'buildora' ),
			'description' => __( 'Reusable Buildora page sections.', 'buildora' ),
		)
	);
}
add_action( 'init', 'buildora_register_pattern_category' );

/**
 * Add an accessible skip link as early as possible in the body.
 */
function buildora_skip_link(): void {
	printf(
		'<a class="screen-reader-text skip-link" href="#main">%s</a>',
		esc_html__( 'Skip to content', 'buildora' )
	);
}
add_action( 'wp_body_open', 'buildora_skip_link' );

/**
 * Redirect a contact form submission back to the Contact page.
 *
 * @param string $status Public status key.
 */
function buildora_contact_redirect( string $status ): void {
	$url = add_query_arg(
		'contact_status',
		sanitize_key( $status ),
		home_url( '/contact/' )
	);

	wp_safe_redirect( $url . '#project-brief' );
	exit;
}

/**
 * Build a privacy-preserving transient key for basic contact-form throttling.
 */
function buildora_contact_rate_limit_key(): string {
	$remote_address = isset( $_SERVER['REMOTE_ADDR'] )
		? sanitize_text_field( wp_unslash( $_SERVER['REMOTE_ADDR'] ) )
		: '';
	$user_agent     = isset( $_SERVER['HTTP_USER_AGENT'] )
		? sanitize_text_field( wp_unslash( $_SERVER['HTTP_USER_AGENT'] ) )
		: '';

	$fingerprint = hash_hmac(
		'sha256',
		$remote_address . '|' . $user_agent,
		wp_salt( 'nonce' )
	);

	return 'buildora_contact_' . substr( $fingerprint, 0, 32 );
}

/**
 * Process the project enquiry form.
 */
function buildora_handle_contact_form(): void {
	$request_method = isset( $_SERVER['REQUEST_METHOD'] )
		? strtoupper( sanitize_text_field( wp_unslash( $_SERVER['REQUEST_METHOD'] ) ) )
		: '';

	if ( 'POST' !== $request_method ) {
		buildora_contact_redirect( 'invalid' );
	}

	$nonce = isset( $_POST['buildora_contact_nonce'] )
		? sanitize_text_field( wp_unslash( $_POST['buildora_contact_nonce'] ) )
		: '';

	if ( ! $nonce || ! wp_verify_nonce( $nonce, 'buildora_contact' ) ) {
		buildora_contact_redirect( 'invalid' );
	}

	$honeypot = isset( $_POST['company_website'] )
		? sanitize_text_field( wp_unslash( $_POST['company_website'] ) )
		: '';

	if ( '' !== $honeypot ) {
		buildora_contact_redirect( 'success' );
	}

	$rate_limit_key = buildora_contact_rate_limit_key();

	if ( get_transient( $rate_limit_key ) ) {
		buildora_contact_redirect( 'rate_limited' );
	}

	$name = isset( $_POST['name'] )
		? sanitize_text_field( wp_unslash( $_POST['name'] ) )
		: '';
	$email = isset( $_POST['email'] )
		? sanitize_email( wp_unslash( $_POST['email'] ) )
		: '';
	$phone = isset( $_POST['phone'] )
		? sanitize_text_field( wp_unslash( $_POST['phone'] ) )
		: '';
	$location = isset( $_POST['location'] )
		? sanitize_text_field( wp_unslash( $_POST['location'] ) )
		: '';
	$project_type = isset( $_POST['project_type'] )
		? sanitize_key( wp_unslash( $_POST['project_type'] ) )
		: '';
	$message = isset( $_POST['message'] )
		? sanitize_textarea_field( wp_unslash( $_POST['message'] ) )
		: '';

	$project_types = array(
		'renovation'   => __( 'Renovation', 'buildora' ),
		'construction' => __( 'Construction', 'buildora' ),
		'maintenance'  => __( 'Repairs & maintenance', 'buildora' ),
		'other'        => __( 'Something else', 'buildora' ),
	);

	if (
		'' === $name ||
		! is_email( $email ) ||
		'' === $location ||
		! isset( $project_types[ $project_type ] ) ||
		'' === $message ||
		strlen( $name ) > 120 ||
		strlen( $email ) > 190 ||
		strlen( $phone ) > 80 ||
		strlen( $location ) > 160 ||
		strlen( $message ) > 10000
	) {
		buildora_contact_redirect( 'invalid' );
	}

	$recipient = sanitize_email(
		apply_filters( 'buildora_contact_recipient', get_option( 'admin_email' ) )
	);

	if ( ! is_email( $recipient ) ) {
		buildora_contact_redirect( 'error' );
	}

	set_transient( $rate_limit_key, 1, MINUTE_IN_SECONDS );

	$subject = sprintf(
		/* translators: %s: project type. */
		__( 'New Buildora enquiry: %s', 'buildora' ),
		$project_types[ $project_type ]
	);

	$body_lines = array(
		__( 'New project enquiry from the Buildora website', 'buildora' ),
		'',
		sprintf( __( 'Name: %s', 'buildora' ), $name ),
		sprintf( __( 'Email: %s', 'buildora' ), $email ),
		sprintf( __( 'Phone: %s', 'buildora' ), $phone ?: __( 'Not provided', 'buildora' ) ),
		sprintf( __( 'Location / postcode: %s', 'buildora' ), $location ),
		sprintf( __( 'Type of work: %s', 'buildora' ), $project_types[ $project_type ] ),
		'',
		__( 'Project brief:', 'buildora' ),
		$message,
		'',
		sprintf( __( 'Website: %s', 'buildora' ), home_url( '/' ) ),
	);

	$headers = array(
		'Content-Type: text/plain; charset=UTF-8',
		sprintf( 'Reply-To: %s <%s>', $name, $email ),
	);

	$sent = wp_mail(
		$recipient,
		$subject,
		implode( "\n", $body_lines ),
		$headers
	);

	if ( ! $sent ) {
		delete_transient( $rate_limit_key );
		buildora_contact_redirect( 'error' );
	}

	buildora_contact_redirect( 'success' );
}
add_action( 'admin_post_buildora_contact', 'buildora_handle_contact_form' );
add_action( 'admin_post_nopriv_buildora_contact', 'buildora_handle_contact_form' );
