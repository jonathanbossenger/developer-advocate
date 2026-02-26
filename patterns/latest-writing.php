<?php
/**
 * Title: Latest Writing
 * Slug: jonathan-bossenger/latest-writing
 * Categories: jb-sections
 * Description: Latest 3 blog posts in a card grid using Query Loop.
 */
?>
<!-- wp:group {"className":"section posts-section","tagName":"section","layout":{"type":"default"}} -->
<section class="wp-block-group section posts-section" id="posts">
  <!-- wp:group {"className":"section-inner","layout":{"type":"constrained","contentSize":"1200px"}} -->
  <div class="wp-block-group section-inner">
    <!-- wp:group {"className":"section-header","layout":{"type":"default"}} -->
    <div class="wp-block-group section-header">
      <!-- wp:html -->
      <div class="section-label">Latest Writing</div>
      <!-- /wp:html -->
      <!-- wp:heading {"className":"section-title"} -->
      <h2 class="wp-block-heading section-title">From the blog</h2>
      <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:query {"query":{"perPage":3,"pages":1,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"posts-grid-wrapper","layout":{"type":"default"}} -->
    <div class="wp-block-query posts-grid-wrapper">
      <!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
        <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->
        <!-- wp:group {"className":"post-body","layout":{"type":"default"}} -->
        <div class="wp-block-group post-body">
          <!-- wp:post-date {"format":"M j, Y"} /-->
          <!-- wp:post-title {"isLink":true,"fontSize":"large"} /-->
          <!-- wp:post-excerpt {"excerptLength":25} /-->
        </div>
        <!-- /wp:group -->
      <!-- /wp:post-template -->
    </div>
    <!-- /wp:query -->

    <!-- wp:group {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"2.5rem"}}}} -->
    <div class="wp-block-group" style="margin-top:2.5rem">
      <!-- wp:html -->
      <a href="/post-archive/" class="view-all-link">
        View all posts
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </a>
      <!-- /wp:html -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
</section>
<!-- /wp:group -->
