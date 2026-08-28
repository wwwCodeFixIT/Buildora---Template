<?php
/**
 * Title: About Story
 * Slug: buildora/about-page-story
 * Categories: buildora, text
 * Keywords: about, story, company, values
 * Description: Editorial story section for the About page.
 */
?>
<!-- wp:group {"align":"full","className":"buildora-about-story","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull buildora-about-story">
	<!-- wp:group {"align":"wide","className":"buildora-about-story__inner","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide buildora-about-story__inner">
		<!-- wp:group {"className":"buildora-about-story__grid","layout":{"type":"default"}} -->
		<div class="wp-block-group buildora-about-story__grid">
			<!-- wp:group {"className":"buildora-about-story__heading","layout":{"type":"default"}} -->
			<div class="wp-block-group buildora-about-story__heading">
				<!-- wp:paragraph {"className":"buildora-about-story__eyebrow"} -->
				<p class="buildora-about-story__eyebrow"><?php esc_html_e( 'How we work', 'buildora' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":2,"className":"buildora-about-story__title"} -->
				<h2 class="wp-block-heading buildora-about-story__title"><?php esc_html_e( 'Small enough to care. Structured enough to deliver.', 'buildora' ); ?></h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"buildora-about-story__copy","layout":{"type":"default"}} -->
			<div class="wp-block-group buildora-about-story__copy">
				<!-- wp:paragraph -->
				<p><?php esc_html_e( 'Good construction work is only half the job. The other half is making the process understandable: what is happening, who owns the next decision and what completion actually looks like.', 'buildora' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p><?php esc_html_e( 'That is why Buildora is organised around clear scopes, realistic programmes and visible milestones. Clients should not need to chase for basic answers or guess whether a project is moving in the right direction.', 'buildora' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p><?php esc_html_e( 'The result is a practical working relationship with fewer loose ends, faster decisions and a cleaner handover at the end.', 'buildora' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:html -->
		<div class="buildora-about-story__stats" aria-label="<?php echo esc_attr_x( 'Buildora at a glance', 'statistics section label', 'buildora' ); ?>">
			<div><strong>15+</strong><span><?php esc_html_e( 'years of hands-on experience', 'buildora' ); ?></span></div>
			<div><strong>500+</strong><span><?php esc_html_e( 'projects completed', 'buildora' ); ?></span></div>
			<div><strong>1</strong><span><?php esc_html_e( 'accountable team around the job', 'buildora' ); ?></span></div>
		</div>
		<!-- /wp:html -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
