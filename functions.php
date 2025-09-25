<?php
/**
 * AI Block Theme Template functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package AI_Block_Theme_Template
 * @since 1.0.0
 */

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Define theme constants.
 */
define( 'AI_BLOCK_THEME_VERSION', '1.0.0' );
define( 'AI_BLOCK_THEME_TEMPLATE_DIR', get_template_directory() );
define( 'AI_BLOCK_THEME_TEMPLATE_URI', get_template_directory_uri() );

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @since 1.0.0
 */
function ai_block_theme_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// Add support for custom logo.
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);

	// Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );

	// Add support for experimental link color control.
	add_theme_support( 'experimental-link-color' );

	// Add support for custom line height controls.
	add_theme_support( 'custom-line-height' );

	// Add support for experimental cover block spacing.
	add_theme_support( 'custom-spacing' );

	// Add support for custom units.
	add_theme_support( 'custom-units' );

	// Remove core block patterns.
	remove_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme', 'ai_block_theme_setup' );

/**
 * Enqueue theme stylesheets and scripts.
 *
 * @since 1.0.0
 */
function ai_block_theme_scripts() {
	// Enqueue theme stylesheet.
	wp_enqueue_style(
		'ai-block-theme-style',
		get_stylesheet_uri(),
		array(),
		AI_BLOCK_THEME_VERSION
	);

	// Enqueue comment reply script.
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ai_block_theme_scripts' );

/**
 * Enqueue block editor stylesheets.
 *
 * @since 1.0.0
 */
function ai_block_theme_editor_styles() {
	// Enqueue editor styles.
	add_editor_style( 'style.css' );
}
add_action( 'admin_init', 'ai_block_theme_editor_styles' );

/**
 * Register block styles.
 *
 * @since 1.0.0
 */
function ai_block_theme_register_block_styles() {
	// Register a custom block style for the group block.
	register_block_style(
		'core/group',
		array(
			'name'  => 'border',
			'label' => __( 'Border', 'ai-block-theme-template' ),
		)
	);

	// Register a custom block style for the heading block.
	register_block_style(
		'core/heading',
		array(
			'name'  => 'underline',
			'label' => __( 'Underline', 'ai-block-theme-template' ),
		)
	);
}
add_action( 'init', 'ai_block_theme_register_block_styles' );

/**
 * Register block pattern categories.
 *
 * @since 1.0.0
 */
function ai_block_theme_register_pattern_categories() {
	register_block_pattern_category(
		'ai-block-theme-template',
		array(
			'label'       => __( 'AI Block Theme Template', 'ai-block-theme-template' ),
			'description' => __( 'Patterns for AI Block Theme Template.', 'ai-block-theme-template' ),
		)
	);
}
add_action( 'init', 'ai_block_theme_register_pattern_categories' );

/**
 * Add custom image sizes.
 *
 * @since 1.0.0
 */
function ai_block_theme_add_image_sizes() {
	// Add custom image sizes.
	add_image_size( 'ai-block-theme-featured', 1200, 630, true );
	add_image_size( 'ai-block-theme-thumbnail', 300, 300, true );
}
add_action( 'after_setup_theme', 'ai_block_theme_add_image_sizes' );

/**
 * Add custom body classes.
 *
 * @since 1.0.0
 *
 * @param array $classes Classes for the body element.
 * @return array Modified body classes.
 */
function ai_block_theme_body_classes( $classes ) {
	// Add class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Add a class for JavaScript enabled browsers.
	$classes[] = 'no-js';

	return $classes;
}
add_filter( 'body_class', 'ai_block_theme_body_classes' );

/**
 * Replace 'no-js' class with 'js' in the HTML class attribute.
 *
 * @since 1.0.0
 */
function ai_block_theme_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'ai_block_theme_javascript_detection', 0 );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 *
 * @since 1.0.0
 */
function ai_block_theme_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'ai_block_theme_pingback_header' );

/**
 * Include theme includes.
 */
if ( file_exists( AI_BLOCK_THEME_TEMPLATE_DIR . '/inc/customizer.php' ) ) {
	require_once AI_BLOCK_THEME_TEMPLATE_DIR . '/inc/customizer.php';
}

if ( file_exists( AI_BLOCK_THEME_TEMPLATE_DIR . '/inc/block-patterns.php' ) ) {
	require_once AI_BLOCK_THEME_TEMPLATE_DIR . '/inc/block-patterns.php';
}

if ( file_exists( AI_BLOCK_THEME_TEMPLATE_DIR . '/inc/block-styles.php' ) ) {
	require_once AI_BLOCK_THEME_TEMPLATE_DIR . '/inc/block-styles.php';
}
