<?php
/**
 * Title: Reference Practice Areas Page
 * Slug: lexora/reference-practice-areas-page
 * Categories: lexora, services
 * Keywords: practice areas, legal services, reference
 * Viewport Width: 1440
 * Description: Practice Areas page matching the Lexora marketplace reference layout.
 */
?>
<!-- wp:group {"align":"full","className":"lx-ref-page lx-ref-practice","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull lx-ref-page lx-ref-practice">
	<!-- wp:group {"align":"full","className":"lx-ref-inner-hero","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull lx-ref-inner-hero">
		<!-- wp:columns {"align":"wide","verticalAlignment":"stretch","className":"lx-ref-inner-hero__grid"} -->
		<div class="wp-block-columns alignwide are-vertically-aligned-stretch lx-ref-inner-hero__grid">
			<!-- wp:column {"verticalAlignment":"center","width":"52%","className":"lx-ref-inner-hero__copy"} -->
			<div class="wp-block-column is-vertically-aligned-center lx-ref-inner-hero__copy" style="flex-basis:52%">
				<!-- wp:paragraph {"className":"lx-ref-kicker"} --><p class="lx-ref-kicker"><?php esc_html_e( 'Practice Areas', 'lexora' ); ?></p><!-- /wp:paragraph -->
				<!-- wp:heading {"level":1,"className":"lx-ref-inner-hero__title"} --><h1 class="wp-block-heading lx-ref-inner-hero__title"><?php esc_html_e( 'Focused Legal Solutions. Proven Results.', 'lexora' ); ?></h1><!-- /wp:heading -->
				<!-- wp:paragraph {"className":"lx-ref-inner-hero__lead"} --><p class="lx-ref-inner-hero__lead"><?php esc_html_e( 'At Lexora Law Group, we provide strategic legal counsel across a wide range of practice areas to help individuals and organizations navigate complex legal challenges.', 'lexora' ); ?></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"verticalAlignment":"stretch","width":"48%","className":"lx-ref-inner-hero__media"} -->
			<div class="wp-block-column is-vertically-aligned-stretch lx-ref-inner-hero__media" style="flex-basis:48%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} --><figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-legal.svg' ) ); ?>" alt="" /></figure><!-- /wp:image --></div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","className":"lx-ref-practice__body","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull lx-ref-practice__body">
		<!-- wp:html --><div class="lx-ref-centered-rule alignwide" aria-hidden="true"><span></span><i></i><span></span></div><!-- /wp:html -->
		<!-- wp:group {"align":"wide","className":"lx-ref-practice-grid","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide lx-ref-practice-grid">
			<?php
			$lexora_areas = array(
				array( 'icon' => '🏛', 'title' => 'Business Law', 'copy' => 'Comprehensive legal guidance for business formation, contracts, and corporate governance.', 'anchor' => 'business-law' ),
				array( 'icon' => '👥', 'title' => 'Family Law', 'copy' => 'Compassionate representation for divorce, child custody, support, and other family matters.', 'anchor' => 'family-property' ),
				array( 'icon' => '▤', 'title' => 'Estate Planning', 'copy' => 'Protect your legacy with tailored estate plans, trusts, and asset protection strategies.', 'anchor' => 'family-property' ),
				array( 'icon' => '⚖', 'title' => 'Litigation', 'copy' => 'Aggressive advocacy in disputes, lawsuits, and trials in state and federal courts.', 'anchor' => 'disputes' ),
				array( 'icon' => '◈', 'title' => 'Personal Injury', 'copy' => 'Fighting for the compensation you deserve after accidents and serious injuries.', 'anchor' => 'disputes' ),
				array( 'icon' => '▣', 'title' => 'Employment Law', 'copy' => 'Helping employers and employees resolve workplace issues and disputes.', 'anchor' => 'business-law' ),
			);
			foreach ( $lexora_areas as $area ) :
			?>
			<article class="lx-ref-practice-card">
				<div class="lx-ref-practice-card__icon" aria-hidden="true"><?php echo esc_html( $area['icon'] ); ?></div>
				<h2><?php echo esc_html( $area['title'] ); ?></h2>
				<p><?php echo esc_html( $area['copy'] ); ?></p>
				<a href="<?php echo esc_url( home_url( '/practice-areas/#' . $area['anchor'] ) ); ?>"><?php esc_html_e( 'Learn More', 'lexora' ); ?> <span aria-hidden="true">→</span></a>
			</article>
			<?php endforeach; ?>
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"align":"wide","className":"lx-ref-bottom-cta","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
		<div class="wp-block-group alignwide lx-ref-bottom-cta"><!-- wp:html --><div class="lx-ref-bottom-cta__icon" aria-hidden="true">⚖</div><!-- /wp:html --><!-- wp:paragraph {"className":"lx-ref-bottom-cta__copy"} --><p class="lx-ref-bottom-cta__copy"><?php esc_html_e( 'Whatever your legal needs, our experienced attorneys are here to provide clear guidance and effective representation.', 'lexora' ); ?></p><!-- /wp:paragraph --><!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} --><div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/#consultation' ) ); ?>"><?php esc_html_e( 'Schedule a Consultation', 'lexora' ); ?></a></div><!-- /wp:button --></div><!-- /wp:buttons --></div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
