<?php
/**
 * Title: Testimonial Card
 * Slug: lsx-design/card-testimonial
 * Description:
 * Categories: lsx-design/sections
 * Keywords: testimonial, card, avatar, text, quote, review, rating
 * Version: 0.2.0
 * License: GPL-2.0-or-later
 * Viewport Width: 600
 * Block Types:
 * Post Types:
 * Inserter: true
 */
?>
<!-- wp:group {"metadata":{"name":"Testimonial Card","categories":["ollie/card"],"patternName":"ollie/card-testimonial"},"className":"is-style-default","style":{"spacing":{"blockGap":"var:preset|spacing|spacing-50","padding":{"top":"var:preset|spacing|spacing-70","right":"var:preset|spacing|spacing-70","bottom":"var:preset|spacing|spacing-70","left":"var:preset|spacing|spacing-70"}},"border":{"radius":"5px","color":"var(--wp--preset--color--primary)","width":"1px"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-default has-border-color has-base-background-color has-background" style="border-color:var(--wp--preset--color--primary);border-width:1px;border-radius:5px;padding-top:var(--wp--preset--spacing--spacing-70);padding-right:var(--wp--preset--spacing--spacing-70);padding-bottom:var(--wp--preset--spacing--spacing-70);padding-left:var(--wp--preset--spacing--spacing-70)"><!-- wp:paragraph -->
<p><?php esc_html_e( 'I love using WordPress but traditionally it has been hard to design in. Not any more! Now, I can quickly build full page designs with beautiful patterns!', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|spacing-30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":62,"width":"60px","height":"60px","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded-full"} -->
<figure class="wp-block-image size-full is-resized is-style-rounded-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/avatar-7.webp" alt="" class="wp-image-62" style="width:60px;height:60px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
<p style="font-style:normal;font-weight:500"><?php esc_html_e( 'Alex Glacier', 'lsx-design' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
