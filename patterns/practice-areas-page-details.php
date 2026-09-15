<?php
/**
 * Title: Practice Areas Details
 * Slug: lexora/practice-areas-page-details
 * Categories: lexora, services
 * Keywords: practice areas, legal services, business law, disputes, family law
 * Description: Detailed legal practice area rows for the Lexora theme.
 */
?>
<!-- wp:group {"align":"full","className":"buildora-service-details","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull buildora-service-details">
	<!-- wp:group {"align":"wide","className":"buildora-service-details__intro","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide buildora-service-details__intro">
		<!-- wp:paragraph {"className":"buildora-service-details__eyebrow"} -->
		<p class="buildora-service-details__eyebrow"><?php esc_html_e( 'How we can help', 'lexora' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":2,"className":"buildora-service-details__title"} -->
		<h2 class="wp-block-heading buildora-service-details__title"><?php esc_html_e( 'Focused advice. Practical strategy. Clear decisions.', 'lexora' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","anchor":"business-law","tagName":"article","className":"buildora-service-detail","layout":{"type":"default"}} -->
	<article id="business-law" class="wp-block-group alignwide buildora-service-detail">
		<!-- wp:group {"className":"buildora-service-detail__number","layout":{"type":"default"}} --><div class="wp-block-group buildora-service-detail__number"><!-- wp:paragraph --><p>01</p><!-- /wp:paragraph --></div><!-- /wp:group -->
		<!-- wp:group {"className":"buildora-service-detail__main","layout":{"type":"default"}} -->
		<div class="wp-block-group buildora-service-detail__main">
			<!-- wp:paragraph {"className":"buildora-service-detail__kicker"} --><p class="buildora-service-detail__kicker"><?php esc_html_e( 'Companies · Contracts · Transactions', 'lexora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"className":"buildora-service-detail__title"} --><h3 class="wp-block-heading buildora-service-detail__title"><?php esc_html_e( 'Business law', 'lexora' ); ?></h3><!-- /wp:heading -->
			<!-- wp:paragraph {"className":"buildora-service-detail__copy","textColor":"muted"} --><p class="buildora-service-detail__copy has-muted-color has-text-color"><?php esc_html_e( 'Practical legal support for the decisions that keep a business moving: agreements, governance, risk, negotiations and transactions. Advice stays commercially grounded and easy to act on.', 'lexora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"buildora-service-detail__link"} --><p class="buildora-service-detail__link"><a href="<?php echo esc_url( home_url( '/contact/#consultation' ) ); ?>"><?php esc_html_e( 'Discuss a business matter', 'lexora' ); ?> <span aria-hidden="true">↗</span></a></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"buildora-service-detail__scope","layout":{"type":"default"}} -->
		<div class="wp-block-group buildora-service-detail__scope">
			<!-- wp:paragraph {"className":"buildora-service-detail__scope-label"} --><p class="buildora-service-detail__scope-label"><?php esc_html_e( 'Typical matters', 'lexora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:list {"className":"buildora-service-detail__scope-list"} -->
			<ul class="wp-block-list buildora-service-detail__scope-list">
				<li><?php esc_html_e( 'Commercial contracts', 'lexora' ); ?></li>
				<li><?php esc_html_e( 'Company governance', 'lexora' ); ?></li>
				<li><?php esc_html_e( 'Shareholder arrangements', 'lexora' ); ?></li>
				<li><?php esc_html_e( 'Business transactions', 'lexora' ); ?></li>
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:group -->
	</article>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","anchor":"disputes","tagName":"article","className":"buildora-service-detail buildora-service-detail--dark","backgroundColor":"ink","textColor":"paper","layout":{"type":"default"}} -->
	<article id="disputes" class="wp-block-group alignwide buildora-service-detail buildora-service-detail--dark has-paper-color has-ink-background-color has-text-color has-background">
		<!-- wp:group {"className":"buildora-service-detail__number","layout":{"type":"default"}} --><div class="wp-block-group buildora-service-detail__number"><!-- wp:paragraph --><p>02</p><!-- /wp:paragraph --></div><!-- /wp:group -->
		<!-- wp:group {"className":"buildora-service-detail__main","layout":{"type":"default"}} -->
		<div class="wp-block-group buildora-service-detail__main">
			<!-- wp:paragraph {"className":"buildora-service-detail__kicker"} --><p class="buildora-service-detail__kicker"><?php esc_html_e( 'Negotiation · Litigation · Resolution', 'lexora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"className":"buildora-service-detail__title"} --><h3 class="wp-block-heading buildora-service-detail__title"><?php esc_html_e( 'Dispute resolution', 'lexora' ); ?></h3><!-- /wp:heading -->
			<!-- wp:paragraph {"className":"buildora-service-detail__copy"} --><p class="buildora-service-detail__copy"><?php esc_html_e( 'When a disagreement becomes a legal risk, we focus on the outcome, the evidence and the most proportionate route forward. Strategy is built around leverage, cost and commercial reality.', 'lexora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"buildora-service-detail__link"} --><p class="buildora-service-detail__link"><a href="<?php echo esc_url( home_url( '/contact/#consultation' ) ); ?>"><?php esc_html_e( 'Talk through a dispute', 'lexora' ); ?> <span aria-hidden="true">↗</span></a></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"buildora-service-detail__scope","layout":{"type":"default"}} -->
		<div class="wp-block-group buildora-service-detail__scope">
			<!-- wp:paragraph {"className":"buildora-service-detail__scope-label"} --><p class="buildora-service-detail__scope-label"><?php esc_html_e( 'Typical matters', 'lexora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:list {"className":"buildora-service-detail__scope-list"} -->
			<ul class="wp-block-list buildora-service-detail__scope-list">
				<li><?php esc_html_e( 'Contract disputes', 'lexora' ); ?></li>
				<li><?php esc_html_e( 'Commercial claims', 'lexora' ); ?></li>
				<li><?php esc_html_e( 'Negotiated settlements', 'lexora' ); ?></li>
				<li><?php esc_html_e( 'Civil litigation', 'lexora' ); ?></li>
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:group -->
	</article>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","anchor":"family-property","tagName":"article","className":"buildora-service-detail","layout":{"type":"default"}} -->
	<article id="family-property" class="wp-block-group alignwide buildora-service-detail">
		<!-- wp:group {"className":"buildora-service-detail__number","layout":{"type":"default"}} --><div class="wp-block-group buildora-service-detail__number"><!-- wp:paragraph --><p>03</p><!-- /wp:paragraph --></div><!-- /wp:group -->
		<!-- wp:group {"className":"buildora-service-detail__main","layout":{"type":"default"}} -->
		<div class="wp-block-group buildora-service-detail__main">
			<!-- wp:paragraph {"className":"buildora-service-detail__kicker"} --><p class="buildora-service-detail__kicker"><?php esc_html_e( 'Family · Property · Private clients', 'lexora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"className":"buildora-service-detail__title"} --><h3 class="wp-block-heading buildora-service-detail__title"><?php esc_html_e( 'Family & property', 'lexora' ); ?></h3><!-- /wp:heading -->
			<!-- wp:paragraph {"className":"buildora-service-detail__copy","textColor":"muted"} --><p class="buildora-service-detail__copy has-muted-color has-text-color"><?php esc_html_e( 'Sensitive personal matters need calm advice and disciplined preparation. We help clients understand the practical consequences of each option before they commit to a course of action.', 'lexora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"buildora-service-detail__link"} --><p class="buildora-service-detail__link"><a href="<?php echo esc_url( home_url( '/contact/#consultation' ) ); ?>"><?php esc_html_e( 'Request confidential advice', 'lexora' ); ?> <span aria-hidden="true">↗</span></a></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"buildora-service-detail__scope","layout":{"type":"default"}} -->
		<div class="wp-block-group buildora-service-detail__scope">
			<!-- wp:paragraph {"className":"buildora-service-detail__scope-label"} --><p class="buildora-service-detail__scope-label"><?php esc_html_e( 'Typical matters', 'lexora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:list {"className":"buildora-service-detail__scope-list"} -->
			<ul class="wp-block-list buildora-service-detail__scope-list">
				<li><?php esc_html_e( 'Family arrangements', 'lexora' ); ?></li>
				<li><?php esc_html_e( 'Property transactions', 'lexora' ); ?></li>
				<li><?php esc_html_e( 'Ownership disputes', 'lexora' ); ?></li>
				<li><?php esc_html_e( 'Private client advice', 'lexora' ); ?></li>
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:group -->
	</article>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
