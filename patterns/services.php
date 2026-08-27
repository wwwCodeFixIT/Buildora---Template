<?php
/**
 * Title: Services Grid
 * Slug: buildora/services-grid
 * Categories: buildora, services
 * Keywords: services, cards, grid
 * Description: Three service cards with accessible headings and links.
 */
?>
<!-- wp:group {"anchor":"services","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div id="services" class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"textAlign":"center","fontSize":"xl"} --><h2 class="wp-block-heading has-text-align-center has-xl-font-size"><?php esc_html_e( 'Services built around your project', 'buildora' ); ?></h2><!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center","textColor":"muted","fontSize":"md"} --><p class="has-text-align-center has-muted-color has-text-color has-md-font-size"><?php esc_html_e( 'Replace the demo content with the contractor’s highest-margin services.', 'buildora' ); ?></p><!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"},"blockGap":{"left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--60)">
		<!-- wp:column {"className":"buildora-card"} --><div class="wp-block-column buildora-card"><!-- wp:heading {"level":3} --><h3 class="wp-block-heading"><?php esc_html_e( 'Renovation', 'buildora' ); ?></h3><!-- /wp:heading --><!-- wp:paragraph {"textColor":"muted"} --><p class="has-muted-color has-text-color"><?php esc_html_e( 'Interior and exterior renovation delivered with a clear scope and timeline.', 'buildora' ); ?></p><!-- /wp:paragraph --><!-- wp:paragraph --><p><a href="#contact"><?php esc_html_e( 'Learn more', 'buildora' ); ?> →</a></p><!-- /wp:paragraph --></div><!-- /wp:column -->
		<!-- wp:column {"className":"buildora-card"} --><div class="wp-block-column buildora-card"><!-- wp:heading {"level":3} --><h3 class="wp-block-heading"><?php esc_html_e( 'Construction', 'buildora' ); ?></h3><!-- /wp:heading --><!-- wp:paragraph {"textColor":"muted"} --><p class="has-muted-color has-text-color"><?php esc_html_e( 'Reliable construction services for residential and commercial projects.', 'buildora' ); ?></p><!-- /wp:paragraph --><!-- wp:paragraph --><p><a href="#contact"><?php esc_html_e( 'Learn more', 'buildora' ); ?> →</a></p><!-- /wp:paragraph --></div><!-- /wp:column -->
		<!-- wp:column {"className":"buildora-card"} --><div class="wp-block-column buildora-card"><!-- wp:heading {"level":3} --><h3 class="wp-block-heading"><?php esc_html_e( 'Maintenance', 'buildora' ); ?></h3><!-- /wp:heading --><!-- wp:paragraph {"textColor":"muted"} --><p class="has-muted-color has-text-color"><?php esc_html_e( 'Responsive maintenance and repair services with straightforward communication.', 'buildora' ); ?></p><!-- /wp:paragraph --><!-- wp:paragraph --><p><a href="#contact"><?php esc_html_e( 'Learn more', 'buildora' ); ?> →</a></p><!-- /wp:paragraph --></div><!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
