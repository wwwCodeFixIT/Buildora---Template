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
<!-- wp:group {"align":"full","className":"lexora-hero-visual","backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull lexora-hero-visual has-surface-background-color has-background">
	<!-- wp:columns {"align":"wide","verticalAlignment":"stretch","className":"lexora-hero-visual__grid"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-stretch lexora-hero-visual__grid">
		<!-- wp:column {"verticalAlignment":"center","width":"46%","className":"lexora-hero-visual__content"} -->
		<div class="wp-block-column is-vertically-aligned-center lexora-hero-visual__content" style="flex-basis:46%">
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

		<!-- wp:column {"verticalAlignment":"stretch","width":"54%","className":"lexora-hero-visual__media-column"} -->
		<div class="wp-block-column is-vertically-aligned-stretch lexora-hero-visual__media-column" style="flex-basis:54%">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"lexora-hero-visual__image"} -->
			<figure class="wp-block-image size-full lexora-hero-visual__image"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-legal.svg' ) ); ?>" alt="" /></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
