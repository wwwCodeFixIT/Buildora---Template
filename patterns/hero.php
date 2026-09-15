<?php
/**
 * Title: Hero — Legal Practice
 * Slug: lexora/hero-legal
 * Categories: lexora, banner
 * Keywords: hero, law firm, attorney, legal
 * Viewport Width: 1440
 * Description: Premium conversion-focused hero for law firms and legal practices.
 */
?>
<!-- wp:html -->
<style>
body.home .wp-site-blocks { gap: 0 !important; }
body.home .wp-site-blocks > * { margin-block-start: 0 !important; }

@media (max-width: 899px) {
	body.home .lexora-header__inner {
		min-height: 72px !important;
		padding-inline: 1rem !important;
	}

	body.home .lexora-header__logo {
		gap: .6rem !important;
	}

	body.home .lexora-header__logo img {
		width: 34px !important;
		height: 34px !important;
		display: block !important;
		visibility: visible !important;
		opacity: 1 !important;
		object-fit: contain !important;
	}

	body.home .lexora-header__logo span {
		font-size: 1.72rem !important;
		line-height: 1 !important;
	}

	body.home .lexora-hero-visual {
		position: relative;
		min-height: 720px;
		background:
			linear-gradient(180deg, rgb(3 20 42 / 98%) 0%, rgb(3 20 42 / 95%) 46%, rgb(3 20 42 / 66%) 72%, rgb(2 14 31 / 38%) 100%),
			linear-gradient(90deg, rgb(3 20 42 / 98%) 0%, rgb(3 20 42 / 77%) 55%, rgb(3 20 42 / 18%) 100%),
			url('https://images.unsplash.com/photo-1765281723581-550d92b63591?auto=format&fit=crop&w=1200&q=86') 61% bottom / cover no-repeat !important;
	}

	body.home .lexora-hero-visual__grid {
		display: block !important;
		width: 100% !important;
		max-width: none !important;
		min-height: 720px !important;
		margin: 0 !important;
	}

	body.home .lexora-hero-visual__content {
		position: relative;
		z-index: 2;
		width: 100% !important;
		max-width: 100% !important;
		box-sizing: border-box !important;
		padding: 4.45rem 1.45rem 5rem !important;
	}

	body.home .lexora-hero-visual__eyebrow {
		max-width: 17rem;
		margin-bottom: 1.15rem !important;
		font-size: .76rem !important;
		line-height: 1.65 !important;
	}

	body.home .lexora-hero-visual__title {
		max-width: 7.4ch !important;
		font-size: clamp(3.15rem, 13.4vw, 4rem) !important;
		line-height: .93 !important;
		letter-spacing: -.035em !important;
	}

	body.home .lexora-hero-visual__divider {
		margin: 1.55rem 0 1.45rem !important;
	}

	body.home .lexora-hero-visual__divider span {
		width: 64px !important;
	}

	body.home .lexora-hero-visual__lead {
		max-width: 20rem !important;
		font-size: 1rem !important;
		line-height: 1.55 !important;
	}

	body.home .lexora-hero-visual__actions {
		width: min(100%, 19rem);
		display: grid !important;
		gap: .75rem !important;
		margin-top: 1.65rem !important;
	}

	body.home .lexora-hero-visual__actions .wp-block-button,
	body.home .lexora-hero-visual__actions .wp-block-button__link {
		width: 100% !important;
		min-width: 0 !important;
	}

	body.home .lexora-hero-visual__media-column {
		display: none !important;
	}

	body.home .lexora-practice-mini__icon svg {
		width: 38px !important;
		height: 38px !important;
		fill: none !important;
		stroke: #17202c !important;
		stroke-width: 1.55 !important;
		stroke-linecap: round;
		stroke-linejoin: round;
	}

	body.home .lexora-practice-mini__icon svg *,
	body.home .lexora-practice-mini__icon svg path,
	body.home .lexora-practice-mini__icon svg circle {
		fill: none !important;
		stroke: inherit !important;
	}
}

@media (max-width: 620px) {
	body.home .lexora-home-showcase {
		padding: 1rem 0 1.15rem !important;
	}

	body.home .lexora-home-showcase__inner {
		gap: .9rem !important;
	}

	body.home .lexora-showcase-panel,
	body.home .lexora-contact-mini {
		margin-inline: .8rem !important;
	}

	body.home .lexora-showcase-panel--practice {
		padding: 1.35rem 1rem .95rem !important;
	}

	body.home .lexora-practice-mini-grid {
		display: grid !important;
		grid-template-columns: 1fr !important;
		gap: 0 !important;
		margin-top: 1.05rem !important;
	}

	body.home .lexora-practice-mini {
		position: relative;
		display: grid !important;
		grid-template-columns: 58px minmax(0, 1fr) 24px;
		grid-template-rows: auto auto;
		column-gap: .6rem;
		align-items: center;
		min-height: 96px;
		margin: 0 !important;
		padding: .9rem .15rem !important;
		border-right: 0 !important;
		border-bottom: 1px solid rgb(5 25 51 / 11%);
		text-align: left !important;
	}

	body.home .lexora-practice-mini:last-child {
		border-bottom: 0 !important;
	}

	body.home .lexora-practice-mini::after {
		grid-column: 3;
		grid-row: 1 / span 2;
		align-self: center;
		justify-self: center;
		color: #18212e;
		content: '›';
		font-family: Georgia, serif;
		font-size: 2.15rem;
		font-weight: 400;
		line-height: 1;
	}

	body.home .lexora-practice-mini__icon {
		grid-column: 1;
		grid-row: 1 / span 2;
		min-height: 0 !important;
	}

	body.home .lexora-practice-mini h3 {
		grid-column: 2;
		grid-row: 1;
		align-self: end;
		margin: 0 0 .22rem !important;
		font-size: 1.03rem !important;
	}

	body.home .lexora-practice-mini p {
		grid-column: 2;
		grid-row: 2;
		align-self: start;
		font-size: .76rem !important;
		line-height: 1.42 !important;
	}

	body.home .lexora-showcase-button {
		margin-top: .9rem !important;
	}

	body.home .lexora-attorney-mini-grid {
		grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
		gap: .7rem !important;
	}

	body.home .lexora-attorney-mini__portrait img {
		width: 100%;
		height: 100%;
		display: block;
		object-fit: cover;
		object-position: center top;
	}

	body.home .lexora-footer-shell__inner {
		padding: 1.3rem 1rem 1.4rem !important;
		gap: 1.05rem !important;
	}

	body.home .lexora-footer-shell__nav {
		gap: .8rem 1.15rem !important;
		justify-content: center !important;
	}
}
</style>
<!-- /wp:html -->
<!-- wp:group {"align":"full","className":"lexora-hero-visual","backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull lexora-hero-visual has-surface-background-color has-background">
	<!-- wp:columns {"align":"wide","verticalAlignment":"stretch","className":"lexora-hero-visual__grid"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-stretch lexora-hero-visual__grid">
		<!-- wp:column {"verticalAlignment":"center","width":"55%","className":"lexora-hero-visual__content"} -->
		<div class="wp-block-column is-vertically-aligned-center lexora-hero-visual__content" style="flex-basis:55% !important;padding:5rem 4.25rem 4.75rem clamp(7.5rem,8.5vw,10rem) !important">
			<!-- wp:paragraph {"className":"lexora-hero-visual__eyebrow"} -->
			<p class="lexora-hero-visual__eyebrow"><?php esc_html_e( 'Advocates. Advisors. Allies.', 'lexora' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"fontSize":"hero","className":"lexora-hero-visual__title"} -->
			<h1 class="wp-block-heading lexora-hero-visual__title has-hero-font-size"><span><?php esc_html_e( 'Strategic Counsel.', 'lexora' ); ?></span><span class="lexora-hero-visual__title-accent"><?php esc_html_e( 'Trusted Results.', 'lexora' ); ?></span></h1>
			<!-- /wp:heading -->

			<!-- wp:html -->
			<div class="lexora-hero-visual__divider" aria-hidden="true"><span></span><i></i><span></span></div>
			<!-- /wp:html -->

			<!-- wp:paragraph {"fontSize":"md","textColor":"paper","className":"lexora-hero-visual__lead"} -->
			<p class="lexora-hero-visual__lead has-paper-color has-text-color has-md-font-size"><?php esc_html_e( 'Lexora Law Group provides exceptional legal representation with integrity, dedication, and a relentless focus on your success.', 'lexora' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"className":"lexora-hero-visual__actions"} -->
			<div class="wp-block-buttons lexora-hero-visual__actions">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/practice-areas/' ) ); ?>"><?php esc_html_e( 'Our practice areas', 'lexora' ); ?></a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/#consultation' ) ); ?>"><?php esc_html_e( 'Schedule a consultation', 'lexora' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"stretch","width":"45%","className":"lexora-hero-visual__media-column"} -->
		<div class="wp-block-column is-vertically-aligned-stretch lexora-hero-visual__media-column" style="flex-basis:45% !important">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"lexora-hero-visual__image"} -->
			<figure class="wp-block-image size-full lexora-hero-visual__image"><img src="https://images.unsplash.com/photo-1765281723581-550d92b63591?auto=format&amp;fit=crop&amp;w=1800&amp;q=88" alt="Illuminated classical courthouse columns at night" /></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
