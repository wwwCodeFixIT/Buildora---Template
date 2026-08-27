<?php
/**
 * Title: Trust Bar
 * Slug: buildora/trust-bar
 * Categories: buildora, featured
 * Keywords: trust, stats, badges
 * Description: Compact trust indicators for the homepage.
 */
?>
<!-- wp:group {"align":"full","backgroundColor":"ink","textColor":"paper","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-paper-color has-ink-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column --><div class="wp-block-column"><!-- wp:paragraph {"align":"center"} --><p class="has-text-align-center"><strong><?php esc_html_e( 'Licensed & insured', 'buildora' ); ?></strong></p><!-- /wp:paragraph --></div><!-- /wp:column -->
		<!-- wp:column --><div class="wp-block-column"><!-- wp:paragraph {"align":"center"} --><p class="has-text-align-center"><strong><?php esc_html_e( 'Transparent quotes', 'buildora' ); ?></strong></p><!-- /wp:paragraph --></div><!-- /wp:column -->
		<!-- wp:column --><div class="wp-block-column"><!-- wp:paragraph {"align":"center"} --><p class="has-text-align-center"><strong><?php esc_html_e( 'On-time delivery', 'buildora' ); ?></strong></p><!-- /wp:paragraph --></div><!-- /wp:column -->
		<!-- wp:column --><div class="wp-block-column"><!-- wp:paragraph {"align":"center"} --><p class="has-text-align-center"><strong><?php esc_html_e( 'Local support', 'buildora' ); ?></strong></p><!-- /wp:paragraph --></div><!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
