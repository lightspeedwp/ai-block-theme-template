<?php
/**
 * Title: Pricing Table
 * Slug: lsx-design/pricing-table
 * Description:
 * Categories: lsx-design/sections
 * Keywords: cta, button, call to action, purchase
 * Version: 0.2.0
 * License: GPL-2.0-or-later
 * Viewport Width: 1500
 * Block Types:
 * Post Types:
 * Inserter: true
 */
?>
<!-- wp:group {"metadata":{"name":"Pricing Tables","categories":["ollie/pricing"],"patternName":"ollie/pricing-table"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","right":"var:preset|spacing|50","left":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|80"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--90);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"metadata":{"name":"Titles"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"primary","fontSize":"200"} -->
<p class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Simple Pricing', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","className":"wp-block-heading"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Small prices, huge value', 'lsx-design' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e( 'Easily create beautiful and responsive pricing tables with Ollie patterns. Connect your eCommerce solution and start making bank.', 'lsx-design' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"verticalAlignment":"top","metadata":{"name":"Pricing Tables"},"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","metadata":{"name":"Pricing Table"},"className":"is-style-default","style":{"border":{"radius":"5px","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|70","right":"var:preset|spacing|70"}}},"backgroundColor":"base","borderColor":"border-light"} -->
<div class="wp-block-column is-vertically-aligned-top is-style-default has-border-color has-border-light-border-color has-base-background-color has-background" style="border-width:1px;border-radius:5px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)"><!-- wp:group {"metadata":{"name":"Price"},"style":{"spacing":{"blockGap":"10px"}},"fontSize":"300","layout":{"type":"flex","flexWrap":"nowrap","orientation":"horizontal"}} -->
<div class="wp-block-group has-base-font-size"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1"}},"fontSize":"600","fontFamily":"primary"} -->
<p class="has-primary-font-family has-x-large-font-size" style="font-style:normal;font-weight:500;line-height:1"><?php esc_html_e( '$9', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"1.4rem"}}},"textColor":"secondary","fontSize":"200","fontFamily":"primary"} -->
<p class="has-secondary-color has-text-color has-primary-font-family has-small-font-size" style="margin-top:1.4rem"><?php esc_html_e( 'per month', 'lsx-design' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Price Description"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"300"} -->
<p class="has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Beginner', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"secondary","fontSize":"200"} -->
<p class="has-secondary-color has-text-color has-small-font-size"><?php esc_html_e( 'Great for beginners who want to give your product a trial run and see if it fits their workflow.', 'lsx-design' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><?php esc_html_e( 'Get Started', 'lsx-design' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"metadata":{"name":"Features"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"fontSize":"200","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-small-font-size"><!-- wp:group {"metadata":{"name":"Feature"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><strong><?php esc_html_e( '✓', 'lsx-design' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Publishing Suite', 'lsx-design' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"is-style-separator-thin","backgroundColor":"border-light"} -->
<hr class="wp-block-separator has-text-color has-border-light-color has-alpha-channel-opacity has-border-light-background-color has-background is-style-separator-thin"/>
<!-- /wp:separator -->

<!-- wp:group {"metadata":{"name":"Feature"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><strong><?php esc_html_e( '✓', 'lsx-design' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Advanced Tools', 'lsx-design' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"is-style-separator-thin","backgroundColor":"border-light"} -->
<hr class="wp-block-separator has-text-color has-border-light-color has-alpha-channel-opacity has-border-light-background-color has-background is-style-separator-thin"/>
<!-- /wp:separator -->

<!-- wp:group {"metadata":{"name":"Feature"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><strong><?php esc_html_e( '✓', 'lsx-design' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Priority Support', 'lsx-design' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"is-style-separator-thin","backgroundColor":"border-light"} -->
<hr class="wp-block-separator has-text-color has-border-light-color has-alpha-channel-opacity has-border-light-background-color has-background is-style-separator-thin"/>
<!-- /wp:separator -->

<!-- wp:group {"metadata":{"name":"Feature"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><strong><?php esc_html_e( '✓', 'lsx-design' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Blazing-Fast Performance', 'lsx-design' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","metadata":{"name":"Pricing Table"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|70","right":"var:preset|spacing|70"}},"border":{"radius":"5px"}},"backgroundColor":"main","textColor":"base"} -->
<div class="wp-block-column is-vertically-aligned-top has-base-color has-main-background-color has-text-color has-background" style="border-radius:5px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)"><!-- wp:group {"metadata":{"name":"Price"},"style":{"spacing":{"blockGap":"10px"}},"fontSize":"300","layout":{"type":"flex","flexWrap":"nowrap","orientation":"horizontal"}} -->
<div class="wp-block-group has-base-font-size"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1"}},"fontSize":"600","fontFamily":"primary"} -->
<p class="has-primary-font-family has-x-large-font-size" style="font-style:normal;font-weight:500;line-height:1"><?php esc_html_e( '$29', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"1.4rem"}}},"textColor":"main-accent","fontSize":"200","fontFamily":"primary"} -->
<p class="has-main-accent-color has-text-color has-primary-font-family has-small-font-size" style="margin-top:1.4rem"><?php esc_html_e( 'per month', 'lsx-design' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Price Description"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"300"} -->
<p class="has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Professional', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"main-accent","fontSize":"200"} -->
<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'Great for professionals who are building a lot of WordPress websites and need all the tools.', 'lsx-design' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-button-light","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-button-light"><a class="wp-block-button__link wp-element-button" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><?php esc_html_e( 'Get Started', 'lsx-design' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"metadata":{"name":"Features"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"fontSize":"200","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-small-font-size"><!-- wp:group {"metadata":{"name":"Feature"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><strong><?php esc_html_e( '✓', 'lsx-design' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Everything in Essential plus...', 'lsx-design' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"is-style-separator-thin","backgroundColor":"border-dark"} -->
<hr class="wp-block-separator has-text-color has-border-dark-color has-alpha-channel-opacity has-border-dark-background-color has-background is-style-separator-thin"/>
<!-- /wp:separator -->

<!-- wp:group {"metadata":{"name":"Feature"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><strong><?php esc_html_e( '✓', 'lsx-design' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Video Course', 'lsx-design' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"is-style-separator-thin","backgroundColor":"border-dark"} -->
<hr class="wp-block-separator has-text-color has-border-dark-color has-alpha-channel-opacity has-border-dark-background-color has-background is-style-separator-thin"/>
<!-- /wp:separator -->

<!-- wp:group {"metadata":{"name":"Feature"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><strong><?php esc_html_e( '✓', 'lsx-design' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Private Coaching', 'lsx-design' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"is-style-separator-thin","backgroundColor":"border-dark"} -->
<hr class="wp-block-separator has-text-color has-border-dark-color has-alpha-channel-opacity has-border-dark-background-color has-background is-style-separator-thin"/>
<!-- /wp:separator -->

<!-- wp:group {"metadata":{"name":"Feature"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><strong><?php esc_html_e( '✓', 'lsx-design' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Access to Slack', 'lsx-design' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:paragraph {"align":"center","textColor":"secondary","fontSize":"200"} -->
<p class="has-text-align-center has-secondary-color has-text-color has-small-font-size"><?php esc_html_e( 'Not convinced? We offer a', 'lsx-design' ); ?> <strong><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color"><?php esc_html_e( '100% money back guarantee', 'lsx-design' ); ?></mark></strong> <?php esc_html_e( 'for all purchases. Try our product with confidence, and if you don\'t like it, we\'ll make it right.', 'lsx-design' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
