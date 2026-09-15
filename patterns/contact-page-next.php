<?php
/**
 * Title: Contact Page Next Steps
 * Slug: lexora/contact-page-next
 * Categories: lexora, contact
 * Keywords: contact, consultation, process, next steps
 * Description: Three-step follow-up process after a legal consultation request.
 */
?>
<!-- wp:group {"align":"full","className":"buildora-contact-next","backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull buildora-contact-next has-surface-background-color has-background">
	<!-- wp:group {"align":"wide","className":"buildora-contact-next__inner","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide buildora-contact-next__inner">
		<!-- wp:group {"className":"buildora-contact-next__intro","layout":{"type":"default"}} -->
		<div class="wp-block-group buildora-contact-next__intro">
			<!-- wp:paragraph {"className":"buildora-contact-next__eyebrow"} --><p class="buildora-contact-next__eyebrow"><?php esc_html_e( 'What happens next', 'lexora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"className":"buildora-contact-next__title"} --><h2 class="wp-block-heading buildora-contact-next__title"><?php esc_html_e( 'Clear next steps. No guesswork.', 'lexora' ); ?></h2><!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:html -->
		<div class="buildora-contact-next__steps">
			<article class="buildora-contact-next__step">
				<span class="buildora-contact-next__number">01</span>
				<h3><?php esc_html_e( 'We review the enquiry', 'lexora' ); ?></h3>
				<p><?php esc_html_e( 'We check the type of matter, jurisdiction, urgency and whether the firm is able to consider acting for you.', 'lexora' ); ?></p>
			</article>
			<article class="buildora-contact-next__step">
				<span class="buildora-contact-next__number">02</span>
				<h3><?php esc_html_e( 'We confirm the next information needed', 'lexora' ); ?></h3>
				<p><?php esc_html_e( 'If more context or documents are required, we explain exactly what is useful and how to share it safely.', 'lexora' ); ?></p>
			</article>
			<article class="buildora-contact-next__step">
				<span class="buildora-contact-next__number">03</span>
				<h3><?php esc_html_e( 'You receive a defined next step', 'lexora' ); ?></h3>
				<p><?php esc_html_e( 'That may be a consultation, a conflict check, a proposed scope of work or a clear explanation that the matter is outside our practice.', 'lexora' ); ?></p>
			</article>
		</div>
		<p class="buildora-contact-next__note"><?php esc_html_e( 'Submitting the form does not create a lawyer-client relationship. Engagement begins only after the firm confirms acceptance in writing.', 'lexora' ); ?></p>
		<!-- /wp:html -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
