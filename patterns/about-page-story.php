<?php
/**
 * Title: About Story
 * Slug: lexora/about-page-story
 * Categories: lexora, text
 * Keywords: about, story, law firm, values
 * Description: Editorial story section for the Lexora About page.
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
				<!-- wp:paragraph {"className":"buildora-about-story__eyebrow"} --><p class="buildora-about-story__eyebrow"><?php esc_html_e( 'How we work', 'lexora' ); ?></p><!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"className":"buildora-about-story__title"} --><h2 class="wp-block-heading buildora-about-story__title"><?php esc_html_e( 'Small enough to stay close. Experienced enough to handle complexity.', 'lexora' ); ?></h2><!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"buildora-about-story__copy","layout":{"type":"default"}} -->
			<div class="wp-block-group buildora-about-story__copy">
				<!-- wp:paragraph --><p><?php esc_html_e( 'Good legal work is not only about identifying the law. It is about understanding what the client is trying to protect, what the evidence supports and which decision creates the strongest practical position.', 'lexora' ); ?></p><!-- /wp:paragraph -->
				<!-- wp:paragraph --><p><?php esc_html_e( 'That is why Lexora is organised around direct access to experienced lawyers, clear ownership of each matter and advice that distinguishes legal possibility from commercial or personal reality.', 'lexora' ); ?></p><!-- /wp:paragraph -->
				<!-- wp:paragraph --><p><?php esc_html_e( 'The result is a working relationship where clients know the strategy, understand the trade-offs and can make the next decision with confidence.', 'lexora' ); ?></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:html -->
		<div class="buildora-about-story__stats" aria-label="<?php echo esc_attr_x( 'Lexora at a glance', 'statistics section label', 'lexora' ); ?>">
			<div><strong>20+</strong><span><?php esc_html_e( 'years combined legal experience', 'lexora' ); ?></span></div>
			<div><strong>750+</strong><span><?php esc_html_e( 'matters handled', 'lexora' ); ?></span></div>
			<div><strong>1</strong><span><?php esc_html_e( 'lead lawyer accountable for your matter', 'lexora' ); ?></span></div>
		</div>
		<!-- /wp:html -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
