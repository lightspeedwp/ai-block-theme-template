<?php
/**
 * Title: Testimonial: Compact
 * Slug: lsx-design/testimonial-compact
 * Description: Compact testimonial row showing a short quote and author attribution. Useful for sidebars, CTAs and footer sections.
 * Categories: lsx-design/card, lsx-design/sections
 * Keywords: testimonial, quote, review, author
 * Viewport Width: 900
 * Block Types:
 * Post Types:
 * Template Types:
 * Inserter: yes
 * Inserter Priority: 40
 * Author: LSX Design Team
 * Version: 1.0.0
 * License: GPL-2.0-or-later
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|spacing-50","bottom":"var:preset|spacing|spacing-50","left":"var:preset|spacing|spacing-50","right":"var:preset|spacing|spacing-50"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-tertiary-background-color has-background" style="padding-top:var(--wp--preset--spacing--spacing-50);padding-right:var(--wp--preset--spacing--spacing-50);padding-bottom:var(--wp--preset--spacing--spacing-50);padding-left:var(--wp--preset--spacing--spacing-50)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|spacing-30"}}} -->
<div class="wp-block-group"><!-- wp:image {"id":58,"width":48,"height":48,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded-full"} -->
<figure class="wp-block-image size-full is-resized is-style-rounded-full"><img src="<?php echo esc_url( get_theme_file_uri( 'patterns/images/avatar-3.webp' ) ); ?>" alt="<?php esc_attr_e( 'Author avatar', 'lsx-design' ); ?>" class="wp-image-58" style="width:48px;height:48px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"200"} -->
<p class="has-small-font-size"><?php esc_html_e( '“lsx-design saved us hours on every project. Patterns make iteration a breeze.”', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( '— Jordan Vale, Product Lead', 'lsx-design' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->