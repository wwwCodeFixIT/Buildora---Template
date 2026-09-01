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
<!-- wp:group {"align":"full","className":"buildora-hero","backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull buildora-hero has-surface-background-color has-background">
	<!-- wp:columns {"align":"wide","verticalAlignment":"center","className":"buildora-hero__grid"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center buildora-hero__grid">
		<!-- wp:column {"verticalAlignment":"center","width":"54%","className":"buildora-hero__copy"} -->
		<div class="wp-block-column is-vertically-aligned-center buildora-hero__copy" style="flex-basis:54%">
			<!-- wp:paragraph {"className":"buildora-hero__eyebrow"} -->
			<p class="buildora-hero__eyebrow"><?php esc_html_e( 'Strategic counsel • Clear advocacy • Trusted representation', 'lexora' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"fontSize":"hero","className":"buildora-hero__title"} -->
			<h1 class="wp-block-heading buildora-hero__title has-hero-font-size"><span class="buildora-hero__title-line"><?php esc_html_e( 'Clarity in counsel.', 'lexora' ); ?></span><span class="buildora-hero__title-line buildora-hero__title-line--wide"><?php esc_html_e( 'Confidence in action.', 'lexora' ); ?></span></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"md","textColor":"muted","className":"buildora-hero__lead"} -->
			<p class="buildora-hero__lead has-muted-color has-text-color has-md-font-size"><?php esc_html_e( 'From complex disputes to everyday legal decisions, our attorneys bring practical guidance, disciplined preparation and direct communication at every stage.', 'lexora' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"className":"buildora-hero__actions"} -->
			<div class="wp-block-buttons buildora-hero__actions">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/#consultation' ) ); ?>"><?php esc_html_e( 'Request a consultation', 'lexora' ); ?></a></div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/practice-areas/' ) ); ?>"><?php esc_html_e( 'Explore practice areas', 'lexora' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- wp:group {"className":"buildora-hero__proof","layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-group buildora-hero__proof">
				<!-- wp:paragraph {"className":"buildora-hero__proof-item","fontSize":"xs"} -->
				<p class="buildora-hero__proof-item has-xs-font-size"><span aria-hidden="true">✓</span><?php esc_html_e( 'Confidential consultations', 'lexora' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"className":"buildora-hero__proof-item","fontSize":"xs"} -->
				<p class="buildora-hero__proof-item has-xs-font-size"><span aria-hidden="true">✓</span><?php esc_html_e( '20+ years combined experience', 'lexora' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"className":"buildora-hero__proof-item","fontSize":"xs"} -->
				<p class="buildora-hero__proof-item has-xs-font-size"><span aria-hidden="true">✓</span><?php esc_html_e( 'Client-focused counsel', 'lexora' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"46%","className":"buildora-hero__visual-column"} -->
		<div class="wp-block-column is-vertically-aligned-center buildora-hero__visual-column" style="flex-basis:46%">
			<!-- wp:group {"className":"buildora-hero__visual","layout":{"type":"default"}} -->
			<div class="wp-block-group buildora-hero__visual">
				<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"buildora-hero__media"} -->
				<figure class="wp-block-image size-full buildora-hero__media"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-legal.svg' ) ); ?>" alt="" /></figure>
				<!-- /wp:image -->

				<!-- wp:group {"className":"buildora-hero__badge buildora-hero__badge--top","backgroundColor":"paper","layout":{"type":"constrained"}} -->
				<div class="wp-block-group buildora-hero__badge buildora-hero__badge--top has-paper-background-color has-background">
					<!-- wp:paragraph {"className":"buildora-hero__badge-label","fontSize":"xs"} -->
					<p class="buildora-hero__badge-label has-xs-font-size"><?php esc_html_e( 'Client rating', 'lexora' ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"buildora-hero__badge-value"} -->
					<p class="buildora-hero__badge-value"><strong>4.9/5</strong> <span aria-hidden="true">★</span></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"buildora-hero__badge buildora-hero__badge--bottom","backgroundColor":"brand","layout":{"type":"constrained"}} -->
				<div class="wp-block-group buildora-hero__badge buildora-hero__badge--bottom has-brand-background-color has-background">
					<!-- wp:paragraph {"className":"buildora-hero__badge-value"} -->
					<p class="buildora-hero__badge-value"><strong>750+</strong></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"buildora-hero__badge-label","fontSize":"xs"} -->
					<p class="buildora-hero__badge-label has-xs-font-size"><?php esc_html_e( 'matters handled', 'lexora' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
