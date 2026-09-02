<?php
/**
 * Title: Homepage Showcase
 * Slug: lexora/home-showcase
 * Categories: lexora, featured
 * Keywords: homepage, practice areas, attorneys, contact
 * Viewport Width: 1440
 * Description: Marketplace-style homepage grid with practice areas, attorneys and compact contact panel.
 */
?>
<!-- wp:html -->
<section id="home-showcase" class="lexora-home-showcase">
	<div class="lexora-home-showcase__inner">
		<article class="lexora-showcase-panel lexora-showcase-panel--practice">
			<header class="lexora-showcase-heading">
				<h2><?php esc_html_e( 'Practice Areas', 'lexora' ); ?></h2>
				<div class="lexora-showcase-divider" aria-hidden="true"><span></span><i></i><span></span></div>
				<p><?php esc_html_e( 'Focused legal solutions tailored to your needs.', 'lexora' ); ?></p>
			</header>
			<div class="lexora-practice-mini-grid">
				<div class="lexora-practice-mini"><div class="lexora-practice-mini__icon">⚖</div><h3><?php esc_html_e( 'Business Law', 'lexora' ); ?></h3><p><?php esc_html_e( 'Guiding businesses through every stage of growth.', 'lexora' ); ?></p></div>
				<div class="lexora-practice-mini"><div class="lexora-practice-mini__icon">♙</div><h3><?php esc_html_e( 'Family Law', 'lexora' ); ?></h3><p><?php esc_html_e( 'Compassionate representation for your family.', 'lexora' ); ?></p></div>
				<div class="lexora-practice-mini"><div class="lexora-practice-mini__icon">✒</div><h3><?php esc_html_e( 'Estate Planning', 'lexora' ); ?></h3><p><?php esc_html_e( 'Protecting your legacy and securing your future.', 'lexora' ); ?></p></div>
				<div class="lexora-practice-mini"><div class="lexora-practice-mini__icon">⚖</div><h3><?php esc_html_e( 'Litigation', 'lexora' ); ?></h3><p><?php esc_html_e( 'Strong advocacy in and out of court.', 'lexora' ); ?></p></div>
			</div>
			<a class="lexora-showcase-button" href="<?php echo esc_url( home_url( '/practice-areas/' ) ); ?>"><?php esc_html_e( 'View all practice areas', 'lexora' ); ?></a>
		</article>

		<article class="lexora-showcase-panel lexora-showcase-panel--attorneys">
			<header class="lexora-showcase-heading">
				<h2><?php esc_html_e( 'Attorneys', 'lexora' ); ?></h2>
				<div class="lexora-showcase-divider" aria-hidden="true"><span></span><i></i><span></span></div>
				<p><?php esc_html_e( 'Experienced. Dedicated. On your side.', 'lexora' ); ?></p>
			</header>
			<div class="lexora-attorney-mini-grid">
				<a class="lexora-attorney-mini" href="<?php echo esc_url( home_url( '/attorneys/eleanor-mercer/' ) ); ?>"><div class="lexora-attorney-mini__portrait"><span>EM</span></div><h3>Eleanor Mercer</h3><p><?php esc_html_e( 'Managing Partner', 'lexora' ); ?></p><small>in&nbsp;&nbsp;✉</small></a>
				<a class="lexora-attorney-mini" href="<?php echo esc_url( home_url( '/attorneys/daniel-moore/' ) ); ?>"><div class="lexora-attorney-mini__portrait"><span>DM</span></div><h3>Daniel Moore</h3><p><?php esc_html_e( 'Senior Attorney', 'lexora' ); ?></p><small>in&nbsp;&nbsp;✉</small></a>
				<a class="lexora-attorney-mini" href="<?php echo esc_url( home_url( '/attorneys/sophia-carter/' ) ); ?>"><div class="lexora-attorney-mini__portrait"><span>SC</span></div><h3>Sophia Carter</h3><p><?php esc_html_e( 'Litigation Attorney', 'lexora' ); ?></p><small>in&nbsp;&nbsp;✉</small></a>
				<a class="lexora-attorney-mini" href="<?php echo esc_url( home_url( '/attorneys/' ) ); ?>"><div class="lexora-attorney-mini__portrait"><span>LB</span></div><h3>Laura Bennett</h3><p><?php esc_html_e( 'Family Law Attorney', 'lexora' ); ?></p><small>in&nbsp;&nbsp;✉</small></a>
			</div>
		</article>

		<aside class="lexora-contact-mini">
			<header class="lexora-showcase-heading lexora-showcase-heading--dark">
				<h2><?php esc_html_e( 'Get in touch', 'lexora' ); ?></h2>
				<div class="lexora-showcase-divider" aria-hidden="true"><span></span><i></i><span></span></div>
				<p><?php esc_html_e( 'We are here to help. Let’s discuss how we can assist you.', 'lexora' ); ?></p>
			</header>
			<form class="lexora-contact-mini__form" action="<?php echo esc_url( home_url( '/contact/#consultation' ) ); ?>" method="get">
				<input type="text" name="name" placeholder="<?php echo esc_attr__( 'Your Name', 'lexora' ); ?>" aria-label="<?php echo esc_attr__( 'Your Name', 'lexora' ); ?>">
				<input type="email" name="email" placeholder="<?php echo esc_attr__( 'Email Address', 'lexora' ); ?>" aria-label="<?php echo esc_attr__( 'Email Address', 'lexora' ); ?>">
				<input type="tel" name="phone" placeholder="<?php echo esc_attr__( 'Phone Number', 'lexora' ); ?>" aria-label="<?php echo esc_attr__( 'Phone Number', 'lexora' ); ?>">
				<textarea name="message" rows="3" placeholder="<?php echo esc_attr__( 'How can we help you?', 'lexora' ); ?>" aria-label="<?php echo esc_attr__( 'How can we help you?', 'lexora' ); ?>"></textarea>
				<button type="submit"><?php esc_html_e( 'Send message', 'lexora' ); ?></button>
			</form>
			<div class="lexora-contact-mini__details"><p><span aria-hidden="true">☎</span> <?php esc_html_e( 'Call Us Anytime', 'lexora' ); ?><br><strong>(555) 123-4567</strong></p><p><span aria-hidden="true">✉</span> <?php esc_html_e( 'Email Us', 'lexora' ); ?><br><strong>info@lexoralaw.com</strong></p></div>
		</aside>
	</div>
</section>
<!-- /wp:html -->
