<?php
/**
 * Title: Contact Page Next Steps
 * Slug: buildora/contact-page-next
 * Categories: buildora, contact
 * Keywords: contact, process, next steps
 * Description: Three-step follow-up process after a project enquiry.
 */
?>
<!-- wp:group {"align":"full","className":"buildora-contact-next","backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull buildora-contact-next has-surface-background-color has-background">
	<!-- wp:group {"align":"wide","className":"buildora-contact-next__inner","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide buildora-contact-next__inner">
		<!-- wp:group {"className":"buildora-contact-next__intro","layout":{"type":"default"}} -->
		<div class="wp-block-group buildora-contact-next__intro">
			<!-- wp:paragraph {"className":"buildora-contact-next__eyebrow"} -->
			<p class="buildora-contact-next__eyebrow"><?php esc_html_e( 'What happens next', 'buildora' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"className":"buildora-contact-next__title"} -->
			<h2 class="wp-block-heading buildora-contact-next__title"><?php esc_html_e( 'Clear next steps. No guessing.', 'buildora' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:html -->
		<div class="buildora-contact-next__steps">
			<article class="buildora-contact-next__step">
				<span class="buildora-contact-next__number">01</span>
				<h3><?php esc_html_e( 'We review the brief', 'buildora' ); ?></h3>
				<p><?php esc_html_e( 'We check the type of work, location and timing so we can understand whether the project is a sensible fit.', 'buildora' ); ?></p>
			</article>
			<article class="buildora-contact-next__step">
				<span class="buildora-contact-next__number">02</span>
				<h3><?php esc_html_e( 'We confirm what is missing', 'buildora' ); ?></h3>
				<p><?php esc_html_e( 'If we need drawings, measurements or a site conversation, we tell you exactly what is needed before the scope moves forward.', 'buildora' ); ?></p>
			</article>
			<article class="buildora-contact-next__step">
				<span class="buildora-contact-next__number">03</span>
				<h3><?php esc_html_e( 'You get a defined next step', 'buildora' ); ?></h3>
				<p><?php esc_html_e( 'That may be a site visit, a scoped quotation or a clear explanation that the work is not the right fit for us.', 'buildora' ); ?></p>
			</article>
		</div>
		<p class="buildora-contact-next__note"><?php esc_html_e( 'If the project is not a fit, we will say so early rather than waste your time.', 'buildora' ); ?></p>
		<!-- /wp:html -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
