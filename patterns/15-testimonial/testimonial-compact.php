<?php
/**
 * Title: Testimonial Compact
 * Slug: lsx-design/testimonial-compact
 * Description: A compact testimonial row with quote and author that works well in sidebars and CTAs.
 * Categories: lsx-design/sections
 * Keywords: testimonial, quote, compact, review
 * Version: 0.2.0
 * License: GPL-2.0-or-later
 * Viewport Width: 800
 * Inserter: true
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-tertiary-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-group"><!-- wp:image {"id":58,"width":48,"height":48,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded-full"} -->
<figure class="wp-block-image size-full is-resized is-style-rounded-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/avatar-3.webp" alt="<?php esc_attr_e( 'Author avatar', 'lsx-design' ); ?>" class="wp-image-58" style="width:48px;height:48px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"200"} -->
<p class="has-small-font-size"><?php esc_html_e( '“Ollie saved us hours on every project. Patterns make iteration a breeze.”', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( '— Jordan Vale, Product Lead', 'lsx-design' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->