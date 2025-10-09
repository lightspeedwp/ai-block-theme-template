<?php
/**
 * Title: Text and Details Card
 * Slug: lsx-design/text-and-details-card
 * Description: 
 * Categories: lsx-design/sections
 * Keywords: table, stats, details, list, card
 * Viewport Width: 1500
 * Block Types: 
 * Post Types: 
 * Inserter: true
 */
?>
<!-- wp:group {"metadata":{"name":"Text and Details Inside"},"align":"full","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"right":"var:preset|spacing|spacing-50","left":"var:preset|spacing|spacing-50","top":"var:preset|spacing|spacing-90","bottom":"var:preset|spacing|spacing-90"}}},"backgroundColor":"main","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-main-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--spacing-90);padding-right:var(--wp--preset--spacing--spacing-50);padding-bottom:var(--wp--preset--spacing--spacing-90);padding-left:var(--wp--preset--spacing--spacing-50)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|spacing-80","left":"var:preset|spacing|spacing-80"},"margin":{"top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center" style="margin-top:0px;margin-bottom:0px"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"metadata":{"name":"Titles"},"style":{"spacing":{"blockGap":"var:preset|spacing|spacing-30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"main-accent","fontSize":"200"} -->
<p class="has-main-accent-color has-text-color has-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Start Designing', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textColor":"base"} -->
<h2 class="wp-block-heading has-base-color has-text-color"><?php esc_html_e( 'Download Ollie for free today and start building', 'lsx-design' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"main-accent"} -->
<p class="has-main-accent-color has-text-color"><?php esc_html_e( 'Ollie ships with a growing collection of design patterns that cohesively click together. Drag, drop, mix, and match patterns to create stunning designs in just a few minutes.', 'lsx-design' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"CTA Row"},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|spacing-30"}}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-button-light"} -->
<div class="wp-block-button is-style-button-light"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Download Ollie', 'lsx-design' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|main-accent"}}}},"fontSize":"200"} -->
<p class="has-link-color has-small-font-size"><a href="https://wordpress.org"><?php esc_html_e( 'View on WordPress.org', 'lsx-design' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"is-style-separator-thin","style":{"spacing":{"margin":{"top":"var:preset|spacing|spacing-70","bottom":"var:preset|spacing|spacing-70"}}},"backgroundColor":"border-dark"} -->
<hr class="wp-block-separator has-text-color has-border-dark-color has-alpha-channel-opacity has-border-dark-background-color has-background is-style-separator-thin" style="margin-top:var(--wp--preset--spacing--spacing-70);margin-bottom:var(--wp--preset--spacing--spacing-70)"/>
<!-- /wp:separator -->

<!-- wp:group {"metadata":{"name":"Testimonial"},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:image {"id":57,"width":"75px","height":"75px","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded-full"} -->
<figure class="wp-block-image size-full is-resized is-style-rounded-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/avatar-2.webp" alt="" class="wp-image-57" style="width:75px;height:75px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"main-accent","fontSize":"x-small"} -->
<p class="has-main-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'The WordPress Site Editor is a total game changer. It\'s blazing fast and I don\'t need a page builder anymore. 😍', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"x-small"} -->
<p class="has-base-color has-text-color has-link-color has-x-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e( '— Mandi Alpine, Brandwich', 'lsx-design' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"metadata":{"name":"Details Box"},"style":{"border":{"radius":"5px"},"spacing":{"blockGap":"0","padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-radius:5px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"metadata":{"name":"Entry"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|spacing-50","right":"var:preset|spacing|spacing-70","bottom":"var:preset|spacing|spacing-50","left":"var:preset|spacing|spacing-70"}},"border":{"radius":{"topLeft":"5px","topRight":"5px"}}},"backgroundColor":"primary","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="border-top-left-radius:5px;border-top-right-radius:5px;padding-top:var(--wp--preset--spacing--spacing-50);padding-right:var(--wp--preset--spacing--spacing-70);padding-bottom:var(--wp--preset--spacing--spacing-50);padding-left:var(--wp--preset--spacing--spacing-70)"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"base","fontSize":"300"} -->
<p class="has-base-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Theme Details', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"base","iconColorValue":"var(--wp--preset--color--base)","showLabels":true,"size":"has-normal-icon-size","className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-normal-icon-size has-visible-labels has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"https://wordpress.org","service":"wordpress"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Entry"},"style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|spacing-50","right":"var:preset|spacing|spacing-70","bottom":"var:preset|spacing|spacing-50","left":"var:preset|spacing|spacing-70"}}},"backgroundColor":"base","textColor":"main","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-main-color has-base-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--spacing-50);padding-right:var(--wp--preset--spacing--spacing-70);padding-bottom:var(--wp--preset--spacing--spacing-50);padding-left:var(--wp--preset--spacing--spacing-70)"><!-- wp:paragraph -->
<p><?php esc_html_e( 'Downloads:', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( '33,240', 'lsx-design' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Entry"},"style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|spacing-50","right":"var:preset|spacing|spacing-70","bottom":"var:preset|spacing|spacing-50","left":"var:preset|spacing|spacing-70"}}},"backgroundColor":"tertiary","textColor":"main","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-main-color has-tertiary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--spacing-50);padding-right:var(--wp--preset--spacing--spacing-70);padding-bottom:var(--wp--preset--spacing--spacing-50);padding-left:var(--wp--preset--spacing--spacing-70)"><!-- wp:paragraph -->
<p><?php esc_html_e( 'Version:', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( '1.1.0', 'lsx-design' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Entry"},"style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|spacing-50","right":"var:preset|spacing|spacing-70","bottom":"var:preset|spacing|spacing-50","left":"var:preset|spacing|spacing-70"}}},"backgroundColor":"base","textColor":"main","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-main-color has-base-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--spacing-50);padding-right:var(--wp--preset--spacing--spacing-70);padding-bottom:var(--wp--preset--spacing--spacing-50);padding-left:var(--wp--preset--spacing--spacing-70)"><!-- wp:paragraph -->
<p><?php esc_html_e( 'Average Rating:', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( '★★★★★', 'lsx-design' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Entry"},"style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|spacing-50","right":"var:preset|spacing|spacing-70","bottom":"var:preset|spacing|spacing-50","left":"var:preset|spacing|spacing-70"}}},"backgroundColor":"tertiary","textColor":"main","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-main-color has-tertiary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--spacing-50);padding-right:var(--wp--preset--spacing--spacing-70);padding-bottom:var(--wp--preset--spacing--spacing-50);padding-left:var(--wp--preset--spacing--spacing-70)"><!-- wp:paragraph -->
<p><?php esc_html_e( 'Filesize:', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( '2.2MB', 'lsx-design' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Entry"},"style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|spacing-50","right":"var:preset|spacing|spacing-70","bottom":"var:preset|spacing|spacing-50","left":"var:preset|spacing|spacing-70"}},"border":{"radius":{"bottomLeft":"5px","bottomRight":"5px"}}},"backgroundColor":"base","textColor":"main","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-main-color has-base-background-color has-text-color has-background" style="border-bottom-left-radius:5px;border-bottom-right-radius:5px;padding-top:var(--wp--preset--spacing--spacing-50);padding-right:var(--wp--preset--spacing--spacing-70);padding-bottom:var(--wp--preset--spacing--spacing-50);padding-left:var(--wp--preset--spacing--spacing-70)"><!-- wp:paragraph -->
<p><?php esc_html_e( 'Patterns:', 'lsx-design' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( '50+', 'lsx-design' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
