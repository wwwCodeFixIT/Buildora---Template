<?php
/**
 * Title: Quote CTA
 * Slug: buildora/quote-cta
 * Categories: buildora, call-to-action
 * Keywords: quote, cta, contact
 * Description: High-contrast call to action for quote requests.
 */
?>
<!-- wp:group {"anchor":"contact","align":"wide","backgroundColor":"brand","style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"var:preset|spacing|70","right":"var:preset|spacing|60","bottom":"var:preset|spacing|70","left":"var:preset|spacing|60"},"margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div id="contact" class="wp-block-group alignwide has-brand-background-color has-background" style="border-radius:24px;margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--80);padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--60)">
	<!-- wp:heading {"textAlign":"center","fontSize":"xl"} --><h2 class="wp-block-heading has-text-align-center has-xl-font-size"><?php esc_html_e( 'Ready to start your project?', 'buildora' ); ?></h2><!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center","fontSize":"md"} --><p class="has-text-align-center has-md-font-size"><?php esc_html_e( 'Turn this section into the primary lead-generation action for the business.', 'buildora' ); ?></p><!-- /wp:paragraph -->
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} --><div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"ink","textColor":"paper"} --><div class="wp-block-button"><a class="wp-block-button__link has-paper-color has-ink-background-color has-text-color has-background wp-element-button" href="mailto:hello@example.com"><?php esc_html_e( 'Get a free quote', 'buildora' ); ?></a></div><!-- /wp:button --></div><!-- /wp:buttons -->
</div>
<!-- /wp:group -->
