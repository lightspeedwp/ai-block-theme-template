<?php
/**
 * Title: Breadcrumbs — Yoast SEO
 * Slug: lsx-design/breadcrumbs-yoast
 * Description: Breadcrumbs pattern that uses the Yoast SEO breadcrumb block when the Yoast plugin is active. Falls back to a lightweight markup when the block is not available.
 * Categories: navigation
 * Keywords: breadcrumb, yoast, seo, navigation
 * Version: 0.2.0
 * License: GPL-2.0-or-later
 * Viewport Width: 1000
 * Block Types: core/template-part
 * Inserter: true
 */
?>
<!-- wp:group {"tagName":"nav","className":"pattern-breadcrumbs lsx-breadcrumbs-yoast","layout":{"type":"constrained"},"ariaLabel":"Breadcrumb"} -->
<nav class="wp-block-group pattern-breadcrumbs lsx-breadcrumbs-yoast" aria-label="<?php echo esc_attr_x( 'Breadcrumb', 'aria label', 'lsx-design' ); ?>">
	<!-- Use Yoast SEO breadcrumb block when available -->
	<!-- wp:yoast-seo/breadcrumbs /-->

	<!-- Fallback for sites without Yoast's block -->
	<!-- wp:paragraph {"className":"breadcrumb-fallback has-small-font-size"} -->
	<p class="breadcrumb-fallback has-small-font-size">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html__( 'Home', 'lsx-design' ); ?></a> &nbsp; / &nbsp;
		<span><?php echo esc_html__( 'Current page', 'lsx-design' ); ?></span>
	</p>
	<!-- /wp:paragraph -->
</nav>
<!-- /wp:group -->