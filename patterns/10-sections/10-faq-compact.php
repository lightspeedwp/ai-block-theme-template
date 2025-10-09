<?php
/**
 * Title: FAQ: Compact
 * Slug: lsx-design/faq-compact
 * Description: Compact two-column FAQ section for pricing or support pages that lists common questions with concise answers.
 * Categories: lsx-design/sections, lsx-design/utility
 * Keywords: faq, questions, support, help
 * Viewport Width: 1200
 * Block Types:
 * Post Types:
 * Template Types:
 * Inserter: yes
 * Inserter Priority: 50
 * Author: LSX Design Team
 * Version: 1.0.0
 * License: GPL-2.0-or-later
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|spacing-30pacing-70","bottom":"var:preset|spacing|spacing-30pacing-70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--spacing-70);padding-bottom:var(--wp--preset--spacing--spacing-70)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|spacing-30pacing-70"}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'How does lsx-design speed up development?', 'lsx-design' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"secondary","fontSize":"200"} -->
<p class="has-secondary-color has-text-color has-small-font-size"><?php esc_html_e( 'Patterns provide ready-made UI sections so you can assemble pages quickly without design drift.', 'lsx-design' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'Can I customize patterns?', 'lsx-design' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"secondary","fontSize":"200"} -->
<p class="has-secondary-color has-text-color has-small-font-size"><?php esc_html_e( 'Yes — edit text, swap images, and adjust styles via the Site Editor while preserving layout constraints.', 'lsx-design' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->