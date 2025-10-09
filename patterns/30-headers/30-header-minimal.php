<?php
/**
 * Title: Header: Minimal
 * Slug: lsx-design/header-minimal
 * Description: Compact header template-part pattern with site title and condensed menu toggle. Useful for small-screen layouts and minimal pages.
 * Categories: lsx-design/header
 * Keywords: header, minimal, compact, nav, mobile
 * Viewport Width: 1200
 * Block Types: core/template-part/header
 * Post Types:
 * Template Types: all
 * Inserter: yes
 * Inserter Priority: 20
 * Author: LSX Design Team
 * Version: 1.0.0
 * License: GPL-2.0-or-later
 */
?>
<!-- wp:group {"align":"wide","className":"lsx-header-minimal","layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide lsx-header-minimal"><!-- wp:site-title {"level":0} /-->

<!-- wp:group {"layout":{"type":"flex","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-group"><!-- wp:navigation {"orientation":"horizontal","itemsJustification":"right","className":"lsx-nav-minimal"} /-->

<!-- wp:button {"className":"is-style-ghost"} -->
<div class="wp-block-button is-style-ghost"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Menu', 'lsx-design' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->