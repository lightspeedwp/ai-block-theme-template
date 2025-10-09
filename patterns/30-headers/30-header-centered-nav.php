<?php
/**
 * Title: Header: Centered with Navigation
 * Slug: lsx-design/header-centered-nav
 * Description: Primary site header with centered site title/logo and centered navigation; includes optional search toggle. Designed as a template-part header.
 * Categories: lsx-design/header
 * Keywords: header, nav, centered, logo, template-part
 * Viewport Width: 1368
 * Viewport Height: 200
 * Block Types: core/template-part/header
 * Post Types:
 * Template Types:
 * Inserter: yes
 * Inserter Priority: 5
 * Required Plugins:
 * Author: LightSpeed Team
 * Version: 1.0.0
 * Notes: Lock the top-level group to prevent accidental removal; allow inner edits for link text.
 */
?>
<!-- wp:group {"align":"full","className":"lsx-header-centered","layout":{"type":"constrained"},"lock":{"move":true,"remove":true},"style":{"spacing":{"padding":{"top":"20px","bottom":"20px"}}}} -->
<div class="wp-block-group alignfull lsx-header-centered" style="padding-top:var(--wp--preset--spacing--spacing-30);padding-bottom:var(--wp--preset--spacing--spacing-30)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"center","flexWrap":"nowrap"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:site-logo {"width":56} /-->
		<!-- wp:site-title {"level":0,"textAlign":"center"} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:navigation {"openSubmenusOnClick":true,"overlayMenu":"never","className":"lsx-centered-nav","layout":{"type":"flex","justifyContent":"center"}} /-->
</div>
<!-- /wp:group -->