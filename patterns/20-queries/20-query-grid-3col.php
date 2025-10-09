<?php
/**
 * Title: Query: Grid (3 Columns)
 * Slug: lsx-design/query-grid-3col
 * Description: Three-column Query Loop container using a compact post card pattern. Ideal for archives, category pages and home sections.
 * Categories: lsx-design/sections, lsx-design/posts, query
 * Keywords: query, grid, posts, archive, card, three-column
 * Viewport Width: 1400
 * Viewport Height: 800
 * Block Types: core/query
 * Post Types:
 * Template Types: front-page, home, index, archive
 * Inserter: yes
 * Inserter Priority: 15
 * Required Plugins:
 * Author: LightSpeed Team
 * Version: 1.0.0
 * Notes: Intended to be used with lsx-design/post-card (or local post-card variants). Use inherit:true on archive templates to respect the page query.
 * Example Usage: Insert on home or archive template parts.
 */
?>
<!-- wp:query {"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|48","bottom":"var:preset|spacing|48"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--48);padding-bottom:var(--wp--preset--spacing--48)">
		<!-- wp:post-template {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"18rem"}} -->
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|spacing-30pacing-20","bottom":"var:preset|spacing|spacing-30pacing-20"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--spacing-20);padding-bottom:var(--wp--preset--spacing--spacing-20)">
			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->
			<!-- wp:post-title {"isLink":true,"fontSize":"500"} /-->
			<!-- wp:post-excerpt {"moreText":"<?php echo esc_html__( 'Read more', 'lsx-design' ); ?>"} /-->
			<!-- wp:post-date {"fontSize":"200","isLink":true} /-->
		</div>
		<!-- /wp:group -->
		<!-- /wp:post-template -->

		<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:query-pagination {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
			<!-- wp:query-pagination-previous {"className":"is-style-wp-block-button__link"} /-->
			<!-- wp:query-pagination-next {"className":"is-style-wp-block-button__link"} /-->
			<!-- /wp:query-pagination -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:query -->