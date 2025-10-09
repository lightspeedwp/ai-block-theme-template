<?php
/**
 * Title: CTA: Banner
 * Slug: lsx-design/cta-banner
 * Description: Small full-width call-to-action band with a heading, supporting text and a primary CTA button. Useful between sections or above the footer.
 * Categories: lsx-design/cta, lsx-design/sections
 * Keywords: cta, banner, promo, call-to-action
 * Viewport Width: 1200
 * Block Types:
 * Post Types:
 * Template Types:
 * Inserter: yes
 * Inserter Priority: 35
 * Author: LSX Design Team
 * Version: 1.0.0
 * License: GPL-2.0-or-later
 */
?>
<!-- wp:group {"align":"full","className":"lsx-cta-banner","style":{"spacing":{"padding":{"top":"var:preset|spacing|spacing-50","bottom":"var:preset|spacing|spacing-50"}}}} -->
<div class="wp-block-group alignfull lsx-cta-banner" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'Ready to ship faster?', 'lsx-design' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"secondary"} -->
<p class="has-secondary-color has-text-color"><?php esc_html_e( 'Use curated patterns and template parts to assemble pages quickly.', 'lsx-design' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"auto"} -->
<div class="wp-block-column" style="flex-basis:auto;align-self:center"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get lsx-design', 'lsx-design' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->