<?php
/**
 * Title: Blog Post Card
 * Slug: lsx-design/post-card
 * Description: Compact post card for Query Loop — image, title, excerpt and meta.
 * Categories: lsx-design/posts, lsx-design/card
 * Keywords: post, card, query, excerpt, image, read-more
 * Viewport Width: 600
 * Block Types: core/query
 * Post Types:
 * Template Types:
 * Inserter: yes
 * Inserter Priority: 20
 * Required Plugins:
 * Author: LightSpeed Team
 * Version: 1.0.0
 * Notes: Intended as a Query Loop item. Keep concise for inserter preview performance.
 * Example Usage: Use inside core/query post-template or query container patterns.
 */
?>
<!-- wp:group {"className":"lsx-post-card","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}},"border":{"radius":"8px"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group lsx-post-card has-base-background-color has-background" style="border-radius:8px;padding:20px">
  <!-- wp:post-featured-image {"isLink":true,"height":"220px","style":{"border":{"radius":"6px"}}} /-->

  <!-- wp:group {"style":{"spacing":{"blockGap":"8px","margin":{"top":"12px"}}}} -->
  <div class="wp-block-group" style="margin-top:12px">
    <!-- wp:post-title {"isLink":true,"fontSize":"300"} /-->

    <!-- wp:post-excerpt {"moreText":"<?php echo esc_html__( 'Read more', 'lsx-design' ); ?>"} /-->

    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"fontSize":"200"} -->
    <div class="wp-block-group has-small-font-size">
      <!-- wp:post-date /-->
      <!-- wp:post-terms {"term":"category","fontSize":"100"} /-->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->