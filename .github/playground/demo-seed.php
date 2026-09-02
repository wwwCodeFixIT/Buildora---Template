<?php
require_once '/wordpress/wp-load.php';

update_option( 'blogname', 'Lexora' );
update_option( 'blogdescription', 'Law Firm & Legal Practice' );

/**
 * Create or update a demo Page.
 *
 * @param array<string, mixed> $page Demo page data.
 * @return int Page ID.
 */
function lexora_seed_page( array $page ): int {
	$parent_id = isset( $page['parent'] ) ? absint( $page['parent'] ) : 0;
	$path      = $parent_id > 0 && ! empty( $page['parent_slug'] )
		? trailingslashit( (string) $page['parent_slug'] ) . $page['slug']
		: $page['slug'];
	$existing  = get_page_by_path( $path, OBJECT, 'page' );

	$postarr = array(
		'post_type'    => 'page',
		'post_status'  => 'publish',
		'post_parent'  => $parent_id,
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
		update_post_meta( $page_id, '_wp_page_template', sanitize_key( $page['template'] ) );
	}

	return (int) $page_id;
}

$page_ids = array();

foreach (
	array(
		array( 'title' => 'Practice Areas', 'slug' => 'practice-areas' ),
		array( 'title' => 'Attorneys', 'slug' => 'attorneys' ),
		array( 'title' => 'Results', 'slug' => 'results' ),
		array( 'title' => 'About', 'slug' => 'about' ),
		array( 'title' => 'Contact', 'slug' => 'contact' ),
	) as $page
) {
	$page_ids[ $page['slug'] ] = lexora_seed_page( $page );
}

$attorney_profiles = array(
	array(
		'title'   => 'Eleanor Mercer',
		'slug'    => 'eleanor-mercer',
		'excerpt' => 'Managing Partner focused on commercial disputes, strategic contracts and corporate risk.',
		'content' => '<!-- wp:paragraph {"fontSize":"xs","textColor":"muted"} --><p class="has-muted-color has-text-color has-xs-font-size"><strong>Demo content:</strong> Eleanor Mercer is a fictional attorney profile included only to demonstrate the theme layout.</p><!-- /wp:paragraph --><!-- wp:heading {"level":2} --><h2 class="wp-block-heading">Prepared for complexity. Focused on the decision in front of you.</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Eleanor advises businesses and senior decision-makers when a legal problem carries commercial consequences. Her approach identifies the leverage points, preserves options and keeps the next decision clear.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Advice stays direct: what matters now, what can wait, what the evidence supports and what each route may cost in time, money and management attention.</p><!-- /wp:paragraph --><!-- wp:heading {"level":2} --><h2 class="wp-block-heading">Representative matters</h2><!-- /wp:heading --><!-- wp:list {"className":"lexora-profile__matter-list"} --><ul class="wp-block-list lexora-profile__matter-list"><li>Advising a founder-led business through a complex shareholder dispute and negotiated exit.</li><li>Defending a services company against a substantial breach-of-contract claim.</li><li>Structuring strategic supplier agreements for a growing professional-services group.</li></ul><!-- /wp:list --><!-- wp:heading {"level":2} --><h2 class="wp-block-heading">Credentials</h2><!-- /wp:heading --><!-- wp:list {"className":"lexora-profile__credential-list"} --><ul class="wp-block-list lexora-profile__credential-list"><li>Managing Partner — demo role</li><li>Commercial disputes and corporate advisory</li><li>LL.M., Commercial Law — illustrative credential</li></ul><!-- /wp:list -->',
	),
	array(
		'title'   => 'Daniel Moore',
		'slug'    => 'daniel-moore',
		'excerpt' => 'Senior Associate advising on employment issues, contract disputes and negotiated resolutions.',
		'content' => '<!-- wp:paragraph {"fontSize":"xs","textColor":"muted"} --><p class="has-muted-color has-text-color has-xs-font-size"><strong>Demo content:</strong> Daniel Moore is a fictional attorney profile included only to demonstrate the theme layout.</p><!-- /wp:paragraph --><!-- wp:heading {"level":2} --><h2 class="wp-block-heading">Clear advice when people and contracts collide.</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Daniel works with employers and senior professionals on employment risk, contractual disputes and sensitive negotiations. He focuses on resolving uncertainty early and preparing thoroughly when formal action is necessary.</p><!-- /wp:paragraph --><!-- wp:heading {"level":2} --><h2 class="wp-block-heading">Representative matters</h2><!-- /wp:heading --><!-- wp:list {"className":"lexora-profile__matter-list"} --><ul class="wp-block-list lexora-profile__matter-list"><li>Supporting a company through a senior executive exit and confidential settlement.</li><li>Advising on post-termination restrictions and contract enforcement.</li><li>Resolving a services agreement dispute through structured negotiation.</li></ul><!-- /wp:list --><!-- wp:heading {"level":2} --><h2 class="wp-block-heading">Credentials</h2><!-- /wp:heading --><!-- wp:list {"className":"lexora-profile__credential-list"} --><ul class="wp-block-list lexora-profile__credential-list"><li>Senior Associate — demo role</li><li>Employment and contract disputes</li><li>Professional qualifications — illustrative content</li></ul><!-- /wp:list -->',
	),
	array(
		'title'   => 'Sophia Carter',
		'slug'    => 'sophia-carter',
		'excerpt' => 'Associate focused on property, ownership questions and private-client matters.',
		'content' => '<!-- wp:paragraph {"fontSize":"xs","textColor":"muted"} --><p class="has-muted-color has-text-color has-xs-font-size"><strong>Demo content:</strong> Sophia Carter is a fictional attorney profile included only to demonstrate the theme layout.</p><!-- /wp:paragraph --><!-- wp:heading {"level":2} --><h2 class="wp-block-heading">Calm guidance for decisions with personal consequences.</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Sophia supports clients on property transactions, ownership disputes and private-client issues. Her work combines careful documentation with a practical explanation of the available routes and their likely consequences.</p><!-- /wp:paragraph --><!-- wp:heading {"level":2} --><h2 class="wp-block-heading">Representative matters</h2><!-- /wp:heading --><!-- wp:list {"className":"lexora-profile__matter-list"} --><ul class="wp-block-list lexora-profile__matter-list"><li>Advising on a disputed beneficial ownership position.</li><li>Supporting a private client through a complex property transaction.</li><li>Negotiating practical terms to resolve a co-ownership disagreement.</li></ul><!-- /wp:list --><!-- wp:heading {"level":2} --><h2 class="wp-block-heading">Credentials</h2><!-- /wp:heading --><!-- wp:list {"className":"lexora-profile__credential-list"} --><ul class="wp-block-list lexora-profile__credential-list"><li>Associate — demo role</li><li>Property and private-client matters</li><li>Professional qualifications — illustrative content</li></ul><!-- /wp:list -->',
	),
);

foreach ( $attorney_profiles as $profile ) {
	$profile['parent']      = $page_ids['attorneys'];
	$profile['parent_slug'] = 'attorneys';
	$profile['template']    = 'attorney-profile';
	lexora_seed_page( $profile );
}

lexora_seed_page(
	array(
		'title'    => 'Commercial Contract Resolution',
		'slug'     => 'commercial-contract-resolution',
		'template' => 'case-result',
		'excerpt'  => 'Illustrative demo matter showing how Lexora presents a representative result without implying a guaranteed outcome.',
		'content'  => '<!-- wp:paragraph {"fontSize":"xs","textColor":"muted"} --><p class="has-muted-color has-text-color has-xs-font-size"><strong>Demo content:</strong> This representative matter is fictional and included only to demonstrate the theme layout.</p><!-- /wp:paragraph --><!-- wp:heading {"level":2} --><h2 class="wp-block-heading">The situation</h2><!-- /wp:heading --><!-- wp:paragraph --><p>A growing services business faced a contractual dispute with a key supplier. The commercial relationship had become difficult, but prolonged proceedings would have created additional cost and management distraction.</p><!-- /wp:paragraph --><!-- wp:heading {"level":2} --><h2 class="wp-block-heading">The approach</h2><!-- /wp:heading --><!-- wp:paragraph --><p>The legal team reviewed the contractual position, narrowed the disputed issues and prepared a negotiation strategy around the client’s commercial priorities.</p><!-- /wp:paragraph --><!-- wp:heading {"level":2} --><h2 class="wp-block-heading">Illustrative outcome</h2><!-- /wp:heading --><!-- wp:paragraph --><p>The matter demonstrates how a firm can present its process and representative experience while keeping results language careful and factual. Past outcomes never guarantee future results.</p><!-- /wp:paragraph -->',
	)
);

flush_rewrite_rules();
