<?php
/**
 * Title: Services Page Details
 * Slug: buildora/services-page-details
 * Categories: buildora, services
 * Keywords: services, renovation, construction, maintenance
 * Description: Detailed service rows for renovation, construction and maintenance work.
 */
?>
<!-- wp:group {"align":"full","className":"buildora-service-details","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull buildora-service-details">
	<!-- wp:group {"align":"wide","className":"buildora-service-details__intro","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide buildora-service-details__intro">
		<!-- wp:paragraph {"className":"buildora-service-details__eyebrow"} -->
		<p class="buildora-service-details__eyebrow"><?php esc_html_e( 'Choose the right support', 'buildora' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":2,"className":"buildora-service-details__title"} -->
		<h2 class="wp-block-heading buildora-service-details__title"><?php esc_html_e( 'Three service lines. One accountable way of working.', 'buildora' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","anchor":"renovation","tagName":"article","className":"buildora-service-detail","layout":{"type":"default"}} -->
	<article id="renovation" class="wp-block-group alignwide buildora-service-detail">
		<!-- wp:group {"className":"buildora-service-detail__number","layout":{"type":"default"}} -->
		<div class="wp-block-group buildora-service-detail__number"><!-- wp:paragraph --><p>01</p><!-- /wp:paragraph --></div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"buildora-service-detail__main","layout":{"type":"default"}} -->
		<div class="wp-block-group buildora-service-detail__main">
			<!-- wp:paragraph {"className":"buildora-service-detail__kicker"} --><p class="buildora-service-detail__kicker"><?php esc_html_e( 'Residential · Interior · Exterior', 'buildora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"className":"buildora-service-detail__title"} --><h3 class="wp-block-heading buildora-service-detail__title"><?php esc_html_e( 'Renovation', 'buildora' ); ?></h3><!-- /wp:heading -->
			<!-- wp:paragraph {"className":"buildora-service-detail__copy","textColor":"muted"} --><p class="buildora-service-detail__copy has-muted-color has-text-color"><?php esc_html_e( 'Upgrade a room or rework the whole property without losing control of the programme. We coordinate the practical details, sequencing and finish around one agreed scope.', 'buildora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"buildora-service-detail__link"} --><p class="buildora-service-detail__link"><a href="<?php echo esc_url( home_url( '/contact/#project-brief' ) ); ?>"><?php esc_html_e( 'Discuss a renovation', 'buildora' ); ?> <span aria-hidden="true">↗</span></a></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"buildora-service-detail__scope","layout":{"type":"default"}} -->
		<div class="wp-block-group buildora-service-detail__scope">
			<!-- wp:paragraph {"className":"buildora-service-detail__scope-label"} --><p class="buildora-service-detail__scope-label"><?php esc_html_e( 'Typical scope', 'buildora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:list {"className":"buildora-service-detail__scope-list"} -->
			<ul class="wp-block-list buildora-service-detail__scope-list">
				<li><?php esc_html_e( 'Kitchens & bathrooms', 'buildora' ); ?></li>
				<li><?php esc_html_e( 'Full-home upgrades', 'buildora' ); ?></li>
				<li><?php esc_html_e( 'Internal reconfiguration', 'buildora' ); ?></li>
				<li><?php esc_html_e( 'Exterior improvements', 'buildora' ); ?></li>
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:group -->
	</article>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","anchor":"construction","tagName":"article","className":"buildora-service-detail buildora-service-detail--dark","backgroundColor":"ink","textColor":"paper","layout":{"type":"default"}} -->
	<article id="construction" class="wp-block-group alignwide buildora-service-detail buildora-service-detail--dark has-paper-color has-ink-background-color has-text-color has-background">
		<!-- wp:group {"className":"buildora-service-detail__number","layout":{"type":"default"}} -->
		<div class="wp-block-group buildora-service-detail__number"><!-- wp:paragraph --><p>02</p><!-- /wp:paragraph --></div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"buildora-service-detail__main","layout":{"type":"default"}} -->
		<div class="wp-block-group buildora-service-detail__main">
			<!-- wp:paragraph {"className":"buildora-service-detail__kicker"} --><p class="buildora-service-detail__kicker"><?php esc_html_e( 'Extensions · New build · Commercial', 'buildora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"className":"buildora-service-detail__title"} --><h3 class="wp-block-heading buildora-service-detail__title"><?php esc_html_e( 'Construction', 'buildora' ); ?></h3><!-- /wp:heading -->
			<!-- wp:paragraph {"className":"buildora-service-detail__copy"} --><p class="buildora-service-detail__copy"><?php esc_html_e( 'For larger jobs, we build around milestones you can see and decisions you can track. The emphasis stays on coordination, accountability and a handover that does not drag on.', 'buildora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"buildora-service-detail__link"} --><p class="buildora-service-detail__link"><a href="<?php echo esc_url( home_url( '/contact/#project-brief' ) ); ?>"><?php esc_html_e( 'Plan your build', 'buildora' ); ?> <span aria-hidden="true">↗</span></a></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"buildora-service-detail__scope","layout":{"type":"default"}} -->
		<div class="wp-block-group buildora-service-detail__scope">
			<!-- wp:paragraph {"className":"buildora-service-detail__scope-label"} --><p class="buildora-service-detail__scope-label"><?php esc_html_e( 'Typical scope', 'buildora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:list {"className":"buildora-service-detail__scope-list"} -->
			<ul class="wp-block-list buildora-service-detail__scope-list">
				<li><?php esc_html_e( 'Residential extensions', 'buildora' ); ?></li>
				<li><?php esc_html_e( 'Light-commercial fit-out', 'buildora' ); ?></li>
				<li><?php esc_html_e( 'Structural alterations', 'buildora' ); ?></li>
				<li><?php esc_html_e( 'Coordinated trade packages', 'buildora' ); ?></li>
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:group -->
	</article>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","anchor":"maintenance","tagName":"article","className":"buildora-service-detail","layout":{"type":"default"}} -->
	<article id="maintenance" class="wp-block-group alignwide buildora-service-detail">
		<!-- wp:group {"className":"buildora-service-detail__number","layout":{"type":"default"}} -->
		<div class="wp-block-group buildora-service-detail__number"><!-- wp:paragraph --><p>03</p><!-- /wp:paragraph --></div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"buildora-service-detail__main","layout":{"type":"default"}} -->
		<div class="wp-block-group buildora-service-detail__main">
			<!-- wp:paragraph {"className":"buildora-service-detail__kicker"} --><p class="buildora-service-detail__kicker"><?php esc_html_e( 'Repairs · Preventive care · Call-outs', 'buildora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"className":"buildora-service-detail__title"} --><h3 class="wp-block-heading buildora-service-detail__title"><?php esc_html_e( 'Repairs & maintenance', 'buildora' ); ?></h3><!-- /wp:heading -->
			<!-- wp:paragraph {"className":"buildora-service-detail__copy","textColor":"muted"} --><p class="buildora-service-detail__copy has-muted-color has-text-color"><?php esc_html_e( 'Smaller work still deserves a clear response. We handle practical repairs and planned upkeep with simple communication, sensible priorities and no unnecessary process.', 'buildora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"buildora-service-detail__link"} --><p class="buildora-service-detail__link"><a href="<?php echo esc_url( home_url( '/contact/#project-brief' ) ); ?>"><?php esc_html_e( 'Book a service visit', 'buildora' ); ?> <span aria-hidden="true">↗</span></a></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"buildora-service-detail__scope","layout":{"type":"default"}} -->
		<div class="wp-block-group buildora-service-detail__scope">
			<!-- wp:paragraph {"className":"buildora-service-detail__scope-label"} --><p class="buildora-service-detail__scope-label"><?php esc_html_e( 'Typical scope', 'buildora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:list {"className":"buildora-service-detail__scope-list"} -->
			<ul class="wp-block-list buildora-service-detail__scope-list">
				<li><?php esc_html_e( 'Property repairs', 'buildora' ); ?></li>
				<li><?php esc_html_e( 'Preventive maintenance', 'buildora' ); ?></li>
				<li><?php esc_html_e( 'Landlord & property support', 'buildora' ); ?></li>
				<li><?php esc_html_e( 'Small improvement works', 'buildora' ); ?></li>
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:group -->
	</article>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
