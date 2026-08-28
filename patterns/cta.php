<?php
/**
 * Title: Final Quote CTA
 * Slug: buildora/quote-cta
 * Categories: buildora, call-to-action
 * Keywords: quote, cta, contact, conversion
 * Description: High-impact final conversion block for quote requests.
 */

$buildora_contact_email = sanitize_email( (string) get_option( 'admin_email' ) );
$buildora_mailto_url    = $buildora_contact_email ? 'mailto:' . antispambot( $buildora_contact_email ) : '/#contact';
?>
<!-- wp:group {"anchor":"contact","align":"full","className":"buildora-final-cta","layout":{"type":"constrained"}} -->
<div id="contact" class="wp-block-group alignfull buildora-final-cta">
	<!-- wp:group {"align":"wide","className":"buildora-final-cta__inner","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide buildora-final-cta__inner">
		<!-- wp:group {"className":"buildora-final-cta__copy","layout":{"type":"default"}} -->
		<div class="wp-block-group buildora-final-cta__copy">
			<!-- wp:paragraph {"className":"buildora-final-cta__eyebrow"} -->
			<p class="buildora-final-cta__eyebrow"><?php esc_html_e( 'Ready when you are', 'buildora' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"className":"buildora-final-cta__title"} -->
			<h2 class="wp-block-heading buildora-final-cta__title"><?php esc_html_e( 'Let’s make your next project straightforward.', 'buildora' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"buildora-final-cta__text"} -->
			<p class="buildora-final-cta__text"><?php esc_html_e( 'Tell us what you are planning and we will come back with a clear next step, realistic scope and transparent quote.', 'buildora' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"buildora-final-cta__actions","layout":{"type":"default"}} -->
		<div class="wp-block-group buildora-final-cta__actions">
			<!-- wp:buttons {"className":"buildora-final-cta__buttons","layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-buttons buildora-final-cta__buttons">
				<!-- wp:button {"className":"buildora-final-cta__primary"} -->
				<div class="wp-block-button buildora-final-cta__primary"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( $buildora_mailto_url ); ?>"><?php esc_html_e( 'Request a free quote', 'buildora' ); ?></a></div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"is-style-outline buildora-final-cta__secondary"} -->
				<div class="wp-block-button is-style-outline buildora-final-cta__secondary"><a class="wp-block-button__link wp-element-button" href="/projects/"><?php esc_html_e( 'View recent projects', 'buildora' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- wp:paragraph {"className":"buildora-final-cta__note"} -->
			<p class="buildora-final-cta__note"><?php esc_html_e( 'No pressure. Clear scope. Transparent pricing.', 'buildora' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
