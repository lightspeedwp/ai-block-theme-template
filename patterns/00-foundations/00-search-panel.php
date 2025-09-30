<?php
/**
 * Title: Search Panel
 * Slug: lsx-design/search-panel
 * Description: Overlay search panel with heading and search block for focused search UX.
 * Categories: lsx-design/utility
 * Keywords: search, overlay, panel
 * Viewport Width: 900
 * Block Types: core/template-part/menu
 * Inserter: yes
 */
?>
<!-- wp:group {"className":"lsx-search-panel","layout":{"type":"constrained"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-group lsx-search-panel" style="padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'Search the site', 'lsx-design' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:search {"label":"<?php esc_attr_e( 'Search', 'lsx-design' ); ?>","showLabel":false,"placeholder":"<?php esc_attr_e( 'Type and press enter...', 'lsx-design' ); ?>"} /--></div>
<!-- /wp:group -->