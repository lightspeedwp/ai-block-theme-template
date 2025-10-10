<?php
/**
 * Title: Author Card: Compact
 * Slug: lsx-design/author-card-compact
 * Description: Small author card with avatar, name and short bio — used in sidebars and post footers.
 * Categories: lsx-design/card, lsx-design/meta
 * Keywords: author, profile, card, meta
 * Version: 0.2.0
 * License: GPL-2.0-or-later
 * Viewport Width: 800
 * Block Types:
 * Inserter: yes
 */
?>
<!-- wp:group {"className":"lsx-author-card-compact","layout":{"type":"flex","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-group lsx-author-card-compact"><!-- wp:avatar {"size":48} /-->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
<p style="font-style:normal;font-weight:600"><?php esc_html_e( 'Author Name', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"200","textColor":"secondary"} -->
<p class="has-secondary-color has-text-color has-small-font-size"><?php esc_html_e( 'Short author bio or role.', 'lsx-design' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->