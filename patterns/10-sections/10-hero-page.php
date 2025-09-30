<?php
/**
 * Title: Hero: Page
 * Slug: lsx-design/hero-page
 * Description: Large, full-width page hero with headline, lead paragraph and primary CTA. Ideal for front pages and key landing pages.
 * Categories: lsx-design/sections, lsx-design/cta
 * Keywords: hero, page, cta, banner, lead
 * Viewport Width: 1440
 * Block Types: core/cover
 * Post Types: page
 * Template Types: front-page, page
 * Inserter: yes
 * Inserter Priority: 15
 * Author: LSX Design Team
 * Version: 1.0.0
 * License: GPL-2.0-or-later
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-desktop.jpg' ) ); ?>","dimRatio":30,"minHeight":480,"isDark":false,"align":"full"} -->
<div class="wp-block-cover alignfull" style="background-image:url(<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-desktop.jpg' ) ); ?>);min-height:480px"><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-text-color has-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Design Without Limits', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php esc_html_e( 'Build beautiful pages faster with patterns', 'lsx-design' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"secondary"} -->
<p class="has-secondary-color has-text-color"><?php esc_html_e( 'Assemble pages quickly with curated, editable blocks and patterns.', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get lsx-design', 'lsx-design' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Explore Patterns', 'lsx-design' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->