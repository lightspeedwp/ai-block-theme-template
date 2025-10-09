<?php
/**
 * Title: Menu Panel: Compact
 * Slug: lsx-design/menu-panel-compact
 * Description: Compact two-column menu / mega-panel for desktop dropdowns. Designed to be inserted into parts/menu (core/template-part/menu). Provides grouped links and short CTAs for product and resource sections.
 * Categories: lsx-design/menu, lsx-design/utility
 * Keywords: menu, mega-menu, panel, navigation, dropdown, compact
 * Viewport Width: 1100
 * Block Types: core/template-part/menu
 * Post Types:
 * Template Types:
 * Inserter: yes
 * Inserter Priority: 110
 * Author: LSX Design Team
 * Version: 1.0.0
 * License: GPL-2.0-or-later
 */
?>
<!-- wp:group {"align":"wide","style":{"border":{"radius":"8px","width":"1px","color":"var(--wp--preset--color--primary)"},"spacing":{"padding":{"top":"var:preset|spacing|spacing-30","bottom":"var:preset|spacing|spacing-30","left":"var:preset|spacing|spacing-50","right":"var:preset|spacing|spacing-50"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-base-background-color has-background" style="border-radius:8px;border-width:1px;border-color:var(--wp--preset--color--primary);padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|spacing-70"}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"200","style":{"typography":{"fontWeight":"600"}}} -->
<p class="has-small-font-size" style="font-weight:600"><?php esc_html_e( 'Products', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|spacing-30"}}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php esc_html_e( 'Overview', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Templates', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Integrations', 'lsx-design' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"200","style":{"typography":{"fontWeight":"600"}}} -->
<p class="has-small-font-size" style="font-weight:600"><?php esc_html_e( 'Resources', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|spacing-30"}}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php esc_html_e( 'Docs', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Guides', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Community', 'lsx-design' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|spacing-30"},"spacingPreset":"compact"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:separator {"className":"is-style-separator-thin"} -->
<hr class="wp-block-separator is-style-separator-thin"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"fontSize":"200"} -->
<p class="has-small-font-size"><?php esc_html_e( 'Need help choosing?', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Contact Sales', 'lsx-design' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->