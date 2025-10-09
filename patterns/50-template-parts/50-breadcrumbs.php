<?php
/**
 * Title: Breadcrumbs
 * Slug: lsx-design/breadcrumbs
 * Description: Small breadcrumb trail used under hero areas and page headers. Uses the core Breadcrumbs block where available and provides a lightweight fallback for older WP versions.
 * Categories: navigation
 * Keywords: breadcrumb, navigation, path, trail
 * Version: 0.2.0
 * License: GPL-2.0-or-later
 * Viewport Width: 1000
 * Block Types: core/template-part
 * Inserter: true
 */
?>
<!-- wp:group {"tagName":"nav","className":"pattern-breadcrumbs lsx-breadcrumbs","layout":{"type":"constrained"},"ariaLabel":"Breadcrumb"} -->
<nav class="wp-block-group pattern-breadcrumbs lsx-breadcrumbs" aria-label="Breadcrumb">
  <!-- Use core Breadcrumbs block where supported -->
  <!-- wp:breadcrumb /-->
  <!-- Fallback for editors without the block: -->
  <!-- wp:paragraph {"className":"breadcrumb-fallback has-small-font-size"} -->
  <p class="breadcrumb-fallback has-small-font-size"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html__( 'Home', 'lsx-design' ); ?></a> &nbsp; / &nbsp; <span><?php echo esc_html__( 'Current page', 'lsx-design' ); ?></span></p>
  <!-- /wp:paragraph -->
</nav>
<!-- /wp:group -->
