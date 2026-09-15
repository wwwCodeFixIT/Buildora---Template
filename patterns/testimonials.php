<?php
/**
 * Title: Client Testimonials
 * Slug: lexora/testimonials
 * Categories: lexora, featured
 * Keywords: testimonials, reviews, legal, social proof
 * Description: Editorial testimonial section for a premium legal practice.
 */
?>
<!-- wp:group {"anchor":"testimonials","align":"full","className":"buildora-testimonials","layout":{"type":"constrained"}} -->
<div id="testimonials" class="wp-block-group alignfull buildora-testimonials">
	<!-- wp:group {"align":"wide","className":"buildora-testimonials__intro","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide buildora-testimonials__intro">
		<!-- wp:paragraph {"className":"buildora-testimonials__eyebrow"} -->
		<p class="buildora-testimonials__eyebrow"><?php esc_html_e( 'Client perspective', 'lexora' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:columns {"verticalAlignment":"bottom","className":"buildora-testimonials__heading-row"} -->
		<div class="wp-block-columns are-vertically-aligned-bottom buildora-testimonials__heading-row">
			<!-- wp:column {"verticalAlignment":"bottom","width":"60%"} -->
			<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:60%">
				<!-- wp:heading {"level":2,"className":"buildora-testimonials__title"} -->
				<h2 class="wp-block-heading buildora-testimonials__title"><?php esc_html_e( 'Trusted when the stakes are personal.', 'lexora' ); ?></h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"verticalAlignment":"bottom","width":"40%"} -->
			<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:40%">
				<!-- wp:paragraph {"textColor":"muted","className":"buildora-testimonials__lead"} -->
				<p class="buildora-testimonials__lead has-muted-color has-text-color"><?php esc_html_e( 'Clear advice, careful preparation and communication that keeps clients informed from first consultation to resolution.', 'lexora' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","verticalAlignment":"stretch","className":"buildora-testimonials__grid"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-stretch buildora-testimonials__grid">
		<!-- wp:column {"verticalAlignment":"stretch","width":"58%"} -->
		<div class="wp-block-column is-vertically-aligned-stretch" style="flex-basis:58%">
			<!-- wp:group {"className":"buildora-testimonial buildora-testimonial--featured","backgroundColor":"ink","textColor":"paper","layout":{"type":"constrained"}} -->
			<div class="wp-block-group buildora-testimonial buildora-testimonial--featured has-paper-color has-ink-background-color has-text-color has-background">
				<!-- wp:paragraph {"className":"buildora-testimonial__rating"} --><p class="buildora-testimonial__rating" aria-label="5 out of 5 stars">★★★★★</p><!-- /wp:paragraph -->
				<!-- wp:quote {"className":"buildora-testimonial__quote"} -->
				<blockquote class="wp-block-quote buildora-testimonial__quote"><p><?php esc_html_e( '“From the first meeting, the advice was direct and easy to understand. We always knew the options, the risks and what would happen next.”', 'lexora' ); ?></p></blockquote>
				<!-- /wp:quote -->
				<!-- wp:group {"className":"buildora-testimonial__meta","layout":{"type":"constrained"}} -->
				<div class="wp-block-group buildora-testimonial__meta">
					<!-- wp:paragraph {"className":"buildora-testimonial__name"} --><p class="buildora-testimonial__name"><strong><?php esc_html_e( 'Emily R.', 'lexora' ); ?></strong></p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"buildora-testimonial__project"} --><p class="buildora-testimonial__project"><?php esc_html_e( 'Commercial dispute client', 'lexora' ); ?></p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"stretch","width":"42%","className":"buildora-testimonials__stack"} -->
		<div class="wp-block-column is-vertically-aligned-stretch buildora-testimonials__stack" style="flex-basis:42%">
			<!-- wp:group {"className":"buildora-testimonial","layout":{"type":"constrained"}} -->
			<div class="wp-block-group buildora-testimonial">
				<!-- wp:paragraph {"className":"buildora-testimonial__rating"} --><p class="buildora-testimonial__rating" aria-label="5 out of 5 stars">★★★★★</p><!-- /wp:paragraph -->
				<!-- wp:quote {"className":"buildora-testimonial__quote buildora-testimonial__quote--small"} -->
				<blockquote class="wp-block-quote buildora-testimonial__quote buildora-testimonial__quote--small"><p><?php esc_html_e( '“The team handled a difficult family matter with patience, discretion and practical advice. I never felt left in the dark.”', 'lexora' ); ?></p></blockquote>
				<!-- /wp:quote -->
				<!-- wp:paragraph {"className":"buildora-testimonial__name"} --><p class="buildora-testimonial__name"><strong><?php esc_html_e( 'Michael T.', 'lexora' ); ?></strong></p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"buildora-testimonial__project"} --><p class="buildora-testimonial__project"><?php esc_html_e( 'Family law client', 'lexora' ); ?></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"buildora-testimonial","layout":{"type":"constrained"}} -->
			<div class="wp-block-group buildora-testimonial">
				<!-- wp:paragraph {"className":"buildora-testimonial__rating"} --><p class="buildora-testimonial__rating" aria-label="5 out of 5 stars">★★★★★</p><!-- /wp:paragraph -->
				<!-- wp:quote {"className":"buildora-testimonial__quote buildora-testimonial__quote--small"} -->
				<blockquote class="wp-block-quote buildora-testimonial__quote buildora-testimonial__quote--small"><p><?php esc_html_e( '“Every step was explained before a decision had to be made. The preparation was thorough and the communication was excellent.”', 'lexora' ); ?></p></blockquote>
				<!-- /wp:quote -->
				<!-- wp:paragraph {"className":"buildora-testimonial__name"} --><p class="buildora-testimonial__name"><strong><?php esc_html_e( 'Aisha K.', 'lexora' ); ?></strong></p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"buildora-testimonial__project"} --><p class="buildora-testimonial__project"><?php esc_html_e( 'Property matter client', 'lexora' ); ?></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
