<?php
/**
 * Title: Author Box
 * Slug: lsx-design/author-box
 * Description: 
 * Categories: lsx-design/card
 * Keywords: author, bio, profile, user
 * Version: 0.2.0
 * License: GPL-2.0-or-later
 * Viewport Width: 800
 * Block Types:
 * Post Types:
 * Inserter: true
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|spacing-70","right":"var:preset|spacing|spacing-70","bottom":"var:preset|spacing|spacing-70","left":"var:preset|spacing|spacing-70"}},"border":{"radius":"5px"}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-tertiary-background-color has-background" style="border-radius:5px;padding-top:var(--wp--preset--spacing--spacing-70);padding-right:var(--wp--preset--spacing--spacing-70);padding-bottom:var(--wp--preset--spacing--spacing-70);padding-left:var(--wp--preset--spacing--spacing-70)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:avatar {"size":74,"style":{"border":{"radius":"500px"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|spacing-30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-author-name {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"300"} /-->

<!-- wp:post-author-biography /-->

<!-- wp:social-links {"iconColor":"base","iconColorValue":"var(--wp--preset--color--base)","iconBackgroundColor":"main","iconBackgroundColorValue":"var(--wp--preset--color--primary)","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|spacing-30","left":"var:preset|spacing|spacing-30"}}}} -->
<ul class="wp-block-social-links has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"github"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
