<?php
/**
 * Title: Header Dark With Banner
 * Slug: lsx-design/header-dark-with-banner
 * Description: Header with nav and social icons
 * Categories: header
 * Keywords: header, nav, links, button
 * Version: 0.2.0
 * License: GPL-2.0-or-later
 * Viewport Width: 1500
 * Block Types: core/template-part/header
 * Post Types: wp_template
 * Inserter: true
 */
?>
<!-- wp:group {"metadata":{"name":"Header"},"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:group {"metadata":{"name":"CTA Bar"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|spacing-30","right":"var:preset|spacing|spacing-50","bottom":"var:preset|spacing|spacing-30","left":"var:preset|spacing|spacing-50"}}},"backgroundColor":"primary","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--spacing-30);padding-right:var(--wp--preset--spacing--spacing-50);padding-bottom:var(--wp--preset--spacing--spacing-30);padding-left:var(--wp--preset--spacing--spacing-50)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|spacing-30"}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"fontSize":"x-small"} -->
<p class="has-link-color has-x-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e( 'We\'ve just launched a new product!', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-button-light","fontSize":"x-small"} -->
<div class="wp-block-button is-style-button-light"><a class="wp-block-button__link has-x-small-font-size has-custom-font-size wp-element-button"><?php esc_html_e( 'Download Now', 'lsx-design' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Logo and Navs"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|spacing-50","bottom":"var:preset|spacing|spacing-50","right":"var:preset|spacing|spacing-50","left":"var:preset|spacing|spacing-50"},"margin":{"top":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"main","textColor":"base","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-main-background-color has-text-color has-background has-link-color" style="margin-top:0px;padding-top:var(--wp--preset--spacing--spacing-50);padding-right:var(--wp--preset--spacing--spacing-50);padding-bottom:var(--wp--preset--spacing--spacing-50);padding-left:var(--wp--preset--spacing--spacing-50)"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:site-title {"level":0} /-->

<!-- wp:navigation {"openSubmenusOnClick":true,"icon":"menu","style":{"spacing":{"blockGap":"var:preset|spacing|spacing-30"},"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"200"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
