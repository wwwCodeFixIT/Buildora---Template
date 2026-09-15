<?php
/**
 * Title: Representative Matters
 * Slug: lexora/results
 * Categories: lexora, featured
 * Keywords: results, matters, cases, legal
 * Viewport Width: 1440
 * Description: Representative legal matters presented with careful compliance-minded language.
 */
?>
<!-- wp:group {"anchor":"results","align":"full","className":"lexora-results","backgroundColor":"ink","textColor":"paper","layout":{"type":"constrained"}} -->
<div id="results" class="wp-block-group alignfull lexora-results has-paper-color has-ink-background-color has-text-color has-background">
	<!-- wp:group {"align":"wide","className":"lexora-results__inner","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide lexora-results__inner">
		<!-- wp:paragraph {"className":"lexora-section-kicker lexora-section-kicker--light"} -->
		<p class="lexora-section-kicker lexora-section-kicker--light"><?php esc_html_e( 'Representative matters', 'lexora' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:columns {"verticalAlignment":"bottom","className":"lexora-section-heading"} -->
		<div class="wp-block-columns are-vertically-aligned-bottom lexora-section-heading">
			<!-- wp:column {"verticalAlignment":"bottom","width":"62%"} -->
			<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:62%">
				<!-- wp:heading {"fontSize":"xl"} -->
				<h2 class="wp-block-heading has-xl-font-size"><?php esc_html_e( 'Prepared carefully. Resolved strategically.', 'lexora' ); ?></h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"bottom","width":"38%"} -->
			<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:38%">
				<!-- wp:paragraph {"className":"lexora-results__lead"} -->
				<p class="lexora-results__lead"><?php esc_html_e( 'A selection of illustrative matters showing how the firm approaches risk, negotiation and resolution.', 'lexora' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:columns {"className":"lexora-results__grid"} -->
		<div class="wp-block-columns lexora-results__grid">
			<!-- wp:column {"className":"lexora-result-card"} -->
			<div class="wp-block-column lexora-result-card">
				<!-- wp:paragraph {"className":"lexora-result-card__meta"} --><p class="lexora-result-card__meta"><?php esc_html_e( 'Commercial litigation', 'lexora' ); ?></p><!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"className":"lexora-result-card__title"} --><h3 class="wp-block-heading lexora-result-card__title"><?php esc_html_e( 'Complex supplier dispute resolved before trial.', 'lexora' ); ?></h3><!-- /wp:heading -->
				<!-- wp:paragraph {"className":"lexora-result-card__copy"} --><p class="lexora-result-card__copy"><?php esc_html_e( 'Early case analysis, focused disclosure and a disciplined negotiation strategy helped the client reach a commercially workable settlement.', 'lexora' ); ?></p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"lexora-result-card__outcome"} --><p class="lexora-result-card__outcome"><strong><?php esc_html_e( 'Outcome:', 'lexora' ); ?></strong> <?php esc_html_e( 'Negotiated resolution', 'lexora' ); ?></p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"lexora-result-card__link"} --><p class="lexora-result-card__link"><a href="<?php echo esc_url( home_url( '/commercial-contract-resolution/' ) ); ?>"><?php esc_html_e( 'View illustrative matter', 'lexora' ); ?> →</a></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"className":"lexora-result-card lexora-result-card--accent"} -->
			<div class="wp-block-column lexora-result-card lexora-result-card--accent">
				<!-- wp:paragraph {"className":"lexora-result-card__meta"} --><p class="lexora-result-card__meta"><?php esc_html_e( 'Employment', 'lexora' ); ?></p><!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"className":"lexora-result-card__title"} --><h3 class="wp-block-heading lexora-result-card__title"><?php esc_html_e( 'Senior employment claim brought to an early close.', 'lexora' ); ?></h3><!-- /wp:heading -->
				<!-- wp:paragraph {"className":"lexora-result-card__copy"} --><p class="lexora-result-card__copy"><?php esc_html_e( 'The team clarified exposure quickly, prepared a practical response strategy and supported confidential negotiations from the outset.', 'lexora' ); ?></p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"lexora-result-card__outcome"} --><p class="lexora-result-card__outcome"><strong><?php esc_html_e( 'Outcome:', 'lexora' ); ?></strong> <?php esc_html_e( 'Confidential settlement', 'lexora' ); ?></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"className":"lexora-result-card"} -->
			<div class="wp-block-column lexora-result-card">
				<!-- wp:paragraph {"className":"lexora-result-card__meta"} --><p class="lexora-result-card__meta"><?php esc_html_e( 'Property', 'lexora' ); ?></p><!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"className":"lexora-result-card__title"} --><h3 class="wp-block-heading lexora-result-card__title"><?php esc_html_e( 'Property disagreement settled without prolonged proceedings.', 'lexora' ); ?></h3><!-- /wp:heading -->
				<!-- wp:paragraph {"className":"lexora-result-card__copy"} --><p class="lexora-result-card__copy"><?php esc_html_e( 'Clear documentation and direct correspondence helped narrow the issues and create a route to a practical agreement.', 'lexora' ); ?></p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"lexora-result-card__outcome"} --><p class="lexora-result-card__outcome"><strong><?php esc_html_e( 'Outcome:', 'lexora' ); ?></strong> <?php esc_html_e( 'Terms agreed', 'lexora' ); ?></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:paragraph {"className":"lexora-results__disclaimer","fontSize":"xs"} -->
		<p class="lexora-results__disclaimer has-xs-font-size"><?php esc_html_e( 'Representative matters are provided for illustrative purposes only. Past outcomes do not guarantee or predict future results.', 'lexora' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->