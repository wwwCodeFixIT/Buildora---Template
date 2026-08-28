<?php
/**
 * Title: Projects Page Hero
 * Slug: buildora/projects-page-hero
 * Categories: buildora, banner
 * Keywords: projects, portfolio, hero, case studies
 * Description: Inner-page hero for the Buildora projects overview.
 */
?>
<!-- wp:group {"align":"full","className":"buildora-projects-page-hero","backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull buildora-projects-page-hero has-surface-background-color has-background">
	<!-- wp:group {"align":"wide","className":"buildora-projects-page-hero__inner","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide buildora-projects-page-hero__inner">
		<!-- wp:paragraph {"className":"buildora-projects-page-hero__breadcrumb"} -->
		<p class="buildora-projects-page-hero__breadcrumb"><a href="/"><?php esc_html_e( 'Home', 'buildora' ); ?></a><span aria-hidden="true"> / </span><strong><?php esc_html_e( 'Projects', 'buildora' ); ?></strong></p>
		<!-- /wp:paragraph -->

		<!-- wp:columns {"verticalAlignment":"center","className":"buildora-projects-page-hero__grid"} -->
		<div class="wp-block-columns are-vertically-aligned-center buildora-projects-page-hero__grid">
			<!-- wp:column {"verticalAlignment":"center","width":"64%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:64%">
				<!-- wp:paragraph {"className":"buildora-projects-page-hero__eyebrow"} --><p class="buildora-projects-page-hero__eyebrow"><?php esc_html_e( 'Selected work', 'buildora' ); ?></p><!-- /wp:paragraph -->
				<!-- wp:heading {"level":1,"className":"buildora-projects-page-hero__title"} --><h1 class="wp-block-heading buildora-projects-page-hero__title"><?php esc_html_e( 'Projects shaped by clear decisions.', 'buildora' ); ?></h1><!-- /wp:heading -->
				<!-- wp:paragraph {"className":"buildora-projects-page-hero__lead"} --><p class="buildora-projects-page-hero__lead"><?php esc_html_e( 'A closer look at renovation, construction and fit-out work — the brief, the decisions and the result at handover.', 'buildora' ); ?></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"36%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:36%">
				<!-- wp:group {"className":"buildora-projects-page-hero__panel","layout":{"type":"default"}} -->
				<div class="wp-block-group buildora-projects-page-hero__panel">
					<!-- wp:paragraph {"className":"buildora-projects-page-hero__panel-label"} --><p class="buildora-projects-page-hero__panel-label"><?php esc_html_e( 'Across every job', 'buildora' ); ?></p><!-- /wp:paragraph -->
					<!-- wp:list {"className":"buildora-projects-page-hero__panel-list"} -->
					<ul class="wp-block-list buildora-projects-page-hero__panel-list">
						<li><span><?php esc_html_e( 'Residential', 'buildora' ); ?></span><strong>01</strong></li>
						<li><span><?php esc_html_e( 'Commercial', 'buildora' ); ?></span><strong>02</strong></li>
						<li><span><?php esc_html_e( 'Extensions', 'buildora' ); ?></span><strong>03</strong></li>
					</ul>
					<!-- /wp:list -->
					<!-- wp:paragraph {"className":"buildora-projects-page-hero__panel-note"} --><p class="buildora-projects-page-hero__panel-note"><?php esc_html_e( 'Clear scope. Visible milestones. Documented handover.', 'buildora' ); ?></p><!-- /wp:paragraph -->
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
