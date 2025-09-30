<?php
/**
 * Title: Testimonial Compact
 * Slug: ollie/testimonial-compact
 * Description: A compact testimonial row with quote and author that works well in sidebars and CTAs.
 * Categories: ollie/testimonial
 * Keywords: testimonial, quote, compact, review
 * Viewport Width: 800
 * Inserter: true
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-tertiary-background-color has-background" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
<div class="wp-block-group"><!-- wp:image {"id":58,"width":48,"height":48,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded-full"} -->
<figure class="wp-block-image size-full is-resized is-style-rounded-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/avatar-3.webp" alt="<?php esc_attr_e( 'Author avatar', 'ollie' ); ?>" class="wp-image-58" style="width:48px;height:48px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e( '“Ollie saved us hours on every project. Patterns make iteration a breeze.”', 'ollie' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( '— Jordan Vale, Product Lead', 'ollie' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->