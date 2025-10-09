<?php
/**
 * Title: Lead Magnet Card
 * Slug: lsx-design/lead-magnet-card
 * Description: A call-to-action box to offer a free download or sign up user to an email list.
 * Categories: lsx-design/sections
 * Keywords: download, button, cta, email, card
 * Version: 0.2.0
 * License: GPL-2.0-or-later
 * Viewport Width: 800
 * Block Types:
 * Post Types:
 * Inserter: true
 */
?>
<!-- wp:group {"metadata":{"name":"Lead Magnet Card"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|spacing-70","right":"var:preset|spacing|spacing-70","bottom":"var:preset|spacing|spacing-70","left":"var:preset|spacing|spacing-70"}},"border":{"radius":"5px"}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-tertiary-background-color has-background" style="border-radius:5px;padding-top:var(--wp--preset--spacing--spacing-70);padding-right:var(--wp--preset--spacing--spacing-70);padding-bottom:var(--wp--preset--spacing--spacing-70);padding-left:var(--wp--preset--spacing--spacing-70)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|spacing-70","left":"var:preset|spacing|spacing-70"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/guy-laptop.webp","id":2843,"dimRatio":0,"customOverlayColor":"var(--wp--preset--color--primary)","isUserOverlayColor":true,"focalPoint":{"x":0.58,"y":0.52},"minHeight":281,"minHeightUnit":"px","isDark":false,"className":"is-style-rounded-cover","style":{"dimensions":{"aspectRatio":"3/4"}}} -->
<div class="wp-block-cover is-light is-style-rounded-cover" style="min-height:281px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:var(--wp--preset--color--primary)"></span><img class="wp-block-cover__image-background wp-image-2843" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/guy-laptop.webp" style="object-position:58% 52%" data-object-fit="cover" data-object-position="58% 52%"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"<?php esc_attr_e( 'Write title…', 'lsx-design' ); ?>"} -->
<p class="has-text-align-center"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"66.66%","style":{"spacing":{"blockGap":"var:preset|spacing|spacing-30"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"primary","fontSize":"200"} -->
<p class="has-primary-color has-text-color has-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Download Ollie', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"300"} -->
<p class="has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Start using the powerful new WordPress editor with Ollie', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"200"} -->
<p class="has-small-font-size"><?php esc_html_e( 'Start creating beautiful, fully-customizable websites with the new WordPress Site Editor and the Ollie block theme.', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|spacing-50"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--spacing-50)"><!-- wp:button {"width":100,"className":"lemonsqueezy-button"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 lemonsqueezy-button"><a class="wp-block-button__link wp-element-button" href="https://olliewp.com"><?php esc_html_e( 'Download Ollie for free!', 'lsx-design' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
