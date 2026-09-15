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
		'title'   => 'David Whitmore',
		'slug'    => 'david-whitmore',
		'excerpt' => 'Founding Partner focused on corporate law, strategic transactions and high-stakes business matters.',
		'content' => '<!-- wp:paragraph --><p>David Whitmore advises founders, boards and established businesses on corporate strategy, contracts, governance and complex commercial decisions.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>His approach combines clear legal analysis with practical commercial judgment and disciplined preparation.</p><!-- /wp:paragraph -->',
	),
	array(
		'title'   => 'Sophia Langford',
		'slug'    => 'sophia-langford',
		'excerpt' => 'Senior Counsel with over 15 years of experience delivering strategic legal solutions and exceptional client service.',
		'content' => '<!-- wp:paragraph --><p>Sophia Langford focuses on complex litigation and business law, providing clients with practical guidance and assertive representation.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>She is known for her analytical approach and commitment to achieving favorable outcomes while keeping clients informed at every stage.</p><!-- /wp:paragraph -->',
	),
	array(
		'title'   => 'James Carter',
		'slug'    => 'james-carter',
		'excerpt' => 'Litigation Attorney focused on disputes, personal injury matters and courtroom advocacy.',
		'content' => '<!-- wp:paragraph --><p>James Carter represents clients in demanding disputes where preparation, evidence and strategy determine the outcome.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>He brings direct communication and a focused trial mindset to every matter.</p><!-- /wp:paragraph -->',
	),
	array(
		'title'   => 'Olivia Bennett',
		'slug'    => 'olivia-bennett',
		'excerpt' => 'Real Estate Attorney advising on transactions, ownership matters and complex property issues.',
		'content' => '<!-- wp:paragraph --><p>Olivia Bennett advises individuals, investors and businesses on real-estate transactions, property rights and negotiated resolutions.</p><!-- /wp:paragraph -->',
	),
	array(
		'title'   => 'Michael Reeves',
		'slug'    => 'michael-reeves',
		'excerpt' => 'Criminal Defense Attorney providing strategic representation in complex and high-risk matters.',
		'content' => '<!-- wp:paragraph --><p>Michael Reeves provides focused criminal-defense representation with careful case analysis, clear advice and disciplined advocacy.</p><!-- /wp:paragraph -->',
	),
	array(
		'title'   => 'Isabella Mercer',
		'slug'    => 'isabella-mercer',
		'excerpt' => 'Estate Planning Attorney helping clients protect assets, plan succession and preserve their legacy.',
		'content' => '<!-- wp:paragraph --><p>Isabella Mercer helps private clients structure estate plans, trusts and succession arrangements around their long-term goals.</p><!-- /wp:paragraph -->',
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
