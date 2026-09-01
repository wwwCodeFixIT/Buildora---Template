<?php
/**
 * Title: Attorney Profile
 * Slug: lexora/attorney-profile
 * Categories: lexora, team
 * Keywords: attorney, lawyer, profile, bio
 * Viewport Width: 1440
 * Description: Full attorney profile layout with credentials, experience and representative matters.
 */

$lexora_home_url = home_url( '/' );
?>
<!-- wp:group {"align":"full","className":"lexora-profile","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull lexora-profile">
	<!-- wp:group {"align":"wide","className":"lexora-profile__inner","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide lexora-profile__inner">
		<!-- wp:html -->
		<nav class="buildora-breadcrumb" aria-label="<?php echo esc_attr_x( 'Breadcrumb', 'navigation landmark', 'lexora' ); ?>">
			<a href="<?php echo esc_url( $lexora_home_url ); ?>"><?php esc_html_e( 'Home', 'lexora' ); ?></a>
			<span aria-hidden="true">/</span>
			<a href="<?php echo esc_url( home_url( '/attorneys/' ) ); ?>"><?php esc_html_e( 'Attorneys', 'lexora' ); ?></a>
			<span aria-hidden="true">/</span>
			<span aria-current="page"><?php esc_html_e( 'Eleanor Mercer', 'lexora' ); ?></span>
		</nav>
		<!-- /wp:html -->

		<!-- wp:columns {"verticalAlignment":"stretch","className":"lexora-profile__hero"} -->
		<div class="wp-block-columns are-vertically-aligned-stretch lexora-profile__hero">
			<!-- wp:column {"verticalAlignment":"stretch","width":"38%"} -->
			<div class="wp-block-column is-vertically-aligned-stretch" style="flex-basis:38%">
				<!-- wp:group {"className":"lexora-profile__portrait","backgroundColor":"ink","textColor":"paper","layout":{"type":"constrained"}} -->
				<div class="wp-block-group lexora-profile__portrait has-paper-color has-ink-background-color has-text-color has-background">
					<!-- wp:paragraph {"className":"lexora-profile__initials"} --><p class="lexora-profile__initials" aria-hidden="true">EM</p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"lexora-profile__portrait-note"} --><p class="lexora-profile__portrait-note"><?php esc_html_e( 'Managing Partner', 'lexora' ); ?></p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"62%","className":"lexora-profile__intro"} -->
			<div class="wp-block-column is-vertically-aligned-center lexora-profile__intro" style="flex-basis:62%">
				<!-- wp:paragraph {"className":"lexora-section-kicker"} --><p class="lexora-section-kicker"><?php esc_html_e( 'Commercial disputes · Corporate advisory', 'lexora' ); ?></p><!-- /wp:paragraph -->
				<!-- wp:heading {"level":1,"className":"lexora-profile__name"} --><h1 class="wp-block-heading lexora-profile__name"><?php esc_html_e( 'Eleanor Mercer', 'lexora' ); ?></h1><!-- /wp:heading -->
				<!-- wp:paragraph {"fontSize":"md","textColor":"muted","className":"lexora-profile__lead"} --><p class="lexora-profile__lead has-muted-color has-text-color has-md-font-size"><?php esc_html_e( 'Eleanor advises businesses and senior decision-makers on high-value disputes, strategic contracts and risk. Her work combines rigorous preparation with practical commercial judgment.', 'lexora' ); ?></p><!-- /wp:paragraph -->

				<!-- wp:group {"className":"lexora-profile__facts","layout":{"type":"grid","columnCount":3,"minimumColumnWidth":null}} -->
				<div class="wp-block-group lexora-profile__facts">
					<!-- wp:group {"className":"lexora-profile__fact","layout":{"type":"default"}} --><div class="wp-block-group lexora-profile__fact"><!-- wp:paragraph --><p><strong>18+</strong></p><!-- /wp:paragraph --><!-- wp:paragraph --><p><?php esc_html_e( 'Years in practice', 'lexora' ); ?></p><!-- /wp:paragraph --></div><!-- /wp:group -->
					<!-- wp:group {"className":"lexora-profile__fact","layout":{"type":"default"}} --><div class="wp-block-group lexora-profile__fact"><!-- wp:paragraph --><p><strong>250+</strong></p><!-- /wp:paragraph --><!-- wp:paragraph --><p><?php esc_html_e( 'Matters led', 'lexora' ); ?></p><!-- /wp:paragraph --></div><!-- /wp:group -->
					<!-- wp:group {"className":"lexora-profile__fact","layout":{"type":"default"}} --><div class="wp-block-group lexora-profile__fact"><!-- wp:paragraph --><p><strong>3</strong></p><!-- /wp:paragraph --><!-- wp:paragraph --><p><?php esc_html_e( 'Core practice areas', 'lexora' ); ?></p><!-- /wp:paragraph --></div><!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/#consultation' ) ); ?>"><?php esc_html_e( 'Request a consultation', 'lexora' ); ?></a></div><!-- /wp:button --></div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:columns {"className":"lexora-profile__body"} -->
		<div class="wp-block-columns lexora-profile__body">
			<!-- wp:column {"width":"62%"} -->
			<div class="wp-block-column" style="flex-basis:62%">
				<!-- wp:paragraph {"className":"lexora-section-kicker"} --><p class="lexora-section-kicker"><?php esc_html_e( 'Approach', 'lexora' ); ?></p><!-- /wp:paragraph -->
				<!-- wp:heading {"level":2} --><h2 class="wp-block-heading"><?php esc_html_e( 'Prepared for complexity. Focused on the decision in front of you.', 'lexora' ); ?></h2><!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"muted"} --><p class="has-muted-color has-text-color"><?php esc_html_e( 'Clients come to Eleanor when a legal problem carries commercial consequences. She works closely with management teams to identify the leverage points, preserve options and decide where negotiation should end and formal action should begin.', 'lexora' ); ?></p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"textColor":"muted"} --><p class="has-muted-color has-text-color"><?php esc_html_e( 'Her advice is intentionally direct: what matters, what can wait, what the evidence supports and what the next decision will cost in time, money and attention.', 'lexora' ); ?></p><!-- /wp:paragraph -->

				<!-- wp:heading {"level":3} --><h3 class="wp-block-heading"><?php esc_html_e( 'Representative matters', 'lexora' ); ?></h3><!-- /wp:heading -->
				<!-- wp:list {"className":"lexora-profile__matter-list"} -->
				<ul class="wp-block-list lexora-profile__matter-list">
					<li><?php esc_html_e( 'Advising a founder-led business through a complex shareholder dispute and negotiated exit.', 'lexora' ); ?></li>
					<li><?php esc_html_e( 'Defending a services company against a substantial breach-of-contract claim.', 'lexora' ); ?></li>
					<li><?php esc_html_e( 'Structuring and negotiating strategic supplier agreements for a growing professional-services group.', 'lexora' ); ?></li>
				</ul>
				<!-- /wp:list -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"38%"} -->
			<div class="wp-block-column" style="flex-basis:38%">
				<!-- wp:group {"className":"lexora-profile__sidebar","backgroundColor":"surface","layout":{"type":"default"}} -->
				<div class="wp-block-group lexora-profile__sidebar has-surface-background-color has-background">
					<!-- wp:paragraph {"className":"lexora-section-kicker"} --><p class="lexora-section-kicker"><?php esc_html_e( 'Credentials', 'lexora' ); ?></p><!-- /wp:paragraph -->
					<!-- wp:heading {"level":3} --><h3 class="wp-block-heading"><?php esc_html_e( 'Admissions & experience', 'lexora' ); ?></h3><!-- /wp:heading -->
					<!-- wp:list {"className":"lexora-profile__credential-list"} -->
					<ul class="wp-block-list lexora-profile__credential-list">
						<li><?php esc_html_e( 'Admitted to practice, 2008', 'lexora' ); ?></li>
						<li><?php esc_html_e( 'Commercial Litigation Association', 'lexora' ); ?></li>
						<li><?php esc_html_e( 'LL.M., Commercial Law', 'lexora' ); ?></li>
						<li><?php esc_html_e( 'B.A. (Hons), Law', 'lexora' ); ?></li>
					</ul>
					<!-- /wp:list -->

					<!-- wp:paragraph {"className":"lexora-profile__sidebar-label"} --><p class="lexora-profile__sidebar-label"><strong><?php esc_html_e( 'Practice focus', 'lexora' ); ?></strong></p><!-- /wp:paragraph -->
					<!-- wp:paragraph --><p><?php esc_html_e( 'Commercial disputes, corporate advisory, contracts and strategic risk.', 'lexora' ); ?></p><!-- /wp:paragraph -->
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
