<?php
/**
 * Title: About Page Hero
 * Slug: lexora/about-page-hero
 * Categories: lexora, featured
 * Keywords: about, hero, law firm
 * Description: Premium inner-page hero for the Lexora About page.
 */
?>
<!-- wp:group {"align":"full","className":"buildora-about-hero","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull buildora-about-hero">
	<!-- wp:group {"align":"wide","className":"buildora-about-hero__inner","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide buildora-about-hero__inner">
		<!-- wp:paragraph {"className":"buildora-about-hero__breadcrumb"} -->
		<p class="buildora-about-hero__breadcrumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'lexora' ); ?></a><span aria-hidden="true"> / </span><span><?php esc_html_e( 'About', 'lexora' ); ?></span></p>
		<!-- /wp:paragraph -->

		<!-- wp:group {"className":"buildora-about-hero__grid","layout":{"type":"default"}} -->
		<div class="wp-block-group buildora-about-hero__grid">
			<!-- wp:group {"className":"buildora-about-hero__copy","layout":{"type":"default"}} -->
			<div class="wp-block-group buildora-about-hero__copy">
				<!-- wp:paragraph {"className":"buildora-about-hero__eyebrow"} --><p class="buildora-about-hero__eyebrow"><?php esc_html_e( 'About Lexora', 'lexora' ); ?></p><!-- /wp:paragraph -->
				<!-- wp:heading {"level":1,"className":"buildora-about-hero__title"} --><h1 class="wp-block-heading buildora-about-hero__title"><?php esc_html_e( 'Legal advice built around clarity, judgment and trust.', 'lexora' ); ?></h1><!-- /wp:heading -->
				<!-- wp:paragraph {"className":"buildora-about-hero__lead"} --><p class="buildora-about-hero__lead"><?php esc_html_e( 'Lexora is a focused legal practice for clients who want advice that is rigorous enough for complex matters and clear enough to act on.', 'lexora' ); ?></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"buildora-about-hero__panel","layout":{"type":"default"}} -->
			<div class="wp-block-group buildora-about-hero__panel">
				<!-- wp:paragraph {"className":"buildora-about-hero__panel-label"} --><p class="buildora-about-hero__panel-label"><?php esc_html_e( 'What we value', 'lexora' ); ?></p><!-- /wp:paragraph -->
				<!-- wp:html -->
				<div class="buildora-about-hero__values">
					<div><strong><?php esc_html_e( 'Clear advice', 'lexora' ); ?></strong><span>01</span></div>
					<div><strong><?php esc_html_e( 'Sound judgment', 'lexora' ); ?></strong><span>02</span></div>
					<div><strong><?php esc_html_e( 'Client confidence', 'lexora' ); ?></strong><span>03</span></div>
				</div>
				<!-- /wp:html -->
				<!-- wp:paragraph {"className":"buildora-about-hero__panel-copy"} --><p class="buildora-about-hero__panel-copy"><?php esc_html_e( 'Disciplined preparation, direct communication and advice that remains proportionate to the problem.', 'lexora' ); ?></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
