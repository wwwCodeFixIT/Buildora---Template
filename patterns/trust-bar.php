<?php
/**
 * Title: Trust Bar
 * Slug: buildora/trust-bar
 * Categories: buildora, featured
 * Keywords: trust, proof, reassurance
 * Description: Compact reassurance grid for the homepage.
 */
?>
<!-- wp:group {"align":"full","className":"buildora-trust","backgroundColor":"ink","textColor":"paper","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull buildora-trust has-paper-color has-ink-background-color has-text-color has-background">
	<!-- wp:group {"align":"wide","className":"buildora-trust__grid","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide buildora-trust__grid">
		<!-- wp:group {"className":"buildora-trust__item","layout":{"type":"default"}} -->
		<div class="wp-block-group buildora-trust__item">
			<!-- wp:paragraph {"className":"buildora-trust__label"} -->
			<p class="buildora-trust__label"><strong><?php esc_html_e( 'Licensed & insured', 'buildora' ); ?></strong></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"buildora-trust__meta","fontSize":"xs"} -->
			<p class="buildora-trust__meta has-xs-font-size"><?php esc_html_e( 'Fully covered crews', 'buildora' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"buildora-trust__item","layout":{"type":"default"}} -->
		<div class="wp-block-group buildora-trust__item">
			<!-- wp:paragraph {"className":"buildora-trust__label"} -->
			<p class="buildora-trust__label"><strong><?php esc_html_e( 'Transparent quotes', 'buildora' ); ?></strong></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"buildora-trust__meta","fontSize":"xs"} -->
			<p class="buildora-trust__meta has-xs-font-size"><?php esc_html_e( 'No hidden extras', 'buildora' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"buildora-trust__item","layout":{"type":"default"}} -->
		<div class="wp-block-group buildora-trust__item">
			<!-- wp:paragraph {"className":"buildora-trust__label"} -->
			<p class="buildora-trust__label"><strong><?php esc_html_e( 'On-time delivery', 'buildora' ); ?></strong></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"buildora-trust__meta","fontSize":"xs"} -->
			<p class="buildora-trust__meta has-xs-font-size"><?php esc_html_e( 'Clear project milestones', 'buildora' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"buildora-trust__item","layout":{"type":"default"}} -->
		<div class="wp-block-group buildora-trust__item">
			<!-- wp:paragraph {"className":"buildora-trust__label"} -->
			<p class="buildora-trust__label"><strong><?php esc_html_e( 'Local support', 'buildora' ); ?></strong></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"buildora-trust__meta","fontSize":"xs"} -->
			<p class="buildora-trust__meta has-xs-font-size"><?php esc_html_e( 'Fast, human response', 'buildora' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
