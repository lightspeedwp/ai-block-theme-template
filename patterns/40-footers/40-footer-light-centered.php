<?php
/**
 * Title: Footer Centered Light
 * Slug: lsx-design/footer-light-centered
 * Description: 
 * Categories: footer
 * Keywords: 
 * Version: 0.2.0
 * License: GPL-2.0-or-later
 * Viewport Width: 1500
 * Block Types: core/template-part/footer
 * Post Types: wp_template
 * Inserter: true
 */
?>
<!-- wp:group {"metadata":{"name":"Footer"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|spacing-80","bottom":"var:preset|spacing|spacing-80","right":"var:preset|spacing|spacing-50","left":"var:preset|spacing|spacing-50"},"margin":{"top":"0px"},"blockGap":"var:preset|spacing|spacing-70"},"border":{"top":{"color":"var:preset|color|border-light","width":"1px"},"right":[],"bottom":[],"left":[]},"elements":{"link":{"color":{"text":"var:preset|color|main"}}}},"backgroundColor":"base","textColor":"main","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull has-main-color has-base-background-color has-text-color has-background has-link-color" style="border-top-color:var(--wp--preset--color--border-light);border-top-width:1px;margin-top:0px;padding-top:var(--wp--preset--spacing--spacing-80);padding-right:var(--wp--preset--spacing--spacing-50);padding-bottom:var(--wp--preset--spacing--spacing-80);padding-left:var(--wp--preset--spacing--spacing-50)"><!-- wp:group {"metadata":{"name":"Footer Inside"},"style":{"spacing":[]},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:site-title {"level":0,"textAlign":"center","isLink":false} /-->

<!-- wp:group {"metadata":{"name":"Links"},"style":{"spacing":{"blockGap":"var:preset|spacing|spacing-30"}},"fontSize":"200","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group has-small-font-size"><!-- wp:paragraph -->
<p><?php esc_html_e( 'Download', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Visit Ollie', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Twitter', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Visit Mike', 'lsx-design' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"center","fontSize":"200"} -->
<p class="has-text-align-center has-small-font-size"><?php esc_html_e( '© 2025 · Powered by WordPress and', 'lsx-design' ); ?><a href="https://olliewp.com"><?php esc_html_e( 'Ollie', 'lsx-design' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"base","iconColorValue":"var(--wp--preset--color--base)","iconBackgroundColor":"main","iconBackgroundColorValue":"var(--wp--preset--color--primary)","className":"is-style-default","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|spacing-30","left":"var:preset|spacing|spacing-30"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"facebook"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
