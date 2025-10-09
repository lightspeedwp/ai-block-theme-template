<?php
/**
 * Title: Post Loop Grid Default
 * Slug: lsx-design/post-loop-grid-default
 * Description: This post loop grid is best used on index and archive pages where the loop can inherit the query from the page.
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
<!-- wp:query {"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"align":"full","layout":{"type":"default"}} -->
<div class="wp-block-query alignfull"><!-- wp:group {"metadata":{"name":"Post Grid"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|spacing-90","bottom":"var:preset|spacing|spacing-90"},"blockGap":"var:preset|spacing|spacing-80"}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-tertiary-background-color has-background" style="padding-top:var(--wp--preset--spacing--spacing-90);padding-bottom:var(--wp--preset--spacing--spacing-90)"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|spacing-70"}},"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:pattern {"slug":"ollie/blog-post-card"} /-->
<!-- /wp:post-template -->

<!-- wp:group {"metadata":{"name":"Pagination"},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:query-pagination {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"className":"is-style-wp-block-button__link"} /-->

<!-- wp:query-pagination-next {"className":"is-style-wp-block-button__link"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:query -->
