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
<!-- wp:group {"align":"full","className":"buildora-header lexora-header","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull buildora-header lexora-header">
	<!-- wp:group {"align":"wide","className":"buildora-header__inner lexora-header__inner","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide buildora-header__inner lexora-header__inner">
		<!-- wp:html -->
		<a class="lexora-header__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php echo esc_attr__( 'Lexora home', 'lexora' ); ?>">
			<img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/lexora-shield.svg' ) ); ?>" alt="" />
			<span><?php bloginfo( 'name' ); ?></span>
		</a>
		<!-- /wp:html -->

		<!-- wp:group {"className":"buildora-header__actions lexora-header__actions","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
		<div class="wp-block-group buildora-header__actions lexora-header__actions">
			<!-- wp:navigation {"overlayMenu":"never","className":"buildora-primary-nav lexora-primary-nav","layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"blockGap":"1.65rem"}}} -->
				<!-- wp:navigation-link {"label":"Home","url":"<?php echo esc_url( home_url( '/' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->
				<!-- wp:navigation-link {"label":"About","url":"<?php echo esc_url( home_url( '/about/' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->
				<!-- wp:navigation-link {"label":"Practice Areas","url":"<?php echo esc_url( home_url( '/practice-areas/' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->
				<!-- wp:navigation-link {"label":"Attorneys","url":"<?php echo esc_url( home_url( '/attorneys/' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->
				<!-- wp:navigation-link {"label":"Blog","url":"#","kind":"custom","isTopLevelLink":true} /-->
				<!-- wp:navigation-link {"label":"Contact","url":"<?php echo esc_url( home_url( '/contact/' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->
			<!-- /wp:navigation -->

			<!-- wp:buttons {"className":"buildora-header__cta lexora-header__cta"} -->
			<div class="wp-block-buttons buildora-header__cta lexora-header__cta">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/#consultation' ) ); ?>"><?php esc_html_e( 'Free consultation', 'lexora' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- wp:html -->
			<details class="buildora-mobile-menu">
				<summary class="buildora-mobile-menu__toggle"><span class="screen-reader-text"><?php esc_html_e( 'Navigation menu', 'lexora' ); ?></span><span class="buildora-mobile-menu__icon" aria-hidden="true"></span></summary>
				<div class="buildora-mobile-menu__panel">
					<nav class="buildora-mobile-menu__nav" aria-label="<?php echo esc_attr_x( 'Mobile navigation', 'navigation landmark', 'lexora' ); ?>">
						<ul>
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'lexora' ); ?></a></li>
							<li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php esc_html_e( 'About', 'lexora' ); ?></a></li>
							<li><a href="<?php echo esc_url( home_url( '/practice-areas/' ) ); ?>"><?php esc_html_e( 'Practice Areas', 'lexora' ); ?></a></li>
							<li><a href="<?php echo esc_url( home_url( '/attorneys/' ) ); ?>"><?php esc_html_e( 'Attorneys', 'lexora' ); ?></a></li>
							<li><a href="#"><?php esc_html_e( 'Blog', 'lexora' ); ?></a></li>
							<li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Contact', 'lexora' ); ?></a></li>
						</ul>
						<a class="buildora-mobile-menu__cta" href="<?php echo esc_url( home_url( '/contact/#consultation' ) ); ?>"><?php esc_html_e( 'Free consultation', 'lexora' ); ?></a>
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
