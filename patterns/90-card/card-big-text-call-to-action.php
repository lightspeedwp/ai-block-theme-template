<?php
/**
 * Title: Big Text Call To Action Card
 * Slug: lsx-design/big-text-call-to-action-card
 * Description:
 * Categories: lsx-design/sections
 * Keywords: card, button, cta, heading, call to action
 * Version: 0.2.0
 * License: GPL-2.0-or-later
 * Viewport Width: 600
 * Block Types:
 * Post Types:
 * Inserter: true
 */
?>
<!-- wp:cover {"overlayColor":"main","isUserOverlayColor":true,"minHeightUnit":"px","contentPosition":"center center","className":"is-style-default","style":{"spacing":{"padding":{"top":"var:preset|spacing|spacing-30pacing-80","bottom":"var:preset|spacing|spacing-30pacing-80"}}}} -->
<div class="wp-block-cover is-style-default" style="padding-top:var(--wp--preset--spacing--spacing-80);padding-bottom:var(--wp--preset--spacing--spacing-80)"><span aria-hidden="true" class="wp-block-cover__background has-main-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"metadata":{"name":"Text"},"style":{"spacing":{"blockGap":"var:preset|spacing|spacing-30pacing-30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"main-accent","fontSize":"200"} -->
<p class="has-main-accent-color has-text-color has-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Explore Ollie', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"base","fontSize":"300"} -->
<p class="has-text-align-left has-base-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Design your site without code', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"main-accent"} -->
<p class="has-text-align-left has-main-accent-color has-text-color" style="font-style:normal;font-weight:400"><?php esc_html_e( 'Easily create beautiful, fully-customizable websites with the new WordPress Site Editor and the Ollie block theme. No coding skills required.', 'lsx-design' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-button-light"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-button-light"><a class="wp-block-button__link wp-element-button" href="https://olliewp.com"><?php esc_html_e( 'Get Started Today', 'lsx-design' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->
