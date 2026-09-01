<?php
/**
 * Title: Practice Areas Grid
 * Slug: lexora/practice-areas
 * Categories: lexora, services
 * Keywords: practice areas, legal services, cards, grid
 * Description: Premium three-card practice areas section for law firms and legal practices.
 */
?>
<!-- wp:group {"anchor":"practice-areas","align":"full","className":"buildora-services","layout":{"type":"constrained"}} -->
<div id="practice-areas" class="wp-block-group alignfull buildora-services">
	<!-- wp:group {"align":"wide","className":"buildora-services__intro","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide buildora-services__intro">
		<!-- wp:paragraph {"className":"buildora-services__eyebrow"} -->
		<p class="buildora-services__eyebrow"><?php esc_html_e( 'Practice areas', 'lexora' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:columns {"verticalAlignment":"bottom","className":"buildora-services__heading-row"} -->
		<div class="wp-block-columns are-vertically-aligned-bottom buildora-services__heading-row">
			<!-- wp:column {"verticalAlignment":"bottom","width":"62%"} -->
			<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:62%">
				<!-- wp:heading {"fontSize":"xl","className":"buildora-services__title"} -->
				<h2 class="wp-block-heading buildora-services__title has-xl-font-size"><?php esc_html_e( 'Focused legal support for important decisions.', 'lexora' ); ?></h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"bottom","width":"38%"} -->
			<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:38%">
				<!-- wp:paragraph {"textColor":"muted","className":"buildora-services__lead"} -->
				<p class="buildora-services__lead has-muted-color has-text-color"><?php esc_html_e( 'From commercial matters to private disputes, our team brings structured advice and clear communication to every stage.', 'lexora' ); ?></p>
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
			<!-- wp:heading {"level":3,"className":"buildora-service-card__title"} --><h3 class="wp-block-heading buildora-service-card__title"><?php esc_html_e( 'Corporate & commercial', 'lexora' ); ?></h3><!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted","className":"buildora-service-card__text"} --><p class="buildora-service-card__text has-muted-color has-text-color"><?php esc_html_e( 'Practical advice for contracts, transactions, governance and the legal decisions that keep a business moving.', 'lexora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"buildora-service-card__meta"} --><p class="buildora-service-card__meta"><?php esc_html_e( 'Contracts • Advisory • Transactions', 'lexora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"buildora-service-card__link"} --><p class="buildora-service-card__link"><a href="<?php echo esc_url( home_url( '/practice-areas/' ) ); ?>"><?php esc_html_e( 'Explore commercial law', 'lexora' ); ?> <span aria-hidden="true">↗</span></a></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"buildora-service-card buildora-service-card--featured"} -->
		<div class="wp-block-column buildora-service-card buildora-service-card--featured">
			<!-- wp:paragraph {"className":"buildora-service-card__number"} --><p class="buildora-service-card__number">02</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"className":"buildora-service-card__title"} --><h3 class="wp-block-heading buildora-service-card__title"><?php esc_html_e( 'Dispute resolution', 'lexora' ); ?></h3><!-- /wp:heading -->
			<!-- wp:paragraph {"className":"buildora-service-card__text"} --><p class="buildora-service-card__text"><?php esc_html_e( 'Measured, strategic representation for negotiations, claims and litigation where preparation and timing matter.', 'lexora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"buildora-service-card__meta"} --><p class="buildora-service-card__meta"><?php esc_html_e( 'Negotiation • Claims • Litigation', 'lexora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"buildora-service-card__link"} --><p class="buildora-service-card__link"><a href="<?php echo esc_url( home_url( '/contact/#consultation' ) ); ?>"><?php esc_html_e( 'Discuss a dispute', 'lexora' ); ?> <span aria-hidden="true">↗</span></a></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"buildora-service-card"} -->
		<div class="wp-block-column buildora-service-card">
			<!-- wp:paragraph {"className":"buildora-service-card__number"} --><p class="buildora-service-card__number">03</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"className":"buildora-service-card__title"} --><h3 class="wp-block-heading buildora-service-card__title"><?php esc_html_e( 'Family & private client', 'lexora' ); ?></h3><!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted","className":"buildora-service-card__text"} --><p class="buildora-service-card__text has-muted-color has-text-color"><?php esc_html_e( 'Calm, discreet guidance for personal legal matters that require careful judgment and clear next steps.', 'lexora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"buildora-service-card__meta"} --><p class="buildora-service-card__meta"><?php esc_html_e( 'Family • Estates • Private matters', 'lexora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"buildora-service-card__link"} --><p class="buildora-service-card__link"><a href="<?php echo esc_url( home_url( '/contact/#consultation' ) ); ?>"><?php esc_html_e( 'Request a consultation', 'lexora' ); ?> <span aria-hidden="true">↗</span></a></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
