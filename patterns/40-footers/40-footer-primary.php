<?php
/**
 * Title: Footer: Primary
 * Slug: lsx-design/footer-primary
 * Description: Rich footer template-part pattern with multi-column links, newsletter signup and legal area. Designed for site-wide use as parts/footer.
 * Categories: lsx-design/footer, lsx-design/sections
 * Keywords: footer, links, newsletter, legal, credits
 * Viewport Width: 1200
 * Block Types: core/template-part/footer
 * Post Types:
 * Template Types: all
 * Inserter: yes
 * Inserter Priority: 10
 * Author: LSX Design Team
 * Version: 1.0.0
 * License: GPL-2.0-or-later
 */
?>
<!-- wp:group {"align":"full","className":"lsx-footer-primary","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull lsx-footer-primary" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"33%"} -->
<div class="wp-block-column" style="flex-basis:33%"><!-- wp:site-title {"level":0} /-->

<!-- wp:paragraph {"textColor":"secondary","fontSize":"200"} -->
<p class="has-secondary-color has-text-color has-small-font-size"><?php esc_html_e( 'Building better experiences, one pattern at a time.', 'lsx-design' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33%"} -->
<div class="wp-block-column" style="flex-basis:33%"><!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading"><?php esc_html_e( 'Explore', 'lsx-design' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Docs', 'lsx-design' ); ?></p>

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Patterns', 'lsx-design' ); ?></p>

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Community', 'lsx-design' ); ?></p></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33%"} -->
<div class="wp-block-column" style="flex-basis:33%"><!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading"><?php esc_html_e( 'Stay in touch', 'lsx-design' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Subscribe to updates and new pattern releases.', 'lsx-design' ); ?></p>

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:email {"placeholder":"<?php esc_attr_e( 'Your email', 'lsx-design' ); ?>"} /-->

<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Subscribe', 'lsx-design' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
<hr class="wp-block-separator"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"className":"lsx-footer-legal","fontSize":"x-small"} -->
<p class="lsx-footer-legal has-x-small-font-size"><?php esc_html_e( '© ', 'lsx-design' ); ?><?php echo esc_html( date( 'Y' ) ); ?> <?php esc_html_e( 'Your Company. All rights reserved.', 'lsx-design' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->