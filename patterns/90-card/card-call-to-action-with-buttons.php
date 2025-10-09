<?php
/**
 * Title: Call To Action Card With Buttons
 * Slug: lsx-design/call-to-action-card-with-buttons
 * Description: A call to action with text and a button.
 * Categories: lsx-design/sections
 * Keywords: cta, button, call to action, link
 * Version: 0.2.0
 * License: GPL-2.0-or-later
 * Viewport Width: 600
 * Block Types:
 * Post Types:
 * Inserter: true
 */
?>
<!-- wp:group {"metadata":{"name":"Call To Action Box"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","right":"var:preset|spacing|70","left":"var:preset|spacing|70"}},"border":{"radius":"5px"}},"backgroundColor":"primary","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-color has-primary-background-color has-text-color has-background" style="border-radius:5px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)"><!-- wp:group {"metadata":{"name":"Text"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"300"} -->
<p class="has-text-align-center has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Build With Patterns', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","textColor":"primary-accent"} -->
<p class="has-text-align-center has-primary-accent-color has-text-color"><?php esc_html_e( 'Build your blazing fast website with the power of the WordPress Site Editor and beautiful, pre-made pattern designs from Ollie. No coding skills required.', 'lsx-design' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-button-light"} -->
<div class="wp-block-button is-style-button-light"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get Started Today', 'lsx-design' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Explore Features', 'lsx-design' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
