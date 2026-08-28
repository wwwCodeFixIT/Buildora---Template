<?php
/**
 * Title: Site Header
 * Slug: buildora/site-header
 * Categories: buildora, header
 * Block Types: core/template-part/header
 * Keywords: header, navigation, menu
 * Description: Reusable sticky site header with desktop and no-JS mobile navigation.
 */
?>
<!-- wp:group {"align":"full","className":"buildora-header","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull buildora-header">
	<!-- wp:group {"align":"wide","className":"buildora-header__inner","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide buildora-header__inner">
		<!-- wp:group {"className":"buildora-header__brand","layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group buildora-header__brand">
			<!-- wp:site-title {"level":0,"style":{"typography":{"fontWeight":"800","fontSize":"1.25rem","letterSpacing":"-0.035em"}}} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"buildora-header__actions","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
		<div class="wp-block-group buildora-header__actions">
			<!-- wp:navigation {"overlayMenu":"never","className":"buildora-primary-nav","layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"blockGap":"1.5rem"}}} -->
				<!-- wp:navigation-link {"label":"Home","url":"/","kind":"custom","isTopLevelLink":true} /-->
				<!-- wp:navigation-link {"label":"Services","url":"/services/","kind":"custom","isTopLevelLink":true} /-->
				<!-- wp:navigation-link {"label":"Projects","url":"/#projects","kind":"custom","isTopLevelLink":true} /-->
				<!-- wp:navigation-link {"label":"About","url":"/#about","kind":"custom","isTopLevelLink":true} /-->
				<!-- wp:navigation-link {"label":"Contact","url":"/#contact","kind":"custom","isTopLevelLink":true} /-->
			<!-- /wp:navigation -->

			<!-- wp:buttons {"className":"buildora-header__cta"} -->
			<div class="wp-block-buttons buildora-header__cta">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/#contact"><?php esc_html_e( 'Get a quote', 'buildora' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- wp:html -->
			<details class="buildora-mobile-menu">
				<summary class="buildora-mobile-menu__toggle">
					<span class="screen-reader-text"><?php esc_html_e( 'Navigation menu', 'buildora' ); ?></span>
					<span class="buildora-mobile-menu__icon" aria-hidden="true"></span>
				</summary>
				<div class="buildora-mobile-menu__panel">
					<nav class="buildora-mobile-menu__nav" aria-label="<?php echo esc_attr_x( 'Mobile navigation', 'navigation landmark', 'buildora' ); ?>">
						<ul>
							<li><a href="/"><?php esc_html_e( 'Home', 'buildora' ); ?></a></li>
							<li><a href="/services/"><?php esc_html_e( 'Services', 'buildora' ); ?></a></li>
							<li><a href="/#projects"><?php esc_html_e( 'Projects', 'buildora' ); ?></a></li>
							<li><a href="/#about"><?php esc_html_e( 'About', 'buildora' ); ?></a></li>
							<li><a href="/#contact"><?php esc_html_e( 'Contact', 'buildora' ); ?></a></li>
						</ul>
						<a class="buildora-mobile-menu__cta" href="/#contact"><?php esc_html_e( 'Get a quote', 'buildora' ); ?></a>
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
