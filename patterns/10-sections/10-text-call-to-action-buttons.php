<?php
/**
 * Title: Text Call To Action Buttons
 * Slug: lsx-design/text-call-to-action-buttons
 * Description: A call to action with text and a button.
 * Categories: lsx-design/sections
 * Keywords: cta, call to action, buttons, heading
 * Version: 0.2.0
 * License: GPL-2.0-or-later
 * Viewport Width: 1500
 * Block Types:
 * Post Types:
 * Inserter: true
 */
?>
<!-- wp:group {"metadata":{"name":"Text Call To Action Buttons"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","right":"var:preset|spacing|50","left":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-tertiary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--90);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"metadata":{"name":"CTA Inside"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"metadata":{"name":"Titles"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"primary","fontSize":"200"} -->
<p class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Launch Faster', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'No code? No problem. Design websites faster with patterns.', 'lsx-design' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Text and Buttons"},"style":{"spacing":{}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","textColor":"secondary"} -->
<p class="has-text-align-center has-secondary-color has-text-color"><?php esc_html_e( 'The future of WordPress site building is here. Are you ready?', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get Started Today', 'lsx-design' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-button-light"} -->
<div class="wp-block-button is-style-button-light"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'See Our Features', 'lsx-design' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
