<?php
/**
 * Title: Blog Post Columns
 * Slug: lsx-design/blog-post-columns
 * Description:
 * Categories: lsx-design/sections
 * Keywords: blog, posts, query, pages
 * Version: 0.2.0
 * License: GPL-2.0-or-later
 * Viewport Width: 1500
 * Block Types:
 * Post Types:
 * Inserter: true
 */
?>
<!-- wp:group {"metadata":{"name":"Blog Post Columns"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|spacing-90","bottom":"var:preset|spacing|spacing-90","right":"var:preset|spacing|spacing-50","left":"var:preset|spacing|spacing-50"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"var:preset|spacing|spacing-80"}},"backgroundColor":"tertiary","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull has-tertiary-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--90);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"metadata":{"name":"Titles"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|spacing-70"},"blockGap":"var:preset|spacing|spacing-30"}}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"primary","fontSize":"200"} -->
<p class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Latest and Greatest', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Read our latest blog articles', 'lsx-design' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e( 'Learn the latest and greatest in WordPress site building. We\'re offering tutorials, tips and tricks, and video walkthroughs on our blog.', 'lsx-design' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":1,"query":{"perPage":"2","pages":"2","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|spacing-70"}},"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:pattern {"slug":"ollie/blog-post-card"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
