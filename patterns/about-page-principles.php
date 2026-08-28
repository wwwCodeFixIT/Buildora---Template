<?php
/**
 * Title: About Principles
 * Slug: buildora/about-page-principles
 * Categories: buildora, featured
 * Keywords: about, principles, values, standards
 * Description: Three operating principles for the About page.
 */
?>
<!-- wp:group {"align":"full","className":"buildora-about-principles","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull buildora-about-principles">
	<!-- wp:group {"align":"wide","className":"buildora-about-principles__inner","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide buildora-about-principles__inner">
		<!-- wp:group {"className":"buildora-about-principles__intro","layout":{"type":"default"}} -->
		<div class="wp-block-group buildora-about-principles__intro">
			<!-- wp:paragraph {"className":"buildora-about-principles__eyebrow"} -->
			<p class="buildora-about-principles__eyebrow"><?php esc_html_e( 'The standard', 'buildora' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"className":"buildora-about-principles__title"} -->
			<h2 class="wp-block-heading buildora-about-principles__title"><?php esc_html_e( 'Three things we do not compromise on.', 'buildora' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:html -->
		<div class="buildora-about-principles__list">
			<article class="buildora-about-principle">
				<span class="buildora-about-principle__number">01</span>
				<div>
					<h3><?php esc_html_e( 'Clarity before activity', 'buildora' ); ?></h3>
					<p><?php esc_html_e( 'Scope, priorities and decisions are made visible before work moves ahead. Less assumption means fewer expensive surprises later.', 'buildora' ); ?></p>
				</div>
			</article>

			<article class="buildora-about-principle">
				<span class="buildora-about-principle__number">02</span>
				<div>
					<h3><?php esc_html_e( 'Ownership at every stage', 'buildora' ); ?></h3>
					<p><?php esc_html_e( 'Clients know who is responsible for the next step. We keep communication tied to real milestones rather than passing questions between trades.', 'buildora' ); ?></p>
				</div>
			</article>

			<article class="buildora-about-principle">
				<span class="buildora-about-principle__number">03</span>
				<div>
					<h3><?php esc_html_e( 'A proper finish', 'buildora' ); ?></h3>
					<p><?php esc_html_e( 'Completion means checks, walkthroughs and a documented handover — not simply leaving site when the visible work is done.', 'buildora' ); ?></p>
				</div>
			</article>
		</div>
		<!-- /wp:html -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
