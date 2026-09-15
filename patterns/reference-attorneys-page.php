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
	<!-- wp:html -->
	<style>
	@media (max-width: 800px) {
		/* Keep the mobile header focused on the brand and menu trigger. */
		.lexora-header__cta {
			display: none !important;
		}

		.lexora-header__inner {
			min-height: 72px !important;
			padding-inline: 1rem !important;
		}

		.lexora-header__logo {
			display: inline-flex !important;
			align-items: center !important;
			gap: .55rem !important;
			white-space: nowrap !important;
		}

		.lexora-header__logo img {
			width: 34px !important;
			height: 34px !important;
			display: block !important;
			visibility: visible !important;
			opacity: 1 !important;
			object-fit: contain !important;
		}

		.lexora-header__brand-text {
			display: inline-block !important;
			font-size: 1.72rem !important;
			line-height: 1 !important;
		}

		/* Mobile Attorneys hero: integrate the courthouse into the hero background. */
		.lx-ref-attorneys .lx-ref-inner-hero {
			background:
				linear-gradient(180deg, rgb(3 20 42 / 98%) 0%, rgb(3 20 42 / 93%) 52%, rgb(3 20 42 / 68%) 78%, rgb(2 14 31 / 34%) 100%),
				linear-gradient(90deg, rgb(3 20 42 / 98%) 0%, rgb(3 20 42 / 76%) 60%, rgb(3 20 42 / 24%) 100%),
				url('https://images.unsplash.com/photo-1765281723581-550d92b63591?auto=format&fit=crop&w=1200&q=86') 58% bottom / cover no-repeat !important;
		}

		.lx-ref-attorneys .lx-ref-inner-hero__grid {
			display: block !important;
			width: 100% !important;
			max-width: none !important;
			min-height: 520px !important;
			margin: 0 !important;
		}

		.lx-ref-attorneys .lx-ref-inner-hero__copy {
			width: 100% !important;
			max-width: 100% !important;
			box-sizing: border-box !important;
			padding: 3rem 1.35rem 4rem !important;
		}

		.lx-ref-attorneys .lx-ref-inner-hero__media {
			display: none !important;
		}

		.lx-ref-attorneys .lx-ref-kicker {
			margin-bottom: 1rem !important;
			font-size: .75rem !important;
			line-height: 1.5 !important;
		}

		.lx-ref-attorneys .lx-ref-inner-hero__title {
			max-width: 10ch !important;
			font-size: clamp(2.8rem, 12.6vw, 3.35rem) !important;
			line-height: .98 !important;
			letter-spacing: -.035em !important;
		}

		.lx-ref-attorneys .lx-ref-rule {
			margin: 1.35rem 0 !important;
		}

		.lx-ref-attorneys .lx-ref-rule span {
			width: 72px !important;
		}

		.lx-ref-attorneys .lx-ref-inner-hero__lead {
			max-width: 20.5rem !important;
			margin-top: 0 !important;
			font-family: var(--lx-ref-sans) !important;
			font-size: .98rem !important;
			line-height: 1.58 !important;
		}

		.lx-ref-attorneys .lx-ref-directory {
			padding: 1.35rem 0 2rem;
		}

		.lx-ref-attorneys .lx-ref-directory__toolbar,
		.lx-ref-attorneys .lx-ref-attorney-grid,
		.lx-ref-attorneys .lx-ref-bottom-cta {
			width: calc(100% - 32px) !important;
			max-width: none !important;
			margin-inline: auto !important;
		}

		.lx-ref-attorneys .lx-ref-directory__toolbar {
			display: grid !important;
			grid-template-columns: 1fr;
			gap: .85rem !important;
			margin-bottom: 1.15rem !important;
		}

		.lx-ref-attorneys .lx-ref-directory__toolbar label {
			display: grid !important;
			grid-template-columns: 1fr;
			gap: .42rem;
			font-size: .68rem;
			font-weight: 600;
			letter-spacing: .075em;
		}

		.lx-ref-attorneys .lx-ref-directory__toolbar select {
			width: 100% !important;
			min-width: 0 !important;
			min-height: 46px;
			padding: .7rem .8rem;
			border: 1px solid #d8c9b4;
			background: #fffdf9;
			font-size: .84rem;
		}

		.lx-ref-attorneys .lx-ref-attorney-grid {
			display: grid !important;
			grid-template-columns: 1fr !important;
			gap: .8rem !important;
		}

		.lx-ref-attorneys .lx-ref-attorney-card {
			display: grid;
			grid-template-columns: 116px minmax(0, 1fr);
			min-height: 164px;
			overflow: hidden;
			box-shadow: 0 8px 22px rgb(7 20 35 / 7%);
		}

		.lx-ref-attorneys .lx-ref-attorney-card__media {
			width: 100%;
			height: 100%;
			min-height: 164px;
			aspect-ratio: auto !important;
		}

		.lx-ref-attorneys .lx-ref-attorney-card__media img {
			width: 100%;
			height: 100%;
			object-fit: cover;
			object-position: center top;
		}

		.lx-ref-attorneys .lx-ref-attorney-card__body {
			display: flex;
			min-width: 0;
			flex-direction: column;
			justify-content: center;
			padding: .9rem 1rem;
			text-align: left;
		}

		.lx-ref-attorneys .lx-ref-attorney-card h2 {
			font-size: 1.16rem !important;
			line-height: 1.15;
		}

		.lx-ref-attorneys .lx-ref-attorney-card p {
			margin: .2rem 0;
			font-size: .75rem;
			line-height: 1.35;
		}

		.lx-ref-attorneys .lx-ref-attorney-card__role {
			font-size: .82rem !important;
		}

		.lx-ref-attorneys .lx-ref-attorney-card__social {
			justify-content: flex-start;
			margin-top: .42rem;
			font-size: .78rem;
		}

		.lx-ref-attorneys .lx-ref-bottom-cta {
			display: grid !important;
			grid-template-columns: 1fr;
			gap: 1rem !important;
			margin-top: 1.15rem !important;
			padding: 1.3rem 1.25rem !important;
		}

		.lx-ref-attorneys .lx-ref-bottom-cta > .wp-block-group {
			align-items: flex-start !important;
		}

		.lx-ref-attorneys .lx-ref-bottom-cta__icon {
			font-size: 2rem;
		}

		.lx-ref-attorneys .lx-ref-bottom-cta h2 {
			font-size: 1.35rem;
		}

		.lx-ref-attorneys .lx-ref-bottom-cta p {
			font-size: .84rem;
			line-height: 1.55;
		}

		.lx-ref-attorneys .lx-ref-bottom-cta .wp-block-buttons,
		.lx-ref-attorneys .lx-ref-bottom-cta .wp-block-button,
		.lx-ref-attorneys .lx-ref-bottom-cta .wp-block-button__link {
			width: 100%;
		}

		.lx-ref-attorneys .lx-ref-bottom-cta .wp-block-button__link {
			box-sizing: border-box;
			min-height: 48px;
			display: inline-flex;
			align-items: center;
			justify-content: center;
		}
	}

	@media (max-width: 560px) {
		.lx-ref-attorneys .lx-ref-inner-hero__grid {
			min-height: 500px !important;
		}

		.lx-ref-attorneys .lx-ref-inner-hero__copy {
			padding: 2.7rem 1.2rem 3.6rem !important;
		}

		.lx-ref-attorneys .lx-ref-inner-hero__lead {
			font-size: .95rem !important;
			line-height: 1.58 !important;
		}

		.lx-ref-attorneys .lx-ref-attorney-card {
			grid-template-columns: 108px minmax(0, 1fr);
			min-height: 156px;
		}

		.lx-ref-attorneys .lx-ref-attorney-card__media {
			min-height: 156px;
		}

		.lx-ref-attorneys .lx-ref-attorney-card__body {
			padding: .82rem .85rem;
		}

		.lx-ref-attorneys .lx-ref-attorney-card h2 {
			font-size: 1.08rem !important;
		}

		.lx-ref-attorneys .lx-ref-attorney-card p {
			font-size: .71rem;
		}
	}
	</style>
	<!-- /wp:html -->
	<!-- wp:group {"align":"full","className":"lx-ref-inner-hero","layout":{"type":"default"}} -->
	<div class="wp-block-group alignfull lx-ref-inner-hero">
		<!-- wp:columns {"verticalAlignment":"stretch","className":"lx-ref-inner-hero__grid lx-ref-frame"} -->
		<div class="wp-block-columns are-vertically-aligned-stretch lx-ref-inner-hero__grid lx-ref-frame">
			<!-- wp:column {"verticalAlignment":"center","width":"56%","className":"lx-ref-inner-hero__copy"} -->
			<div class="wp-block-column is-vertically-aligned-center lx-ref-inner-hero__copy" style="flex-basis:56%">
				<!-- wp:paragraph {"className":"lx-ref-kicker"} --><p class="lx-ref-kicker"><?php esc_html_e( 'Advocates. Advisors. Allies.', 'lexora' ); ?></p><!-- /wp:paragraph -->
				<!-- wp:heading {"level":1,"className":"lx-ref-inner-hero__title"} --><h1 class="wp-block-heading lx-ref-inner-hero__title"><?php esc_html_e( 'Our Attorneys', 'lexora' ); ?></h1><!-- /wp:heading -->
				<!-- wp:html --><div class="lx-ref-rule" aria-hidden="true"><span></span><i></i></div><!-- /wp:html -->
				<!-- wp:paragraph {"className":"lx-ref-inner-hero__lead"} --><p class="lx-ref-inner-hero__lead"><?php esc_html_e( 'Our attorneys bring decades of experience and a shared commitment to achieving the best outcomes for our clients.', 'lexora' ); ?></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"verticalAlignment":"stretch","width":"44%","className":"lx-ref-inner-hero__media"} -->
			<div class="wp-block-column is-vertically-aligned-stretch lx-ref-inner-hero__media" style="flex-basis:44%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} --><figure class="wp-block-image size-full"><img src="https://images.unsplash.com/photo-1765281723581-550d92b63591?auto=format&amp;fit=crop&amp;w=1800&amp;q=88" alt="Illuminated classical courthouse columns at night" /></figure><!-- /wp:image --></div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","className":"lx-ref-directory","layout":{"type":"default"}} -->
	<div class="wp-block-group alignfull lx-ref-directory">
		<!-- wp:html -->
		<div class="lx-ref-directory__toolbar lx-ref-frame" aria-label="<?php echo esc_attr__( 'Attorney directory controls', 'lexora' ); ?>">
			<label><?php esc_html_e( 'Filter by practice area:', 'lexora' ); ?><select><option><?php esc_html_e( 'All Practice Areas', 'lexora' ); ?></option><option><?php esc_html_e( 'Corporate Law', 'lexora' ); ?></option><option><?php esc_html_e( 'Family Law', 'lexora' ); ?></option><option><?php esc_html_e( 'Litigation', 'lexora' ); ?></option></select></label>
			<label><?php esc_html_e( 'Sort by:', 'lexora' ); ?><select><option><?php esc_html_e( 'Experience', 'lexora' ); ?></option><option><?php esc_html_e( 'Name', 'lexora' ); ?></option></select></label>
		</div>
		<!-- /wp:html -->

		<!-- wp:group {"className":"lx-ref-attorney-grid lx-ref-frame","layout":{"type":"default"}} -->
		<div class="wp-block-group lx-ref-attorney-grid lx-ref-frame">
			<?php
			$lexora_attorneys = array(
				array( 'image' => 'https://images.unsplash.com/photo-1543132220-7bc04a0e790a?auto=format&fit=crop&w=700&h=850&q=82', 'name' => 'David Whitmore', 'role' => 'Founding Partner', 'focus' => 'Corporate Law', 'experience' => '30+ Years Experience', 'url' => '/attorneys/david-whitmore/' ),
				array( 'image' => 'https://images.unsplash.com/photo-1758518727888-ffa196002e59?auto=format&fit=crop&w=700&h=850&q=82', 'name' => 'Sophia Langford', 'role' => 'Senior Attorney', 'focus' => 'Family Law', 'experience' => '18+ Years Experience', 'url' => '/attorneys/sophia-langford/' ),
				array( 'image' => 'https://images.unsplash.com/photo-1752778935828-bf6fdd5a834a?auto=format&fit=crop&w=700&h=850&q=82', 'name' => 'James Carter', 'role' => 'Litigation Attorney', 'focus' => 'Personal Injury', 'experience' => '15+ Years Experience', 'url' => '/attorneys/james-carter/' ),
				array( 'image' => 'https://images.unsplash.com/photo-1758518729929-8210d3b0839e?auto=format&fit=crop&w=700&h=850&q=82', 'name' => 'Olivia Bennett', 'role' => 'Real Estate Attorney', 'focus' => 'Real Estate Law', 'experience' => '12+ Years Experience', 'url' => '/attorneys/olivia-bennett/' ),
				array( 'image' => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=700&h=850&q=82', 'name' => 'Michael Reeves', 'role' => 'Criminal Defense Attorney', 'focus' => 'Criminal Defense', 'experience' => '20+ Years Experience', 'url' => '/attorneys/michael-reeves/' ),
				array( 'image' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=700&h=850&q=82', 'name' => 'Isabella Mercer', 'role' => 'Estate Planning Attorney', 'focus' => 'Estate Planning', 'experience' => '10+ Years Experience', 'url' => '/attorneys/isabella-mercer/' ),
			);
			foreach ( $lexora_attorneys as $attorney ) :
			?>
			<div class="lx-ref-attorney-card">
				<a class="lx-ref-attorney-card__media" href="<?php echo esc_url( home_url( $attorney['url'] ) ); ?>"><img src="<?php echo esc_url( $attorney['image'] ); ?>" alt="<?php echo esc_attr( $attorney['name'] ); ?>" /></a>
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

		<!-- wp:group {"className":"lx-ref-bottom-cta lx-ref-frame","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
		<div class="wp-block-group lx-ref-bottom-cta lx-ref-frame"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} --><div class="wp-block-group"><!-- wp:html --><div class="lx-ref-bottom-cta__icon" aria-hidden="true">⚖</div><!-- /wp:html --><!-- wp:group {"layout":{"type":"default"}} --><div class="wp-block-group"><!-- wp:heading {"level":2} --><h2 class="wp-block-heading"><?php esc_html_e( 'Need Legal Guidance?', 'lexora' ); ?></h2><!-- /wp:heading --><!-- wp:paragraph --><p><?php esc_html_e( 'Our team is ready to help you navigate complex legal challenges.', 'lexora' ); ?></p><!-- /wp:paragraph --></div><!-- /wp:group --></div><!-- /wp:group --><!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/#consultation' ) ); ?>"><?php esc_html_e( 'Schedule a Consultation', 'lexora' ); ?></a></div><!-- /wp:button --></div><!-- /wp:buttons --></div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->