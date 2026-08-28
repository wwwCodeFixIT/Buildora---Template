<?php
/**
 * Title: About Page Hero
 * Slug: buildora/about-page-hero
 * Categories: buildora, featured
 * Keywords: about, hero, company
 * Description: Premium inner-page hero for the About page.
 */
?>
<!-- wp:group {"align":"full","className":"buildora-about-hero","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull buildora-about-hero">
	<!-- wp:group {"align":"wide","className":"buildora-about-hero__inner","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide buildora-about-hero__inner">
		<!-- wp:paragraph {"className":"buildora-about-hero__breadcrumb"} -->
		<p class="buildora-about-hero__breadcrumb"><a href="/"><?php esc_html_e( 'Home', 'buildora' ); ?></a><span aria-hidden="true"> / </span><span><?php esc_html_e( 'About', 'buildora' ); ?></span></p>
		<!-- /wp:paragraph -->

		<!-- wp:group {"className":"buildora-about-hero__grid","layout":{"type":"default"}} -->
		<div class="wp-block-group buildora-about-hero__grid">
			<!-- wp:group {"className":"buildora-about-hero__copy","layout":{"type":"default"}} -->
			<div class="wp-block-group buildora-about-hero__copy">
				<!-- wp:paragraph {"className":"buildora-about-hero__eyebrow"} -->
				<p class="buildora-about-hero__eyebrow"><?php esc_html_e( 'About Buildora', 'buildora' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":1,"className":"buildora-about-hero__title"} -->
				<h1 class="wp-block-heading buildora-about-hero__title"><?php esc_html_e( 'Built to make the work feel clear.', 'buildora' ); ?></h1>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"className":"buildora-about-hero__lead"} -->
				<p class="buildora-about-hero__lead"><?php esc_html_e( 'Buildora is built around practical delivery: clear scope, visible decisions and one accountable team from the first conversation to the final handover.', 'buildora' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"buildora-about-hero__panel","layout":{"type":"default"}} -->
			<div class="wp-block-group buildora-about-hero__panel">
				<!-- wp:paragraph {"className":"buildora-about-hero__panel-label"} -->
				<p class="buildora-about-hero__panel-label"><?php esc_html_e( 'What we value', 'buildora' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:html -->
				<div class="buildora-about-hero__values">
					<div><strong><?php esc_html_e( 'Clear scope', 'buildora' ); ?></strong><span>01</span></div>
					<div><strong><?php esc_html_e( 'Accountability', 'buildora' ); ?></strong><span>02</span></div>
					<div><strong><?php esc_html_e( 'Better handovers', 'buildora' ); ?></strong><span>03</span></div>
				</div>
				<!-- /wp:html -->

				<!-- wp:paragraph {"className":"buildora-about-hero__panel-copy"} -->
				<p class="buildora-about-hero__panel-copy"><?php esc_html_e( 'Practical communication, documented milestones and work that closes out properly.', 'buildora' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
