<?php
/**
 * Title: Testimonials With Social Links
 * Slug: lsx-design/testimonials-with-social-links
 * Description: 
 * Categories: lsx-design/sections
 * Keywords: testimonial, social, review, rating, quote, columns, links
 * Version: 0.2.0
 * License: GPL-2.0-or-later
 * Viewport Width: 1500
 * Block Types: 
 * Post Types: 
 * Inserter: true
 */
?>
<!-- wp:group {"metadata":{"name":"Testimonials"},"align":"full","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"backgroundColor":"primary","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull has-primary-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--90);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"metadata":{"name":"Titles"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--80)"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"base","fontSize":"200"} -->
<p class="has-text-align-center has-base-color has-text-color has-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Testimonials', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","textColor":"base"} -->
<h2 class="wp-block-heading has-text-align-center has-base-color has-text-color"><?php esc_html_e( 'Meet our happy campers', 'lsx-design' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"primary-accent"} -->
<p class="has-text-align-center has-primary-accent-color has-text-color"><?php esc_html_e( 'Customer happiness as at the core of our business model. If our customers aren\'t succeeding, we\'re not succeeding. See what they\'re saying below.', 'lsx-design' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|80","left":"var:preset|spacing|80"},"margin":{"top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center" style="margin-top:0px;margin-bottom:0px"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|70","right":"var:preset|spacing|70"}},"border":{"radius":"5px"}},"backgroundColor":"base"} -->
<div class="wp-block-column is-vertically-aligned-center has-base-background-color has-background" style="border-radius:5px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"primary","fontSize":"200"} -->
<p class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Via Twitter →', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"base","iconColorValue":"var(--wp--preset--color--base)","iconBackgroundColor":"primary","iconBackgroundColorValue":"var(--wp--preset--color--primary)","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
<ul class="wp-block-social-links has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"#","service":"twitter"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"is-style-separator-thin","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"backgroundColor":"border-light"} -->
<hr class="wp-block-separator has-text-color has-border-light-color has-alpha-channel-opacity has-border-light-background-color has-background is-style-separator-thin" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"fontSize":"300"} -->
<p class="has-medium-font-size"><?php esc_html_e( 'I love using WordPress but traditionally it has been hard to design in. Not any more! I can quickly build out page sections or full page designs with Ollie patterns. Saves me so much time!', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"var:preset|spacing|70"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--70)"><!-- wp:image {"id":59,"width":"60px","height":"60px","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded-full"} -->
<figure class="wp-block-image size-full is-resized is-style-rounded-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/avatar-4.webp" alt="<?php esc_attr_e( 'Testimonial author avatar', 'lsx-design' ); ?>" class="wp-image-59" style="width:60px;height:60px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><strong><?php esc_html_e( 'Maryann Alpine', 'lsx-design' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"secondary","fontSize":"200"} -->
<p class="has-secondary-color has-text-color has-small-font-size"><?php esc_html_e( 'Software Engineer', 'lsx-design' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|70","right":"var:preset|spacing|70"}},"border":{"radius":"5px"}},"backgroundColor":"base"} -->
<div class="wp-block-column is-vertically-aligned-center has-base-background-color has-background" style="border-radius:5px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"primary","fontSize":"200"} -->
<p class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Via Facebook →', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"base","iconColorValue":"var(--wp--preset--color--base)","iconBackgroundColor":"primary","iconBackgroundColorValue":"var(--wp--preset--color--primary)","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
<ul class="wp-block-social-links has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"#","service":"facebook"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"is-style-separator-thin","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"backgroundColor":"border-light"} -->
<hr class="wp-block-separator has-text-color has-border-light-color has-alpha-channel-opacity has-border-light-background-color has-background is-style-separator-thin" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"fontSize":"300"} -->
<p class="has-medium-font-size"><?php esc_html_e( 'I create a lot of landing pages, and the Site Editor and Ollie have been huge for this. I can choose from a pre-designed landing page, customize my brand colors, and I\'m ready to launch.', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"var:preset|spacing|70"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--70)"><!-- wp:image {"id":33082,"width":"60px","height":"60px","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded-full"} -->
<figure class="wp-block-image size-full is-resized is-style-rounded-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/avatar-5.webp" alt="<?php esc_attr_e( 'Testimonial author avatar', 'lsx-design' ); ?>" class="wp-image-33082" style="width:60px;height:60px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><strong><?php esc_html_e( 'Alex Glacier', 'lsx-design' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"secondary","fontSize":"200"} -->
<p class="has-secondary-color has-text-color has-small-font-size"><?php esc_html_e( 'Brand Designer', 'lsx-design' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
