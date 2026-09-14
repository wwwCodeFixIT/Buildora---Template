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
<style>
@media (min-width: 900px) {
  body.home .lexora-header__inner,
  body.home .lexora-hero-visual__grid,
  body.home .lexora-stat-bar__grid,
  body.home .lexora-home-showcase__inner,
  body.home footer .alignwide {
    width: calc(100% - 96px) !important;
    max-width: 1640px !important;
    margin-left: auto !important;
    margin-right: auto !important;
  }

  body.home .lexora-header__inner {
    min-height: 84px !important;
  }

  body.home .lexora-header__logo img {
    width: 48px !important;
    height: 48px !important;
  }

  body.home .lexora-header__logo span {
    font-size: 2.45rem !important;
  }

  body.home .lexora-primary-nav .wp-block-navigation-item__content {
    font-size: .78rem !important;
  }

  body.home .lexora-hero-visual__grid {
    min-height: 550px !important;
  }

  body.home .lexora-hero-visual__content {
    padding: 4.8rem 4rem 4.5rem 0 !important;
  }

  body.home .lexora-hero-visual__title {
    font-size: clamp(4.5rem, 5vw, 5.8rem) !important;
    line-height: .95 !important;
    letter-spacing: -.045em !important;
  }

  body.home .lexora-hero-visual__lead {
    max-width: 39rem !important;
    font-size: 1.08rem !important;
  }

  body.home .lexora-hero-visual__media-column,
  body.home .lexora-hero-visual__image,
  body.home .lexora-hero-visual__image img {
    min-height: 550px !important;
    height: 550px !important;
  }

  body.home .lexora-hero-visual__image img {
    object-position: 50% 52% !important;
  }

  body.home .lexora-stat-bar__item {
    padding: 1.45rem 1rem 1.55rem !important;
  }

  body.home .lexora-home-showcase {
    padding: 1.35rem 48px 1.4rem !important;
  }

  body.home .lexora-home-showcase__inner {
    grid-template-columns: 1.12fr 1.78fr .76fr !important;
    gap: 1rem !important;
  }

  body.home .lexora-showcase-panel,
  body.home .lexora-contact-mini {
    min-height: 360px;
  }

  body.home .lexora-showcase-panel {
    padding: 1.45rem 1.2rem 1.2rem !important;
  }

  body.home .lexora-showcase-heading h2 {
    font-size: 1.55rem !important;
  }

  body.home .lexora-showcase-heading p {
    font-size: .78rem !important;
  }

  body.home .lexora-practice-mini__icon svg {
    width: 38px;
    height: 38px;
    stroke: #17202c;
    stroke-width: 1.6;
    fill: none;
  }

  body.home .lexora-practice-mini h3 {
    font-size: .94rem !important;
  }

  body.home .lexora-practice-mini p {
    font-size: .7rem !important;
  }

  body.home .lexora-attorney-mini__portrait {
    aspect-ratio: .89 / 1 !important;
    overflow: hidden;
    background: #151515 !important;
  }

  body.home .lexora-attorney-mini__portrait img {
    width: 100%;
    height: 100%;
    display: block;
    object-fit: cover;
    object-position: center top;
    filter: saturate(.82) contrast(1.04) brightness(.93);
  }

  body.home .lexora-attorney-mini h3 {
    font-size: .9rem !important;
  }

  body.home .lexora-contact-mini {
    padding: 1.25rem 1rem 1.1rem !important;
  }
}
</style>
<section id="home-showcase" class="lexora-home-showcase">
	<div class="lexora-home-showcase__inner">
		<article class="lexora-showcase-panel lexora-showcase-panel--practice">
			<header class="lexora-showcase-heading">
				<h2><?php esc_html_e( 'Practice Areas', 'lexora' ); ?></h2>
				<div class="lexora-showcase-divider" aria-hidden="true"><span></span><i></i><span></span></div>
				<p><?php esc_html_e( 'Comprehensive legal solutions tailored to your needs.', 'lexora' ); ?></p>
			</header>
			<div class="lexora-practice-mini-grid">
				<div class="lexora-practice-mini">
					<div class="lexora-practice-mini__icon" aria-hidden="true"><svg viewBox="0 0 48 48"><path d="M8 18h32M11 18v18M18 18v18M30 18v18M37 18v18M7 36h34M5 41h38M10 13l14-8 14 8z"/></svg></div>
					<h3><?php esc_html_e( 'Business Law', 'lexora' ); ?></h3><p><?php esc_html_e( 'Guiding businesses through every stage of growth.', 'lexora' ); ?></p>
				</div>
				<div class="lexora-practice-mini">
					<div class="lexora-practice-mini__icon" aria-hidden="true"><svg viewBox="0 0 48 48"><circle cx="18" cy="16" r="7"/><circle cx="31" cy="18" r="6"/><path d="M7 39c1-9 5-14 11-14s10 5 11 14M26 29c2-3 4-4 7-4 6 0 9 5 9 13"/></svg></div>
					<h3><?php esc_html_e( 'Family Law', 'lexora' ); ?></h3><p><?php esc_html_e( 'Compassionate representation for your family.', 'lexora' ); ?></p>
				</div>
				<div class="lexora-practice-mini">
					<div class="lexora-practice-mini__icon" aria-hidden="true"><svg viewBox="0 0 48 48"><path d="M11 5h23l5 5v31H11zM34 5v7h7M17 19h15M17 25h12M17 31h8"/><path d="M27 36l10-10 4 4-10 10-6 1z"/></svg></div>
					<h3><?php esc_html_e( 'Estate Planning', 'lexora' ); ?></h3><p><?php esc_html_e( 'Protect your legacy and secure your future.', 'lexora' ); ?></p>
				</div>
				<div class="lexora-practice-mini">
					<div class="lexora-practice-mini__icon" aria-hidden="true"><svg viewBox="0 0 48 48"><path d="M24 6v34M14 11h20M8 34h32M18 40h12M14 11L7 24h14zM34 11l-7 13h14z"/></svg></div>
					<h3><?php esc_html_e( 'Litigation', 'lexora' ); ?></h3><p><?php esc_html_e( 'Aggressive representation in and out of court.', 'lexora' ); ?></p>
				</div>
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
				<a class="lexora-attorney-mini" href="<?php echo esc_url( home_url( '/attorneys/david-whitmore/' ) ); ?>"><div class="lexora-attorney-mini__portrait"><img src="https://images.unsplash.com/photo-1543132220-7bc04a0e790a?auto=format&amp;fit=crop&amp;w=700&amp;h=850&amp;q=82" alt="David Whitmore"></div><h3>David Whitmore</h3><p><?php esc_html_e( 'Founding Partner', 'lexora' ); ?></p><small>in&nbsp;&nbsp;✉</small></a>
				<a class="lexora-attorney-mini" href="<?php echo esc_url( home_url( '/attorneys/sophia-langford/' ) ); ?>"><div class="lexora-attorney-mini__portrait"><img src="https://images.unsplash.com/photo-1758518727888-ffa196002e59?auto=format&amp;fit=crop&amp;w=700&amp;h=850&amp;q=82" alt="Sophia Langford"></div><h3>Sophia Langford</h3><p><?php esc_html_e( 'Senior Attorney', 'lexora' ); ?></p><small>in&nbsp;&nbsp;✉</small></a>
				<a class="lexora-attorney-mini" href="<?php echo esc_url( home_url( '/attorneys/james-carter/' ) ); ?>"><div class="lexora-attorney-mini__portrait"><img src="https://images.unsplash.com/photo-1752778935828-bf6fdd5a834a?auto=format&amp;fit=crop&amp;w=700&amp;h=850&amp;q=82" alt="James Carter"></div><h3>James Carter</h3><p><?php esc_html_e( 'Litigation Attorney', 'lexora' ); ?></p><small>in&nbsp;&nbsp;✉</small></a>
				<a class="lexora-attorney-mini" href="<?php echo esc_url( home_url( '/attorneys/olivia-bennett/' ) ); ?>"><div class="lexora-attorney-mini__portrait"><img src="https://images.unsplash.com/photo-1758518729929-8210d3b0839e?auto=format&amp;fit=crop&amp;w=700&amp;h=850&amp;q=82" alt="Olivia Bennett"></div><h3>Olivia Bennett</h3><p><?php esc_html_e( 'Family Law Attorney', 'lexora' ); ?></p><small>in&nbsp;&nbsp;✉</small></a>
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
