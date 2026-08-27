<?php
/**
 * Title: Services Grid
 * Slug: buildora/services-grid
 * Categories: buildora, services
 * Keywords: services, cards, grid
 * Description: Premium three-card services section for construction and home-service businesses.
 */
?>
<!-- wp:group {"anchor":"services","align":"full","className":"buildora-services","layout":{"type":"constrained"}} -->
<div id="services" class="wp-block-group alignfull buildora-services">
	<!-- wp:group {"align":"wide","className":"buildora-services__intro","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide buildora-services__intro">
		<!-- wp:paragraph {"className":"buildora-services__eyebrow"} -->
		<p class="buildora-services__eyebrow"><?php esc_html_e( 'What we do', 'buildora' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:columns {"verticalAlignment":"bottom","className":"buildora-services__heading-row"} -->
		<div class="wp-block-columns are-vertically-aligned-bottom buildora-services__heading-row">
			<!-- wp:column {"verticalAlignment":"bottom","width":"62%"} -->
			<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:62%">
				<!-- wp:heading {"fontSize":"xl","className":"buildora-services__title"} -->
				<h2 class="wp-block-heading buildora-services__title has-xl-font-size"><?php esc_html_e( 'Services built around your project.', 'buildora' ); ?></h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"bottom","width":"38%"} -->
			<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:38%">
				<!-- wp:paragraph {"textColor":"muted","className":"buildora-services__lead"} -->
				<p class="buildora-services__lead has-muted-color has-text-color"><?php esc_html_e( 'From full renovations to ongoing repairs, our crews keep scope, timing and communication straightforward from day one.', 'buildora' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","className":"buildora-services__grid"} -->
	<div class="wp-block-columns alignwide buildora-services__grid">
		<!-- wp:column {"className":"buildora-service-card"} -->
		<div class="wp-block-column buildora-service-card">
			<!-- wp:paragraph {"className":"buildora-service-card__number"} --><p class="buildora-service-card__number">01</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"className":"buildora-service-card__title"} --><h3 class="wp-block-heading buildora-service-card__title"><?php esc_html_e( 'Renovation', 'buildora' ); ?></h3><!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted","className":"buildora-service-card__text"} --><p class="buildora-service-card__text has-muted-color has-text-color"><?php esc_html_e( 'Interior and exterior upgrades managed around a clear scope, realistic schedule and one accountable team.', 'buildora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"buildora-service-card__meta"} --><p class="buildora-service-card__meta"><?php esc_html_e( 'Kitchens • Bathrooms • Full-home', 'buildora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"buildora-service-card__link"} --><p class="buildora-service-card__link"><a href="#contact"><?php esc_html_e( 'Discuss a renovation', 'buildora' ); ?> <span aria-hidden="true">↗</span></a></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"buildora-service-card buildora-service-card--featured"} -->
		<div class="wp-block-column buildora-service-card buildora-service-card--featured">
			<!-- wp:paragraph {"className":"buildora-service-card__number"} --><p class="buildora-service-card__number">02</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"className":"buildora-service-card__title"} --><h3 class="wp-block-heading buildora-service-card__title"><?php esc_html_e( 'Construction', 'buildora' ); ?></h3><!-- /wp:heading -->
			<!-- wp:paragraph {"className":"buildora-service-card__text"} --><p class="buildora-service-card__text"><?php esc_html_e( 'Reliable delivery for residential and light-commercial projects, with milestones you can actually track.', 'buildora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"buildora-service-card__meta"} --><p class="buildora-service-card__meta"><?php esc_html_e( 'Extensions • New builds • Commercial', 'buildora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"buildora-service-card__link"} --><p class="buildora-service-card__link"><a href="#contact"><?php esc_html_e( 'Plan your build', 'buildora' ); ?> <span aria-hidden="true">↗</span></a></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"buildora-service-card"} -->
		<div class="wp-block-column buildora-service-card">
			<!-- wp:paragraph {"className":"buildora-service-card__number"} --><p class="buildora-service-card__number">03</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"className":"buildora-service-card__title"} --><h3 class="wp-block-heading buildora-service-card__title"><?php esc_html_e( 'Repairs & maintenance', 'buildora' ); ?></h3><!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted","className":"buildora-service-card__text"} --><p class="buildora-service-card__text has-muted-color has-text-color"><?php esc_html_e( 'Responsive repair and maintenance support for properties that need practical fixes without unnecessary delay.', 'buildora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"buildora-service-card__meta"} --><p class="buildora-service-card__meta"><?php esc_html_e( 'Repairs • Preventive care • Call-outs', 'buildora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"buildora-service-card__link"} --><p class="buildora-service-card__link"><a href="#contact"><?php esc_html_e( 'Book a service visit', 'buildora' ); ?> <span aria-hidden="true">↗</span></a></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
