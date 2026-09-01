<?php
require_once '/wordpress/wp-load.php';

update_option( 'blogname', 'Lexora' );
update_option( 'blogdescription', 'Law Firm & Legal Practice' );

$pages = array(
	array( 'title' => 'Practice Areas', 'slug' => 'practice-areas' ),
	array( 'title' => 'Attorneys', 'slug' => 'attorneys' ),
	array( 'title' => 'Results', 'slug' => 'results' ),
	array( 'title' => 'About', 'slug' => 'about' ),
	array( 'title' => 'Contact', 'slug' => 'contact' ),
	array( 'title' => 'Eleanor Mercer', 'slug' => 'attorney-profile' ),
);

foreach ( $pages as $page ) {
	$existing = get_page_by_path( $page['slug'], OBJECT, 'page' );

	$postarr = array(
		'post_type'    => 'page',
		'post_status'  => 'publish',
		'post_title'   => $page['title'],
		'post_name'    => $page['slug'],
		'post_content' => '',
	);

	if ( $existing instanceof WP_Post ) {
		$postarr['ID'] = $existing->ID;
		$page_id       = wp_update_post( $postarr, true );
	} else {
		$page_id = wp_insert_post( $postarr, true );
	}

	if ( is_wp_error( $page_id ) ) {
		throw new RuntimeException( $page_id->get_error_message() );
	}
}

flush_rewrite_rules();
