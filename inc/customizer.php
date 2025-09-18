<?php
/**
 * Customizer Settings
 *
 * @package AI_Block_Theme_Template
 * @since 1.0.0
 */

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Add customizer settings for the theme.
 *
 * @since 1.0.0
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function ai_block_theme_customize_register( $wp_customize ) {
	// Add theme options section.
	$wp_customize->add_section(
		'ai_block_theme_options',
		array(
			'title'    => __( 'Theme Options', 'ai-block-theme-template' ),
			'priority' => 130,
		)
	);

	// Add setting for footer text.
	$wp_customize->add_setting(
		'ai_block_theme_footer_text',
		array(
			'default'           => __( 'Built with WordPress and AI assistance.', 'ai-block-theme-template' ),
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	// Add control for footer text.
	$wp_customize->add_control(
		'ai_block_theme_footer_text',
		array(
			'label'       => __( 'Footer Text', 'ai-block-theme-template' ),
			'description' => __( 'Customize the footer text that appears at the bottom of your site.', 'ai-block-theme-template' ),
			'section'     => 'ai_block_theme_options',
			'type'        => 'text',
		)
	);
}
add_action( 'customize_register', 'ai_block_theme_customize_register' );

/**
 * Get customizer setting with fallback.
 *
 * @since 1.0.0
 *
 * @param string $setting Setting name.
 * @param mixed  $default Default value.
 * @return mixed Setting value or default.
 */
function ai_block_theme_get_option( $setting, $default = '' ) {
	return get_theme_mod( $setting, $default );
}