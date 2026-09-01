<?php
/**
 * Title: Contact Page Hero
 * Slug: lexora/contact-page-hero
 * Categories: lexora, banner
 * Keywords: contact, consultation, legal, enquiry
 * Description: Inner-page hero for starting a confidential legal consultation.
 */

$lexora_home_url = home_url( '/' );
?>
<!-- wp:group {"align":"full","className":"buildora-inner-hero buildora-contact-hero","backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull buildora-inner-hero buildora-contact-hero has-surface-background-color has-background">
	<!-- wp:group {"align":"wide","className":"buildora-inner-hero__inner","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide buildora-inner-hero__inner">
		<!-- wp:html -->
		<nav class="buildora-breadcrumb" aria-label="<?php echo esc_attr_x( 'Breadcrumb', 'navigation landmark', 'lexora' ); ?>">
			<a href="<?php echo esc_url( $lexora_home_url ); ?>"><?php esc_html_e( 'Home', 'lexora' ); ?></a>
			<span aria-hidden="true">/</span>
			<span aria-current="page"><?php esc_html_e( 'Contact', 'lexora' ); ?></span>
		</nav>
		<!-- /wp:html -->

		<!-- wp:columns {"verticalAlignment":"bottom","className":"buildora-inner-hero__grid"} -->
		<div class="wp-block-columns are-vertically-aligned-bottom buildora-inner-hero__grid">
			<!-- wp:column {"verticalAlignment":"bottom","width":"64%","className":"buildora-inner-hero__copy"} -->
			<div class="wp-block-column is-vertically-aligned-bottom buildora-inner-hero__copy" style="flex-basis:64%">
				<!-- wp:paragraph {"className":"buildora-inner-hero__eyebrow"} --><p class="buildora-inner-hero__eyebrow"><?php esc_html_e( 'Confidential consultation', 'lexora' ); ?></p><!-- /wp:paragraph -->
				<!-- wp:heading {"level":1,"className":"buildora-inner-hero__title"} --><h1 class="wp-block-heading buildora-inner-hero__title"><?php esc_html_e( 'Tell us what you are facing. We will help define the next step.', 'lexora' ); ?></h1><!-- /wp:heading -->
				<!-- wp:paragraph {"className":"buildora-inner-hero__lead","textColor":"muted","fontSize":"md"} --><p class="buildora-inner-hero__lead has-muted-color has-text-color has-md-font-size"><?php esc_html_e( 'Share the essentials of your matter and our team will review whether we can help. Initial enquiries are handled discreetly and without obligation.', 'lexora' ); ?></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"bottom","width":"36%","className":"buildora-contact-hero__summary"} -->
			<div class="wp-block-column is-vertically-aligned-bottom buildora-contact-hero__summary" style="flex-basis:36%">
				<!-- wp:group {"className":"buildora-contact-hero__panel","backgroundColor":"ink","textColor":"paper","layout":{"type":"default"}} -->
				<div class="wp-block-group buildora-contact-hero__panel has-paper-color has-ink-background-color has-text-color has-background">
					<!-- wp:paragraph {"className":"buildora-contact-hero__panel-label"} --><p class="buildora-contact-hero__panel-label"><?php esc_html_e( 'Useful to include', 'lexora' ); ?></p><!-- /wp:paragraph -->
					<!-- wp:html -->
					<div class="buildora-contact-hero__checklist">
						<div><strong><?php esc_html_e( 'Type of legal matter', 'lexora' ); ?></strong><span>01</span></div>
						<div><strong><?php esc_html_e( 'Jurisdiction or location', 'lexora' ); ?></strong><span>02</span></div>
						<div><strong><?php esc_html_e( 'Any urgent deadline', 'lexora' ); ?></strong><span>03</span></div>
					</div>
					<!-- /wp:html -->
					<!-- wp:paragraph {"className":"buildora-contact-hero__panel-note"} --><p class="buildora-contact-hero__panel-note"><?php esc_html_e( 'Please do not send confidential documents until the firm confirms it can consider the matter.', 'lexora' ); ?></p><!-- /wp:paragraph -->
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
