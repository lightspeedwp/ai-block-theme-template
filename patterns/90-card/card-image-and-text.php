<?php
/**
 * Title: Image and Text Card
 * Slug: lsx-design/image-and-text-card
 * Description:
 * Categories: lsx-design/sections
 * Keywords: card, image, text, box, content, link, button
 * Version: 0.2.0
 * License: GPL-2.0-or-later
 * Viewport Width: 600
 * Block Types:
 * Post Types:
 * Inserter: true
 */
?>
<!-- wp:group {"metadata":{"name":"Image and Text Card"},"className":"is-style-default","style":{"spacing":{"blockGap":"var:preset|spacing|spacing-30pacing-30","padding":{"top":"var:preset|spacing|spacing-30pacing-70","right":"var:preset|spacing|spacing-30pacing-70","bottom":"var:preset|spacing|spacing-30pacing-70","left":"var:preset|spacing|spacing-30pacing-70"}},"border":{"radius":"5px","color":"var(--wp--preset--color--primary)","width":"1px"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-default has-border-color has-base-background-color has-background" style="border-color:var(--wp--preset--color--primary);border-width:1px;border-radius:5px;padding-top:var(--wp--preset--spacing--spacing-70);padding-right:var(--wp--preset--spacing--spacing-70);padding-bottom:var(--wp--preset--spacing--spacing-70);padding-left:var(--wp--preset--spacing--spacing-70)"><!-- wp:image {"id":43,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/computer-hands.webp" alt="" class="wp-image-43"/></figure>
<!-- /wp:image -->

<!-- wp:group {"metadata":{"name":"Text"},"style":{"spacing":{"blockGap":"var:preset|spacing|spacing-30pacing-30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"300"} -->
<p class="has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Image and Text Card', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'I love using WordPress but traditionally it has been hard to design in. Not any more! Now, I can quickly build full page designs with beautiful patterns!', 'lsx-design' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|spacing-30pacing-50"}}},"layout":{"type":"flex","justifyContent":"left","flexWrap":"wrap"}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--spacing-50)"><!-- wp:button {"width":50,"className":"is-style-fill"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-fill"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get Started', 'lsx-design' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"width":50,"className":"is-style-secondary-button"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-secondary-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Read More', 'lsx-design' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
