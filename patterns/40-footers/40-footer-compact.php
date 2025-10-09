<?php
/**
 * Title: Footer: Compact
 * Slug: lsx-design/footer-compact
 * Description: A compact footer with site title, minimal nav, social links and legal area; suitable for smaller screens and simple sites.
 * Categories: lsx-design/footer, footer
 * Keywords: footer, legal, social, compact
 * Viewport Width: 1368
 * Viewport Height: 360
 * Block Types: core/template-part/footer
 * Post Types:
 * Template Types:
 * Inserter: yes
 * Inserter Priority: 30
 * Required Plugins:
 * Author: LightSpeed Team
 * Version: 1.0.0
 * Notes: Keep top-level structure editable; lock inner group if necessary.
 */
?>
<!-- wp:group {"align":"full","className":"lsx-footer-compact","style":{"spacing":{"padding":{"top":"32px","bottom":"32px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull lsx-footer-compact" style="padding-top:32px;padding-bottom:32px">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:site-title {"level":0} /-->

		<!-- wp:navigation {"orientation":"horizontal","className":"lsx-footer-mini-nav"} /-->

		<!-- wp:social-links {"iconColor":"contrast","className":"lsx-footer-social-mini","layout":{"type":"flex","justifyContent":"center"}} -->
		<ul class="wp-block-social-links lsx-footer-social-mini has-contrast-color has-icon-color"><!-- wp:social-link {"service":"twitter"} /--><!-- wp:social-link {"service":"instagram"} /--></ul>
		<!-- /wp:social-links -->
	</div>
	<!-- /wp:group -->

	<!-- wp:separator {"className":"is-style-separator-thin"} -->
	<hr class="wp-block-separator is-style-separator-thin"/>
	<!-- /wp:separator -->

	<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"fontSize":"200"} -->
		<p class="has-small-font-size"><?php echo esc_html__( '© ', 'lsx-design' ) . date_i18n( 'Y' ) . ' · ' . esc_html__( 'Your Site', 'lsx-design' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"fontSize":"200"} -->
		<p class="has-small-font-size"><a href="/privacy"><?php echo esc_html__( 'Privacy', 'lsx-design' ); ?></a> · <a href="/terms"><?php echo esc_html__( 'Terms', 'lsx-design' ); ?></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->