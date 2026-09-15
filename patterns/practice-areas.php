<?php
/**
 * Title: Practice Areas
 * Slug: lexora/practice-areas
 * Categories: lexora, services
 * Keywords: practice areas, legal services, business law, disputes, family law
 * Description: Premium three-card overview of the firm's core legal practice areas.
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
				<!-- wp:heading {"level":2,"fontSize":"xl","className":"buildora-services__title"} -->
				<h2 class="wp-block-heading buildora-services__title has-xl-font-size"><?php esc_html_e( 'Legal counsel for the decisions that carry weight.', 'lexora' ); ?></h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"bottom","width":"38%"} -->
			<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:38%">
				<!-- wp:paragraph {"textColor":"muted","className":"buildora-services__lead"} -->
				<p class="buildora-services__lead has-muted-color has-text-color"><?php esc_html_e( 'From commercial contracts to disputes and sensitive private matters, our approach starts with the facts, the risk and the outcome you need.', 'lexora' ); ?></p>
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
			<!-- wp:heading {"level":3,"className":"buildora-service-card__title"} --><h3 class="wp-block-heading buildora-service-card__title"><?php esc_html_e( 'Business law', 'lexora' ); ?></h3><!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted","className":"buildora-service-card__text"} --><p class="buildora-service-card__text has-muted-color has-text-color"><?php esc_html_e( 'Commercial advice for contracts, governance, negotiations and transactions, grounded in the practical realities of running a business.', 'lexora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"buildora-service-card__meta"} --><p class="buildora-service-card__meta"><?php esc_html_e( 'Contracts • Governance • Transactions', 'lexora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"buildora-service-card__link"} --><p class="buildora-service-card__link"><a href="<?php echo esc_url( home_url( '/practice-areas/#business-law' ) ); ?>"><?php esc_html_e( 'Explore business law', 'lexora' ); ?> <span aria-hidden="true">↗</span></a></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"buildora-service-card buildora-service-card--featured"} -->
		<div class="wp-block-column buildora-service-card buildora-service-card--featured">
			<!-- wp:paragraph {"className":"buildora-service-card__number"} --><p class="buildora-service-card__number">02</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"className":"buildora-service-card__title"} --><h3 class="wp-block-heading buildora-service-card__title"><?php esc_html_e( 'Dispute resolution', 'lexora' ); ?></h3><!-- /wp:heading -->
			<!-- wp:paragraph {"className":"buildora-service-card__text"} --><p class="buildora-service-card__text"><?php esc_html_e( 'Strategic support when a disagreement becomes a legal risk, with a clear view of leverage, evidence, cost and the most proportionate route forward.', 'lexora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"buildora-service-card__meta"} --><p class="buildora-service-card__meta"><?php esc_html_e( 'Negotiation • Litigation • Settlement', 'lexora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"buildora-service-card__link"} --><p class="buildora-service-card__link"><a href="<?php echo esc_url( home_url( '/practice-areas/#disputes' ) ); ?>"><?php esc_html_e( 'Explore dispute resolution', 'lexora' ); ?> <span aria-hidden="true">↗</span></a></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"buildora-service-card"} -->
		<div class="wp-block-column buildora-service-card">
			<!-- wp:paragraph {"className":"buildora-service-card__number"} --><p class="buildora-service-card__number">03</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"className":"buildora-service-card__title"} --><h3 class="wp-block-heading buildora-service-card__title"><?php esc_html_e( 'Family & property', 'lexora' ); ?></h3><!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted","className":"buildora-service-card__text"} --><p class="buildora-service-card__text has-muted-color has-text-color"><?php esc_html_e( 'Calm, structured advice for sensitive family, ownership and property matters where the legal position and practical consequences both matter.', 'lexora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"buildora-service-card__meta"} --><p class="buildora-service-card__meta"><?php esc_html_e( 'Family • Property • Private clients', 'lexora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"buildora-service-card__link"} --><p class="buildora-service-card__link"><a href="<?php echo esc_url( home_url( '/practice-areas/#family-property' ) ); ?>"><?php esc_html_e( 'Explore family & property', 'lexora' ); ?> <span aria-hidden="true">↗</span></a></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
