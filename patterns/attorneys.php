<?php
/**
 * Title: Attorneys
 * Slug: lexora/attorneys
 * Categories: lexora, team
 * Keywords: attorneys, lawyers, team, legal
 * Viewport Width: 1440
 * Description: Premium attorney profile grid for legal practices.
 */
?>
<!-- wp:group {"anchor":"attorneys","align":"full","className":"lexora-attorneys","layout":{"type":"constrained"}} -->
<div id="attorneys" class="wp-block-group alignfull lexora-attorneys">
	<!-- wp:group {"align":"wide","className":"lexora-attorneys__intro","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide lexora-attorneys__intro">
		<!-- wp:paragraph {"className":"lexora-section-kicker"} -->
		<p class="lexora-section-kicker"><?php esc_html_e( 'Our attorneys', 'lexora' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:columns {"verticalAlignment":"bottom","className":"lexora-section-heading"} -->
		<div class="wp-block-columns are-vertically-aligned-bottom lexora-section-heading">
			<!-- wp:column {"verticalAlignment":"bottom","width":"62%"} -->
			<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:62%">
				<!-- wp:heading {"fontSize":"xl"} -->
				<h2 class="wp-block-heading has-xl-font-size"><?php esc_html_e( 'Experienced counsel. Personal attention.', 'lexora' ); ?></h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"bottom","width":"38%"} -->
			<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:38%">
				<!-- wp:paragraph {"textColor":"muted"} -->
				<p class="has-muted-color has-text-color"><?php esc_html_e( 'Meet a team built around clear advice, disciplined preparation and direct client communication.', 'lexora' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","className":"lexora-attorneys__grid"} -->
	<div class="wp-block-columns alignwide lexora-attorneys__grid">
		<!-- wp:column {"className":"lexora-attorney-card"} -->
		<div class="wp-block-column lexora-attorney-card">
			<!-- wp:group {"className":"lexora-attorney-card__portrait","backgroundColor":"ink","textColor":"paper","layout":{"type":"constrained"}} -->
			<div class="wp-block-group lexora-attorney-card__portrait has-paper-color has-ink-background-color has-text-color has-background"><!-- wp:paragraph {"className":"lexora-attorney-card__initials"} --><p class="lexora-attorney-card__initials" aria-hidden="true">EM</p><!-- /wp:paragraph --></div>
			<!-- /wp:group -->
			<!-- wp:paragraph {"className":"lexora-attorney-card__role"} --><p class="lexora-attorney-card__role"><?php esc_html_e( 'Managing Partner', 'lexora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"className":"lexora-attorney-card__name"} --><h3 class="wp-block-heading lexora-attorney-card__name"><?php esc_html_e( 'Eleanor Mercer', 'lexora' ); ?></h3><!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted","className":"lexora-attorney-card__focus"} --><p class="lexora-attorney-card__focus has-muted-color has-text-color"><?php esc_html_e( 'Commercial disputes • Corporate advisory', 'lexora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"lexora-attorney-card__link"} --><p class="lexora-attorney-card__link"><a href="<?php echo esc_url( home_url( '/attorneys/' ) ); ?>"><?php esc_html_e( 'View profile', 'lexora' ); ?> <span aria-hidden="true">↗</span></a></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"lexora-attorney-card"} -->
		<div class="wp-block-column lexora-attorney-card">
			<!-- wp:group {"className":"lexora-attorney-card__portrait lexora-attorney-card__portrait--accent","backgroundColor":"brand","textColor":"ink","layout":{"type":"constrained"}} -->
			<div class="wp-block-group lexora-attorney-card__portrait lexora-attorney-card__portrait--accent has-ink-color has-brand-background-color has-text-color has-background"><!-- wp:paragraph {"className":"lexora-attorney-card__initials"} --><p class="lexora-attorney-card__initials" aria-hidden="true">DM</p><!-- /wp:paragraph --></div>
			<!-- /wp:group -->
			<!-- wp:paragraph {"className":"lexora-attorney-card__role"} --><p class="lexora-attorney-card__role"><?php esc_html_e( 'Senior Associate', 'lexora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"className":"lexora-attorney-card__name"} --><h3 class="wp-block-heading lexora-attorney-card__name"><?php esc_html_e( 'Daniel Moore', 'lexora' ); ?></h3><!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted","className":"lexora-attorney-card__focus"} --><p class="lexora-attorney-card__focus has-muted-color has-text-color"><?php esc_html_e( 'Employment • Contract disputes', 'lexora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"lexora-attorney-card__link"} --><p class="lexora-attorney-card__link"><a href="<?php echo esc_url( home_url( '/attorneys/' ) ); ?>"><?php esc_html_e( 'View profile', 'lexora' ); ?> <span aria-hidden="true">↗</span></a></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"lexora-attorney-card"} -->
		<div class="wp-block-column lexora-attorney-card">
			<!-- wp:group {"className":"lexora-attorney-card__portrait","backgroundColor":"ink","textColor":"paper","layout":{"type":"constrained"}} -->
			<div class="wp-block-group lexora-attorney-card__portrait has-paper-color has-ink-background-color has-text-color has-background"><!-- wp:paragraph {"className":"lexora-attorney-card__initials"} --><p class="lexora-attorney-card__initials" aria-hidden="true">SC</p><!-- /wp:paragraph --></div>
			<!-- /wp:group -->
			<!-- wp:paragraph {"className":"lexora-attorney-card__role"} --><p class="lexora-attorney-card__role"><?php esc_html_e( 'Associate', 'lexora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"className":"lexora-attorney-card__name"} --><h3 class="wp-block-heading lexora-attorney-card__name"><?php esc_html_e( 'Sophia Carter', 'lexora' ); ?></h3><!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted","className":"lexora-attorney-card__focus"} --><p class="lexora-attorney-card__focus has-muted-color has-text-color"><?php esc_html_e( 'Property • Private client', 'lexora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"lexora-attorney-card__link"} --><p class="lexora-attorney-card__link"><a href="<?php echo esc_url( home_url( '/attorneys/' ) ); ?>"><?php esc_html_e( 'View profile', 'lexora' ); ?> <span aria-hidden="true">↗</span></a></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
