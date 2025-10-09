<?php
/**
 * Title: Search Results Page
 * Slug: lsx-design/template-page-search
 * Description: The page that shows search results.
 * Categories: lsx-design/sections
 * Keywords: page, full-width
 * Version: 0.2.0
 * License: GPL-2.0-or-later
 * Viewport Width: 1500
 * Inserter: false
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","className":"site-header"} /-->

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|spacing-80","bottom":"var:preset|spacing|spacing-80"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-tertiary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--spacing-80);padding-bottom:var(--wp--preset--spacing--spacing-80)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|spacing-50"}}} -->
<div class="wp-block-group"><!-- wp:query-title {"type":"search","fontSize":"300"} /-->

<!-- wp:search {"label":"","placeholder":"<?php esc_attr_e( 'Search site...', 'lsx-design' ); ?>","buttonText":"<?php esc_attr_e( 'Search', 'lsx-design' ); ?>"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","className":"site-content","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|spacing-90","bottom":"var:preset|spacing|spacing-90"}}}} -->
<main class="wp-block-group site-content" style="margin-top:0;padding-top:var(--wp--preset--spacing--spacing-90);padding-bottom:var(--wp--preset--spacing--spacing-90)"><!-- wp:query {"queryId":0,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"layout":{"contentSize":null,"type":"constrained"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0"}}},"fontSize":"500"} /-->

<!-- wp:post-excerpt /-->

<!-- wp:separator {"className":"is-style-separator-thin","style":{"spacing":{"margin":{"top":"var:preset|spacing|spacing-80","bottom":"var:preset|spacing|spacing-80"}}},"backgroundColor":"border-light"} -->
<hr class="wp-block-separator has-text-color has-border-light-color has-alpha-channel-opacity has-border-light-background-color has-background is-style-separator-thin" style="margin-top:var(--wp--preset--spacing--spacing-80);margin-bottom:var(--wp--preset--spacing--spacing-80)"/>
<!-- /wp:separator -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"className":"is-style-wp-block-button__link"} /-->

<!-- wp:query-pagination-next {"className":"is-style-wp-block-button__link"} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"<?php esc_attr_e( 'Add text or blocks that will display when a query returns no results.', 'lsx-design' ); ?>","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<p style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><?php esc_html_e( 'Sorry, nothing was found for that search term.', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"site-footer"} /-->
