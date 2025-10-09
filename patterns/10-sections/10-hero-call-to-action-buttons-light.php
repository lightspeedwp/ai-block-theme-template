<?php
/**
 * Title: Hero Call To Action Buttons Light
 * Slug: lsx-design/hero-call-to-action-buttons-light
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
<!-- wp:group {"tagName":"section","metadata":{"name":"Hero","categories":["ollie/hero"],"patternName":"ollie/hero-call-to-action-buttons-light"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|50","margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-base-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--90);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"primary"} -->
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

<!-- wp:button {"className":"is-style-secondary-button","borderColor":"tertiary"} -->
<div class="wp-block-button is-style-secondary-button"><a class="wp-block-button__link has-border-color has-tertiary-border-color wp-element-button"><?php esc_html_e( 'Explore Ollie', 'lsx-design' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
