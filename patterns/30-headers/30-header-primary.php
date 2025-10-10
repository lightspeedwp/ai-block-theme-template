<?php
/**
 * Title: Header: Primary
 * Slug: lsx-design/header-primary
 * Description: Primary site header template-part pattern. Contains site logo/site-title, primary navigation, search and utility actions. Intended to be used as the canonical header across templates.
 * Categories: lsx-design/header, lsx-design/sections
 * Keywords: header, navigation, logo, site-identity, search, header-primary
 * Viewport Width: 1368
 * Block Types: core/template-part/header
 * Post Types:
 * Template Types: all
 * Inserter: yes
 * Inserter Priority: 10
 * Author: LSX Design Team
 * Version: 1.0.0
 * License: GPL-2.0-or-later
 */
?>
<!-- wp:group {"align":"full","className":"lsx-header-primary","layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignfull lsx-header-primary"><!-- wp:group {"layout":{"type":"flex","verticalAlignment":"center","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":48} /-->

<!-- wp:site-title {"level":0} /--></div>
<!-- /wp:group -->

<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left"},"fontSize":"200"} -->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Home', 'lsx-design' ); ?>","type":"custom","url":"#"} /-->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'About', 'lsx-design' ); ?>","type":"custom","url":"#"} /-->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Blog', 'lsx-design' ); ?>","type":"custom","url":"#"} /-->
<!-- /wp:navigation -->

<!-- wp:group {"className":"lsx-header-actions","layout":{"type":"flex","verticalAlignment":"center","justifyContent":"right"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-group lsx-header-actions"><!-- wp:search {"label":"<?php esc_attr_e( 'Search', 'lsx-design' ); ?>","showLabel":false,"placeholder":"<?php esc_attr_e( 'Search site...', 'lsx-design' ); ?>"} /-->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get lsx-design', 'lsx-design' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->