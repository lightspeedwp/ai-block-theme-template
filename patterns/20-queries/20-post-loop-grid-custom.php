<?php
/**
 * Title: Post Loop Grid
 * Slug: lsx-design/post-loop-grid
 * Description: This post loop grid is best used on custom pages where there is not a default post loop.
 * Categories: lsx-design/sections
 * Keywords: blog, posts, query, loop
 * Version: 0.2.0
 * License: GPL-2.0-or-later
 * Viewport Width: 1280
 * Block Types: core/query
 * Post Types: 
 * Inserter: false
 */
?>
<!-- wp:query {"queryId":1,"query":{"perPage":"6","pages":"0","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"align":"full"} -->
<div class="wp-block-query alignfull"><!-- wp:group {"metadata":{"name":"Post Grid"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|spacing-90","bottom":"var:preset|spacing|spacing-90"},"blockGap":"var:preset|spacing|spacing-80"}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-tertiary-background-color has-background" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|spacing-70"}},"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:group {"metadata":{"name":"Post"},"style":{"spacing":{"blockGap":"var:preset|spacing|spacing-30","padding":{"top":"var:preset|spacing|spacing-70","right":"var:preset|spacing|spacing-70","bottom":"var:preset|spacing|spacing-70","left":"var:preset|spacing|spacing-70"}},"border":{"radius":"5px"}},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-radius:5px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)"><!-- wp:group {"metadata":{"name":"Post Content"},"style":{"spacing":{"blockGap":"var:preset|spacing|spacing-30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"height":"300px","style":{"border":{"radius":"5px"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px","margin":{"top":"1.5rem"}},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"x-small","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left","verticalAlignment":"center"}} -->
<div class="wp-block-group has-secondary-color has-text-color has-link-color has-x-small-font-size" style="margin-top:1.5rem"><!-- wp:post-author {"showAvatar":false} /-->

<!-- wp:paragraph -->
<p><?php esc_html_e( '·', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-date /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|spacing-30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"fontSize":"300"} /-->

<!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"className":"is-style-excerpt-truncate-3","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"fontSize":"200"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Post Meta"},"style":{"spacing":{"blockGap":"1px"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"x-small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:group {"metadata":{"name":"Pagination"},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:query-pagination {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"className":"is-style-default"} /-->

<!-- wp:query-pagination-next {"className":"is-style-default"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:query -->
