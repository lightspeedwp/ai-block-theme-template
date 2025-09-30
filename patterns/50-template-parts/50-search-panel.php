<?php
/**
 * Title: Search Panel
 * Slug: lsx-design/search-panel
 * Description: Focused overlay search panel with a heading and a search block for site-wide search interactions.
 * Categories: lsx-design/utility
 * Keywords: search, panel, overlay, find
 * Viewport Width: 900
 * Block Types: core/template-part/menu
 * Post Types:
 * Template Types:
 * Inserter: yes
 * Inserter Priority: 140
 * Author: LSX Design Team
 * Version: 1.0.0
 * License: GPL-2.0-or-later
 */
?>
<!-- wp:group {"className":"lsx-search-panel","layout":{"type":"constrained"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-group lsx-search-panel" style="padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'Search the site', 'lsx-design' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:search {"label":"<?php esc_attr_e( 'Search', 'lsx-design' ); ?>","showLabel":false,"placeholder":"<?php esc_attr_e( 'Type and press enter...', 'lsx-design' ); ?>"} /--></div>
<!-- /wp:group -->