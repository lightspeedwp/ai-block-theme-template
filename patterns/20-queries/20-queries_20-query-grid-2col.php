<?php
/**
 * Title: Query: Grid (2 columns)
 * Slug: lsx-design/query-grid-2col
 * Description: Query Loop container rendering posts in a responsive two-column grid; uses lsx-design/post-card as the item pattern.
 * Categories: lsx-design/posts, lsx-design/sections
 * Keywords: query, loop, grid, posts, two-column
 * Viewport Width: 1200
 * Block Types: core/query
 * Post Types:
 * Template Types:
 * Inserter: yes
 * Inserter Priority: 85
 * Author: LSX Design Team
 * Version: 1.0.0
 * License: GPL-2.0-or-later
 */
?>
<!-- wp:query {"queryId":0,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderby":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"layout":{"type":"flex","columns":2}} -->
<div class="wp-block-query"><!-- wp:pattern {"slug":"lsx-design/post-card"} /--></div>
<!-- /wp:query -->