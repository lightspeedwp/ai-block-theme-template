<?php
/**
 * Title: Mobile Nav Panel
 * Slug: lsx-design/mobile-nav-panel
 * Description: Off-canvas mobile navigation panel (template-part/menu) with site title and close control. Intended for mobile overlay navigation.
 * Categories: lsx-design/menu, lsx-design/utility
 * Keywords: mobile, nav, panel, menu, overlay
 * Viewport Width: 900
 * Block Types: core/template-part/menu
 * Post Types:
 * Template Types:
 * Inserter: yes
 * Inserter Priority: 130
 * Author: LSX Design Team
 * Version: 1.0.0
 * License: GPL-2.0-or-later
 */
?>
<!-- wp:group {"className":"lsx-mobile-nav-panel","layout":{"type":"constrained"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|spacing-50","bottom":"var:preset|spacing|spacing-50","left":"var:preset|spacing|spacing-50","right":"var:preset|spacing|spacing-50"}}}} -->
<div class="wp-block-group lsx-mobile-nav-panel" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:site-title {"level":0} /--></div>

<!-- wp:button {"className":"is-style-ghost"} -->
<div class="wp-block-button is-style-ghost"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Close', 'lsx-design' ); ?></a></div>
<!-- /wp:button --></div>

<!-- wp:navigation {"orientation":"vertical","layout":{"type":"flex","flexWrap":"nowrap"}} /--></div>
<!-- /wp:group -->