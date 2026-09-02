<?php
/**
 * Title: Reference Results Page
 * Slug: lexora/reference-results-page
 * Categories: lexora, featured
 * Keywords: results, testimonials, consultation, reference
 * Viewport Width: 1440
 * Description: Results and consultation layout matching the Lexora marketplace reference direction.
 */
?>
<!-- wp:group {"align":"full","className":"lx-ref-page lx-ref-results","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull lx-ref-page lx-ref-results">
	<!-- wp:group {"align":"full","className":"lx-ref-results__hero","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull lx-ref-results__hero">
		<!-- wp:group {"align":"wide","className":"lx-ref-results__hero-copy","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide lx-ref-results__hero-copy">
			<!-- wp:paragraph {"className":"lx-ref-kicker"} --><p class="lx-ref-kicker"><?php esc_html_e( 'Proven advocacy. Real results.', 'lexora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":1,"className":"lx-ref-results__title"} --><h1 class="wp-block-heading lx-ref-results__title"><?php esc_html_e( 'Results That Matter.', 'lexora' ); ?></h1><!-- /wp:heading -->
			<!-- wp:paragraph {"className":"lx-ref-results__lead"} --><p class="lx-ref-results__lead"><?php esc_html_e( 'We are committed to achieving exceptional outcomes and securing the best possible results for our clients.', 'lexora' ); ?></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"align":"wide","className":"lx-ref-result-grid","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide lx-ref-result-grid">
			<article><div class="lx-ref-result-grid__icon" aria-hidden="true">⚖</div><strong>$12.8M</strong><h2><?php esc_html_e( 'Personal Injury Settlement', 'lexora' ); ?></h2><p><?php esc_html_e( 'Motor vehicle collision resulting in catastrophic injuries.', 'lexora' ); ?></p></article>
			<article><div class="lx-ref-result-grid__icon" aria-hidden="true">◇</div><strong>$7.45M</strong><h2><?php esc_html_e( 'Wrongful Death Settlement', 'lexora' ); ?></h2><p><?php esc_html_e( 'Successfully obtained for the family of our client.', 'lexora' ); ?></p></article>
			<article><div class="lx-ref-result-grid__icon" aria-hidden="true">🏛</div><strong>$3.2M</strong><h2><?php esc_html_e( 'Business Litigation Award', 'lexora' ); ?></h2><p><?php esc_html_e( 'Breach of contract and commercial dispute.', 'lexora' ); ?></p></article>
			<article><div class="lx-ref-result-grid__icon" aria-hidden="true">⚒</div><strong>$2.15M</strong><h2><?php esc_html_e( 'Employment Case Settlement', 'lexora' ); ?></h2><p><?php esc_html_e( 'Wrongful termination and discrimination claim.', 'lexora' ); ?></p></article>
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"full","className":"lx-ref-results__lower"} -->
	<div class="wp-block-columns alignfull lx-ref-results__lower">
		<!-- wp:column {"width":"47%","className":"lx-ref-testimonial-panel"} -->
		<div class="wp-block-column lx-ref-testimonial-panel" style="flex-basis:47%">
			<!-- wp:paragraph {"className":"lx-ref-kicker"} --><p class="lx-ref-kicker"><?php esc_html_e( 'Client testimonials', 'lexora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":2} --><h2 class="wp-block-heading"><?php esc_html_e( 'Trusted by Clients.', 'lexora' ); ?><br><span><?php esc_html_e( 'Proven by Results.', 'lexora' ); ?></span></h2><!-- /wp:heading -->
			<!-- wp:quote {"className":"lx-ref-testimonial-panel__quote"} --><blockquote class="wp-block-quote lx-ref-testimonial-panel__quote"><p><?php esc_html_e( 'The team at Lexora delivered exceptional service and achieved a result far beyond our expectations. Their dedication and professionalism are unmatched.', 'lexora' ); ?></p></blockquote><!-- /wp:quote -->
			<!-- wp:group {"className":"lx-ref-testimonial-panel__author","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} --><div class="wp-block-group lx-ref-testimonial-panel__author"><!-- wp:html --><div class="lx-ref-testimonial-panel__avatar" aria-hidden="true">MT</div><!-- /wp:html --><!-- wp:paragraph --><p><strong>Michael T.</strong><br><span><?php esc_html_e( 'Personal Injury Client', 'lexora' ); ?></span></p><!-- /wp:paragraph --></div><!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"53%","className":"lx-ref-results-form"} -->
		<div class="wp-block-column lx-ref-results-form" style="flex-basis:53%">
			<!-- wp:paragraph {"className":"lx-ref-kicker"} --><p class="lx-ref-kicker"><?php esc_html_e( 'Schedule a consultation', 'lexora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":2} --><h2 class="wp-block-heading"><?php esc_html_e( 'We’re Here to Help.', 'lexora' ); ?></h2><!-- /wp:heading -->
			<!-- wp:paragraph --><p><?php esc_html_e( 'Contact us today to discuss your case with a member of our legal team. Confidential. No obligation.', 'lexora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:html -->
			<form class="lx-ref-results-form__form" action="<?php echo esc_url( home_url( '/contact/#consultation' ) ); ?>" method="get">
				<div><input type="text" name="name" placeholder="<?php echo esc_attr__( 'Your Name', 'lexora' ); ?>"><input type="email" name="email" placeholder="<?php echo esc_attr__( 'Your Email', 'lexora' ); ?>"></div>
				<div><input type="tel" name="phone" placeholder="<?php echo esc_attr__( 'Phone Number', 'lexora' ); ?>"><select name="area"><option><?php esc_html_e( 'Practice Area', 'lexora' ); ?></option><option><?php esc_html_e( 'Business Law', 'lexora' ); ?></option><option><?php esc_html_e( 'Family Law', 'lexora' ); ?></option><option><?php esc_html_e( 'Litigation', 'lexora' ); ?></option></select></div>
				<textarea name="message" rows="4" placeholder="<?php echo esc_attr__( 'How can we help you?', 'lexora' ); ?>"></textarea>
				<button type="submit"><?php esc_html_e( 'Schedule Consultation', 'lexora' ); ?></button>
			</form>
			<div class="lx-ref-results-form__contact"><p><span aria-hidden="true">☎</span><strong><?php esc_html_e( 'Call Us Anytime', 'lexora' ); ?></strong><br>(555) 123-4567</p><p><span aria-hidden="true">✉</span><strong><?php esc_html_e( 'Email Us', 'lexora' ); ?></strong><br>info@lexoralaw.com</p><p><span aria-hidden="true">⌖</span><strong><?php esc_html_e( 'Our Office', 'lexora' ); ?></strong><br>123 Justice Way, Suite 400</p></div>
			<!-- /wp:html -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
