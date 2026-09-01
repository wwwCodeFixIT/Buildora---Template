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
	array(
		'title'    => 'Eleanor Mercer',
		'slug'     => 'attorney-profile',
		'template' => 'attorney-profile',
	),
	array(
		'title'    => 'Commercial Contract Resolution',
		'slug'     => 'commercial-contract-resolution',
		'template' => 'case-result',
		'excerpt'  => 'Illustrative demo matter showing how Lexora presents a representative result without implying a guaranteed outcome.',
		'content'  => '<!-- wp:paragraph {"fontSize":"xs","textColor":"muted"} --><p class="has-muted-color has-text-color has-xs-font-size"><strong>Demo content:</strong> This representative matter is fictional and included only to demonstrate the theme layout.</p><!-- /wp:paragraph --><!-- wp:heading {"level":2} --><h2 class="wp-block-heading">The situation</h2><!-- /wp:heading --><!-- wp:paragraph --><p>A growing services business faced a contractual dispute with a key supplier. The commercial relationship had become difficult, but prolonged proceedings would have created additional cost and management distraction.</p><!-- /wp:paragraph --><!-- wp:heading {"level":2} --><h2 class="wp-block-heading">The approach</h2><!-- /wp:heading --><!-- wp:paragraph --><p>The legal team reviewed the contractual position, narrowed the disputed issues and prepared a negotiation strategy around the client’s commercial priorities.</p><!-- /wp:paragraph --><!-- wp:heading {"level":2} --><h2 class="wp-block-heading">Illustrative outcome</h2><!-- /wp:heading --><!-- wp:paragraph --><p>The matter demonstrates how a firm can present its process and representative experience while keeping results language careful and factual. Past outcomes never guarantee future results.</p><!-- /wp:paragraph -->',
	),
);

foreach ( $pages as $page ) {
	$existing = get_page_by_path( $page['slug'], OBJECT, 'page' );

	$postarr = array(
		'post_type'    => 'page',
		'post_status'  => 'publish',
		'post_title'   => $page['title'],
		'post_name'    => $page['slug'],
		'post_content' => $page['content'] ?? '',
		'post_excerpt' => $page['excerpt'] ?? '',
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

	if ( ! empty( $page['template'] ) ) {
		update_post_meta( $page_id, '_wp_page_template', $page['template'] );
	}
}

flush_rewrite_rules();
