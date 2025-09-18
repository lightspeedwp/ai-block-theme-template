<?php
/**
 * Block Styles
 *
 * @package AI_Block_Theme_Template
 * @since 1.0.0
 */

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register additional block styles.
 *
 * @since 1.0.0
 */
function ai_block_theme_register_additional_block_styles() {
	// Group block styles.
	register_block_style(
		'core/group',
		array(
			'name'  => 'shadow',
			'label' => __( 'Shadow', 'ai-block-theme-template' ),
		)
	);

	register_block_style(
		'core/group',
		array(
			'name'  => 'rounded',
			'label' => __( 'Rounded', 'ai-block-theme-template' ),
		)
	);

	// Button block styles.
	register_block_style(
		'core/button',
		array(
			'name'  => 'outline',
			'label' => __( 'Outline', 'ai-block-theme-template' ),
		)
	);

	register_block_style(
		'core/button',
		array(
			'name'  => 'ghost',
			'label' => __( 'Ghost', 'ai-block-theme-template' ),
		)
	);

	// Image block styles.
	register_block_style(
		'core/image',
		array(
			'name'  => 'rounded',
			'label' => __( 'Rounded', 'ai-block-theme-template' ),
		)
	);

	register_block_style(
		'core/image',
		array(
			'name'  => 'shadow',
			'label' => __( 'Drop Shadow', 'ai-block-theme-template' ),
		)
	);

	// List block styles.
	register_block_style(
		'core/list',
		array(
			'name'  => 'no-bullets',
			'label' => __( 'No Bullets', 'ai-block-theme-template' ),
		)
	);

	register_block_style(
		'core/list',
		array(
			'name'  => 'checkmarks',
			'label' => __( 'Checkmarks', 'ai-block-theme-template' ),
		)
	);

	// Quote block styles.
	register_block_style(
		'core/quote',
		array(
			'name'  => 'plain',
			'label' => __( 'Plain', 'ai-block-theme-template' ),
		)
	);

	// Separator block styles.
	register_block_style(
		'core/separator',
		array(
			'name'  => 'dotted',
			'label' => __( 'Dotted', 'ai-block-theme-template' ),
		)
	);
}
add_action( 'init', 'ai_block_theme_register_additional_block_styles' );