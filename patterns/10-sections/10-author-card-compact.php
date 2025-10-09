<?php
/**
 * Title: Author Card: Compact
 * Slug: lsx-design/author-card-compact
 * Description: Compact author card showing avatar, name and a brief bio — ideal for sidebars and post footers.
 * Categories: lsx-design/card, lsx-design/meta
 * Keywords: author, profile, card, bio, meta
 * Viewport Width: 900
 * Block Types:
 * Post Types:
 * Template Types:
 * Inserter: yes
 * Inserter Priority: 60
 * Author: LSX Design Team
 * Version: 1.0.0
 * License: GPL-2.0-or-later
 */
?>
<!-- wp:group {"className":"lsx-author-card-compact","layout":{"type":"flex","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|spacing-30pacing-30"}}} -->
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