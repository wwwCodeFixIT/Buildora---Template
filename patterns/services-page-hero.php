<?php
/**
 * Title: Services Page Hero
 * Slug: buildora/services-page-hero
 * Categories: buildora, banner
 * Keywords: services, page hero, construction
 * Description: Inner-page hero for the Buildora services page.
 */

$buildora_home_url = home_url( '/' );
?>
<!-- wp:group {"align":"full","className":"buildora-inner-hero buildora-services-page-hero","backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull buildora-inner-hero buildora-services-page-hero has-surface-background-color has-background">
	<!-- wp:group {"align":"wide","className":"buildora-inner-hero__inner","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide buildora-inner-hero__inner">
		<!-- wp:html -->
		<nav class="buildora-breadcrumb" aria-label="<?php echo esc_attr_x( 'Breadcrumb', 'navigation landmark', 'buildora' ); ?>">
			<a href="<?php echo esc_url( $buildora_home_url ); ?>"><?php esc_html_e( 'Home', 'buildora' ); ?></a>
			<span aria-hidden="true">/</span>
			<span aria-current="page"><?php esc_html_e( 'Services', 'buildora' ); ?></span>
		</nav>
		<!-- /wp:html -->

		<!-- wp:columns {"verticalAlignment":"bottom","className":"buildora-inner-hero__grid"} -->
		<div class="wp-block-columns are-vertically-aligned-bottom buildora-inner-hero__grid">
			<!-- wp:column {"verticalAlignment":"bottom","width":"64%","className":"buildora-inner-hero__copy"} -->
			<div class="wp-block-column is-vertically-aligned-bottom buildora-inner-hero__copy" style="flex-basis:64%">
				<!-- wp:paragraph {"className":"buildora-inner-hero__eyebrow"} -->
				<p class="buildora-inner-hero__eyebrow"><?php esc_html_e( 'Construction services', 'buildora' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":1,"className":"buildora-inner-hero__title"} -->
				<h1 class="wp-block-heading buildora-inner-hero__title"><?php esc_html_e( 'Practical work. Clear ownership. No loose ends.', 'buildora' ); ?></h1>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"className":"buildora-inner-hero__lead","textColor":"muted","fontSize":"md"} -->
				<p class="buildora-inner-hero__lead has-muted-color has-text-color has-md-font-size"><?php esc_html_e( 'From complete renovations to planned maintenance, Buildora gives every job a clear scope, realistic programme and one accountable team from start to finish.', 'buildora' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"bottom","width":"36%","className":"buildora-services-page-hero__summary"} -->
			<div class="wp-block-column is-vertically-aligned-bottom buildora-services-page-hero__summary" style="flex-basis:36%">
				<!-- wp:group {"className":"buildora-services-page-hero__panel","backgroundColor":"ink","textColor":"paper","layout":{"type":"default"}} -->
				<div class="wp-block-group buildora-services-page-hero__panel has-paper-color has-ink-background-color has-text-color has-background">
					<!-- wp:paragraph {"className":"buildora-services-page-hero__panel-label"} -->
					<p class="buildora-services-page-hero__panel-label"><?php esc_html_e( 'What we handle', 'buildora' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:list {"className":"buildora-services-page-hero__panel-list"} -->
					<ul class="wp-block-list buildora-services-page-hero__panel-list">
						<li><a href="#renovation"><?php esc_html_e( 'Renovation', 'buildora' ); ?><span aria-hidden="true">01</span></a></li>
						<li><a href="#construction"><?php esc_html_e( 'Construction', 'buildora' ); ?><span aria-hidden="true">02</span></a></li>
						<li><a href="#maintenance"><?php esc_html_e( 'Repairs & maintenance', 'buildora' ); ?><span aria-hidden="true">03</span></a></li>
					</ul>
					<!-- /wp:list -->

					<!-- wp:paragraph {"className":"buildora-services-page-hero__panel-note"} -->
					<p class="buildora-services-page-hero__panel-note"><?php esc_html_e( 'Residential and light-commercial work, sized around a realistic scope.', 'buildora' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
