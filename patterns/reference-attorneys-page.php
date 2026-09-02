<?php
/**
 * Title: Reference Attorneys Page
 * Slug: lexora/reference-attorneys-page
 * Categories: lexora, team
 * Keywords: attorneys, lawyers, team, reference
 * Viewport Width: 1440
 * Description: Attorney directory matching the Lexora marketplace reference layout.
 */
?>
<!-- wp:group {"align":"full","className":"lx-ref-page lx-ref-attorneys","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull lx-ref-page lx-ref-attorneys">
	<!-- wp:group {"align":"full","className":"lx-ref-inner-hero","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull lx-ref-inner-hero">
		<!-- wp:columns {"align":"wide","verticalAlignment":"stretch","className":"lx-ref-inner-hero__grid"} -->
		<div class="wp-block-columns alignwide are-vertically-aligned-stretch lx-ref-inner-hero__grid">
			<!-- wp:column {"verticalAlignment":"center","width":"56%","className":"lx-ref-inner-hero__copy"} -->
			<div class="wp-block-column is-vertically-aligned-center lx-ref-inner-hero__copy" style="flex-basis:56%">
				<!-- wp:paragraph {"className":"lx-ref-kicker"} --><p class="lx-ref-kicker"><?php esc_html_e( 'Advocates. Advisors. Allies.', 'lexora' ); ?></p><!-- /wp:paragraph -->
				<!-- wp:heading {"level":1,"className":"lx-ref-inner-hero__title"} --><h1 class="wp-block-heading lx-ref-inner-hero__title"><?php esc_html_e( 'Our Attorneys', 'lexora' ); ?></h1><!-- /wp:heading -->
				<!-- wp:html --><div class="lx-ref-rule" aria-hidden="true"><span></span><i></i></div><!-- /wp:html -->
				<!-- wp:paragraph {"className":"lx-ref-inner-hero__lead"} --><p class="lx-ref-inner-hero__lead"><?php esc_html_e( 'Our attorneys bring decades of experience and a shared commitment to achieving the best outcomes for our clients.', 'lexora' ); ?></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"verticalAlignment":"stretch","width":"44%","className":"lx-ref-inner-hero__media"} -->
			<div class="wp-block-column is-vertically-aligned-stretch lx-ref-inner-hero__media" style="flex-basis:44%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} --><figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-legal.svg' ) ); ?>" alt="" /></figure><!-- /wp:image --></div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","className":"lx-ref-directory","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull lx-ref-directory">
		<!-- wp:html -->
		<div class="lx-ref-directory__toolbar alignwide" aria-label="<?php echo esc_attr__( 'Attorney directory controls', 'lexora' ); ?>">
			<label><?php esc_html_e( 'Filter by practice area:', 'lexora' ); ?><select><option><?php esc_html_e( 'All Practice Areas', 'lexora' ); ?></option><option><?php esc_html_e( 'Corporate Law', 'lexora' ); ?></option><option><?php esc_html_e( 'Family Law', 'lexora' ); ?></option><option><?php esc_html_e( 'Litigation', 'lexora' ); ?></option></select></label>
			<label><?php esc_html_e( 'Sort by:', 'lexora' ); ?><select><option><?php esc_html_e( 'Experience', 'lexora' ); ?></option><option><?php esc_html_e( 'Name', 'lexora' ); ?></option></select></label>
		</div>
		<!-- /wp:html -->

		<!-- wp:group {"align":"wide","className":"lx-ref-attorney-grid","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide lx-ref-attorney-grid">
			<?php
			$lexora_attorneys = array(
				array( 'image' => 'attorney-david.svg', 'name' => 'David Whitmore', 'role' => 'Founding Partner', 'focus' => 'Corporate Law', 'experience' => '30+ Years Experience', 'url' => '/attorneys/eleanor-mercer/' ),
				array( 'image' => 'attorney-sophia.svg', 'name' => 'Sophia Langford', 'role' => 'Senior Attorney', 'focus' => 'Family Law', 'experience' => '18+ Years Experience', 'url' => '/attorneys/sophia-carter/' ),
				array( 'image' => 'attorney-james.svg', 'name' => 'James Carter', 'role' => 'Litigation Attorney', 'focus' => 'Personal Injury', 'experience' => '15+ Years Experience', 'url' => '/attorneys/daniel-moore/' ),
				array( 'image' => 'attorney-olivia.svg', 'name' => 'Olivia Bennett', 'role' => 'Real Estate Attorney', 'focus' => 'Real Estate Law', 'experience' => '12+ Years Experience', 'url' => '/attorneys/' ),
				array( 'image' => 'attorney-michael.svg', 'name' => 'Michael Reeves', 'role' => 'Criminal Defense Attorney', 'focus' => 'Criminal Defense', 'experience' => '20+ Years Experience', 'url' => '/attorneys/' ),
				array( 'image' => 'attorney-isabella.svg', 'name' => 'Isabella Mercer', 'role' => 'Estate Planning Attorney', 'focus' => 'Estate Planning', 'experience' => '10+ Years Experience', 'url' => '/attorneys/' ),
			);
			foreach ( $lexora_attorneys as $attorney ) :
			?>
			<div class="lx-ref-attorney-card">
				<a class="lx-ref-attorney-card__media" href="<?php echo esc_url( home_url( $attorney['url'] ) ); ?>"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $attorney['image'] ) ); ?>" alt="<?php echo esc_attr( $attorney['name'] ); ?>" /></a>
				<div class="lx-ref-attorney-card__body">
					<h2><a href="<?php echo esc_url( home_url( $attorney['url'] ) ); ?>"><?php echo esc_html( $attorney['name'] ); ?></a></h2>
					<p class="lx-ref-attorney-card__role"><?php echo esc_html( $attorney['role'] ); ?></p>
					<p><?php echo esc_html( $attorney['focus'] ); ?></p>
					<p><?php echo esc_html( $attorney['experience'] ); ?></p>
					<div class="lx-ref-attorney-card__social"><span aria-hidden="true">in</span><span aria-hidden="true">✉</span></div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"align":"wide","className":"lx-ref-bottom-cta","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
		<div class="wp-block-group alignwide lx-ref-bottom-cta"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} --><div class="wp-block-group"><!-- wp:html --><div class="lx-ref-bottom-cta__icon" aria-hidden="true">⚖</div><!-- /wp:html --><!-- wp:group {"layout":{"type":"default"}} --><div class="wp-block-group"><!-- wp:heading {"level":2} --><h2 class="wp-block-heading"><?php esc_html_e( 'Need Legal Guidance?', 'lexora' ); ?></h2><!-- /wp:heading --><!-- wp:paragraph --><p><?php esc_html_e( 'Our team is ready to help you navigate complex legal challenges.', 'lexora' ); ?></p><!-- /wp:paragraph --></div><!-- /wp:group --></div><!-- /wp:group --><!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/#consultation' ) ); ?>"><?php esc_html_e( 'Schedule a Consultation', 'lexora' ); ?></a></div><!-- /wp:button --></div><!-- /wp:buttons --></div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
