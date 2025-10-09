<?php
/**
 * Title: Page Wide
 * Slug: lsx-design/template-page-wide
 * Template Types: page
 * Description: This wide page layout where the content sits in a wide container that stretches the page area.
 * Categories: lsx-design/sections
 * Keywords: page, centered
 * Version: 0.2.0
 * License: GPL-2.0-or-later
 * Viewport Width: 1500
 * Inserter: false
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","className":"site-header"} /-->

<!-- wp:group {"tagName":"main","align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|spacing-30pacing-90","bottom":"var:preset|spacing|spacing-30pacing-90"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--spacing-90);padding-bottom:var(--wp--preset--spacing--spacing-90)"><!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:post-title {"level":1,"align":"wide","fontFamily":"secondary"} /-->

<!-- wp:post-featured-image {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|spacing-30pacing-70","right":"var:preset|spacing|spacing-30pacing-70","bottom":"var:preset|spacing|spacing-30pacing-70","left":"var:preset|spacing|spacing-30pacing-70"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:post-content {"align":"wide","layout":{"type":"default"}} /--></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"site-footer"} /-->
