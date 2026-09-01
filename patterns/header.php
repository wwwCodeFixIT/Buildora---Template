<?php
/**
 * Title: Site Header
 * Slug: lexora/site-header
 * Categories: lexora, header
 * Block Types: core/template-part/header
 * Keywords: header, navigation, legal, law firm
 * Description: Reusable sticky site header for legal practices with desktop and no-JS mobile navigation.
 */
?>
<!-- wp:group {"align":"full","className":"buildora-header","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull buildora-header">
	<!-- wp:group {"align":"wide","className":"buildora-header__inner","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide buildora-header__inner">
		<!-- wp:group {"className":"buildora-header__brand","layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group buildora-header__brand">
			<!-- wp:site-title {"level":0,"style":{"typography":{"fontWeight":"700","fontSize":"1.25rem","letterSpacing":"-0.02em"}}} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"buildora-header__actions","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
		<div class="wp-block-group buildora-header__actions">
			<!-- wp:navigation {"overlayMenu":"never","className":"buildora-primary-nav","layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"blockGap":"1.35rem"}}} -->
				<!-- wp:navigation-link {"label":"Home","url":"<?php echo esc_url( home_url( '/' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->
				<!-- wp:navigation-link {"label":"Practice Areas","url":"<?php echo esc_url( home_url( '/practice-areas/' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->
				<!-- wp:navigation-link {"label":"Attorneys","url":"<?php echo esc_url( home_url( '/attorneys/' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->
				<!-- wp:navigation-link {"label":"Results","url":"<?php echo esc_url( home_url( '/results/' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->
				<!-- wp:navigation-link {"label":"About","url":"<?php echo esc_url( home_url( '/about/' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->
				<!-- wp:navigation-link {"label":"Contact","url":"<?php echo esc_url( home_url( '/contact/' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->
			<!-- /wp:navigation -->

			<!-- wp:buttons {"className":"buildora-header__cta"} -->
			<div class="wp-block-buttons buildora-header__cta">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/#consultation' ) ); ?>"><?php esc_html_e( 'Request a consultation', 'lexora' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- wp:html -->
			<details class="buildora-mobile-menu">
				<summary class="buildora-mobile-menu__toggle">
					<span class="screen-reader-text"><?php esc_html_e( 'Navigation menu', 'lexora' ); ?></span>
					<span class="buildora-mobile-menu__icon" aria-hidden="true"></span>
				</summary>
				<div class="buildora-mobile-menu__panel">
					<nav class="buildora-mobile-menu__nav" aria-label="<?php echo esc_attr_x( 'Mobile navigation', 'navigation landmark', 'lexora' ); ?>">
						<ul>
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'lexora' ); ?></a></li>
							<li><a href="<?php echo esc_url( home_url( '/practice-areas/' ) ); ?>"><?php esc_html_e( 'Practice Areas', 'lexora' ); ?></a></li>
							<li><a href="<?php echo esc_url( home_url( '/attorneys/' ) ); ?>"><?php esc_html_e( 'Attorneys', 'lexora' ); ?></a></li>
							<li><a href="<?php echo esc_url( home_url( '/results/' ) ); ?>"><?php esc_html_e( 'Results', 'lexora' ); ?></a></li>
							<li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php esc_html_e( 'About', 'lexora' ); ?></a></li>
							<li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Contact', 'lexora' ); ?></a></li>
						</ul>
						<a class="buildora-mobile-menu__cta" href="<?php echo esc_url( home_url( '/contact/#consultation' ) ); ?>"><?php esc_html_e( 'Request a consultation', 'lexora' ); ?></a>
					</nav>
				</div>
			</details>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
