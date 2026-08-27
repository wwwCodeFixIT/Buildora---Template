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
