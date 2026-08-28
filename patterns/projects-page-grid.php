<?php
/**
 * Title: Projects Overview Grid
 * Slug: buildora/projects-page-grid
 * Categories: buildora, featured
 * Keywords: projects, portfolio, case studies
 * Description: Editorial case-study grid for the Projects page.
 */
?>
<!-- wp:group {"align":"full","className":"buildora-projects-page-grid","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull buildora-projects-page-grid">
	<!-- wp:group {"align":"wide","className":"buildora-projects-page-grid__intro","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
	<div class="wp-block-group alignwide buildora-projects-page-grid__intro">
		<!-- wp:group {"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"buildora-projects-page-grid__eyebrow"} --><p class="buildora-projects-page-grid__eyebrow"><?php esc_html_e( 'Case studies', 'buildora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"className":"buildora-projects-page-grid__title"} --><h2 class="wp-block-heading buildora-projects-page-grid__title"><?php esc_html_e( 'See the work behind the promise.', 'buildora' ); ?></h2><!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<!-- wp:paragraph {"className":"buildora-projects-page-grid__lead"} --><p class="buildora-projects-page-grid__lead"><?php esc_html_e( 'Each case study shows how scope, programme and communication were handled — not just the final surface.', 'buildora' ); ?></p><!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","className":"buildora-projects-page-grid__items","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide buildora-projects-page-grid__items">
		<!-- wp:group {"className":"buildora-project-case-card buildora-project-case-card--featured","layout":{"type":"default"}} -->
		<div class="wp-block-group buildora-project-case-card buildora-project-case-card--featured">
			<!-- wp:html --><div class="buildora-project__visual buildora-project__visual--riverside" aria-hidden="true"><span></span><span></span><span></span></div><!-- /wp:html -->
			<!-- wp:group {"className":"buildora-project-case-card__body","layout":{"type":"default"}} -->
			<div class="wp-block-group buildora-project-case-card__body">
				<!-- wp:paragraph {"className":"buildora-project-case-card__meta"} --><p class="buildora-project-case-card__meta"><?php esc_html_e( 'Residential · Full renovation', 'buildora' ); ?></p><!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"className":"buildora-project-case-card__title"} --><h3 class="wp-block-heading buildora-project-case-card__title"><?php esc_html_e( 'Riverside House', 'buildora' ); ?></h3><!-- /wp:heading -->
				<!-- wp:paragraph {"className":"buildora-project-case-card__copy"} --><p class="buildora-project-case-card__copy"><?php esc_html_e( 'A full internal renovation with a reworked ground floor, upgraded finishes and a tighter handover programme.', 'buildora' ); ?></p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"buildora-project-case-card__link"} --><p class="buildora-project-case-card__link"><a href="/projects/riverside-house/"><?php esc_html_e( 'Read case study', 'buildora' ); ?> ↗</a></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"buildora-project-case-card","layout":{"type":"default"}} -->
		<div class="wp-block-group buildora-project-case-card">
			<!-- wp:html --><div class="buildora-project__visual buildora-project__visual--northline" aria-hidden="true"><span></span><span></span><span></span></div><!-- /wp:html -->
			<!-- wp:group {"className":"buildora-project-case-card__body","layout":{"type":"default"}} -->
			<div class="wp-block-group buildora-project-case-card__body">
				<!-- wp:paragraph {"className":"buildora-project-case-card__meta"} --><p class="buildora-project-case-card__meta"><?php esc_html_e( 'Commercial · Fit-out', 'buildora' ); ?></p><!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"className":"buildora-project-case-card__title"} --><h3 class="wp-block-heading buildora-project-case-card__title"><?php esc_html_e( 'Northline Studio', 'buildora' ); ?></h3><!-- /wp:heading -->
				<!-- wp:paragraph {"className":"buildora-project-case-card__copy"} --><p class="buildora-project-case-card__copy"><?php esc_html_e( 'A light-commercial fit-out coordinated around access, programme certainty and a clean close-out.', 'buildora' ); ?></p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"buildora-project-case-card__link"} --><p class="buildora-project-case-card__link"><a href="/projects/northline-studio/"><?php esc_html_e( 'Read case study', 'buildora' ); ?> ↗</a></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"buildora-project-case-card","layout":{"type":"default"}} -->
		<div class="wp-block-group buildora-project-case-card">
			<!-- wp:html --><div class="buildora-project__visual buildora-project__visual--oakfield" aria-hidden="true"><span></span><span></span><span></span></div><!-- /wp:html -->
			<!-- wp:group {"className":"buildora-project-case-card__body","layout":{"type":"default"}} -->
			<div class="wp-block-group buildora-project-case-card__body">
				<!-- wp:paragraph {"className":"buildora-project-case-card__meta"} --><p class="buildora-project-case-card__meta"><?php esc_html_e( 'Residential · Extension', 'buildora' ); ?></p><!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"className":"buildora-project-case-card__title"} --><h3 class="wp-block-heading buildora-project-case-card__title"><?php esc_html_e( 'Oakfield Extension', 'buildora' ); ?></h3><!-- /wp:heading -->
				<!-- wp:paragraph {"className":"buildora-project-case-card__copy"} --><p class="buildora-project-case-card__copy"><?php esc_html_e( 'A rear extension delivered around an occupied home with staged decisions and practical handover notes.', 'buildora' ); ?></p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"buildora-project-case-card__link"} --><p class="buildora-project-case-card__link"><a href="/projects/oakfield-extension/"><?php esc_html_e( 'Read case study', 'buildora' ); ?> ↗</a></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
