<?php
/**
 * Title: Reference Attorney Profile
 * Slug: lexora/reference-attorney-profile
 * Categories: lexora, team
 * Keywords: attorney, lawyer, profile, reference
 * Viewport Width: 1440
 * Description: Dynamic attorney profile matching the approved Lexora marketplace reference layout.
 */
?>
<!-- wp:html -->
<style>
.lx-ref-profile__hero {
	background:
		linear-gradient(90deg, rgb(2 14 32 / 100%) 0%, rgb(2 14 32 / 90%) 58%, rgb(2 14 32 / 30%) 78%, rgb(2 14 32 / 8%) 100%),
		url('https://images.unsplash.com/photo-1765281723581-550d92b63591?auto=format&fit=crop&w=1800&q=88') right center / 52% 100% no-repeat,
		#020e20 !important;
}
.lx-ref-profile__fallback img {
	filter: grayscale(.16) saturate(.74) contrast(1.08) brightness(.86);
	object-position: center top;
}

@media (max-width: 560px) {
	.lexora-header__cta,
	.buildora-header__cta {
		display: none !important;
	}

	.lexora-header__logo img {
		display: block !important;
		width: 34px !important;
		height: 34px !important;
	}

	.lx-ref-profile__hero {
		padding-top: .85rem;
		background:
			linear-gradient(180deg, rgb(2 14 32 / 96%) 0%, rgb(2 14 32 / 92%) 54%, rgb(2 14 32 / 78%) 100%),
			url('https://images.unsplash.com/photo-1765281723581-550d92b63591?auto=format&fit=crop&w=1100&q=86') center / cover no-repeat,
			#020e20 !important;
	}

	.lx-ref-profile__crumbs {
		padding: 0 1.35rem .85rem !important;
	}

	.lx-ref-profile__crumbs nav {
		flex-wrap: wrap;
		gap: .4rem .55rem;
		font-size: .68rem;
	}

	.lx-ref-profile__hero-grid {
		display: block !important;
		min-height: 0 !important;
		padding: 0 1.35rem 1.8rem !important;
	}

	.lx-ref-profile__portrait {
		width: min(66vw, 240px) !important;
		min-height: 0 !important;
		aspect-ratio: 4 / 5;
		margin: 0 0 1.35rem !important;
	}

	.lx-ref-profile__intro {
		padding: 0 !important;
	}

	.lx-ref-profile__name {
		font-size: clamp(2.65rem, 11.5vw, 3.1rem) !important;
		line-height: .98 !important;
		letter-spacing: -.035em !important;
	}

	.lx-ref-profile__role {
		margin-top: .45rem;
		font-size: 1.45rem;
	}

	.lx-ref-profile__lead {
		font-size: .95rem;
		line-height: 1.6;
	}

	.lx-ref-profile__contact {
		gap: .65rem;
		margin-top: 1.15rem;
		font-size: .83rem;
	}

	.lx-ref-profile__facts {
		padding: 1.25rem 0 1.4rem;
	}

	.lx-ref-profile__facts-grid {
		padding-inline: 1.35rem !important;
	}

	.lx-ref-profile__facts-grid > .wp-block-column {
		padding: 1.15rem 0 !important;
	}

	.lx-ref-profile__facts-grid > .wp-block-column:first-child {
		padding-top: 0 !important;
	}

	.lx-ref-profile__facts-grid > .wp-block-column:last-child {
		padding-bottom: 0 !important;
	}

	.lx-ref-profile__facts h2,
	.lx-ref-profile__lower h2 {
		font-size: 1.25rem;
		line-height: 1.15;
	}

	.lx-ref-profile__lower {
		padding: 1.6rem 0 2rem;
	}

	.lx-ref-profile__lower > .wp-block-columns {
		display: block !important;
		padding-inline: 1.35rem !important;
	}

	.lx-ref-profile__focus-grid {
		gap: 1rem;
	}

	.lx-ref-profile__focus-grid article {
		grid-template-columns: 34px 1fr;
		gap: .65rem;
	}

	.lx-ref-profile__focus-grid b {
		font-size: 1.5rem;
	}

	.lx-ref-profile__consult {
		margin-top: 1.6rem;
		padding: 1.35rem;
	}

	.lx-ref-profile__consult .wp-block-buttons,
	.lx-ref-profile__consult .wp-block-button,
	.lx-ref-profile__consult .wp-block-button__link {
		width: 100%;
	}
}
</style>
<!-- /wp:html -->
<!-- wp:group {"align":"full","className":"lx-ref-profile","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull lx-ref-profile">
	<!-- wp:group {"align":"full","className":"lx-ref-profile__hero","layout":{"type":"default"}} -->
	<div class="wp-block-group alignfull lx-ref-profile__hero">
		<!-- wp:group {"className":"lx-ref-profile__crumbs lx-ref-frame","layout":{"type":"default"}} -->
		<div class="wp-block-group lx-ref-profile__crumbs lx-ref-frame"><!-- wp:html --><nav aria-label="<?php echo esc_attr_x( 'Breadcrumb', 'navigation landmark', 'lexora' ); ?>"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'lexora' ); ?></a><span>›</span><a href="<?php echo esc_url( home_url( '/attorneys/' ) ); ?>"><?php esc_html_e( 'Attorneys', 'lexora' ); ?></a><span>›</span><span aria-current="page"><?php the_title(); ?></span></nav><!-- /wp:html --></div>
		<!-- /wp:group -->

		<!-- wp:columns {"verticalAlignment":"stretch","className":"lx-ref-profile__hero-grid lx-ref-frame"} -->
		<div class="wp-block-columns are-vertically-aligned-stretch lx-ref-profile__hero-grid lx-ref-frame">
			<!-- wp:column {"verticalAlignment":"stretch","width":"27%","className":"lx-ref-profile__portrait"} -->
			<div class="wp-block-column is-vertically-aligned-stretch lx-ref-profile__portrait" style="flex-basis:27%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"lx-ref-profile__fallback"} --><figure class="wp-block-image size-full lx-ref-profile__fallback"><img src="https://images.unsplash.com/photo-1758518727888-ffa196002e59?auto=format&amp;fit=crop&amp;w=900&amp;h=1100&amp;q=84" alt="Sophia Langford" /></figure><!-- /wp:image --><!-- wp:post-featured-image {"sizeSlug":"large","className":"lx-ref-profile__featured"} /--></div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"73%","className":"lx-ref-profile__intro"} -->
			<div class="wp-block-column is-vertically-aligned-center lx-ref-profile__intro" style="flex-basis:73%">
				<!-- wp:paragraph {"className":"lx-ref-kicker"} --><p class="lx-ref-kicker"><?php esc_html_e( 'Attorney', 'lexora' ); ?></p><!-- /wp:paragraph -->
				<!-- wp:post-title {"level":1,"className":"lx-ref-profile__name"} /-->
				<!-- wp:paragraph {"className":"lx-ref-profile__role"} --><p class="lx-ref-profile__role"><?php esc_html_e( 'Senior Counsel', 'lexora' ); ?></p><!-- /wp:paragraph -->
				<!-- wp:html --><div class="lx-ref-rule" aria-hidden="true"><span></span><i></i><span></span></div><!-- /wp:html -->
				<!-- wp:post-excerpt {"moreText":"","className":"lx-ref-profile__lead"} /-->
				<!-- wp:html --><div class="lx-ref-profile__contact"><span>☎ &nbsp;(555) 123-4567</span><span>✉ &nbsp;attorney@lexoralaw.com</span><span>⌖ &nbsp;New York, NY</span></div><!-- /wp:html -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","className":"lx-ref-profile__facts","layout":{"type":"default"}} -->
	<div class="wp-block-group alignfull lx-ref-profile__facts">
		<!-- wp:columns {"className":"lx-ref-profile__facts-grid lx-ref-frame"} -->
		<div class="wp-block-columns lx-ref-profile__facts-grid lx-ref-frame">
			<!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":2} --><h2 class="wp-block-heading"><?php esc_html_e( 'Overview', 'lexora' ); ?></h2><!-- /wp:heading --><!-- wp:post-content {"className":"lx-ref-profile__content","layout":{"type":"default"}} /--></div><!-- /wp:column -->
			<!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":2} --><h2 class="wp-block-heading"><?php esc_html_e( 'Experience Highlights', 'lexora' ); ?></h2><!-- /wp:heading --><!-- wp:list --><ul class="wp-block-list"><li><?php esc_html_e( '15+ Years of Legal Experience', 'lexora' ); ?></li><li><?php esc_html_e( '100+ Successful Case Outcomes', 'lexora' ); ?></li><li><?php esc_html_e( 'Counsel for growing and established companies', 'lexora' ); ?></li><li><?php esc_html_e( 'Admitted in state and federal courts', 'lexora' ); ?></li></ul><!-- /wp:list --></div><!-- /wp:column -->
			<!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":2} --><h2 class="wp-block-heading"><?php esc_html_e( 'Education & Credentials', 'lexora' ); ?></h2><!-- /wp:heading --><!-- wp:paragraph --><p>J.D., Columbia Law School<br><em>magna cum laude</em></p><!-- /wp:paragraph --><!-- wp:paragraph --><p>B.A., University of Pennsylvania<br><em>Phi Beta Kappa</em></p><!-- /wp:paragraph --><!-- wp:paragraph --><p><?php esc_html_e( 'Member, State Bar Association', 'lexora' ); ?><br><?php esc_html_e( 'Member, American Bar Association', 'lexora' ); ?></p><!-- /wp:paragraph --></div><!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","className":"lx-ref-profile__lower","layout":{"type":"default"}} -->
	<div class="wp-block-group alignfull lx-ref-profile__lower">
		<!-- wp:columns {"verticalAlignment":"stretch","className":"lx-ref-frame"} -->
		<div class="wp-block-columns are-vertically-aligned-stretch lx-ref-frame">
			<!-- wp:column {"width":"62%"} --><div class="wp-block-column" style="flex-basis:62%"><!-- wp:heading {"level":2} --><h2 class="wp-block-heading"><?php esc_html_e( 'Practice Focus', 'lexora' ); ?></h2><!-- /wp:heading --><!-- wp:html --><div class="lx-ref-profile__focus-grid"><article><b>⚖</b><div><h3>Business Litigation</h3><p>Resolving complex disputes and protecting business interests.</p></div></article><article><b>▣</b><div><h3>Contract Disputes</h3><p>Drafting, reviewing, and litigating high-stakes contracts.</p></div></article><article><b>▤</b><div><h3>Corporate Law</h3><p>Advising on transactions, governance, and compliance.</p></div></article><article><b>◇</b><div><h3>Commercial Transactions</h3><p>Structuring and negotiating strategic business deals.</p></div></article></div><!-- /wp:html --></div><!-- /wp:column -->
			<!-- wp:column {"width":"38%"} --><div class="wp-block-column" style="flex-basis:38%"><!-- wp:group {"className":"lx-ref-profile__consult","layout":{"type":"default"}} --><div class="wp-block-group lx-ref-profile__consult"><!-- wp:heading {"level":2} --><h2 class="wp-block-heading"><?php esc_html_e( 'Schedule a Consultation', 'lexora' ); ?></h2><!-- /wp:heading --><!-- wp:html --><div class="lx-ref-rule" aria-hidden="true"><span></span><i></i><span></span></div><!-- /wp:html --><!-- wp:paragraph --><p><?php esc_html_e( 'Discuss your legal needs and discover how our team can help you achieve your goals.', 'lexora' ); ?></p><!-- /wp:paragraph --><!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/#consultation' ) ); ?>"><?php esc_html_e( 'Contact This Attorney', 'lexora' ); ?></a></div><!-- /wp:button --></div><!-- /wp:buttons --></div><!-- /wp:group --></div><!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
