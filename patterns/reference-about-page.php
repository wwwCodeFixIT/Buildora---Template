<?php
/**
 * Title: Reference About Page
 * Slug: lexora/reference-about-page
 * Categories: lexora, featured
 * Keywords: about, law firm, story, values, attorneys, reference
 * Viewport Width: 1440
 * Description: Marketplace-aligned About page for the Lexora legal theme.
 */
?>
<!-- wp:group {"align":"full","className":"lx-ref-page lx-ref-about","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull lx-ref-page lx-ref-about">
	<!-- wp:html -->
	<style>
	.lx-ref-about {
		background: var(--lx-ref-ivory);
		color: var(--lx-ref-ink);
	}

	.lx-ref-about__hero {
		overflow: hidden;
		background:
			radial-gradient(circle at 18% 30%, rgb(26 59 96 / 30%), transparent 40%),
			linear-gradient(120deg, #061b37, #020e20 72%);
		color: #f8f0e6;
	}

	.lx-ref-about__hero-grid {
		min-height: 410px;
		gap: 0 !important;
		margin-bottom: 0 !important;
	}

	.lx-ref-about__hero-copy {
		padding: 3.8rem clamp(1rem, 5vw, 5rem) 3.8rem 0;
	}

	.lx-ref-about__hero-title {
		max-width: 11.5ch;
		margin: 0;
		color: #f8f1e7;
		font-family: var(--lx-ref-serif);
		font-size: clamp(3.4rem, 5.35vw, 5.5rem);
		font-weight: 500;
		line-height: .98;
		letter-spacing: -.045em;
	}

	.lx-ref-about__hero-title span {
		display: block;
		color: var(--lx-ref-gold-light);
	}

	.lx-ref-about__hero-lead {
		max-width: 42rem;
		margin: 1.45rem 0 0;
		color: rgb(248 241 231 / 82%);
		font-size: 1.05rem;
		line-height: 1.7;
	}

	.lx-ref-about__hero-media {
		position: relative;
		min-height: 410px;
		overflow: hidden;
	}

	.lx-ref-about__hero-media::after {
		position: absolute;
		inset: 0;
		background: linear-gradient(90deg, var(--lx-ref-navy-deep), transparent 27%, transparent 84%, rgb(2 14 32 / 14%));
		content: '';
		pointer-events: none;
	}

	.lx-ref-about__hero-media figure,
	.lx-ref-about__hero-media img {
		width: 100%;
		height: 100%;
		min-height: 410px;
		margin: 0;
	}

	.lx-ref-about__hero-media img {
		display: block;
		object-fit: cover;
		object-position: center;
	}

	.lx-ref-about__story {
		padding: clamp(3.6rem, 6vw, 6rem) 0 2.4rem;
		background: var(--lx-ref-ivory);
	}

	.lx-ref-about__story-grid {
		display: grid;
		grid-template-columns: minmax(0, .88fr) minmax(0, 1.12fr);
		gap: clamp(2.5rem, 6vw, 6rem);
		align-items: start;
	}

	.lx-ref-about__section-title {
		max-width: 12ch;
		margin: 0;
		font-family: var(--lx-ref-serif);
		font-size: clamp(2.7rem, 4.2vw, 4.4rem);
		font-weight: 500;
		line-height: 1.02;
		letter-spacing: -.035em;
	}

	.lx-ref-about__story-copy {
		padding-top: .3rem;
		color: #4c4843;
		font-size: 1rem;
		line-height: 1.8;
	}

	.lx-ref-about__story-copy p {
		margin: 0 0 1.2rem;
	}

	.lx-ref-about__quote {
		margin: 1.6rem 0 0;
		padding: 1.25rem 0 1.25rem 1.4rem;
		border-left: 2px solid var(--lx-ref-gold);
		color: #26231f;
		font-family: var(--lx-ref-serif);
		font-size: 1.35rem;
		line-height: 1.5;
	}

	.lx-ref-about__stats {
		display: grid;
		grid-template-columns: repeat(4, minmax(0, 1fr));
		margin-top: 3.2rem;
		border-block: 1px solid #ded4c8;
	}

	.lx-ref-about__stat {
		min-height: 132px;
		display: grid;
		place-content: center;
		padding: 1.5rem;
		border-right: 1px solid #ded4c8;
		text-align: center;
	}

	.lx-ref-about__stat:last-child {
		border-right: 0;
	}

	.lx-ref-about__stat strong {
		display: block;
		color: #b9853d;
		font-family: var(--lx-ref-serif);
		font-size: clamp(2rem, 3vw, 3.1rem);
		font-weight: 500;
		line-height: 1;
	}

	.lx-ref-about__stat span {
		display: block;
		margin-top: .45rem;
		color: #49443f;
		font-family: var(--lx-ref-serif);
		font-size: .95rem;
	}

	.lx-ref-about__standard {
		padding: clamp(4rem, 7vw, 6.5rem) 0;
		background:
			linear-gradient(120deg, rgb(5 24 48 / 96%), rgb(2 14 32 / 99%)),
			url('https://images.unsplash.com/photo-1765281723581-550d92b63591?auto=format&fit=crop&w=1800&q=84') center / cover no-repeat;
		color: #f8f1e7;
	}

	.lx-ref-about__standard-head {
		display: flex;
		align-items: end;
		justify-content: space-between;
		gap: 3rem;
		margin-bottom: 2.25rem;
	}

	.lx-ref-about__standard-head .lx-ref-about__section-title {
		max-width: 10ch;
		color: #f8f1e7;
	}

	.lx-ref-about__standard-intro {
		max-width: 37rem;
		margin: 0;
		color: rgb(248 241 231 / 72%);
		line-height: 1.65;
	}

	.lx-ref-about__principles {
		display: grid;
		grid-template-columns: repeat(3, minmax(0, 1fr));
		gap: 1rem;
	}

	.lx-ref-about__principle {
		min-height: 230px;
		padding: 1.7rem;
		border: 1px solid rgb(201 155 80 / 42%);
		background: rgb(8 31 57 / 66%);
	}

	.lx-ref-about__principle-number {
		display: block;
		margin-bottom: 1.2rem;
		color: var(--lx-ref-gold);
		font-family: var(--lx-ref-serif);
		font-size: 1.05rem;
	}

	.lx-ref-about__principle h3 {
		margin: 0 0 .7rem;
		color: #f8f1e7;
		font-family: var(--lx-ref-serif);
		font-size: 1.55rem;
		font-weight: 500;
	}

	.lx-ref-about__principle p {
		margin: 0;
		color: rgb(248 241 231 / 72%);
		font-size: .92rem;
		line-height: 1.65;
	}

	.lx-ref-about__leadership {
		padding: clamp(4rem, 7vw, 6.5rem) 0;
		background: #f5f1eb;
	}

	.lx-ref-about__leadership-head {
		display: flex;
		align-items: end;
		justify-content: space-between;
		gap: 2rem;
		margin-bottom: 2rem;
	}

	.lx-ref-about__leadership-copy {
		max-width: 36rem;
		margin: 0;
		color: #5a554f;
		line-height: 1.65;
	}

	.lx-ref-about__leaders {
		display: grid;
		grid-template-columns: repeat(2, minmax(0, 1fr));
		gap: 1.2rem;
	}

	.lx-ref-about__leader {
		display: grid;
		grid-template-columns: minmax(210px, 36%) minmax(0, 1fr);
		min-height: 330px;
		overflow: hidden;
		border: 1px solid #ded2c3;
		background: #fbf8f3;
	}

	.lx-ref-about__leader-media {
		min-height: 330px;
		overflow: hidden;
		background: #171717;
	}

	.lx-ref-about__leader-media img {
		width: 100%;
		height: 100%;
		display: block;
		object-fit: cover;
		object-position: center top;
	}

	.lx-ref-about__leader-body {
		display: flex;
		flex-direction: column;
		justify-content: center;
		padding: clamp(1.5rem, 3vw, 2.5rem);
	}

	.lx-ref-about__leader-role {
		margin: 0 0 .55rem;
		color: #aa7d3b;
		font-size: .76rem;
		font-weight: 600;
		letter-spacing: .1em;
		text-transform: uppercase;
	}

	.lx-ref-about__leader h3 {
		margin: 0;
		font-family: var(--lx-ref-serif);
		font-size: clamp(1.8rem, 2.5vw, 2.55rem);
		font-weight: 500;
	}

	.lx-ref-about__leader p {
		margin: .9rem 0 0;
		color: #57514b;
		line-height: 1.6;
	}

	.lx-ref-about__leader a {
		width: fit-content;
		margin-top: 1.15rem;
		color: #9c6f31;
		font-size: .76rem;
		font-weight: 600;
		letter-spacing: .09em;
		text-decoration: none;
		text-transform: uppercase;
	}

	.lx-ref-about__why {
		padding: 0 0 clamp(4rem, 7vw, 6rem);
		background: #f5f1eb;
	}

	.lx-ref-about__why-box {
		display: grid;
		grid-template-columns: minmax(0, .9fr) minmax(0, 1.1fr);
		gap: 0;
		border: 1px solid #d6c6b2;
		background: #fffdf9;
	}

	.lx-ref-about__why-copy {
		padding: clamp(2rem, 4vw, 3.4rem);
		background: linear-gradient(140deg, #071c38, #020f22);
		color: #f8f1e7;
	}

	.lx-ref-about__why-copy .lx-ref-about__section-title {
		max-width: 10ch;
		color: #f8f1e7;
	}

	.lx-ref-about__why-copy p {
		max-width: 33rem;
		margin: 1.3rem 0 0;
		color: rgb(248 241 231 / 72%);
		line-height: 1.7;
	}

	.lx-ref-about__why-list {
		display: grid;
		grid-template-columns: 1fr 1fr;
		padding: clamp(1rem, 3vw, 2rem);
	}

	.lx-ref-about__why-item {
		padding: 1.45rem;
		border-bottom: 1px solid #e0d6ca;
	}

	.lx-ref-about__why-item:nth-child(odd) {
		border-right: 1px solid #e0d6ca;
	}

	.lx-ref-about__why-item:nth-last-child(-n + 2) {
		border-bottom: 0;
	}

	.lx-ref-about__why-item b {
		display: block;
		margin-bottom: .6rem;
		color: var(--lx-ref-gold);
		font-size: 1.5rem;
	}

	.lx-ref-about__why-item h3 {
		margin: 0;
		font-family: var(--lx-ref-serif);
		font-size: 1.3rem;
		font-weight: 500;
	}

	.lx-ref-about__why-item p {
		margin: .5rem 0 0;
		color: #5a554f;
		font-size: .86rem;
		line-height: 1.55;
	}

	.lx-ref-about__final {
		padding: 0 0 2.5rem;
		background: #f5f1eb;
	}

	.lx-ref-about__final-box {
		display: flex;
		align-items: center;
		justify-content: space-between;
		gap: 2rem;
		padding: 1.8rem 2rem;
		border: 1px solid rgb(201 155 80 / 35%);
		background: linear-gradient(90deg, #061b37, #020e20);
		color: #f8f1e7;
	}

	.lx-ref-about__final-copy h2 {
		margin: 0;
		color: #f8f1e7;
		font-family: var(--lx-ref-serif);
		font-size: clamp(1.7rem, 2.6vw, 2.5rem);
		font-weight: 500;
	}

	.lx-ref-about__final-copy p {
		margin: .35rem 0 0;
		color: rgb(248 241 231 / 72%);
	}

	.lx-ref-about__final .wp-block-button__link {
		min-height: 48px;
		display: inline-flex;
		align-items: center;
		justify-content: center;
		padding-inline: 1.45rem;
		border: 1px solid #d9b56f !important;
		border-radius: 2px !important;
		background: linear-gradient(180deg, #dcb875, #bb8c46) !important;
		color: white !important;
		font-size: .76rem;
		letter-spacing: .075em;
		text-transform: uppercase;
	}

	@media (max-width: 1000px) {
		.lx-ref-about__principles {
			grid-template-columns: 1fr;
		}

		.lx-ref-about__leaders {
			grid-template-columns: 1fr;
		}
	}

	@media (max-width: 800px) {
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
		}

		.lexora-header__brand-text {
			font-size: 1.72rem !important;
			line-height: 1 !important;
		}

		.lx-ref-about__hero {
			background:
				linear-gradient(180deg, rgb(3 20 42 / 98%) 0%, rgb(3 20 42 / 94%) 54%, rgb(3 20 42 / 72%) 78%, rgb(2 14 31 / 38%) 100%),
				url('https://images.unsplash.com/photo-1765281723581-550d92b63591?auto=format&fit=crop&w=1200&q=86') 58% bottom / cover no-repeat !important;
		}

		.lx-ref-about__hero-grid {
			display: block !important;
			width: 100% !important;
			max-width: none !important;
			min-height: 570px !important;
			margin: 0 !important;
		}

		.lx-ref-about__hero-copy {
			width: 100% !important;
			box-sizing: border-box;
			padding: 3.2rem 1.35rem 4rem !important;
		}

		.lx-ref-about__hero-media {
			display: none !important;
		}

		.lx-ref-about__hero-title {
			max-width: 9.4ch;
			font-size: clamp(2.75rem, 12.8vw, 3.55rem) !important;
			line-height: .98;
		}

		.lx-ref-about__hero-lead {
			max-width: 21rem;
			font-size: .96rem;
			line-height: 1.62;
		}

		.lx-ref-about__story {
			padding: 2.8rem 0 1.5rem;
		}

		.lx-ref-about__story-grid {
			grid-template-columns: 1fr;
			gap: 1.6rem;
			width: calc(100% - 40px) !important;
			max-width: none !important;
			margin-inline: auto !important;
		}

		.lx-ref-about__section-title {
			max-width: 11ch;
			font-size: clamp(2.35rem, 10vw, 3rem);
		}

		.lx-ref-about__story-copy {
			font-size: .94rem;
			line-height: 1.7;
		}

		.lx-ref-about__quote {
			font-size: 1.2rem;
		}

		.lx-ref-about__stats {
			grid-template-columns: 1fr 1fr;
			width: 100% !important;
			max-width: none !important;
			margin-top: 2rem;
		}

		.lx-ref-about__stat {
			min-height: 112px;
			padding: 1.1rem .8rem;
		}

		.lx-ref-about__stat:nth-child(2) {
			border-right: 0;
		}

		.lx-ref-about__stat:nth-child(-n + 2) {
			border-bottom: 1px solid #ded4c8;
		}

		.lx-ref-about__standard,
		.lx-ref-about__leadership {
			padding: 3.2rem 0;
		}

		.lx-ref-about__standard-head,
		.lx-ref-about__leadership-head {
			display: grid;
			gap: 1rem;
			width: calc(100% - 40px) !important;
			max-width: none !important;
			margin-inline: auto !important;
		}

		.lx-ref-about__standard-intro,
		.lx-ref-about__leadership-copy {
			font-size: .93rem;
		}

		.lx-ref-about__principles,
		.lx-ref-about__leaders {
			width: calc(100% - 40px) !important;
			max-width: none !important;
			margin-inline: auto !important;
		}

		.lx-ref-about__principle {
			min-height: 0;
			padding: 1.4rem;
		}

		.lx-ref-about__leader {
			grid-template-columns: 118px minmax(0, 1fr);
			min-height: 180px;
		}

		.lx-ref-about__leader-media {
			min-height: 180px;
		}

		.lx-ref-about__leader-body {
			padding: 1rem;
		}

		.lx-ref-about__leader h3 {
			font-size: 1.35rem;
		}

		.lx-ref-about__leader p {
			display: none;
		}

		.lx-ref-about__why {
			padding-bottom: 3.2rem;
		}

		.lx-ref-about__why-box {
			grid-template-columns: 1fr;
			width: calc(100% - 40px) !important;
			max-width: none !important;
			margin-inline: auto !important;
		}

		.lx-ref-about__why-copy {
			padding: 1.8rem 1.4rem;
		}

		.lx-ref-about__why-list {
			grid-template-columns: 1fr;
			padding: 0;
		}

		.lx-ref-about__why-item,
		.lx-ref-about__why-item:nth-child(odd),
		.lx-ref-about__why-item:nth-last-child(-n + 2) {
			padding: 1.25rem 1.4rem;
			border-right: 0;
			border-bottom: 1px solid #e0d6ca;
		}

		.lx-ref-about__why-item:last-child {
			border-bottom: 0;
		}

		.lx-ref-about__final {
			padding-bottom: 1.5rem;
		}

		.lx-ref-about__final-box {
			display: grid;
			gap: 1.3rem;
			width: calc(100% - 40px) !important;
			max-width: none !important;
			margin-inline: auto !important;
			padding: 1.5rem 1.35rem;
		}

		.lx-ref-about__final .wp-block-buttons,
		.lx-ref-about__final .wp-block-button,
		.lx-ref-about__final .wp-block-button__link {
			width: 100%;
		}

		.lx-ref-about__final .wp-block-button__link {
			box-sizing: border-box;
		}
	}

	@media (max-width: 480px) {
		.lx-ref-about__hero-grid {
			min-height: 545px !important;
		}

		.lx-ref-about__hero-copy {
			padding: 2.8rem 1.2rem 3.5rem !important;
		}

		.lx-ref-about__leader {
			grid-template-columns: 104px minmax(0, 1fr);
		}

		.lx-ref-about__leader-body {
			padding: .85rem;
		}

		.lx-ref-about__leader-role {
			font-size: .66rem;
		}
	}
	</style>
	<!-- /wp:html -->

	<!-- wp:group {"align":"full","className":"lx-ref-about__hero","layout":{"type":"default"}} -->
	<div class="wp-block-group alignfull lx-ref-about__hero">
		<!-- wp:columns {"verticalAlignment":"stretch","className":"lx-ref-about__hero-grid lx-ref-frame"} -->
		<div class="wp-block-columns are-vertically-aligned-stretch lx-ref-about__hero-grid lx-ref-frame">
			<!-- wp:column {"verticalAlignment":"center","width":"56%","className":"lx-ref-about__hero-copy"} -->
			<div class="wp-block-column is-vertically-aligned-center lx-ref-about__hero-copy" style="flex-basis:56%">
				<!-- wp:paragraph {"className":"lx-ref-kicker"} --><p class="lx-ref-kicker"><?php esc_html_e( 'About Lexora', 'lexora' ); ?></p><!-- /wp:paragraph -->
				<!-- wp:heading {"level":1,"className":"lx-ref-about__hero-title"} --><h1 class="wp-block-heading lx-ref-about__hero-title"><?php esc_html_e( 'Counsel built on clarity.', 'lexora' ); ?> <span><?php esc_html_e( 'Relationships built on trust.', 'lexora' ); ?></span></h1><!-- /wp:heading -->
				<!-- wp:html --><div class="lx-ref-rule" aria-hidden="true"><span></span><i></i></div><!-- /wp:html -->
				<!-- wp:paragraph {"className":"lx-ref-about__hero-lead"} --><p class="lx-ref-about__hero-lead"><?php esc_html_e( 'Lexora Law Group combines rigorous legal analysis with practical judgment, direct communication and a clear focus on the outcome that matters to each client.', 'lexora' ); ?></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"verticalAlignment":"stretch","width":"44%","className":"lx-ref-about__hero-media"} -->
			<div class="wp-block-column is-vertically-aligned-stretch lx-ref-about__hero-media" style="flex-basis:44%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} --><figure class="wp-block-image size-full"><img src="https://images.unsplash.com/photo-1765281723581-550d92b63591?auto=format&amp;fit=crop&amp;w=1800&amp;q=88" alt="Illuminated classical courthouse columns at night" /></figure><!-- /wp:image --></div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","className":"lx-ref-about__story","layout":{"type":"default"}} -->
	<div class="wp-block-group alignfull lx-ref-about__story">
		<!-- wp:html -->
		<section class="lx-ref-about__story-grid lx-ref-frame" aria-labelledby="lexora-about-story-title">
			<div>
				<p class="lx-ref-kicker"><?php esc_html_e( 'Our approach', 'lexora' ); ?></p>
				<h2 id="lexora-about-story-title" class="lx-ref-about__section-title"><?php esc_html_e( 'We look beyond the legal question.', 'lexora' ); ?></h2>
			</div>
			<div class="lx-ref-about__story-copy">
				<p><?php esc_html_e( 'Strong legal advice starts with understanding what is actually at stake. We consider the law, the evidence, the commercial or personal context and the consequences of each available path.', 'lexora' ); ?></p>
				<p><?php esc_html_e( 'Every matter is led with clear ownership and direct communication. Clients know the strategy, understand the trade-offs and have a practical next step rather than a stack of unnecessary complexity.', 'lexora' ); ?></p>
				<blockquote class="lx-ref-about__quote"><?php esc_html_e( 'The goal is not to make the law sound complicated. The goal is to make the right decision clearer.', 'lexora' ); ?></blockquote>
			</div>
		</section>
		<div class="lx-ref-about__stats lx-ref-frame" aria-label="<?php echo esc_attr__( 'Lexora at a glance', 'lexora' ); ?>">
			<div class="lx-ref-about__stat"><strong>15+</strong><span><?php esc_html_e( 'Years of Experience', 'lexora' ); ?></span></div>
			<div class="lx-ref-about__stat"><strong>500+</strong><span><?php esc_html_e( 'Cases Won', 'lexora' ); ?></span></div>
			<div class="lx-ref-about__stat"><strong>98%</strong><span><?php esc_html_e( 'Client Satisfaction', 'lexora' ); ?></span></div>
			<div class="lx-ref-about__stat"><strong>24/7</strong><span><?php esc_html_e( 'Client Support', 'lexora' ); ?></span></div>
		</div>
		<!-- /wp:html -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","className":"lx-ref-about__standard","layout":{"type":"default"}} -->
	<div class="wp-block-group alignfull lx-ref-about__standard">
		<!-- wp:html -->
		<section class="lx-ref-frame" aria-labelledby="lexora-standard-title">
			<div class="lx-ref-about__standard-head">
				<div><p class="lx-ref-kicker"><?php esc_html_e( 'The Lexora standard', 'lexora' ); ?></p><h2 id="lexora-standard-title" class="lx-ref-about__section-title"><?php esc_html_e( 'What we do not compromise on.', 'lexora' ); ?></h2></div>
				<p class="lx-ref-about__standard-intro"><?php esc_html_e( 'Our work is organised around three principles that keep complex matters focused, accountable and proportionate.', 'lexora' ); ?></p>
			</div>
			<div class="lx-ref-about__principles">
				<article class="lx-ref-about__principle"><span class="lx-ref-about__principle-number">01</span><h3><?php esc_html_e( 'Strategic clarity', 'lexora' ); ?></h3><p><?php esc_html_e( 'We explain the legal position, the practical risks and the strongest available options before significant action is taken.', 'lexora' ); ?></p></article>
				<article class="lx-ref-about__principle"><span class="lx-ref-about__principle-number">02</span><h3><?php esc_html_e( 'Direct ownership', 'lexora' ); ?></h3><p><?php esc_html_e( 'The attorney responsible for your matter remains accountable for the advice, preparation and next decision.', 'lexora' ); ?></p></article>
				<article class="lx-ref-about__principle"><span class="lx-ref-about__principle-number">03</span><h3><?php esc_html_e( 'Measured advocacy', 'lexora' ); ?></h3><p><?php esc_html_e( 'We pursue the outcome firmly while keeping strategy proportionate to the value, urgency and real-world consequences of the matter.', 'lexora' ); ?></p></article>
			</div>
		</section>
		<!-- /wp:html -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","className":"lx-ref-about__leadership","layout":{"type":"default"}} -->
	<div class="wp-block-group alignfull lx-ref-about__leadership">
		<!-- wp:html -->
		<section class="lx-ref-frame" aria-labelledby="lexora-leadership-title">
			<div class="lx-ref-about__leadership-head">
				<div><p class="lx-ref-kicker"><?php esc_html_e( 'Leadership', 'lexora' ); ?></p><h2 id="lexora-leadership-title" class="lx-ref-about__section-title"><?php esc_html_e( 'Experience you can speak to.', 'lexora' ); ?></h2></div>
				<p class="lx-ref-about__leadership-copy"><?php esc_html_e( 'Senior attorneys stay close to the work, giving clients direct access to the judgment behind each recommendation.', 'lexora' ); ?></p>
			</div>
			<div class="lx-ref-about__leaders">
				<article class="lx-ref-about__leader">
					<div class="lx-ref-about__leader-media"><img src="https://images.unsplash.com/photo-1543132220-7bc04a0e790a?auto=format&amp;fit=crop&amp;w=900&amp;h=1100&amp;q=84" alt="David Whitmore" /></div>
					<div class="lx-ref-about__leader-body"><p class="lx-ref-about__leader-role"><?php esc_html_e( 'Founding Partner', 'lexora' ); ?></p><h3><?php esc_html_e( 'David Whitmore', 'lexora' ); ?></h3><p><?php esc_html_e( 'Corporate counsel focused on complex business decisions, negotiations and long-term risk.', 'lexora' ); ?></p><a href="<?php echo esc_url( home_url( '/attorneys/david-whitmore/' ) ); ?>"><?php esc_html_e( 'View profile', 'lexora' ); ?> →</a></div>
				</article>
				<article class="lx-ref-about__leader">
					<div class="lx-ref-about__leader-media"><img src="https://images.unsplash.com/photo-1758518727888-ffa196002e59?auto=format&amp;fit=crop&amp;w=900&amp;h=1100&amp;q=84" alt="Sophia Langford" /></div>
					<div class="lx-ref-about__leader-body"><p class="lx-ref-about__leader-role"><?php esc_html_e( 'Senior Attorney', 'lexora' ); ?></p><h3><?php esc_html_e( 'Sophia Langford', 'lexora' ); ?></h3><p><?php esc_html_e( 'Strategic counsel with a disciplined approach to disputes, family matters and client communication.', 'lexora' ); ?></p><a href="<?php echo esc_url( home_url( '/attorneys/sophia-langford/' ) ); ?>"><?php esc_html_e( 'View profile', 'lexora' ); ?> →</a></div>
				</article>
			</div>
		</section>
		<!-- /wp:html -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","className":"lx-ref-about__why","layout":{"type":"default"}} -->
	<div class="wp-block-group alignfull lx-ref-about__why">
		<!-- wp:html -->
		<section class="lx-ref-about__why-box lx-ref-frame" aria-labelledby="lexora-why-title">
			<div class="lx-ref-about__why-copy"><p class="lx-ref-kicker"><?php esc_html_e( 'Why clients choose us', 'lexora' ); ?></p><h2 id="lexora-why-title" class="lx-ref-about__section-title"><?php esc_html_e( 'Serious counsel without unnecessary distance.', 'lexora' ); ?></h2><p><?php esc_html_e( 'Lexora is designed around the things clients value most when the stakes are high: access, preparation, transparency and practical judgment.', 'lexora' ); ?></p></div>
			<div class="lx-ref-about__why-list">
				<article class="lx-ref-about__why-item"><b>◇</b><h3><?php esc_html_e( 'Direct access', 'lexora' ); ?></h3><p><?php esc_html_e( 'Speak with the attorney responsible for your matter, not through layers of hand-offs.', 'lexora' ); ?></p></article>
				<article class="lx-ref-about__why-item"><b>§</b><h3><?php esc_html_e( 'Prepared from day one', 'lexora' ); ?></h3><p><?php esc_html_e( 'We identify the evidence, pressure points and decision path early so strategy is never improvised.', 'lexora' ); ?></p></article>
				<article class="lx-ref-about__why-item"><b>✓</b><h3><?php esc_html_e( 'Clear communication', 'lexora' ); ?></h3><p><?php esc_html_e( 'You know what is happening, why it matters and what the next step is.', 'lexora' ); ?></p></article>
				<article class="lx-ref-about__why-item"><b>⌁</b><h3><?php esc_html_e( 'Practical judgment', 'lexora' ); ?></h3><p><?php esc_html_e( 'Advice stays focused on the outcome, the cost and the consequences that matter in the real world.', 'lexora' ); ?></p></article>
			</div>
		</section>
		<!-- /wp:html -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","className":"lx-ref-about__final","layout":{"type":"default"}} -->
	<div class="wp-block-group alignfull lx-ref-about__final">
		<!-- wp:group {"className":"lx-ref-about__final-box lx-ref-frame","layout":{"type":"default"}} -->
		<div class="wp-block-group lx-ref-about__final-box lx-ref-frame">
			<!-- wp:group {"className":"lx-ref-about__final-copy","layout":{"type":"default"}} -->
			<div class="wp-block-group lx-ref-about__final-copy"><!-- wp:heading {"level":2} --><h2 class="wp-block-heading"><?php esc_html_e( 'Need clear legal guidance?', 'lexora' ); ?></h2><!-- /wp:heading --><!-- wp:paragraph --><p><?php esc_html_e( 'Tell us what you are facing and we will help you identify the strongest next step.', 'lexora' ); ?></p><!-- /wp:paragraph --></div>
			<!-- /wp:group -->
			<!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/#consultation' ) ); ?>"><?php esc_html_e( 'Schedule a consultation', 'lexora' ); ?></a></div><!-- /wp:button --></div><!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
