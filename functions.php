<?php
/**
 * Lexora theme bootstrap.
 *
 * @package Lexora
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'LEXORA_VERSION', '1.0.0' );

/**
 * Theme setup.
 */
function lexora_setup(): void {
	load_theme_textdomain( 'lexora', get_template_directory() . '/languages' );

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

	$editor_styles = array( 'style.css' );

	foreach ( lexora_get_vite_css_files() as $css_file ) {
		$editor_styles[] = 'assets/dist/' . $css_file;
	}

	add_editor_style( $editor_styles );
}
add_action( 'after_setup_theme', 'lexora_setup' );

/**
 * Read the Vite production manifest.
 *
 * @return array<string, mixed>
 */
function lexora_get_vite_manifest(): array {
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
 * @return array<string, mixed>|null
 */
function lexora_get_vite_entry(): ?array {
	$manifest = lexora_get_vite_manifest();
	$entry    = $manifest['src/scss/app.scss'] ?? $manifest['src/js/app.js'] ?? null;

	return is_array( $entry ) ? $entry : null;
}

/**
 * Resolve all CSS files attached to the current Vite entry.
 *
 * @return array<int, string>
 */
function lexora_get_vite_css_files(): array {
	$entry = lexora_get_vite_entry();

	if ( null === $entry || empty( $entry['file'] ) || ! is_string( $entry['file'] ) ) {
		return array();
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

	return array_values( array_unique( $css_files ) );
}

/**
 * Enqueue frontend assets produced by Vite.
 */
function lexora_enqueue_assets(): void {
	wp_enqueue_style(
		'lexora-base',
		get_stylesheet_uri(),
		array(),
		LEXORA_VERSION
	);

	foreach ( lexora_get_vite_css_files() as $index => $css_file ) {
		wp_enqueue_style(
			'lexora-app-' . absint( $index ),
			get_theme_file_uri( 'assets/dist/' . $css_file ),
			array( 'lexora-base' ),
			LEXORA_VERSION
		);
	}

	$entry = lexora_get_vite_entry();

	if ( null === $entry || empty( $entry['file'] ) || ! is_string( $entry['file'] ) ) {
		return;
	}

	$entry_file = ltrim( $entry['file'], '/' );

	if ( '.css' === substr( $entry_file, -4 ) ) {
		return;
	}

	$script_uri = get_theme_file_uri( 'assets/dist/' . $entry_file );

	if ( function_exists( 'wp_enqueue_script_module' ) ) {
		wp_enqueue_script_module(
			'lexora/app',
			$script_uri,
			array(),
			LEXORA_VERSION,
			array( 'in_footer' => true )
		);
		return;
	}

	wp_enqueue_script( 'lexora-app', $script_uri, array(), LEXORA_VERSION, true );
	wp_script_add_data( 'lexora-app', 'type', 'module' );
}
add_action( 'wp_enqueue_scripts', 'lexora_enqueue_assets' );

/**
 * Register the Lexora pattern category.
 */
function lexora_register_pattern_category(): void {
	register_block_pattern_category(
		'lexora',
		array(
			'label'       => __( 'Lexora', 'lexora' ),
			'description' => __( 'Reusable Lexora legal-practice page sections.', 'lexora' ),
		)
	);
}
add_action( 'init', 'lexora_register_pattern_category' );

/**
 * Add an accessible skip link as early as possible in the body.
 */
function lexora_skip_link(): void {
	printf(
		'<a class="screen-reader-text skip-link" href="#main">%s</a>',
		esc_html__( 'Skip to content', 'lexora' )
	);
}
add_action( 'wp_body_open', 'lexora_skip_link' );

/**
 * Keep starter navigation useful before recommended marketing Pages exist.
 */
function lexora_redirect_missing_marketing_routes(): void {
	if ( is_admin() || wp_doing_ajax() || ! is_404() ) {
		return;
	}

	$request_uri  = isset( $_SERVER['REQUEST_URI'] ) ? wp_unslash( $_SERVER['REQUEST_URI'] ) : '';
	$request_path = wp_parse_url( $request_uri, PHP_URL_PATH );

	if ( ! is_string( $request_path ) || '' === $request_path ) {
		return;
	}

	$home_path = wp_parse_url( home_url( '/' ), PHP_URL_PATH );
	$home_path = is_string( $home_path ) ? untrailingslashit( $home_path ) : '';

	if ( '' !== $home_path && 0 === strpos( $request_path, $home_path ) ) {
		$request_path = substr( $request_path, strlen( $home_path ) );
	}

	$route = trim( $request_path, '/' );

	$fallbacks = array(
		'practice-areas'   => 'practice-areas',
		'attorneys'        => 'attorneys',
		'attorney-profile' => 'attorneys',
		'results'          => 'results',
		'about'            => 'about',
		'contact'          => 'contact',
	);

	$anchor = $fallbacks[ $route ] ?? '';

	if ( '' === $anchor ) {
		return;
	}

	wp_safe_redirect( home_url( '/#' . $anchor ), 302 );
	exit;
}
add_action( 'template_redirect', 'lexora_redirect_missing_marketing_routes' );

/**
 * Redirect a consultation form submission back to the Contact page.
 *
 * @param string $status Public status key.
 */
function lexora_contact_redirect( string $status ): void {
	$url = add_query_arg(
		'contact_status',
		sanitize_key( $status ),
		home_url( '/contact/' )
	);

	wp_safe_redirect( $url . '#consultation' );
	exit;
}

/**
 * Build a privacy-preserving transient key for basic contact-form throttling.
 */
function lexora_contact_rate_limit_key(): string {
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

	return 'lexora_contact_' . substr( $fingerprint, 0, 32 );
}

/**
 * Process the legal consultation form.
 */
function lexora_handle_contact_form(): void {
	$request_method = isset( $_SERVER['REQUEST_METHOD'] )
		? strtoupper( sanitize_text_field( wp_unslash( $_SERVER['REQUEST_METHOD'] ) ) )
		: '';

	if ( 'POST' !== $request_method ) {
		lexora_contact_redirect( 'invalid' );
	}

	$nonce = isset( $_POST['lexora_contact_nonce'] )
		? sanitize_text_field( wp_unslash( $_POST['lexora_contact_nonce'] ) )
		: '';

	if ( ! $nonce || ! wp_verify_nonce( $nonce, 'lexora_contact' ) ) {
		lexora_contact_redirect( 'invalid' );
	}

	$honeypot = isset( $_POST['company_website'] )
		? sanitize_text_field( wp_unslash( $_POST['company_website'] ) )
		: '';

	if ( '' !== $honeypot ) {
		lexora_contact_redirect( 'success' );
	}

	$rate_limit_key = lexora_contact_rate_limit_key();

	if ( get_transient( $rate_limit_key ) ) {
		lexora_contact_redirect( 'rate_limited' );
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
	$matter_type = isset( $_POST['matter_type'] )
		? sanitize_key( wp_unslash( $_POST['matter_type'] ) )
		: '';
	$message = isset( $_POST['message'] )
		? sanitize_textarea_field( wp_unslash( $_POST['message'] ) )
		: '';

	$matter_types = array(
		'business' => __( 'Business / commercial law', 'lexora' ),
		'dispute'  => __( 'Dispute / litigation', 'lexora' ),
		'private'  => __( 'Family / property / private client', 'lexora' ),
		'other'    => __( 'Something else', 'lexora' ),
	);

	if (
		'' === $name ||
		! is_email( $email ) ||
		'' === $location ||
		! isset( $matter_types[ $matter_type ] ) ||
		'' === $message ||
		strlen( $name ) > 120 ||
		strlen( $email ) > 190 ||
		strlen( $phone ) > 80 ||
		strlen( $location ) > 160 ||
		strlen( $message ) > 5000
	) {
		lexora_contact_redirect( 'invalid' );
	}

	$recipient = sanitize_email(
		apply_filters( 'lexora_contact_recipient', get_option( 'admin_email' ) )
	);

	if ( ! is_email( $recipient ) ) {
		lexora_contact_redirect( 'error' );
	}

	set_transient( $rate_limit_key, 1, MINUTE_IN_SECONDS );

	$subject = sprintf(
		/* translators: %s: legal matter type. */
		__( 'New Lexora consultation request: %s', 'lexora' ),
		$matter_types[ $matter_type ]
	);

	$body_lines = array(
		__( 'New consultation request from the Lexora website', 'lexora' ),
		'',
		sprintf( __( 'Name: %s', 'lexora' ), $name ),
		sprintf( __( 'Email: %s', 'lexora' ), $email ),
		sprintf( __( 'Phone: %s', 'lexora' ), $phone ?: __( 'Not provided', 'lexora' ) ),
		sprintf( __( 'Jurisdiction / location: %s', 'lexora' ), $location ),
		sprintf( __( 'Type of legal matter: %s', 'lexora' ), $matter_types[ $matter_type ] ),
		'',
		__( 'Matter summary:', 'lexora' ),
		$message,
		'',
		sprintf( __( 'Website: %s', 'lexora' ), home_url( '/' ) ),
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
		lexora_contact_redirect( 'error' );
	}

	lexora_contact_redirect( 'success' );
}
add_action( 'admin_post_lexora_contact', 'lexora_handle_contact_form' );
add_action( 'admin_post_nopriv_lexora_contact', 'lexora_handle_contact_form' );