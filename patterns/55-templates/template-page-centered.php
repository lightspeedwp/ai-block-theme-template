<?php
/**
 * Title: Page Centered
 * Slug: lsx-design/template-page-centered
 * Template Types: page
 * Description: A centered page layout where the content sits in a container in the middle of the page.
 * Categories: lsx-design/sections
 * Keywords: page, centered
 * Version: 0.2.0
 * License: GPL-2.0-or-later
 * Viewport Width: 1500
 * Inserter: false
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","className":"site-header"} /-->

<!-- wp:group {"tagName":"main","align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|spacing-90","bottom":"var:preset|spacing|spacing-90"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--spacing-90);padding-bottom:var(--wp--preset--spacing--spacing-90)"><!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:post-title {"level":1,"fontFamily":"secondary"} /-->

<!-- wp:post-featured-image {"style":{"spacing":{"margin":{"top":"var:preset|spacing|spacing-70","right":"var:preset|spacing|spacing-70","bottom":"var:preset|spacing|spacing-70","left":"var:preset|spacing|spacing-70"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:post-content {"align":"wide","layout":{"type":"constrained"}} /--></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"site-footer"} /-->
