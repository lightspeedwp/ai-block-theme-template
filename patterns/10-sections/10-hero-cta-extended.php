<?php
/**
 * Title: Hero: Extended CTA
 * Slug: lsx-design/hero-cta-extended
 * Description: Full-width lead hero with headline, supporting text, two CTAs, optional background image, and feature badges. Designed as a primary landing hero for pages and front-page usage.
 * Categories: lsx-design/sections, banner, featured
 * Keywords: hero, cta, lead, banner, headline, call-to-action
 * Viewport Width: 1440
 * Viewport Height: 720
 * Block Types: core/cover, core/group
 * Post Types: page
 * Template Types: front-page, page
 * Inserter: yes
 * Inserter Priority: 10
 * Required Plugins:
 * Author: LightSpeed Team
 * Version: 1.0.0
 * Notes: Use H2 inside sections (templates should supply H1). Background image is optional — theme should provide a suitable default at assets/images/hero-cta.jpg.
 * Example Usage: Top section for a marketing landing or homepage.
 */
?>
<!-- wp:group {"align":"full","className":"lsx-hero-cta-extended","style":{"spacing":{"padding":{"top":"var:preset|spacing|spacing-80","bottom":"var:preset|spacing|spacing-80","left":"var:preset|spacing|spacing-50","right":"var:preset|spacing|spacing-50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull lsx-hero-cta-extended" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-cta.jpg' ) ); ?>","dimRatio":20,"isDark":false,"align":"full","className":"lsx-hero-cta-cover"} -->
	<div class="wp-block-cover alignfull lsx-hero-cta-cover" style="background-image:url('<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-cta.jpg' ) ); ?>')">
		<div class="wp-block-cover__inner-container">
			<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
			<div class="wp-block-group alignwide">
				<!-- wp:paragraph {"align":"center","textColor":"primary","fontSize":"200"} -->
				<p class="has-text-align-center has-primary-color has-text-color has-small-font-size"><?php echo esc_html__( 'Introducing', 'lsx-design' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"textAlign":"center","level":2,"className":"lsx-hero-cta-title","fontSize":"800"} -->
				<h2 class="wp-block-heading has-text-align-center lsx-hero-cta-title has-xx-large-font-size"><?php echo esc_html__( 'Design faster with LSX patterns', 'lsx-design' ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center","className":"lsx-hero-cta-lead"} -->
				<p class="has-text-align-center lsx-hero-cta-lead"><?php echo esc_html__( 'A curated library of composable sections, query loops and template parts for block themes.', 'lsx-design' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|spacing-20"}}} -->
				<div class="wp-block-buttons">
					<!-- wp:button {"className":"is-style-primary","width":200} -->
					<div class="wp-block-button is-style-primary has-custom-width wp-block-button__width-200"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Get started', 'lsx-design' ); ?></a></div>
					<!-- /wp:button -->

					<!-- wp:button {"className":"is-style-outline","width":200} -->
					<div class="wp-block-button is-style-outline has-custom-width wp-block-button__width-200"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'View docs', 'lsx-design' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->

				<!-- wp:spacer {"height":"var:preset|spacing|spacing-30"} -->
				<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->

				<!-- wp:group {"layout":{"type":"flex","justifyContent":"center","flexWrap":"nowrap"},"className":"lsx-hero-badges"} -->
				<div class="wp-block-group lsx-hero-badges">
					<!-- wp:paragraph {"className":"is-style-text-annotation"} -->
					<p class="is-style-text-annotation"><?php echo esc_html__( 'Trusted by teams at:', 'lsx-design' ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:image {"width":90,"height":28,"linkDestination":"none"} -->
					<figure class="wp-block-image is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/badge-1.png' ) ); ?>" alt="<?php echo esc_attr__( 'Client 1', 'lsx-design' ); ?>" width="90" height="28"/></figure>
					<!-- /wp:image -->
					<!-- wp:image {"width":90,"height":28,"linkDestination":"none"} -->
					<figure class="wp-block-image is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/badge-2.png' ) ); ?>" alt="<?php echo esc_attr__( 'Client 2', 'lsx-design' ); ?>" width="90" height="28"/></figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
	</div>
	<!-- /wp:cover -->
</div>
<!-- /wp:group -->