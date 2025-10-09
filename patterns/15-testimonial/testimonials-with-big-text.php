<?php
/**
 * Title: Testimonials With Big Text
 * Slug: lsx-design/testimonials-with-big-text
 * Description: 
 * Categories: lsx-design/sections
 * Keywords: testimonial, review, rating, quote, heading, columns, avatar
 * Version: 0.2.0
 * License: GPL-2.0-or-later
 * Viewport Width: 1500
 * Block Types: 
 * Post Types: 
 * Inserter: true
 */
?>
<!-- wp:group {"metadata":{"name":"Testimonials With Big Text"},"align":"full","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"var:preset|spacing|spacing-30pacing-90","bottom":"var:preset|spacing|spacing-30pacing-90","right":"var:preset|spacing|spacing-30pacing-50","left":"var:preset|spacing|spacing-30pacing-50"}}},"backgroundColor":"tertiary","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull has-tertiary-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--spacing-90);padding-right:var(--wp--preset--spacing--spacing-50);padding-bottom:var(--wp--preset--spacing--spacing-90);padding-left:var(--wp--preset--spacing--spacing-50)"><!-- wp:columns {"verticalAlignment":"center","metadata":{"name":"Testimonial Columns"},"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|spacing-30pacing-80","left":"var:preset|spacing|spacing-30pacing-80"},"margin":{"top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center" style="margin-top:0px;margin-bottom:0px"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"primary","fontSize":"200"} -->
<p class="has-primary-color has-text-color has-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Testimonials', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Easily create beautiful, blazing-fast websites with the new WordPress Site Editor.', 'lsx-design' ); ?><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color"><?php esc_html_e( 'No coding skills required.', 'lsx-design' ); ?></mark></h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"is-style-separator-thin","backgroundColor":"border-light"} -->
<hr class="wp-block-separator has-text-color has-border-light-color has-alpha-channel-opacity has-border-light-background-color has-background is-style-separator-thin"/>
<!-- /wp:separator -->

<!-- wp:group {"metadata":{"name":"Testimonial"},"style":{"spacing":{"blockGap":"var:preset|spacing|spacing-30pacing-30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"primary"} -->
<p class="has-primary-color has-text-color"><?php esc_html_e( '★★★★★', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
<p style="font-style:normal;font-weight:600"><?php esc_html_e( '"Working with Ollie has been a delight from start to finish."', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"secondary","fontSize":"x-small"} -->
<p class="has-secondary-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Rated 5/5 stars by 1,620 happy reviewers', 'lsx-design' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"metadata":{"name":"Testimonial"},"className":"is-style-default","style":{"spacing":{"blockGap":"var:preset|spacing|spacing-30pacing-50","padding":{"top":"var:preset|spacing|spacing-30pacing-70","right":"var:preset|spacing|spacing-30pacing-70","bottom":"var:preset|spacing|spacing-30pacing-70","left":"var:preset|spacing|spacing-30pacing-70"}},"border":{"radius":"5px","width":"1px"}},"backgroundColor":"base","borderColor":"border-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-default has-border-color has-border-light-border-color has-base-background-color has-background" style="border-width:1px;border-radius:5px;padding-top:var(--wp--preset--spacing--spacing-70);padding-right:var(--wp--preset--spacing--spacing-70);padding-bottom:var(--wp--preset--spacing--spacing-70);padding-left:var(--wp--preset--spacing--spacing-70)"><!-- wp:paragraph -->
<p><?php esc_html_e( 'I love using WordPress but traditionally it has been hard to design in. Not any more! Now, I can quickly build full page designs with beautiful patterns!', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"metadata":{"name":"Cite"},"style":{"spacing":{"blockGap":"var:preset|spacing|spacing-30pacing-30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":60,"width":"60px","height":"60px","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded-full"} -->
<figure class="wp-block-image size-full is-resized is-style-rounded-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/avatar-5.webp" alt="" class="wp-image-60" style="width:60px;height:60px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
<p style="font-style:normal;font-weight:500"><?php esc_html_e( 'Alex Glacier', 'lsx-design' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Testimonial"},"className":"is-style-default","style":{"spacing":{"blockGap":"var:preset|spacing|spacing-30pacing-50","padding":{"top":"var:preset|spacing|spacing-30pacing-70","right":"var:preset|spacing|spacing-30pacing-70","bottom":"var:preset|spacing|spacing-30pacing-70","left":"var:preset|spacing|spacing-30pacing-70"}},"border":{"radius":"5px","width":"1px"}},"backgroundColor":"base","borderColor":"border-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-default has-border-color has-border-light-border-color has-base-background-color has-background" style="border-width:1px;border-radius:5px;padding-top:var(--wp--preset--spacing--spacing-70);padding-right:var(--wp--preset--spacing--spacing-70);padding-bottom:var(--wp--preset--spacing--spacing-70);padding-left:var(--wp--preset--spacing--spacing-70)"><!-- wp:paragraph -->
<p><?php esc_html_e( 'I create a lot of landing pages, and the Site Editor and Ollie have been a game changer for this. Choose a layout, add my content, hit publish.', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"metadata":{"name":"Cite"},"style":{"spacing":{"blockGap":"var:preset|spacing|spacing-30pacing-30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":33081,"width":"60px","height":"60px","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded-full"} -->
<figure class="wp-block-image size-full is-resized is-style-rounded-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/avatar-4.webp" alt="" class="wp-image-33081" style="width:60px;height:60px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
<p style="font-style:normal;font-weight:500"><?php esc_html_e( 'Maryann Alpine', 'lsx-design' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
