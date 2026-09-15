<?php
/**
 * Title: Attorneys Page Hero
 * Slug: lexora/attorneys-page-hero
 * Categories: lexora, banner
 * Keywords: attorneys, lawyers, team, legal
 * Description: Inner-page hero for the Lexora attorneys page.
 */

$lexora_home_url = home_url( '/' );
?>
<!-- wp:group {"align":"full","className":"buildora-inner-hero","backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull buildora-inner-hero has-surface-background-color has-background">
	<!-- wp:group {"align":"wide","className":"buildora-inner-hero__inner","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide buildora-inner-hero__inner">
		<!-- wp:html -->
		<nav class="buildora-breadcrumb" aria-label="<?php echo esc_attr_x( 'Breadcrumb', 'navigation landmark', 'lexora' ); ?>">
			<a href="<?php echo esc_url( $lexora_home_url ); ?>"><?php esc_html_e( 'Home', 'lexora' ); ?></a>
			<span aria-hidden="true">/</span>
			<span aria-current="page"><?php esc_html_e( 'Attorneys', 'lexora' ); ?></span>
		</nav>
		<!-- /wp:html -->

		<!-- wp:columns {"verticalAlignment":"bottom","className":"buildora-inner-hero__grid"} -->
		<div class="wp-block-columns are-vertically-aligned-bottom buildora-inner-hero__grid">
			<!-- wp:column {"verticalAlignment":"bottom","width":"68%","className":"buildora-inner-hero__copy"} -->
			<div class="wp-block-column is-vertically-aligned-bottom buildora-inner-hero__copy" style="flex-basis:68%">
				<!-- wp:paragraph {"className":"buildora-inner-hero__eyebrow"} --><p class="buildora-inner-hero__eyebrow"><?php esc_html_e( 'Meet the team', 'lexora' ); ?></p><!-- /wp:paragraph -->
				<!-- wp:heading {"level":1,"className":"buildora-inner-hero__title"} --><h1 class="wp-block-heading buildora-inner-hero__title"><?php esc_html_e( 'Experienced advocates. Clear, personal counsel.', 'lexora' ); ?></h1><!-- /wp:heading -->
				<!-- wp:paragraph {"className":"buildora-inner-hero__lead","textColor":"muted","fontSize":"md"} --><p class="buildora-inner-hero__lead has-muted-color has-text-color has-md-font-size"><?php esc_html_e( 'Lexora brings together lawyers with complementary experience across commercial, dispute, employment, property and private client matters.', 'lexora' ); ?></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"bottom","width":"32%"} -->
			<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:32%">
				<!-- wp:group {"backgroundColor":"ink","textColor":"paper","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-paper-color has-ink-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
					<!-- wp:paragraph {"className":"lexora-section-kicker"} --><p class="lexora-section-kicker"><?php esc_html_e( 'Direct access', 'lexora' ); ?></p><!-- /wp:paragraph -->
					<!-- wp:heading {"level":3} --><h3 class="wp-block-heading"><?php esc_html_e( 'The lawyer leading your matter stays close to it.', 'lexora' ); ?></h3><!-- /wp:heading -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
