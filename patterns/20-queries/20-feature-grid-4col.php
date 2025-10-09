<?php
/**
 * Title: Features: 4 Column Grid
 * Slug: lsx-design/features-grid-4col
 * Description: Four-column feature grid with icon, title and short description. Works standalone or as part of a landing page section.
 * Categories: lsx-design/sections, features
 * Keywords: features, grid, icons, benefits, four-column, services
 * Viewport Width: 1368
 * Viewport Height: 720
 * Block Types: core/group
 * Post Types:
 * Template Types:
 * Inserter: yes
 * Inserter Priority: 20
 * Required Plugins:
 * Author: LightSpeed Team
 * Version: 1.0.0
 * Notes: Use theme SVG icons in assets/icons/; each feature is designed to be editable.
 * Example Usage: Use below hero sections to list product/service benefits.
 */
?>
<!-- wp:group {"align":"full","className":"lsx-features-grid-4col","style":{"spacing":{"padding":{"top":"var:preset|spacing|spacing-30pacing-60","bottom":"var:preset|spacing|spacing-30pacing-60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull lsx-features-grid-4col" style="padding-top:var(--wp--preset--spacing--spacing-60);padding-bottom:var(--wp--preset--spacing--spacing-60)">
	<!-- wp:group {"align":"wide","layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"16rem"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:image {"width":48,"linkDestination":"none"} -->
			<figure class="wp-block-image is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/icons/icon-speed.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Speed icon', 'lsx-design' ); ?>" width="48"/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":3,"fontSize":"500"} -->
			<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Built for Speed', 'lsx-design' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"200"} -->
			<p class="has-small-font-size"><?php echo esc_html__( 'Optimised patterns to reduce build time and improve load performance.', 'lsx-design' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:image {"width":48,"linkDestination":"none"} -->
			<figure class="wp-block-image is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/icons/icon-accessibility.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Accessibility icon', 'lsx-design' ); ?>" width="48"/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":3,"fontSize":"500"} -->
			<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Accessible', 'lsx-design' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"200"} -->
			<p class="has-small-font-size"><?php echo esc_html__( 'Patterns follow accessibility best practices for headings, contrast and keyboard navigation.', 'lsx-design' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:image {"width":48,"linkDestination":"none"} -->
			<figure class="wp-block-image is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/icons/icon-components.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Components icon', 'lsx-design' ); ?>" width="48"/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":3,"fontSize":"500"} -->
			<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Composable', 'lsx-design' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"200"} -->
			<p class="has-small-font-size"><?php echo esc_html__( 'Mix and match sections, query loops and template parts for rapid assembly.', 'lsx-design' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:image {"width":48,"linkDestination":"none"} -->
			<figure class="wp-block-image is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/icons/icon-support.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Support icon', 'lsx-design' ); ?>" width="48"/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":3,"fontSize":"500"} -->
			<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Supported', 'lsx-design' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"200"} -->
			<p class="has-small-font-size"><?php echo esc_html__( 'Well-documented patterns and example usage for all components.', 'lsx-design' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->