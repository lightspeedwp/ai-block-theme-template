<?php
/**
 * Title: Site Notice
 * Slug: lsx-design/site-notice
 * Description: Dismissible site notice / announcement bar for promotions or important announcements. Place in parts/site-notice or header template-part.
 * Categories: lsx-design/utility
 * Keywords: notice, announcement, promo, banner, dismiss
 * Viewport Width: 1200
 * Block Types:
 * Post Types:
 * Template Types:
 * Inserter: yes
 * Inserter Priority: 120
 * Author: LSX Design Team
 * Version: 1.0.0
 * License: GPL-2.0-or-later
 */
?>
<!-- wp:group {"className":"lsx-site-notice","style":{"spacing":{"padding":{"top":"8px","bottom":"8px","left":"12px","right":"12px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group lsx-site-notice" style="padding-top:8px;padding-right:var(--wp--preset--spacing--spacing-20);padding-bottom:8px;padding-left:var(--wp--preset--spacing--spacing-20)"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"auto"} -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
<p style="font-style:normal;font-weight:500"><?php esc_html_e( 'Free shipping on orders over $50 — limited time offer!', 'lsx-design' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"auto"} -->
<div class="wp-block-column"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Shop Now', 'lsx-design' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-ghost"} -->
<div class="wp-block-button is-style-ghost"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Dismiss', 'lsx-design' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->