<?php
/**
 * Title: Selected Projects
 * Slug: buildora/projects
 * Categories: buildora, featured
 * Keywords: projects, portfolio, work, case studies
 * Description: Premium selected-projects grid with one featured case and two supporting projects.
 */
?>
<!-- wp:group {"anchor":"projects","align":"full","className":"buildora-projects","layout":{"type":"constrained"}} -->
<div id="projects" class="wp-block-group alignfull buildora-projects">
	<!-- wp:group {"align":"wide","className":"buildora-projects__intro","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
	<div class="wp-block-group alignwide buildora-projects__intro">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"buildora-projects__eyebrow"} --><p class="buildora-projects__eyebrow"><?php esc_html_e( 'Selected work', 'buildora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"className":"buildora-projects__title"} --><h2 class="wp-block-heading buildora-projects__title"><?php esc_html_e( 'Recent projects. Real outcomes.', 'buildora' ); ?></h2><!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:paragraph {"className":"buildora-projects__intro-copy"} --><p class="buildora-projects__intro-copy"><?php esc_html_e( 'A snapshot of renovation, construction and fit-out work delivered with clear scope, practical detailing and dependable handover.', 'buildora' ); ?></p><!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","className":"buildora-projects__grid","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide buildora-projects__grid">
		<!-- wp:group {"className":"buildora-project buildora-project--featured","layout":{"type":"default"}} -->
		<div class="wp-block-group buildora-project buildora-project--featured">
			<!-- wp:html --><div class="buildora-project__visual buildora-project__visual--riverside" aria-hidden="true"><span></span><span></span><span></span></div><!-- /wp:html -->
			<!-- wp:group {"className":"buildora-project__body","layout":{"type":"constrained"}} -->
			<div class="wp-block-group buildora-project__body">
				<!-- wp:paragraph {"className":"buildora-project__meta"} --><p class="buildora-project__meta"><?php esc_html_e( 'Residential · Full renovation', 'buildora' ); ?></p><!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"className":"buildora-project__title"} --><h3 class="wp-block-heading buildora-project__title"><?php esc_html_e( 'Riverside House', 'buildora' ); ?></h3><!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"muted","className":"buildora-project__copy"} --><p class="buildora-project__copy has-muted-color has-text-color"><?php esc_html_e( 'A full internal renovation with a reworked ground floor, upgraded finishes and a tighter handover programme.', 'buildora' ); ?></p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"buildora-project__link"} --><p class="buildora-project__link"><a href="#contact"><?php esc_html_e( 'Discuss a similar renovation', 'buildora' ); ?> ↗</a></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"buildora-project buildora-project--compact","layout":{"type":"default"}} -->
		<div class="wp-block-group buildora-project buildora-project--compact">
			<!-- wp:html --><div class="buildora-project__visual buildora-project__visual--northline" aria-hidden="true"><span></span><span></span><span></span></div><!-- /wp:html -->
			<!-- wp:group {"className":"buildora-project__body","layout":{"type":"constrained"}} -->
			<div class="wp-block-group buildora-project__body">
				<!-- wp:paragraph {"className":"buildora-project__meta"} --><p class="buildora-project__meta"><?php esc_html_e( 'Commercial · Fit-out', 'buildora' ); ?></p><!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"className":"buildora-project__title"} --><h3 class="wp-block-heading buildora-project__title"><?php esc_html_e( 'Northline Studio', 'buildora' ); ?></h3><!-- /wp:heading -->
				<!-- wp:paragraph {"className":"buildora-project__link"} --><p class="buildora-project__link"><a href="#contact"><?php esc_html_e( 'Discuss a similar fit-out', 'buildora' ); ?> ↗</a></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"buildora-project buildora-project--compact","layout":{"type":"default"}} -->
		<div class="wp-block-group buildora-project buildora-project--compact">
			<!-- wp:html --><div class="buildora-project__visual buildora-project__visual--oakfield" aria-hidden="true"><span></span><span></span><span></span></div><!-- /wp:html -->
			<!-- wp:group {"className":"buildora-project__body","layout":{"type":"constrained"}} -->
			<div class="wp-block-group buildora-project__body">
				<!-- wp:paragraph {"className":"buildora-project__meta"} --><p class="buildora-project__meta"><?php esc_html_e( 'Residential · Extension', 'buildora' ); ?></p><!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"className":"buildora-project__title"} --><h3 class="wp-block-heading buildora-project__title"><?php esc_html_e( 'Oakfield Extension', 'buildora' ); ?></h3><!-- /wp:heading -->
				<!-- wp:paragraph {"className":"buildora-project__link"} --><p class="buildora-project__link"><a href="#contact"><?php esc_html_e( 'Discuss an extension', 'buildora' ); ?> ↗</a></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:buttons {"align":"wide","className":"buildora-projects__cta"} -->
	<div class="wp-block-buttons alignwide buildora-projects__cta">
		<!-- wp:button {"className":"is-style-outline"} --><div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#contact"><?php esc_html_e( 'Start your project', 'buildora' ); ?></a></div><!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
