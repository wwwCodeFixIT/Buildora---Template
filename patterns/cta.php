<?php
/**
 * Title: Consultation CTA
 * Slug: lexora/consultation-cta
 * Categories: lexora, call-to-action
 * Keywords: consultation, cta, contact, legal
 * Description: High-impact final conversion block for confidential consultation requests.
 */

$lexora_consultation_url = home_url( '/contact/' ) . '#consultation';
?>
<!-- wp:group {"anchor":"contact","align":"full","className":"buildora-final-cta","layout":{"type":"constrained"}} -->
<div id="contact" class="wp-block-group alignfull buildora-final-cta">
	<!-- wp:group {"align":"wide","className":"buildora-final-cta__inner","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide buildora-final-cta__inner">
		<!-- wp:group {"className":"buildora-final-cta__copy","layout":{"type":"default"}} -->
		<div class="wp-block-group buildora-final-cta__copy">
			<!-- wp:paragraph {"className":"buildora-final-cta__eyebrow"} -->
			<p class="buildora-final-cta__eyebrow"><?php esc_html_e( 'When the next step matters', 'lexora' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"className":"buildora-final-cta__title"} -->
			<h2 class="wp-block-heading buildora-final-cta__title"><?php esc_html_e( 'Take the next step with clarity.', 'lexora' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"buildora-final-cta__text"} -->
			<p class="buildora-final-cta__text"><?php esc_html_e( 'Tell us what you are facing. We will review the essentials, explain the likely next steps and arrange a confidential conversation with the right attorney.', 'lexora' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"buildora-final-cta__actions","layout":{"type":"default"}} -->
		<div class="wp-block-group buildora-final-cta__actions">
			<!-- wp:buttons {"className":"buildora-final-cta__buttons","layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-buttons buildora-final-cta__buttons">
				<!-- wp:button {"className":"buildora-final-cta__primary"} -->
				<div class="wp-block-button buildora-final-cta__primary"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( $lexora_consultation_url ); ?>"><?php esc_html_e( 'Request a confidential consultation', 'lexora' ); ?></a></div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"is-style-outline buildora-final-cta__secondary"} -->
				<div class="wp-block-button is-style-outline buildora-final-cta__secondary"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/practice-areas/' ) ); ?>"><?php esc_html_e( 'Explore practice areas', 'lexora' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- wp:paragraph {"className":"buildora-final-cta__note"} -->
			<p class="buildora-final-cta__note"><?php esc_html_e( 'Confidential. Direct. No unnecessary jargon.', 'lexora' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
