<?php
/**
 * Title: Hero — Construction
 * Slug: buildora/hero-construction
 * Categories: buildora, banner
 * Keywords: hero, construction, services
 * Viewport Width: 1440
 * Description: High-impact construction hero with two CTAs and a supporting image.
 */
?>
<!-- wp:group {"align":"full","className":"buildora-hero","backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull buildora-hero has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:columns {"align":"wide","verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"56%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:56%">
			<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontWeight":"750","textTransform":"uppercase","letterSpacing":"0.08em"}}} -->
			<p class="has-muted-color has-text-color" style="font-weight:750;letter-spacing:0.08em;text-transform:uppercase"><?php esc_html_e( 'Construction • Renovation • Home Services', 'buildora' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"fontSize":"hero","style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|40"}}}} -->
			<h1 class="wp-block-heading has-hero-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--40)"><?php esc_html_e( 'Built right. Delivered on time.', 'buildora' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"md","textColor":"muted"} -->
			<p class="has-muted-color has-text-color has-md-font-size"><?php esc_html_e( 'A conversion-focused starter for contractors and home-service businesses that need a fast, credible WordPress website.', 'buildora' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#contact"><?php esc_html_e( 'Request a quote', 'buildora' ); ?></a></div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#services"><?php esc_html_e( 'View services', 'buildora' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50)">
				<!-- wp:paragraph {"fontSize":"xs"} --><p class="has-xs-font-size"><strong>15+</strong> <?php esc_html_e( 'years experience', 'buildora' ); ?></p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"fontSize":"xs"} --><p class="has-xs-font-size"><strong>500+</strong> <?php esc_html_e( 'projects completed', 'buildora' ); ?></p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"fontSize":"xs"} --><p class="has-xs-font-size"><strong>4.9/5</strong> <?php esc_html_e( 'client rating', 'buildora' ); ?></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"44%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:44%">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"buildora-hero__media"} -->
			<figure class="wp-block-image size-full buildora-hero__media"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-placeholder.svg' ) ); ?>" alt="" /></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
