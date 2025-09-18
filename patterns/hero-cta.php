<?php
/**
 * Title: Hero with Call to Action
 * Slug: ai-block-theme-template/hero-cta
 * Categories: ai-block-theme-template
 * Keywords: hero, cta, banner, call-to-action
 */
?>

<!-- wp:cover {"url":"","dimRatio":50,"overlayColor":"black","minHeight":60,"minHeightUnit":"vh","contentPosition":"center center","align":"full"} -->
<div class="wp-block-cover alignfull" style="min-height:60vh">
	<span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim"></span>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"xx-large","textColor":"white"} -->
			<h1 class="wp-block-heading has-text-align-center has-white-color has-text-color has-xx-large-font-size">
				Build Amazing WordPress Sites
			</h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","fontSize":"large","textColor":"white"} -->
			<p class="has-text-align-center has-white-color has-text-color has-large-font-size">
				Create modern, responsive websites with our AI-powered block theme template. 
				Features full site editing, custom patterns, and development tools.
			</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
				<!-- wp:button {"backgroundColor":"primary","textColor":"white","style":{"border":{"radius":"4px"}}} -->
				<div class="wp-block-button">
					<a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:4px">
						Get Started
					</a>
				</div>
				<!-- /wp:button -->

				<!-- wp:button {"backgroundColor":"transparent","textColor":"white","style":{"border":{"radius":"4px","color":"var:preset|color|white","width":"2px"}}} -->
				<div class="wp-block-button">
					<a class="wp-block-button__link has-white-color has-transparent-background-color has-text-color has-background has-border-color wp-element-button" style="border-color:var(--wp--preset--color--white);border-width:2px;border-radius:4px">
						Learn More
					</a>
				</div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->