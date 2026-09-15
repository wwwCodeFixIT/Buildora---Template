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
<!-- wp:html -->
<style>
.lx-ref-results__hero {
	padding: 3.1rem 0 2rem !important;
	background:
		linear-gradient(90deg, rgb(2 14 32 / 97%) 0%, rgb(2 14 32 / 88%) 47%, rgb(2 14 32 / 28%) 74%, rgb(2 14 32 / 8%) 100%),
		url('https://images.unsplash.com/photo-1765281723581-550d92b63591?auto=format&fit=crop&w=1800&q=88') center right / 58% 100% no-repeat,
		#020e20 !important;
}
.lx-ref-results__title span { color: var(--lx-ref-gold-light); }
.lx-ref-results__lead { max-width: 39rem; }
.lx-ref-result-grid { margin-top: 1.7rem !important; }
.lx-ref-result-grid article { min-height: 182px; padding: 1.25rem 1.3rem; }
.lx-ref-results__lower { align-items: stretch !important; }
.lx-ref-testimonial-panel,
.lx-ref-results-form { min-height: 430px; box-sizing: border-box; }
.lx-ref-testimonial-panel {
	position: relative;
	overflow: hidden;
	padding: 2.55rem clamp(2.4rem, 4.2vw, 4rem) !important;
}
.lx-ref-testimonial-panel::after {
	position: absolute;
	right: -3%;
	bottom: -18%;
	width: 52%;
	height: 68%;
	background: url('https://images.unsplash.com/photo-1765281723581-550d92b63591?auto=format&fit=crop&w=900&q=72') center / cover no-repeat;
	opacity: .055;
	filter: grayscale(1);
	content: '';
	pointer-events: none;
}
.lx-ref-testimonial-panel > * { position: relative; z-index: 1; }
.lx-ref-testimonial-panel__quote-wrap {
	display: grid;
	grid-template-columns: 42px 1fr;
	gap: .85rem;
	align-items: start;
	margin-top: 1.15rem;
}
.lx-ref-testimonial-panel__mark {
	color: var(--lx-ref-gold);
	font-family: Georgia, serif;
	font-size: 4.25rem;
	line-height: .8;
}
.lx-ref-testimonial-panel__quote { margin: 0 !important; }
.lx-ref-testimonial-panel__author { margin-left: 3.6rem; }
.lx-ref-testimonial-panel__avatar {
	width: 64px;
	height: 64px;
	overflow: hidden;
	border: 1px solid rgb(201 155 80 / 45%);
	border-radius: 50%;
	background: #1c2634;
}
.lx-ref-testimonial-panel__avatar img { width: 100%; height: 100%; object-fit: cover; display: block; }
.lx-ref-results-form { padding: 2.55rem clamp(2rem, 3.6vw, 3.6rem) !important; }
.lx-ref-results-form__layout {
	display: grid;
	grid-template-columns: minmax(0, 1fr) 220px;
	gap: 2rem;
	align-items: start;
	margin-top: 1.15rem;
}
.lx-ref-results-form__form { max-width: none; margin-top: 0 !important; }
.lx-ref-results-form__side {
	display: grid;
	gap: 1.15rem;
	padding-left: 1.65rem;
	border-left: 1px solid rgb(201 155 80 / 26%);
}
.lx-ref-results-form__contact {
	display: grid !important;
	grid-template-columns: 1fr !important;
	gap: 1.1rem !important;
	margin: 0 !important;
	padding: 0 !important;
	border: 0 !important;
}
.lx-ref-results-form__contact p {
	display: grid;
	grid-template-columns: 34px 1fr;
	column-gap: .7rem;
	align-items: start;
}
.lx-ref-results-form__contact .lx-ref-contact-icon {
	grid-row: 1 / span 2;
	width: 32px;
	height: 32px;
	display: grid;
	place-items: center;
	border: 1px solid var(--lx-ref-gold);
	border-radius: 50%;
	color: var(--lx-ref-gold-light);
	font-size: .9rem;
}
.lx-ref-results-form__contact strong,
.lx-ref-results-form__contact span:not(.lx-ref-contact-icon) { grid-column: 2; }
.lx-ref-results-form__secure {
	margin: .2rem 0 0;
	padding-top: 1rem;
	border-top: 1px solid rgb(201 155 80 / 26%);
	color: rgb(248 241 231 / 72%);
	font-size: .78rem;
	line-height: 1.5;
}
@media (max-width: 1050px) {
	.lx-ref-results-form__layout { grid-template-columns: 1fr; }
	.lx-ref-results-form__side {
		padding-left: 0;
		padding-top: 1.2rem;
		border-left: 0;
		border-top: 1px solid rgb(201 155 80 / 26%);
	}
}
@media (max-width: 800px) {
	.lx-ref-testimonial-panel__author { margin-left: 0; }
}
</style>
<!-- /wp:html -->
<!-- wp:group {"align":"full","className":"lx-ref-page lx-ref-results","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull lx-ref-page lx-ref-results">
	<!-- wp:group {"align":"full","className":"lx-ref-results__hero","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull lx-ref-results__hero">
		<!-- wp:group {"align":"wide","className":"lx-ref-results__hero-copy","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide lx-ref-results__hero-copy">
			<!-- wp:paragraph {"className":"lx-ref-kicker"} --><p class="lx-ref-kicker"><?php esc_html_e( 'Proven advocacy. Real results.', 'lexora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":1,"className":"lx-ref-results__title"} --><h1 class="wp-block-heading lx-ref-results__title"><?php esc_html_e( 'Results', 'lexora' ); ?> <span><?php esc_html_e( 'That Matter.', 'lexora' ); ?></span></h1><!-- /wp:heading -->
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
			<!-- wp:html --><div class="lx-ref-testimonial-panel__quote-wrap"><div class="lx-ref-testimonial-panel__mark" aria-hidden="true">“</div><blockquote class="lx-ref-testimonial-panel__quote"><p><?php esc_html_e( 'The team at Lexora delivered exceptional service and achieved a result far beyond our expectations. Their dedication and professionalism are unmatched.', 'lexora' ); ?></p></blockquote></div><!-- /wp:html -->
			<!-- wp:group {"className":"lx-ref-testimonial-panel__author","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} --><div class="wp-block-group lx-ref-testimonial-panel__author"><!-- wp:html --><div class="lx-ref-testimonial-panel__avatar"><img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&amp;fit=crop&amp;w=160&amp;h=160&amp;q=82" alt="" /></div><!-- /wp:html --><!-- wp:paragraph --><p><strong>Michael T.</strong><br><span><?php esc_html_e( 'Personal Injury Client', 'lexora' ); ?></span></p><!-- /wp:paragraph --></div><!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"53%","className":"lx-ref-results-form"} -->
		<div class="wp-block-column lx-ref-results-form" style="flex-basis:53%">
			<!-- wp:paragraph {"className":"lx-ref-kicker"} --><p class="lx-ref-kicker"><?php esc_html_e( 'Schedule a consultation', 'lexora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":2} --><h2 class="wp-block-heading"><?php esc_html_e( 'We’re Here to Help.', 'lexora' ); ?></h2><!-- /wp:heading -->
			<!-- wp:paragraph --><p><?php esc_html_e( 'Contact us today to discuss your case with a member of our legal team. Confidential. No obligation.', 'lexora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:html -->
			<div class="lx-ref-results-form__layout">
				<form class="lx-ref-results-form__form" action="<?php echo esc_url( home_url( '/contact/#consultation' ) ); ?>" method="get">
					<div><input type="text" name="name" autocomplete="name" placeholder="<?php echo esc_attr__( 'Your Name', 'lexora' ); ?>" aria-label="<?php echo esc_attr__( 'Your Name', 'lexora' ); ?>"><input type="email" name="email" autocomplete="email" placeholder="<?php echo esc_attr__( 'Your Email', 'lexora' ); ?>" aria-label="<?php echo esc_attr__( 'Your Email', 'lexora' ); ?>"></div>
					<div><input type="tel" name="phone" autocomplete="tel" placeholder="<?php echo esc_attr__( 'Phone Number', 'lexora' ); ?>" aria-label="<?php echo esc_attr__( 'Phone Number', 'lexora' ); ?>"><select name="area" aria-label="<?php echo esc_attr__( 'Practice Area', 'lexora' ); ?>"><option><?php esc_html_e( 'Practice Area', 'lexora' ); ?></option><option><?php esc_html_e( 'Business Law', 'lexora' ); ?></option><option><?php esc_html_e( 'Family Law', 'lexora' ); ?></option><option><?php esc_html_e( 'Litigation', 'lexora' ); ?></option></select></div>
					<textarea name="message" rows="4" placeholder="<?php echo esc_attr__( 'How can we help you?', 'lexora' ); ?>" aria-label="<?php echo esc_attr__( 'How can we help you?', 'lexora' ); ?>"></textarea>
					<button type="submit"><?php esc_html_e( 'Schedule Consultation', 'lexora' ); ?></button>
				</form>
				<div class="lx-ref-results-form__side">
					<div class="lx-ref-results-form__contact">
						<p><span class="lx-ref-contact-icon" aria-hidden="true">☎</span><strong><?php esc_html_e( 'Call Us Anytime', 'lexora' ); ?></strong><span>(555) 123-4567</span></p>
						<p><span class="lx-ref-contact-icon" aria-hidden="true">✉</span><strong><?php esc_html_e( 'Email Us', 'lexora' ); ?></strong><span>info@lexoralaw.com</span></p>
						<p><span class="lx-ref-contact-icon" aria-hidden="true">⌖</span><strong><?php esc_html_e( 'Our Office', 'lexora' ); ?></strong><span>123 Justice Way, Suite 400<br>New York, NY 10001</span></p>
					</div>
					<p class="lx-ref-results-form__secure">▢ &nbsp;<?php esc_html_e( 'Your information is secure and confidential.', 'lexora' ); ?></p>
				</div>
			</div>
			<!-- /wp:html -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
