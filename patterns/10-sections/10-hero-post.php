<?php
/**
 * Title: Hero: Post
 * Slug: lsx-design/hero-post
 * Description: Hero used on single post templates; renders the post title and basic post meta in a spacious header area.
 * Categories: lsx-design/sections, lsx-design/posts
 * Keywords: hero, post, single, title, meta
 * Viewport Width: 1200
 * Block Types: core/cover
 * Post Types: post
 * Template Types: single
 * Inserter: yes
 * Inserter Priority: 25
 * Author: LSX Design Team
 * Version: 1.0.0
 * License: GPL-2.0-or-later
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|spacing-70","bottom":"var:preset|spacing|spacing-70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--spacing-70);padding-bottom:var(--wp--preset--spacing--spacing-70)"><!-- wp:post-title {"level":1,"isLink":false} /-->

<!-- wp:post-terms {"term":"category","fontSize":"200"} /-->

<!-- wp:post-date {"textColor":"secondary","fontSize":"200"} /--></div>
<!-- /wp:group -->