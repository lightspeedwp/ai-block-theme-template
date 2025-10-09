<?php
/**
 * Title: Hero: Dark
 * Slug: lsx-design/hero-dark
 * Description: Full-width dark hero with overlay, headline, supporting text, CTA buttons and a preview screenshot. Ideal for front pages and feature sections.
 * Categories: lsx-design/sections, lsx-design/cta
 * Keywords: hero, dark, cta, headline, screenshot, homepage
 * Viewport Width: 1440
 * Block Types: core/cover
 * Post Types: page
 * Template Types: front-page, page
 * Inserter: yes
 * Inserter Priority: 10
 * Required Plugins:
 * Author: LSX Design Team
 * Version: 1.0.0
 * License: GPL-2.0-or-later
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'patterns/images/guy-laptop.webp' ) ); ?>","dimRatio":80,"overlayColor":"neutral-800","isUserOverlayColor":true,"align":"full","className":"is-style-hero-dark is-style-blur-image is-style-blur-image-less","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<div class="wp-block-cover alignfull is-style-blur-image is-style-blur-image-less" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><span aria-hidden="true" class="wp-block-cover__background has-neutral-800-background-color has-background-dim-80 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php esc_attr_e( 'Person working on laptop', 'lsx-design' ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'patterns/images/guy-laptop.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"full","className":"lsx-hero-dark-wrap","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"},"blockGap":"0px"}},"textColor":"base","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull lsx-hero-dark-wrap has-base-color has-text-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--90);padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"className":"lsx-hero-content","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|90"}}}} -->
<div class="wp-block-group lsx-hero-content" style="padding-bottom:var(--wp--preset--spacing--90)"><!-- wp:group {"className":"lsx-hero-titles","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group lsx-hero-titles"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"accent","fontSize":"200"} -->
<p class="has-text-align-center has-accent-color has-text-color has-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e( 'WordPress Reimagined', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":1,"className":"has-secondary-font-family","fontSize":"800"} -->
<h1 class="wp-block-heading has-text-align-center has-secondary-font-family has-large-font-size"><?php esc_html_e( 'Build your site with clicks, not code.', 'lsx-design' ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"center","textColor":"accent"} -->
<p class="has-text-align-center has-accent-color has-text-color"><?php esc_html_e( 'Easily create beautiful, fully-customizable websites with the Site Editor and LSX Design patterns. No coding skills required.', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-button-brand"} -->
<div class="wp-block-button is-style-button-brand"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get LSX Design', 'lsx-design' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-button-light"} -->
<div class="wp-block-button is-style-button-light"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'LSX Design Features', 'lsx-design' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","align":"wide","className":"lsx-hero-screenshot is-style-default","style":{"border":{"radius":{"bottomLeft":"0px","bottomRight":"0px"}}}} -->
<figure class="wp-block-image alignwide size-full lsx-hero-screenshot is-style-default" style="border-bottom-left-radius:0px;border-bottom-right-radius:0px"><img src="<?php echo esc_url( get_theme_file_uri( 'patterns/images/desktop.webp' ) ); ?>" alt="<?php esc_attr_e( 'Desktop screenshot', 'lsx-design' ); ?>"/></figure>
<!-- /wp:image --></div></div></div>
<!-- /wp:cover -->