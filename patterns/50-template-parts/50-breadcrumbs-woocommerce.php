<?php
/**
 * Title: Breadcrumbs — WooCommerce
 * Slug: lsx-design/breadcrumbs-woocommerce
 * Description: Breadcrumbs pattern that uses the WooCommerce breadcrumb block when WooCommerce is active. Provides a simple fallback markup when the WooCommerce block isn't available.
 * Categories: navigation
 * Keywords: breadcrumb, woocommerce, shop, navigation
 * Viewport Width: 1000
 * Block Types: core/template-part
 * Inserter: true
 */
?>
<!-- wp:group {"tagName":"nav","className":"pattern-breadcrumbs lsx-breadcrumbs-woocommerce","layout":{"type":"constrained"},"ariaLabel":"Breadcrumb"} -->
<nav class="wp-block-group pattern-breadcrumbs lsx-breadcrumbs-woocommerce" aria-label="<?php echo esc_attr_x( 'Breadcrumb', 'aria label', 'lsx-design' ); ?>">
	<!-- Use WooCommerce breadcrumb block when available -->
	<!-- wp:woocommerce/breadcrumbs /-->

	<!-- Fallback for sites without WooCommerce or its block -->
	<!-- wp:paragraph {"className":"breadcrumb-fallback has-small-font-size"} -->
	<p class="breadcrumb-fallback has-small-font-size">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html__( 'Home', 'lsx-design' ); ?></a> &nbsp; / &nbsp;
		<span><?php echo esc_html__( 'Shop', 'lsx-design' ); ?></span>
	</p>
	<!-- /wp:paragraph -->
</nav>
<!-- /wp:group -->