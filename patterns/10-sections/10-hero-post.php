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
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)"><!-- wp:post-title {"level":1,"isLink":false} /-->

<!-- wp:post-terms {"term":"category","fontSize":"small"} /-->

<!-- wp:post-date {"textColor":"secondary","fontSize":"small"} /--></div>
<!-- /wp:group -->