<?php
/**
 * Title: Attorney Profile
 * Slug: lexora/attorney-profile
 * Categories: lexora, team
 * Keywords: attorney, lawyer, profile, bio
 * Viewport Width: 1440
 * Description: Reusable attorney profile layout driven by the current Page title, excerpt, featured image and content.
 */
?>
<!-- wp:group {"align":"full","className":"lexora-profile","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull lexora-profile">
	<!-- wp:group {"align":"wide","className":"lexora-profile__inner","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide lexora-profile__inner">
		<!-- wp:html -->
		<nav class="buildora-breadcrumb" aria-label="<?php echo esc_attr_x( 'Breadcrumb', 'navigation landmark', 'lexora' ); ?>">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'lexora' ); ?></a>
			<span aria-hidden="true">/</span>
			<a href="<?php echo esc_url( home_url( '/attorneys/' ) ); ?>"><?php esc_html_e( 'Attorneys', 'lexora' ); ?></a>
			<span aria-hidden="true">/</span>
			<span aria-current="page"><?php esc_html_e( 'Attorney profile', 'lexora' ); ?></span>
		</nav>
		<!-- /wp:html -->

		<!-- wp:columns {"verticalAlignment":"stretch","className":"lexora-profile__hero"} -->
		<div class="wp-block-columns are-vertically-aligned-stretch lexora-profile__hero">
			<!-- wp:column {"verticalAlignment":"stretch","width":"38%"} -->
			<div class="wp-block-column is-vertically-aligned-stretch" style="flex-basis:38%">
				<!-- wp:group {"className":"lexora-profile__portrait","backgroundColor":"ink","textColor":"paper","layout":{"type":"default"}} -->
				<div class="wp-block-group lexora-profile__portrait has-paper-color has-ink-background-color has-text-color has-background">
					<!-- wp:paragraph {"className":"lexora-profile__initials"} --><p class="lexora-profile__initials" aria-hidden="true">L</p><!-- /wp:paragraph -->
					<!-- wp:post-featured-image {"sizeSlug":"large","className":"lexora-profile__featured-image"} /-->
					<!-- wp:paragraph {"className":"lexora-profile__portrait-note"} --><p class="lexora-profile__portrait-note"><?php esc_html_e( 'Attorney profile', 'lexora' ); ?></p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"62%","className":"lexora-profile__intro"} -->
			<div class="wp-block-column is-vertically-aligned-center lexora-profile__intro" style="flex-basis:62%">
				<!-- wp:paragraph {"className":"lexora-section-kicker"} --><p class="lexora-section-kicker"><?php esc_html_e( 'Attorney profile', 'lexora' ); ?></p><!-- /wp:paragraph -->
				<!-- wp:post-title {"level":1,"className":"lexora-profile__name"} /-->
				<!-- wp:post-excerpt {"moreText":"","className":"lexora-profile__lead","textColor":"muted","fontSize":"md"} /-->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/#consultation' ) ); ?>"><?php esc_html_e( 'Request a consultation', 'lexora' ); ?></a></div><!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:columns {"className":"lexora-profile__body"} -->
		<div class="wp-block-columns lexora-profile__body">
			<!-- wp:column {"width":"68%"} -->
			<div class="wp-block-column" style="flex-basis:68%">
				<!-- wp:post-content {"className":"lexora-profile__content","layout":{"type":"constrained"}} /-->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"32%"} -->
			<div class="wp-block-column" style="flex-basis:32%">
				<!-- wp:group {"className":"lexora-profile__sidebar","backgroundColor":"surface","layout":{"type":"default"}} -->
				<div class="wp-block-group lexora-profile__sidebar has-surface-background-color has-background">
					<!-- wp:paragraph {"className":"lexora-section-kicker"} --><p class="lexora-section-kicker"><?php esc_html_e( 'Start a conversation', 'lexora' ); ?></p><!-- /wp:paragraph -->
					<!-- wp:heading {"level":2} --><h2 class="wp-block-heading"><?php esc_html_e( 'Need advice on a legal matter?', 'lexora' ); ?></h2><!-- /wp:heading -->
					<!-- wp:paragraph {"textColor":"muted"} --><p class="has-muted-color has-text-color"><?php esc_html_e( 'Share the essentials first. The firm can then confirm whether it is able to consider the matter and explain the next step.', 'lexora' ); ?></p><!-- /wp:paragraph -->
					<!-- wp:buttons -->
					<div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/#consultation' ) ); ?>"><?php esc_html_e( 'Request a consultation', 'lexora' ); ?></a></div><!-- /wp:button --></div>
					<!-- /wp:buttons -->
					<!-- wp:paragraph {"fontSize":"xs","textColor":"muted"} --><p class="has-muted-color has-text-color has-xs-font-size"><?php esc_html_e( 'Submitting an enquiry does not create a lawyer-client relationship.', 'lexora' ); ?></p><!-- /wp:paragraph -->
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
