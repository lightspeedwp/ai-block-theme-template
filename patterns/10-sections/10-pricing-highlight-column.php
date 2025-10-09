<?php
/**
 * Title: Pricing: Highlight Column
 * Slug: lsx-design/pricing-highlight-column
 * Description: Single highlighted pricing column for use inside pricing rows or comparison sections. Includes price, plan name, CTA and feature list.
 * Categories: lsx-design/cta, lsx-design/sections
 * Keywords: pricing, price, highlight, plan, cta
 * Viewport Width: 1200
 * Block Types:
 * Post Types:
 * Template Types:
 * Inserter: yes
 * Inserter Priority: 30
 * Author: LSX Design Team
 * Version: 1.0.0
 * License: GPL-2.0-or-later
 */
?>
<!-- wp:group {"className":"lsx-pricing-highlight","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"8px","width":"1px"}},"backgroundColor":"main","textColor":"base","borderColor":"border-dark","layout":{"type":"constrained"}} -->
<div class="wp-block-group lsx-pricing-highlight has-base-color has-main-background-color has-text-color has-background has-border-color" style="border-radius:8px;border-width:1px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"fontSize":"500"} -->
<div class="wp-block-group has-large-font-size"><!-- wp:paragraph {"fontSize":"600","fontFamily":"primary","style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1"}}} -->
<p class="has-primary-font-family has-x-large-font-size" style="font-style:normal;font-weight:600;line-height:1"><?php esc_html_e( '$49', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"200","textColor":"main-accent","style":{"spacing":{"margin":{"top":"1.2rem"}}}} -->
<p class="has-main-accent-color has-text-color has-small-font-size" style="margin-top:1.2rem"><?php esc_html_e( 'per month', 'lsx-design' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
<p style="font-style:normal;font-weight:600"><?php esc_html_e( 'Professional Plan', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"secondary","fontSize":"200"} -->
<p class="has-secondary-color has-text-color has-small-font-size"><?php esc_html_e( 'Everything teams need to build and ship fast.', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-button-light"} -->
<div class="wp-block-button is-style-button-light"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Start Free Trial', 'lsx-design' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:separator {"className":"is-style-separator-thin","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"backgroundColor":"border-dark"} -->
<hr class="wp-block-separator has-text-color has-border-dark-color has-alpha-channel-opacity has-border-dark-background-color has-background is-style-separator-thin" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"/>

<!-- wp:list {"className":"lsx-pricing-features","fontSize":"200"} -->
<ul class="lsx-pricing-features has-small-font-size"><li><?php esc_html_e( 'Publishing Suite', 'lsx-design' ); ?></li><li><?php esc_html_e( 'Advanced Tools', 'lsx-design' ); ?></li><li><?php esc_html_e( 'Priority Support', 'lsx-design' ); ?></li></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->