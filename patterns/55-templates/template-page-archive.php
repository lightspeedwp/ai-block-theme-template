<?php
/**
 * Title: Archive Page
 * Slug: lsx-design/template-page-archive
 * Description: The page that shows archives for categories, tags, and more.
 * Categories: lsx-design/sections
 * Keywords: page, full-width
 * Version: 0.2.0
 * License: GPL-2.0-or-later
 * Viewport Width: 1500
 * Inserter: false
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","className":"site-header"} /-->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","right":"var:preset|spacing|50","left":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","justifyContent":"left","contentSize":"740px"}} -->
	<div class="wp-block-group alignwide"><!-- wp:query-title {"type":"archive","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"300"} /-->
	
	<!-- wp:term-description {"textColor":"secondary"} /--></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:pattern {"slug":"ollie/post-loop-grid-default"} /--></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"site-footer"} /-->
