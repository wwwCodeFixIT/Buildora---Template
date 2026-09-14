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
body.home .wp-site-blocks {
  gap: 0 !important;
}

body.home .wp-site-blocks > .wp-block-template-part,
body.home .wp-site-blocks > main,
body.home main#main {
  margin-block-start: 0 !important;
}

@media (min-width: 900px) {
  body.home .lexora-header__inner,
  body.home .lexora-stat-bar__grid,
  body.home footer .alignwide {
    width: min(calc(100% - 72px), 1500px) !important;
    max-width: 1500px !important;
    margin-left: auto !important;
    margin-right: auto !important;
  }

  body.home .lexora-header__inner {
    min-height: 92px !important;
  }

  body.home .lexora-header__logo img {
    width: 58px !important;
    height: 58px !important;
  }

  body.home .lexora-header__logo span {
    font-size: clamp(2.2rem, 2vw, 2.9rem) !important;
    letter-spacing: .015em !important;
  }

  body.home .lexora-primary-nav .wp-block-navigation-item__content {
    font-size: .8rem !important;
    letter-spacing: .09em !important;
  }

  body.home .lexora-hero-visual__grid {
    width: 100% !important;
    max-width: none !important;
    min-height: 590px !important;
    margin-left: 0 !important;
    margin-right: 0 !important;
    gap: 0 !important;
  }

  body.home .lexora-hero-visual__content {
    flex-basis: 47% !important;
    box-sizing: border-box;
    padding: 5rem 4.25rem 4.75rem clamp(4rem, 7vw, 8.5rem) !important;
  }

  body.home .lexora-hero-visual__title {
    max-width: 700px !important;
    font-size: clamp(4.5rem, 5vw, 5.95rem) !important;
    line-height: .94 !important;
    letter-spacing: -.045em !important;
  }

  body.home .lexora-hero-visual__lead {
    max-width: 38rem !important;
    font-size: 1.08rem !important;
    line-height: 1.6 !important;
  }

  body.home .lexora-hero-visual__media-column {
    position: relative;
    flex-basis: 53% !important;
    overflow: hidden;
    min-height: 590px !important;
    height: 590px !important;
    isolation: isolate;
  }

  body.home .lexora-hero-visual__media-column::before {
    position: absolute;
    z-index: 2;
    inset: 0 auto 0 0;
    width: 24%;
    pointer-events: none;
    background: linear-gradient(90deg, #041a37 0%, rgb(4 26 55 / 84%) 28%, rgb(4 26 55 / 34%) 68%, transparent 100%);
    content: '';
  }

  body.home .lexora-hero-visual__media-column::after {
    position: absolute;
    z-index: 1;
    inset: 0;
    pointer-events: none;
    background: linear-gradient(180deg, rgb(2 14 31 / 8%), rgb(2 14 31 / 22%));
    content: '';
  }

  body.home .lexora-hero-visual__image,
  body.home .lexora-hero-visual__image img {
    min-height: 590px !important;
    height: 590px !important;
  }

  body.home .lexora-hero-visual__image {
    width: 100% !important;
    margin: 0 !important;
  }

  body.home .lexora-hero-visual__image img {
    width: 100% !important;
    transform: scale(1.035);
    transform-origin: center right;
    object-fit: cover !important;
    object-position: 56% 52% !important;
    filter: brightness(.82) contrast(1.12) saturate(.82) sepia(.08);
  }

  body.home .lexora-stat-bar__item {
    padding: 1.55rem 1rem 1.65rem !important;
  }

  body.home .lexora-home-showcase {
    padding: 2rem 48px 2.15rem !important;
  }

  body.home .lexora-home-showcase__inner {
    width: min(100%, 1540px) !important;
    max-width: 1540px !important;
    min-height: 410px;
    margin-left: auto !important;
    margin-right: auto !important;
    grid-template-columns: 1.05fr 1.72fr .75fr !important;
    gap: 1rem !important;
  }

  body.home .lexora-showcase-panel,
  body.home .lexora-contact-mini {
    min-height: 410px;
  }

  body.home .lexora-showcase-panel {
    padding: 1.55rem 1.2rem 1.35rem !important;
  }

  body.home .lexora-showcase-heading h2 {
    font-size: 1.6rem !important;
  }

  body.home .lexora-showcase-heading p {
    font-size: .82rem !important;
  }

  body.home .lexora-practice-mini-grid {
    margin-top: 1.45rem !important;
  }

  body.home .lexora-practice-mini {
    padding-left: .8rem !important;
    padding-right: .8rem !important;
  }

  body.home .lexora-practice-mini__icon {
    min-height: 54px !important;
  }

  body.home .lexora-practice-mini__icon svg {
    width: 42px;
    height: 42px;
    stroke: #17202c;
    stroke-width: 1.55;
    fill: none;
  }

  body.home .lexora-practice-mini h3 {
    margin-top: .55rem !important;
    font-size: .98rem !important;
  }

  body.home .lexora-practice-mini p {
    font-size: .72rem !important;
    line-height: 1.55 !important;
  }

  body.home .lexora-showcase-button {
    margin-top: 1.5rem !important;
    padding: .8rem 1.55rem !important;
    font-size: .72rem !important;
  }

  body.home .lexora-attorney-mini-grid {
    gap: .85rem !important;
    margin-top: 1.05rem !important;
  }

  body.home .lexora-attorney-mini {
    box-shadow: 0 5px 14px rgb(5 25 51 / 5%);
  }

  body.home .lexora-attorney-mini__portrait {
    aspect-ratio: .82 / 1 !important;
    min-height: 205px;
    overflow: hidden;
    background: #11161c !important;
  }

  body.home .lexora-attorney-mini__portrait img {
    width: 100%;
    height: 100%;
    display: block;
    object-fit: cover;
    object-position: center top;
    filter: grayscale(.28) saturate(.78) contrast(1.04) brightness(.9);
  }

  body.home .lexora-attorney-mini h3 {
    margin-top: .7rem !important;
    font-size: .9rem !important;
  }

  body.home .lexora-attorney-mini p {
    font-size: .69rem !important;
  }

  body.home .lexora-attorney-mini small {
    padding-top: .58rem !important;
    padding-bottom: .72rem !important;
    font-size: .66rem !important;
  }

  body.home .lexora-contact-mini {
    padding: 1.45rem 1.05rem 1.2rem !important;
  }

  body.home .lexora-contact-mini__form {
    gap: .5rem !important;
    margin-top: 1.1rem !important;
  }

  body.home .lexora-contact-mini__form input,
  body.home .lexora-contact-mini__form textarea {
    min-height: 39px !important;
    padding: .6rem .68rem !important;
    font-size: .72rem !important;
  }

  body.home .lexora-contact-mini__form textarea {
    min-height: 86px !important;
  }

  body.home .lexora-contact-mini__form button {
    min-height: 42px !important;
    font-size: .72rem !important;
  }
}

@media (max-width: 1180px) and (min-width: 900px) {
  body.home .lexora-hero-visual__content {
    padding-left: 3rem !important;
    padding-right: 2.5rem !important;
  }

  body.home .lexora-home-showcase__inner {
    grid-template-columns: 1fr 1.45fr !important;
  }

  body.home .lexora-contact-mini {
    grid-column: 1 / -1;
    min-height: auto;
  }
}

@media (max-width: 899px) {
  body.home .lexora-hero-visual__grid {
    width: 100% !important;
    max-width: none !important;
    margin: 0 !important;
  }

  body.home .lexora-hero-visual__media-column {
    position: relative;
    overflow: hidden;
  }

  body.home .lexora-hero-visual__media-column::before {
    position: absolute;
    z-index: 2;
    inset: 0 0 auto;
    height: 26%;
    pointer-events: none;
    background: linear-gradient(180deg, #041a37 0%, rgb(4 26 55 / 58%) 55%, transparent 100%);
    content: '';
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