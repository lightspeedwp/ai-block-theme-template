<?php
/**
 * Title: Hero Light
 * Slug: lsx-design/hero-light
 * Description:
 * Categories: lsx-design/sections
 * Keywords: cta, call to action, buttons, homepage, header, hero, heading, screenshot
 * Version: 0.2.0
 * License: GPL-2.0-or-later
 * Viewport Width: 1500
 * Block Types:
 * Post Types:
 * Inserter: true
 */
?>
<!-- wp:cover {"dimRatio":90,"overlayColor":"base","isUserOverlayColor":true,"isDark":false,"metadata":{"name":"Hero Light"},"align":"full","className":"is-style-blur-image-less","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<div class="wp-block-cover alignfull is-light is-style-blur-image-less" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><span aria-hidden="true" class="wp-block-cover__background has-base-background-color has-background-dim-90 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"metadata":{"name":"Hero Light Wrap"},"align":"full","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"var:preset|spacing|spacing-90","bottom":"0px","right":"var:preset|spacing|spacing-50","left":"var:preset|spacing|spacing-50"},"blockGap":"0"}},"textColor":"main","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull has-main-color has-text-color" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--90);padding-right:var(--wp--preset--spacing--50);padding-bottom:0px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"metadata":{"name":"Text and Buttons"},"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|spacing-90"}}}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--90)"><!-- wp:group {"metadata":{"name":"Titles"},"style":{"spacing":{"blockGap":"var:preset|spacing|spacing-30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"primary","fontSize":"200"} -->
<p class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e( 'WordPress Reimagined', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":1,"className":"has-secondary-font-family","style":{"typography":{"fontSize":"4rem"}}} -->
<h1 class="wp-block-heading has-text-align-center has-secondary-font-family" style="font-size:4rem"><?php esc_html_e( 'Build your site with clicks, not code.', 'lsx-design' ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"center","textColor":"secondary"} -->
<p class="has-text-align-center has-secondary-color has-text-color"><?php esc_html_e( 'Easily create beautiful, fully-customizable websites with the new WordPress Site Editor and the Ollie block theme. No coding skills required.', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|spacing-30"}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Download Ollie', 'lsx-design' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-secondary-button"} -->
<div class="wp-block-button is-style-secondary-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Ollie Features', 'lsx-design' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:image {"id":3024,"sizeSlug":"full","linkDestination":"none","align":"wide","className":"is-style-default"} -->
<figure class="wp-block-image alignwide size-full is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/desktop.webp" alt="<?php esc_attr_e( 'Desktop screenshot', 'lsx-design' ); ?>" class="wp-image-3024"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
