<?php
/**
 * Title: 404 Page
 * Slug: lsx-design/template-page-404
 * Description: The page that shows when no other page is found.
 * Categories: lsx-design/sections
 * Keywords: page, full-width
 * Version: 0.2.0
 * License: GPL-2.0-or-later
 * Viewport Width: 1500
 * Inserter: false
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","className":"site-header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|spacing-30pacing-90","top":"var:preset|spacing|spacing-30pacing-90"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--spacing-90);padding-bottom:var(--wp--preset--spacing--spacing-90)"><!-- wp:heading {"textAlign":"center","level":1} -->
<h1 class="has-text-align-center"><?php esc_html_e( 'Page Not Found', 'lsx-design' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"secondary"} -->
<p class="has-text-align-center has-secondary-color has-text-color"><?php esc_html_e( 'Unfortunately, the page you are looking for no longer exists, or has been moved. Please try searching for your content below.', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|spacing-30pacing-50","right":"var:preset|spacing|spacing-30pacing-50","bottom":"var:preset|spacing|spacing-30pacing-50","left":"var:preset|spacing|spacing-30pacing-50"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-tertiary-background-color has-background" style="padding-top:var(--wp--preset--spacing--spacing-50);padding-right:var(--wp--preset--spacing--spacing-50);padding-bottom:var(--wp--preset--spacing--spacing-50);padding-left:var(--wp--preset--spacing--spacing-50)"><!-- wp:search {"showLabel":false,"placeholder":"<?php esc_attr_e( 'Search', 'lsx-design' ); ?>","widthUnit":"px","buttonText":"<?php esc_attr_e( 'Search', 'lsx-design' ); ?>"} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"site-footer"} /-->
