<?php
/**
 * Block Patterns
 *
 * @package AI_Block_Theme_Template
 * @since 1.0.0
 */

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register block patterns.
 *
 * @since 1.0.0
 */
function ai_block_theme_register_block_patterns() {
	// Hero section pattern.
	register_block_pattern(
		'ai-block-theme-template/hero-section',
		array(
			'title'         => __( 'Hero Section', 'ai-block-theme-template' ),
			'description'   => __( 'A hero section with title, description, and call-to-action button.', 'ai-block-theme-template' ),
			'content'       => '<!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/hero-bg.jpg","id":123,"dimRatio":50,"overlayColor":"black","minHeight":60,"minHeightUnit":"vh","contentPosition":"center center","align":"full"} -->
<div class="wp-block-cover alignfull" style="min-height:60vh"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"fontSize":"xx-large","textColor":"white"} -->
<h1 class="wp-block-heading has-text-align-center has-white-color has-text-color has-xx-large-font-size">Welcome to AI Block Theme</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"large","textColor":"white"} -->
<p class="has-text-align-center has-white-color has-text-color has-large-font-size">Build modern WordPress sites with AI-powered development tools and comprehensive block theme features.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:button {"backgroundColor":"primary","textColor":"white","style":{"border":{"radius":"4px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:4px">Get Started</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->',
			'categories'    => array( 'ai-block-theme-template' ),
			'keywords'      => array( 'hero', 'cover', 'banner' ),
		)
	);

	// Call to action pattern.
	register_block_pattern(
		'ai-block-theme-template/call-to-action',
		array(
			'title'         => __( 'Call to Action', 'ai-block-theme-template' ),
			'description'   => __( 'A call to action section with heading, description, and button.', 'ai-block-theme-template' ),
			'content'       => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}},"color":{"background":"var:preset|color|primary"}},"textColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-x-large-font-size">Ready to Build Something Amazing?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size">Start your next WordPress project with our AI-powered block theme template.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:button {"backgroundColor":"white","textColor":"primary","style":{"border":{"radius":"4px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-white-background-color has-text-color has-background wp-element-button" style="border-radius:4px">Download Now</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
			'categories'    => array( 'ai-block-theme-template' ),
			'keywords'      => array( 'cta', 'call-to-action', 'button' ),
		)
	);
}
add_action( 'init', 'ai_block_theme_register_block_patterns' );