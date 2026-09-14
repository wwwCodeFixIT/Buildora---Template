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
	<!-- wp:group {"align":"full","className":"lx-ref-inner-hero","layout":{"type":"default"}} -->
	<div class="wp-block-group alignfull lx-ref-inner-hero">
		<!-- wp:columns {"verticalAlignment":"stretch","className":"lx-ref-inner-hero__grid lx-ref-frame"} -->
		<div class="wp-block-columns are-vertically-aligned-stretch lx-ref-inner-hero__grid lx-ref-frame">
			<!-- wp:column {"verticalAlignment":"center","width":"56%","className":"lx-ref-inner-hero__copy"} -->
			<div class="wp-block-column is-vertically-aligned-center lx-ref-inner-hero__copy" style="flex-basis:56%">
				<!-- wp:paragraph {"className":"lx-ref-kicker"} --><p class="lx-ref-kicker"><?php esc_html_e( 'Practice Areas', 'lexora' ); ?></p><!-- /wp:paragraph -->
				<!-- wp:heading {"level":1,"className":"lx-ref-inner-hero__title lx-ref-practice__hero-title","style":{"typography":{"fontSize":"clamp(3rem, 4.2vw, 4.6rem)"}}} --><h1 class="wp-block-heading lx-ref-inner-hero__title lx-ref-practice__hero-title" style="font-size:clamp(3rem, 4.2vw, 4.6rem)"><span><?php esc_html_e( 'Focused Legal Solutions.', 'lexora' ); ?></span><br><span><?php esc_html_e( 'Proven Results.', 'lexora' ); ?></span></h1><!-- /wp:heading -->
				<!-- wp:paragraph {"className":"lx-ref-inner-hero__lead"} --><p class="lx-ref-inner-hero__lead"><?php esc_html_e( 'At Lexora Law Group, we provide strategic legal counsel across a wide range of practice areas to help individuals and organizations navigate complex legal challenges.', 'lexora' ); ?></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"verticalAlignment":"stretch","width":"44%","className":"lx-ref-inner-hero__media"} -->
			<div class="wp-block-column is-vertically-aligned-stretch lx-ref-inner-hero__media" style="flex-basis:44%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} --><figure class="wp-block-image size-full"><img src="https://images.unsplash.com/photo-1765281723581-550d92b63591?auto=format&amp;fit=crop&amp;w=1800&amp;q=88" alt="Illuminated classical courthouse columns at night" /></figure><!-- /wp:image --></div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","className":"lx-ref-practice__body","layout":{"type":"default"}} -->
	<div class="wp-block-group alignfull lx-ref-practice__body">
		<!-- wp:html --><div class="lx-ref-centered-rule lx-ref-frame" aria-hidden="true"><span></span><i></i><span></span></div><!-- /wp:html -->
		<!-- wp:group {"className":"lx-ref-practice-grid lx-ref-frame","layout":{"type":"default"}} -->
		<div class="wp-block-group lx-ref-practice-grid lx-ref-frame">
			<?php
			$lexora_areas = array(
				array( 'icon' => 'business', 'title' => 'Business Law', 'copy' => 'Comprehensive legal guidance for business formation, contracts, and corporate governance.', 'anchor' => 'business-law' ),
				array( 'icon' => 'family', 'title' => 'Family Law', 'copy' => 'Compassionate representation for divorce, child custody, support, and other family matters.', 'anchor' => 'family-property' ),
				array( 'icon' => 'estate', 'title' => 'Estate Planning', 'copy' => 'Protect your legacy with tailored estate plans, trusts, and asset protection strategies.', 'anchor' => 'family-property' ),
				array( 'icon' => 'litigation', 'title' => 'Litigation', 'copy' => 'Aggressive advocacy in disputes, lawsuits, and trials in state and federal courts.', 'anchor' => 'disputes' ),
				array( 'icon' => 'injury', 'title' => 'Personal Injury', 'copy' => 'Fighting for the compensation you deserve after accidents and serious injuries.', 'anchor' => 'disputes' ),
				array( 'icon' => 'employment', 'title' => 'Employment Law', 'copy' => 'Helping employers and employees resolve workplace issues and disputes.', 'anchor' => 'business-law' ),
			);
			foreach ( $lexora_areas as $area ) :
			?>
			<article class="lx-ref-practice-card">
				<div class="lx-ref-practice-card__icon" aria-hidden="true">
					<?php if ( 'business' === $area['icon'] ) : ?>
						<svg width="44" height="44" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M8 18h32M11 18v18M18 18v18M30 18v18M37 18v18M7 36h34M5 41h38M10 13l14-8 14 8z"/></svg>
					<?php elseif ( 'family' === $area['icon'] ) : ?>
						<svg width="44" height="44" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><circle cx="18" cy="16" r="7"/><circle cx="31" cy="18" r="6"/><path d="M7 39c1-9 5-14 11-14s10 5 11 14M26 29c2-3 4-4 7-4 6 0 9 5 9 13"/></svg>
					<?php elseif ( 'estate' === $area['icon'] ) : ?>
						<svg width="44" height="44" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M11 5h23l5 5v31H11zM34 5v7h7M17 19h15M17 25h12M17 31h8"/><path d="M27 36l10-10 4 4-10 10-6 1z"/></svg>
					<?php elseif ( 'litigation' === $area['icon'] ) : ?>
						<svg width="44" height="44" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M24 6v34M14 11h20M8 34h32M18 40h12M14 11L7 24h14zM34 11l-7 13h14z"/></svg>
					<?php elseif ( 'injury' === $area['icon'] ) : ?>
						<svg width="44" height="44" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M24 5l14 5v11c0 10-5 17-14 22C15 38 10 31 10 21V10z"/><path d="M24 15v14M17 22h14"/></svg>
					<?php else : ?>
						<svg width="44" height="44" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><rect x="7" y="13" width="34" height="27" rx="2"/><path d="M17 13V9h14v4M7 23h34M20 23v4h8v-4"/></svg>
					<?php endif; ?>
				</div>
				<h2><?php echo esc_html( $area['title'] ); ?></h2>
				<p><?php echo esc_html( $area['copy'] ); ?></p>
				<a href="<?php echo esc_url( home_url( '/practice-areas/#' . $area['anchor'] ) ); ?>"><?php esc_html_e( 'Learn More', 'lexora' ); ?> <span aria-hidden="true">→</span></a>
			</article>
			<?php endforeach; ?>
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"lx-ref-bottom-cta lx-ref-frame","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
		<div class="wp-block-group lx-ref-bottom-cta lx-ref-frame">
			<!-- wp:html --><div class="lx-ref-bottom-cta__icon" aria-hidden="true"><svg width="48" height="48" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M24 6v34M14 11h20M8 34h32M18 40h12M14 11L7 24h14zM34 11l-7 13h14z"/></svg></div><!-- /wp:html -->
			<!-- wp:paragraph {"className":"lx-ref-bottom-cta__copy"} --><p class="lx-ref-bottom-cta__copy"><?php esc_html_e( 'Whatever your legal needs, our experienced attorneys are here to provide clear guidance and effective representation.', 'lexora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} --><div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/#consultation' ) ); ?>"><?php esc_html_e( 'Schedule a Consultation', 'lexora' ); ?></a></div><!-- /wp:button --></div><!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
