<?php
/**
 * Title: Contact Page Hero
 * Slug: buildora/contact-page-hero
 * Categories: buildora, banner
 * Keywords: contact, quote, project, brief
 * Description: Inner-page hero for starting a Buildora project enquiry.
 */

$buildora_home_url = home_url( '/' );
?>
<!-- wp:group {"align":"full","className":"buildora-inner-hero buildora-contact-hero","backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull buildora-inner-hero buildora-contact-hero has-surface-background-color has-background">
	<!-- wp:group {"align":"wide","className":"buildora-inner-hero__inner","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide buildora-inner-hero__inner">
		<!-- wp:html -->
		<nav class="buildora-breadcrumb" aria-label="<?php echo esc_attr_x( 'Breadcrumb', 'navigation landmark', 'buildora' ); ?>">
			<a href="<?php echo esc_url( $buildora_home_url ); ?>"><?php esc_html_e( 'Home', 'buildora' ); ?></a>
			<span aria-hidden="true">/</span>
			<span aria-current="page"><?php esc_html_e( 'Contact', 'buildora' ); ?></span>
		</nav>
		<!-- /wp:html -->

		<!-- wp:columns {"verticalAlignment":"bottom","className":"buildora-inner-hero__grid"} -->
		<div class="wp-block-columns are-vertically-aligned-bottom buildora-inner-hero__grid">
			<!-- wp:column {"verticalAlignment":"bottom","width":"64%","className":"buildora-inner-hero__copy"} -->
			<div class="wp-block-column is-vertically-aligned-bottom buildora-inner-hero__copy" style="flex-basis:64%">
				<!-- wp:paragraph {"className":"buildora-inner-hero__eyebrow"} -->
				<p class="buildora-inner-hero__eyebrow"><?php esc_html_e( 'Start a project', 'buildora' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":1,"className":"buildora-inner-hero__title"} -->
				<h1 class="wp-block-heading buildora-inner-hero__title"><?php esc_html_e( 'Tell us what needs to happen.', 'buildora' ); ?></h1>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"className":"buildora-inner-hero__lead","textColor":"muted","fontSize":"md"} -->
				<p class="buildora-inner-hero__lead has-muted-color has-text-color has-md-font-size"><?php esc_html_e( 'Share the essentials and we will come back with a clear next step. No vague sales process, no pressure and no guessing what happens after you enquire.', 'buildora' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"bottom","width":"36%","className":"buildora-contact-hero__summary"} -->
			<div class="wp-block-column is-vertically-aligned-bottom buildora-contact-hero__summary" style="flex-basis:36%">
				<!-- wp:group {"className":"buildora-contact-hero__panel","backgroundColor":"ink","textColor":"paper","layout":{"type":"default"}} -->
				<div class="wp-block-group buildora-contact-hero__panel has-paper-color has-ink-background-color has-text-color has-background">
					<!-- wp:paragraph {"className":"buildora-contact-hero__panel-label"} -->
					<p class="buildora-contact-hero__panel-label"><?php esc_html_e( 'Useful to include', 'buildora' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:html -->
					<div class="buildora-contact-hero__checklist">
						<div><strong><?php esc_html_e( 'Type of work', 'buildora' ); ?></strong><span>01</span></div>
						<div><strong><?php esc_html_e( 'Location or postcode', 'buildora' ); ?></strong><span>02</span></div>
						<div><strong><?php esc_html_e( 'Target timing', 'buildora' ); ?></strong><span>03</span></div>
					</div>
					<!-- /wp:html -->

					<!-- wp:paragraph {"className":"buildora-contact-hero__panel-note"} -->
					<p class="buildora-contact-hero__panel-note"><?php esc_html_e( 'Plans, drawings and detailed specifications can follow after the first conversation.', 'buildora' ); ?></p>
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
