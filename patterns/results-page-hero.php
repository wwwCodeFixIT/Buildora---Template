<?php
/**
 * Title: Results Page Hero
 * Slug: lexora/results-page-hero
 * Categories: lexora, banner
 * Keywords: results, representative matters, legal
 * Description: Inner-page hero for representative matters and outcomes.
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
			<span aria-current="page"><?php esc_html_e( 'Results', 'lexora' ); ?></span>
		</nav>
		<!-- /wp:html -->

		<!-- wp:columns {"verticalAlignment":"bottom","className":"buildora-inner-hero__grid"} -->
		<div class="wp-block-columns are-vertically-aligned-bottom buildora-inner-hero__grid">
			<!-- wp:column {"verticalAlignment":"bottom","width":"68%","className":"buildora-inner-hero__copy"} -->
			<div class="wp-block-column is-vertically-aligned-bottom buildora-inner-hero__copy" style="flex-basis:68%">
				<!-- wp:paragraph {"className":"buildora-inner-hero__eyebrow"} --><p class="buildora-inner-hero__eyebrow"><?php esc_html_e( 'Representative matters', 'lexora' ); ?></p><!-- /wp:paragraph -->
				<!-- wp:heading {"level":1,"className":"buildora-inner-hero__title"} --><h1 class="wp-block-heading buildora-inner-hero__title"><?php esc_html_e( 'Strategy measured by the quality of the outcome.', 'lexora' ); ?></h1><!-- /wp:heading -->
				<!-- wp:paragraph {"className":"buildora-inner-hero__lead","textColor":"muted","fontSize":"md"} --><p class="buildora-inner-hero__lead has-muted-color has-text-color has-md-font-size"><?php esc_html_e( 'A selection of illustrative matters showing how Lexora approaches disputes, negotiations and high-stakes legal decisions with disciplined preparation and practical judgment.', 'lexora' ); ?></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"bottom","width":"32%"} -->
			<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:32%">
				<!-- wp:group {"backgroundColor":"ink","textColor":"paper","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-paper-color has-ink-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
					<!-- wp:paragraph {"className":"lexora-section-kicker lexora-section-kicker--light"} --><p class="lexora-section-kicker lexora-section-kicker--light"><?php esc_html_e( 'Important', 'lexora' ); ?></p><!-- /wp:paragraph -->
					<!-- wp:paragraph --><p><?php esc_html_e( 'Past outcomes are illustrative only and do not guarantee future results.', 'lexora' ); ?></p><!-- /wp:paragraph -->
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
