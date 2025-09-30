<?php
/**
 * Title: Mobile Nav Panel
 * Slug: lsx-design/mobile-nav-panel
 * Description: Off-canvas mobile navigation panel (template-part/menu).
 * Categories: lsx-design/menu, lsx-design/utility
 * Keywords: mobile, nav, panel, menu
 * Viewport Width: 900
 * Block Types: core/template-part/menu
 * Inserter: yes
 */
?>
<!-- wp:group {"className":"lsx-mobile-nav-panel","layout":{"type":"constrained"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-group lsx-mobile-nav-panel" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:site-title {"level":0} /--></div>

<!-- wp:button {"className":"is-style-ghost"} -->
<div class="wp-block-button is-style-ghost"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Close', 'lsx-design' ); ?></a></div>
<!-- /wp:button --></div>

<!-- wp:navigation {"orientation":"vertical","layout":{"type":"flex","flexWrap":"nowrap"}} /--></div>
<!-- /wp:group -->