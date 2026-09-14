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
