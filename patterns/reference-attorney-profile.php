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
<!-- wp:group {"align":"full","className":"lx-ref-profile","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull lx-ref-profile">
	<!-- wp:group {"align":"full","className":"lx-ref-profile__hero","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull lx-ref-profile__hero">
		<!-- wp:group {"align":"wide","className":"lx-ref-profile__crumbs","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide lx-ref-profile__crumbs"><!-- wp:html --><nav aria-label="<?php echo esc_attr_x( 'Breadcrumb', 'navigation landmark', 'lexora' ); ?>"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'lexora' ); ?></a><span>›</span><a href="<?php echo esc_url( home_url( '/attorneys/' ) ); ?>"><?php esc_html_e( 'Attorneys', 'lexora' ); ?></a><span>›</span><span aria-current="page"><?php the_title(); ?></span></nav><!-- /wp:html --></div>
		<!-- /wp:group -->

		<!-- wp:columns {"align":"wide","verticalAlignment":"stretch","className":"lx-ref-profile__hero-grid"} -->
		<div class="wp-block-columns alignwide are-vertically-aligned-stretch lx-ref-profile__hero-grid">
			<!-- wp:column {"verticalAlignment":"stretch","width":"27%","className":"lx-ref-profile__portrait"} -->
			<div class="wp-block-column is-vertically-aligned-stretch lx-ref-profile__portrait" style="flex-basis:27%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"lx-ref-profile__fallback"} --><figure class="wp-block-image size-full lx-ref-profile__fallback"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/attorney-sophia.svg' ) ); ?>" alt="" /></figure><!-- /wp:image --><!-- wp:post-featured-image {"sizeSlug":"large","className":"lx-ref-profile__featured"} /--></div>
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

	<!-- wp:group {"align":"full","className":"lx-ref-profile__facts","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull lx-ref-profile__facts">
		<!-- wp:columns {"align":"wide","className":"lx-ref-profile__facts-grid"} -->
		<div class="wp-block-columns alignwide lx-ref-profile__facts-grid">
			<!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":2} --><h2 class="wp-block-heading"><?php esc_html_e( 'Overview', 'lexora' ); ?></h2><!-- /wp:heading --><!-- wp:post-content {"className":"lx-ref-profile__content","layout":{"type":"constrained"}} /--></div><!-- /wp:column -->
			<!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":2} --><h2 class="wp-block-heading"><?php esc_html_e( 'Experience Highlights', 'lexora' ); ?></h2><!-- /wp:heading --><!-- wp:list --><ul class="wp-block-list"><li><?php esc_html_e( '15+ Years of Legal Experience', 'lexora' ); ?></li><li><?php esc_html_e( '100+ Successful Case Outcomes', 'lexora' ); ?></li><li><?php esc_html_e( 'Counsel for growing and established companies', 'lexora' ); ?></li><li><?php esc_html_e( 'Admitted in state and federal courts', 'lexora' ); ?></li></ul><!-- /wp:list --></div><!-- /wp:column -->
			<!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":2} --><h2 class="wp-block-heading"><?php esc_html_e( 'Education & Credentials', 'lexora' ); ?></h2><!-- /wp:heading --><!-- wp:paragraph --><p>J.D., Columbia Law School<br><em>magna cum laude</em></p><!-- /wp:paragraph --><!-- wp:paragraph --><p>B.A., University of Pennsylvania<br><em>Phi Beta Kappa</em></p><!-- /wp:paragraph --><!-- wp:paragraph --><p><?php esc_html_e( 'Member, State Bar Association', 'lexora' ); ?><br><?php esc_html_e( 'Member, American Bar Association', 'lexora' ); ?></p><!-- /wp:paragraph --></div><!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","className":"lx-ref-profile__lower","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull lx-ref-profile__lower">
		<!-- wp:columns {"align":"wide","verticalAlignment":"stretch"} -->
		<div class="wp-block-columns alignwide are-vertically-aligned-stretch">
			<!-- wp:column {"width":"62%"} --><div class="wp-block-column" style="flex-basis:62%"><!-- wp:heading {"level":2} --><h2 class="wp-block-heading"><?php esc_html_e( 'Practice Focus', 'lexora' ); ?></h2><!-- /wp:heading --><!-- wp:html --><div class="lx-ref-profile__focus-grid"><article><b>⚖</b><div><h3>Business Litigation</h3><p>Resolving complex disputes and protecting business interests.</p></div></article><article><b>▣</b><div><h3>Contract Disputes</h3><p>Drafting, reviewing, and litigating high-stakes contracts.</p></div></article><article><b>▤</b><div><h3>Corporate Law</h3><p>Advising on transactions, governance, and compliance.</p></div></article><article><b>◇</b><div><h3>Commercial Transactions</h3><p>Structuring and negotiating strategic business deals.</p></div></article></div><!-- /wp:html --></div><!-- /wp:column -->
			<!-- wp:column {"width":"38%"} --><div class="wp-block-column" style="flex-basis:38%"><!-- wp:group {"className":"lx-ref-profile__consult","layout":{"type":"default"}} --><div class="wp-block-group lx-ref-profile__consult"><!-- wp:heading {"level":2} --><h2 class="wp-block-heading"><?php esc_html_e( 'Schedule a Consultation', 'lexora' ); ?></h2><!-- /wp:heading --><!-- wp:html --><div class="lx-ref-rule" aria-hidden="true"><span></span><i></i><span></span></div><!-- /wp:html --><!-- wp:paragraph --><p><?php esc_html_e( 'Discuss your legal needs and discover how our team can help you achieve your goals.', 'lexora' ); ?></p><!-- /wp:paragraph --><!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/#consultation' ) ); ?>"><?php esc_html_e( 'Contact This Attorney', 'lexora' ); ?></a></div><!-- /wp:button --></div><!-- /wp:buttons --></div><!-- /wp:group --></div><!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
