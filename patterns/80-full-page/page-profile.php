<?php
/**
 * Title: Profile Box
 * Slug: lsx-design/profile-box
 * Description: A profile box with an avatar, links to social media, and buttons
 * Categories: lsx-design/sections
 * Keywords: links, linktree, buttons, profile, bio
 * Version: 0.2.0
 * License: GPL-2.0-or-later
 * Viewport Width: 1500
 * Block Types:
 * Post Types:
 * Inserter: true
 */
?>
<!-- wp:group {"metadata":{"name":"Profile Box"},"align":"full","style":{"spacing":{"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0"><!-- wp:group {"metadata":{"name":"Hero"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|spacing-80","bottom":"var:preset|spacing|spacing-80","right":"var:preset|spacing|spacing-70","left":"var:preset|spacing|spacing-70"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-tertiary-background-color has-background" style="padding-top:var(--wp--preset--spacing--spacing-80);padding-right:var(--wp--preset--spacing--spacing-70);padding-bottom:var(--wp--preset--spacing--spacing-80);padding-left:var(--wp--preset--spacing--spacing-70)"><!-- wp:image {"id":57,"width":"132px","height":"132px","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-rounded-full"} -->
<figure class="wp-block-image aligncenter size-full is-resized is-style-rounded-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/avatar-2.webp" alt="" class="wp-image-57" style="width:132px;height:132px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"metadata":{"name":"Titles"},"style":{"spacing":{"blockGap":"var:preset|spacing|spacing-30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"300"} -->
<p class="has-text-align-center has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Sandra Voyager', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","textColor":"secondary"} -->
<p class="has-text-align-center has-secondary-color has-text-color"><?php esc_html_e( 'Use this page as a LinkTree alternative. Link your social media accounts to this page so your followers can find all of your important links.', 'lsx-design' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:social-links {"iconBackgroundColor":"main","iconBackgroundColorValue":"var(--wp--preset--color--primary)","align":"center","className":"is-style-default","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|spacing-30","left":"var:preset|spacing|spacing-30"},"margin":{"top":"var:preset|spacing|spacing-50"}}}} -->
<ul class="wp-block-social-links aligncenter has-icon-background-color is-style-default" style="margin-top:var(--wp--preset--spacing--spacing-50)"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"dribbble"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"facebook"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"CTA Buttons"},"align":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|spacing-80","bottom":"var:preset|spacing|spacing-80"},"padding":{"right":"var:preset|spacing|spacing-50","left":"var:preset|spacing|spacing-50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--spacing-80);margin-bottom:var(--wp--preset--spacing--spacing-80);padding-right:var(--wp--preset--spacing--spacing-50);padding-left:var(--wp--preset--spacing--spacing-50)"><!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|spacing-30"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"style":{"spacing":{"padding":{"top":"var:preset|spacing|spacing-30","right":"var:preset|spacing|spacing-30","bottom":"var:preset|spacing|spacing-30","left":"var:preset|spacing|spacing-30"}}},"fontSize":"base"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size has-base-font-size"><a class="wp-block-button__link wp-element-button" href="#" style="padding-top:var(--wp--preset--spacing--spacing-30);padding-right:var(--wp--preset--spacing--spacing-30);padding-bottom:var(--wp--preset--spacing--spacing-30);padding-left:var(--wp--preset--spacing--spacing-30)"><?php esc_html_e( 'Visit My Website', 'lsx-design' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"width":100,"className":"is-style-fill","style":{"spacing":{"padding":{"top":"var:preset|spacing|spacing-30","right":"var:preset|spacing|spacing-30","bottom":"var:preset|spacing|spacing-30","left":"var:preset|spacing|spacing-30"}}},"fontSize":"base"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size is-style-fill has-base-font-size"><a class="wp-block-button__link wp-element-button" href="#" style="padding-top:var(--wp--preset--spacing--spacing-30);padding-right:var(--wp--preset--spacing--spacing-30);padding-bottom:var(--wp--preset--spacing--spacing-30);padding-left:var(--wp--preset--spacing--spacing-30)"><?php esc_html_e( 'Follow on Twitter', 'lsx-design' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"width":100,"style":{"spacing":{"padding":{"top":"var:preset|spacing|spacing-30","right":"var:preset|spacing|spacing-30","bottom":"var:preset|spacing|spacing-30","left":"var:preset|spacing|spacing-30"}}},"fontSize":"base"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size has-base-font-size"><a class="wp-block-button__link wp-element-button" href="#" style="padding-top:var(--wp--preset--spacing--spacing-30);padding-right:var(--wp--preset--spacing--spacing-30);padding-bottom:var(--wp--preset--spacing--spacing-30);padding-left:var(--wp--preset--spacing--spacing-30)"><?php esc_html_e( 'Buy My Creator Course', 'lsx-design' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"width":100,"style":{"spacing":{"padding":{"top":"var:preset|spacing|spacing-30","right":"var:preset|spacing|spacing-30","bottom":"var:preset|spacing|spacing-30","left":"var:preset|spacing|spacing-30"}}},"fontSize":"base"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size has-base-font-size"><a class="wp-block-button__link wp-element-button" href="#" style="padding-top:var(--wp--preset--spacing--spacing-30);padding-right:var(--wp--preset--spacing--spacing-30);padding-bottom:var(--wp--preset--spacing--spacing-30);padding-left:var(--wp--preset--spacing--spacing-30)"><?php esc_html_e( 'Join my Patreon', 'lsx-design' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
