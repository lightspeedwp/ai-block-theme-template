<?php
/**
 * Title: Post List Card
 * Slug: lsx-design/post-list-card
 * Description:
 * Categories: lsx-design/sections
 * Keywords: card, posts, list, links, query, page
 * Version: 0.2.0
 * License: GPL-2.0-or-later
 * Viewport Width: 600
 * Block Types:
 * Post Types:
 * Inserter: true
 */
?>
<!-- wp:group {"metadata":{"name":"Post List Card"},"className":"remove-border-and-padding","style":{"border":{"radius":"5px","color":"var(--wp--preset--color--primary)","width":"1px"},"spacing":{"blockGap":"0","padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group remove-border-and-padding has-border-color" style="border-color:var(--wp--preset--color--primary);border-width:1px;border-radius:5px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"metadata":{"name":"Title Row"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|spacing-50","right":"var:preset|spacing|spacing-70","bottom":"var:preset|spacing|spacing-50","left":"var:preset|spacing|spacing-70"}},"border":{"radius":{"topLeft":"5px","topRight":"5px"}}},"backgroundColor":"main","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-main-background-color has-background" style="border-top-left-radius:5px;border-top-right-radius:5px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--70)"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"base","fontSize":"300"} -->
<p class="has-base-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Latest Posts', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"main-accent"} -->
<p class="has-main-accent-color has-text-color"><?php esc_html_e( 'View All →', 'lsx-design' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:group {"metadata":{"name":"Post List Wrap"},"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Post List"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|spacing-70","right":"var:preset|spacing|spacing-70","bottom":"var:preset|spacing|spacing-70","left":"var:preset|spacing|spacing-70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)"><!-- wp:post-template -->
<!-- wp:group {"metadata":{"name":"Entry"},"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"fontSize":"300"} /-->

<!-- wp:post-date {"textColor":"secondary","fontSize":"200"} /--></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"is-style-separator-thin","style":{"spacing":{"margin":{"top":"var:preset|spacing|spacing-50","bottom":"var:preset|spacing|spacing-50"}}},"backgroundColor":"border-light"} -->
<hr class="wp-block-separator has-text-color has-border-light-color has-alpha-channel-opacity has-border-light-background-color has-background is-style-separator-thin" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"/>
<!-- /wp:separator -->
<!-- /wp:post-template --></div>
<!-- /wp:group -->

<!-- wp:query-no-results -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|spacing-70","right":"var:preset|spacing|spacing-70","bottom":"var:preset|spacing|spacing-70","left":"var:preset|spacing|spacing-70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)"><!-- wp:paragraph {"align":"center","placeholder":"<?php esc_attr_e( 'Add text or blocks that will display when a query returns no results.', 'lsx-design' ); ?>","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"textColor":"secondary"} -->
<p class="has-text-align-center has-secondary-color has-text-color" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><?php esc_html_e( 'Looks like you haven\'t added any posts yet.', 'lsx-design' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- /wp:query-no-results --></div>
<!-- /wp:group --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
