<?php
/**
 * Title: Practice Areas Page Hero
 * Slug: lexora/practice-areas-page-hero
 * Categories: lexora, banner
 * Keywords: practice areas, legal services, law firm
 * Description: Premium inner-page hero for Lexora legal practice areas.
 */

$lexora_home_url = home_url( '/' );
?>
<!-- wp:group {"align":"full","className":"buildora-inner-hero buildora-services-page-hero","backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull buildora-inner-hero buildora-services-page-hero has-surface-background-color has-background">
	<!-- wp:group {"align":"wide","className":"buildora-inner-hero__inner","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide buildora-inner-hero__inner">
		<!-- wp:html -->
		<nav class="buildora-breadcrumb" aria-label="<?php echo esc_attr_x( 'Breadcrumb', 'navigation landmark', 'lexora' ); ?>">
			<a href="<?php echo esc_url( $lexora_home_url ); ?>"><?php esc_html_e( 'Home', 'lexora' ); ?></a>
			<span aria-hidden="true">/</span>
			<span aria-current="page"><?php esc_html_e( 'Practice Areas', 'lexora' ); ?></span>
		</nav>
		<!-- /wp:html -->

		<!-- wp:columns {"verticalAlignment":"bottom","className":"buildora-inner-hero__grid"} -->
		<div class="wp-block-columns are-vertically-aligned-bottom buildora-inner-hero__grid">
			<!-- wp:column {"verticalAlignment":"bottom","width":"64%","className":"buildora-inner-hero__copy"} -->
			<div class="wp-block-column is-vertically-aligned-bottom buildora-inner-hero__copy" style="flex-basis:64%">
				<!-- wp:paragraph {"className":"buildora-inner-hero__eyebrow"} -->
				<p class="buildora-inner-hero__eyebrow"><?php esc_html_e( 'Focused legal counsel', 'lexora' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":1,"className":"buildora-inner-hero__title"} -->
				<h1 class="wp-block-heading buildora-inner-hero__title"><?php esc_html_e( 'Experience where the details matter most.', 'lexora' ); ?></h1>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"className":"buildora-inner-hero__lead","textColor":"muted","fontSize":"md"} -->
				<p class="buildora-inner-hero__lead has-muted-color has-text-color has-md-font-size"><?php esc_html_e( 'Lexora advises individuals, families and businesses across a focused range of matters, combining careful analysis with practical recommendations and clear next steps.', 'lexora' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"bottom","width":"36%","className":"buildora-services-page-hero__summary"} -->
			<div class="wp-block-column is-vertically-aligned-bottom buildora-services-page-hero__summary" style="flex-basis:36%">
				<!-- wp:group {"className":"buildora-services-page-hero__panel","backgroundColor":"ink","textColor":"paper","layout":{"type":"default"}} -->
				<div class="wp-block-group buildora-services-page-hero__panel has-paper-color has-ink-background-color has-text-color has-background">
					<!-- wp:paragraph {"className":"buildora-services-page-hero__panel-label"} -->
					<p class="buildora-services-page-hero__panel-label"><?php esc_html_e( 'Browse by matter', 'lexora' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:list {"className":"buildora-services-page-hero__panel-list"} -->
					<ul class="wp-block-list buildora-services-page-hero__panel-list">
						<li><a href="#business-law"><?php esc_html_e( 'Business law', 'lexora' ); ?><span aria-hidden="true">01</span></a></li>
						<li><a href="#disputes"><?php esc_html_e( 'Dispute resolution', 'lexora' ); ?><span aria-hidden="true">02</span></a></li>
						<li><a href="#family-property"><?php esc_html_e( 'Family & property', 'lexora' ); ?><span aria-hidden="true">03</span></a></li>
					</ul>
					<!-- /wp:list -->

					<!-- wp:paragraph {"className":"buildora-services-page-hero__panel-note"} -->
					<p class="buildora-services-page-hero__panel-note"><?php esc_html_e( 'Not sure where your matter fits? Start with a confidential consultation.', 'lexora' ); ?></p>
					<!-- /wp:paragraph -->
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
