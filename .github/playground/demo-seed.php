<?php
require_once '/wordpress/wp-load.php';

function buildora_demo_case_content( $scope, $duration, $delivery, $brief, $changes, $outcome ) {
	return '<!-- wp:html --><div class="buildora-case-study-demo">'
		. '<div class="buildora-case-study-demo__visual" aria-hidden="true"></div>'
		. '<div class="buildora-case-study-demo__snapshot">'
		. '<div><span>Scope</span><strong>' . esc_html( $scope ) . '</strong></div>'
		. '<div><span>Programme</span><strong>' . esc_html( $duration ) . '</strong></div>'
		. '<div><span>Delivery</span><strong>' . esc_html( $delivery ) . '</strong></div>'
		. '</div>'
		. '<section class="buildora-case-study-demo__section"><h2>The brief</h2><div><p>' . esc_html( $brief ) . '</p></div></section>'
		. '<section class="buildora-case-study-demo__section"><h2>What changed</h2><div><p>' . esc_html( $changes ) . '</p></div></section>'
		. '<section class="buildora-case-study-demo__section"><h2>The outcome</h2><div><p>' . esc_html( $outcome ) . '</p></div></section>'
		. '</div><!-- /wp:html -->';
}

$pages = array(
	array( 'title' => 'Services', 'slug' => 'services' ),
	array( 'title' => 'Projects', 'slug' => 'projects' ),
	array( 'title' => 'About', 'slug' => 'about' ),
	array( 'title' => 'Contact', 'slug' => 'contact' ),
);

$page_ids = array();

foreach ( $pages as $page ) {
	$existing = get_page_by_path( $page['slug'], OBJECT, 'page' );

	if ( $existing instanceof WP_Post ) {
		$page_ids[ $page['slug'] ] = $existing->ID;
		continue;
	}

	$page_id = wp_insert_post(
		array(
			'post_type'    => 'page',
			'post_status'  => 'publish',
			'post_title'   => $page['title'],
			'post_name'    => $page['slug'],
			'post_content' => '',
		),
		true
	);

	if ( is_wp_error( $page_id ) ) {
		throw new RuntimeException( $page_id->get_error_message() );
	}

	$page_ids[ $page['slug'] ] = $page_id;
}

$projects = array(
	array(
		'title'    => 'Riverside House',
		'slug'     => 'riverside-house',
		'excerpt'  => 'A full internal renovation with a reworked ground floor, upgraded finishes and a tighter handover programme.',
		'scope'    => 'Full renovation',
		'duration' => '18 weeks',
		'delivery' => 'Occupied home',
		'brief'    => 'Create a more practical ground floor, refresh the full interior and keep decisions visible enough for the client to stay confident throughout the programme.',
		'changes'  => 'The layout was simplified, finish decisions were locked earlier and milestones were documented before each trade moved on to the next stage.',
		'outcome'  => 'The home was handed back with a cleaner layout, consistent finishes and a close-out pack that made the final walkthrough straightforward.',
	),
	array(
		'title'    => 'Northline Studio',
		'slug'     => 'northline-studio',
		'excerpt'  => 'A light-commercial fit-out coordinated around access, programme certainty and a clean close-out.',
		'scope'    => 'Commercial fit-out',
		'duration' => '10 weeks',
		'delivery' => 'Fixed opening date',
		'brief'    => 'Deliver a practical studio fit-out to a fixed opening date while keeping access, approvals and finish decisions tightly coordinated.',
		'changes'  => 'The programme was broken into visible decision gates, long-lead items were confirmed first and site updates were tied to measurable milestones.',
		'outcome'  => 'The studio opened to plan with a documented snag close-out and a clear handover of finishes, warranties and maintenance notes.',
	),
	array(
		'title'    => 'Oakfield Extension',
		'slug'     => 'oakfield-extension',
		'excerpt'  => 'A rear extension delivered around an occupied home with staged decisions and practical handover notes.',
		'scope'    => 'Residential extension',
		'duration' => '14 weeks',
		'delivery' => 'Staged around family life',
		'brief'    => 'Add useful family space without turning the occupied house into an unmanaged building site for the duration of the work.',
		'changes'  => 'Access and noisy work were phased, temporary protection was treated as part of the scope and finish choices were signed off before installation.',
		'outcome'  => 'The extension connected cleanly to the existing home and the family received a clear walkthrough of final checks and aftercare items.',
	),
);

foreach ( $projects as $project ) {
	$path     = 'projects/' . $project['slug'];
	$existing = get_page_by_path( $path, OBJECT, 'page' );
	$content  = buildora_demo_case_content(
		$project['scope'],
		$project['duration'],
		$project['delivery'],
		$project['brief'],
		$project['changes'],
		$project['outcome']
	);

	$postarr = array(
		'post_type'    => 'page',
		'post_status'  => 'publish',
		'post_parent'  => $page_ids['projects'],
		'post_title'   => $project['title'],
		'post_name'    => $project['slug'],
		'post_excerpt' => $project['excerpt'],
		'post_content' => $content,
	);

	if ( $existing instanceof WP_Post ) {
		$postarr['ID'] = $existing->ID;
		$project_id    = wp_update_post( $postarr, true );
	} else {
		$project_id = wp_insert_post( $postarr, true );
	}

	if ( is_wp_error( $project_id ) ) {
		throw new RuntimeException( $project_id->get_error_message() );
	}

	update_post_meta( $project_id, '_wp_page_template', 'project-case-study' );
}

flush_rewrite_rules();
