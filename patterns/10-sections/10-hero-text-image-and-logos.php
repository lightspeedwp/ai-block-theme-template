<?php
/**
 * Title: Hero Text, Image, and Logos
 * Slug: lsx-design/hero-text-image-and-logos
 * Description:
 * Categories: lsx-design/sections
 * Keywords: cta, header, buttons, heading, hero, feature, homepage
 * Version: 0.2.0
 * License: GPL-2.0-or-later
 * Viewport Width: 1500
 * Block Types:
 * Post Types:
 * Inserter: true
 */
?>
<!-- wp:group {"metadata":{"name":"Hero Text, Image, and Logos"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|80"}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-tertiary-background-color has-background" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)"><!-- wp:group {"tagName":"section","metadata":{"name":"Hero"},"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|50","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"primary"} -->
<p class="has-text-align-center has-primary-color has-text-color" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Welcome to Ollie', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"textAlign":"center","fontSize":"600"} -->
<h2 class="wp-block-heading has-text-align-center has-x-large-font-size"><?php esc_html_e( 'Design faster and publish sooner with Ollie', 'lsx-design' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","textColor":"secondary"} -->
<p class="has-text-align-center has-secondary-color has-text-color"><?php esc_html_e( 'Easily create beautiful, fully-customizable websites with the new WordPress Site Editor and the Ollie block theme. No coding skills required.', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|30"},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Free Download', 'lsx-design' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-button-light","borderColor":"tertiary"} -->
<div class="wp-block-button is-style-button-light"><a class="wp-block-button__link has-border-color has-tertiary-border-color wp-element-button"><?php esc_html_e( 'Explore Ollie', 'lsx-design' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/desktop.webp","id":3024,"dimRatio":0,"overlayColor":"main","isUserOverlayColor":true,"minHeightUnit":"vw","contentPosition":"center center","isDark":false,"align":"wide","className":"is-style-blur-image is-style-default","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|70","top":"var:preset|spacing|70","right":"var:preset|spacing|70","left":"var:preset|spacing|70"}},"border":{"radius":"5px"},"dimensions":{"aspectRatio":"16/9"}}} -->
<div class="wp-block-cover alignwide is-light is-style-blur-image is-style-default" style="border-radius:5px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)"><span aria-hidden="true" class="wp-block-cover__background has-main-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-3024" alt="<?php esc_attr_e( 'Desktop preview', 'lsx-design' ); ?>" src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/desktop.webp" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"<?php esc_attr_e( 'Write title…', 'lsx-design' ); ?>"} -->
<p class="has-text-align-center"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->
