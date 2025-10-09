<?php
/**
 * Title: Hero: Split — Text + Screenshot
 * Slug: lsx-design/hero-split-cta
 * Description: Split hero with headline, supporting text and CTAs on the left and a screenshot on the right. Great for product landing sections.
 * Categories: lsx-design/sections, lsx-design/cta
 * Keywords: hero, split, cta, screenshot, product
 * Viewport Width: 1440
 * Block Types: core/cover
 * Post Types: page
 * Template Types: front-page, page
 * Inserter: yes
 * Inserter Priority: 20
 * Author: LSX Design Team
 * Version: 1.0.0
 * License: GPL-2.0-or-later
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|spacing-30pacing-90","bottom":"var:preset|spacing|spacing-30pacing-90"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--spacing-90);padding-bottom:var(--wp--preset--spacing--spacing-90)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|spacing-30pacing-80"}}} -->
<div class="wp-block-columns alignwide" style="column-gap:var(--wp--preset--spacing--spacing-80)"><!-- wp:column {"width":"55%"} -->
<div class="wp-block-column" style="flex-basis:55%"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"primary","fontSize":"200"} -->
<p class="has-primary-color has-text-color has-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Design Without Limits', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php esc_html_e( 'Build beautiful pages faster with patterns and the Site Editor', 'lsx-design' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"secondary"} -->
<p class="has-secondary-color has-text-color"><?php esc_html_e( 'Use pre-made patterns to compose pages that look incredible on every device. No code required.', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get lsx-design', 'lsx-design' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-button-light"} -->
<div class="wp-block-button is-style-button-light"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Explore Patterns', 'lsx-design' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"45%"} -->
<div class="wp-block-column" style="flex-basis:45%"><!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'patterns/images/desktop.webp' ) ); ?>","dimRatio":0,"minHeight":320,"isDark":false,"style":{"border":{"radius":"8px"}}} -->
<div class="wp-block-cover is-light" style="border-radius:8px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php esc_attr_e( 'Desktop preview', 'lsx-design' ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'patterns/images/desktop.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->