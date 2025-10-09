<?php
/**
 * Title: Blog Card: Vertical
 * Slug: lsx-design/blog-card-vertical
 * Description: Vertical blog post card with featured image, category, title, excerpt and meta. Designed as a Query Loop item for blog lists and archives.
 * Categories: lsx-design/posts, lsx-design/card
 * Keywords: blog, card, post, query, featured-image, excerpt
 * Viewport Width: 1000
 * Block Types: core/query
 * Post Types:
 * Template Types:
 * Inserter: yes
 * Inserter Priority: 80
 * Author: LSX Design Team
 * Version: 1.0.0
 * License: GPL-2.0-or-later
 */
?>
<!-- wp:group {"className":"lsx-blog-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|spacing-50","bottom":"var:preset|spacing|spacing-50","left":"var:preset|spacing|spacing-50","right":"var:preset|spacing|spacing-50"}},"border":{"radius":"8px"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group lsx-blog-card has-base-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:post-featured-image {"isLink":true,"height":"220px","style":{"border":{"radius":"6px"}}} /-->

<!-- wp:post-terms {"term":"category","fontSize":"x-small","style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}}} /-->

<!-- wp:post-title {"isLink":true,"level":3,"fontSize":"300"} /-->

<!-- wp:post-excerpt {"moreText":"<?php echo esc_html__( 'Read more', 'lsx-design' ); ?>"} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"fontSize":"x-small","textColor":"secondary"} -->
<div class="wp-block-group has-secondary-color has-text-color"><!-- wp:post-author {"showAvatar":false} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->