<?php
/**
 * Title: Client testimonials
 * Slug: buildora/testimonials
 * Categories: buildora, featured
 * Keywords: testimonials, reviews, social proof
 * Description: Editorial testimonial section with one featured review and two supporting reviews.
 */
?>
<!-- wp:group {"anchor":"testimonials","align":"full","className":"buildora-testimonials","layout":{"type":"constrained"}} -->
<div id="testimonials" class="wp-block-group alignfull buildora-testimonials">
	<!-- wp:group {"align":"wide","className":"buildora-testimonials__intro","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide buildora-testimonials__intro">
		<!-- wp:paragraph {"className":"buildora-testimonials__eyebrow"} -->
		<p class="buildora-testimonials__eyebrow"><?php esc_html_e( 'Client feedback', 'buildora' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:columns {"verticalAlignment":"bottom","className":"buildora-testimonials__heading-row"} -->
		<div class="wp-block-columns are-vertically-aligned-bottom buildora-testimonials__heading-row">
			<!-- wp:column {"verticalAlignment":"bottom","width":"60%"} -->
			<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:60%">
				<!-- wp:heading {"level":2,"className":"buildora-testimonials__title"} -->
				<h2 class="wp-block-heading buildora-testimonials__title"><?php esc_html_e( 'Trusted for the details that matter.', 'buildora' ); ?></h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"verticalAlignment":"bottom","width":"40%"} -->
			<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:40%">
				<!-- wp:paragraph {"textColor":"muted","className":"buildora-testimonials__lead"} -->
				<p class="buildora-testimonials__lead has-muted-color has-text-color"><?php esc_html_e( 'Clear communication, dependable delivery and a finish clients are happy to recommend.', 'buildora' ); ?></p>
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
				<blockquote class="wp-block-quote buildora-testimonial__quote"><p><?php esc_html_e( '“The programme stayed clear from the first quote to the final walkthrough. We always knew what was happening next, and the finish was exactly what we had agreed.”', 'buildora' ); ?></p></blockquote>
				<!-- /wp:quote -->
				<!-- wp:group {"className":"buildora-testimonial__meta","layout":{"type":"constrained"}} -->
				<div class="wp-block-group buildora-testimonial__meta">
					<!-- wp:paragraph {"className":"buildora-testimonial__name"} --><p class="buildora-testimonial__name"><strong><?php esc_html_e( 'Sarah & Mark L.', 'buildora' ); ?></strong></p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"buildora-testimonial__project"} --><p class="buildora-testimonial__project"><?php esc_html_e( 'Full home renovation', 'buildora' ); ?></p><!-- /wp:paragraph -->
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
				<blockquote class="wp-block-quote buildora-testimonial__quote buildora-testimonial__quote--small"><p><?php esc_html_e( '“The quote was straightforward, the site stayed organised and every milestone was explained before the work moved on.”', 'buildora' ); ?></p></blockquote>
				<!-- /wp:quote -->
				<!-- wp:paragraph {"className":"buildora-testimonial__name"} --><p class="buildora-testimonial__name"><strong><?php esc_html_e( 'Daniel Brooks', 'buildora' ); ?></strong></p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"buildora-testimonial__project"} --><p class="buildora-testimonial__project"><?php esc_html_e( 'Commercial fit-out', 'buildora' ); ?></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"buildora-testimonial","layout":{"type":"constrained"}} -->
			<div class="wp-block-group buildora-testimonial">
				<!-- wp:paragraph {"className":"buildora-testimonial__rating"} --><p class="buildora-testimonial__rating" aria-label="5 out of 5 stars">★★★★★</p><!-- /wp:paragraph -->
				<!-- wp:quote {"className":"buildora-testimonial__quote buildora-testimonial__quote--small"} -->
				<blockquote class="wp-block-quote buildora-testimonial__quote buildora-testimonial__quote--small"><p><?php esc_html_e( '“Communication was the biggest difference. Questions were answered quickly and the handover felt properly finished, not rushed.”', 'buildora' ); ?></p></blockquote>
				<!-- /wp:quote -->
				<!-- wp:paragraph {"className":"buildora-testimonial__name"} --><p class="buildora-testimonial__name"><strong><?php esc_html_e( 'Priya Shah', 'buildora' ); ?></strong></p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"buildora-testimonial__project"} --><p class="buildora-testimonial__project"><?php esc_html_e( 'Residential extension', 'buildora' ); ?></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
