<?php
/**
 * Title: Hero
 * Slug: jonathan-bossenger/hero
 * Categories: jb-sections
 * Description: Full-height hero with headline, description, social links, and profile photo.
 */
?>
<!-- wp:group {"className":"hero","tagName":"section","layout":{"type":"default"}} -->
<section class="wp-block-group hero" id="home">
  <!-- wp:group {"className":"hero-inner","layout":{"type":"default"}} -->
  <div class="wp-block-group hero-inner">
    <!-- wp:group {"className":"hero-content","layout":{"type":"default"}} -->
    <div class="wp-block-group hero-content">
      <!-- wp:html -->
      <div class="hero-badge">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
        Developer Advocate &middot; Automattic
      </div>
      <!-- /wp:html -->

      <!-- wp:heading {"level":1} -->
      <h1 class="wp-block-heading">Building for <em>developers</em>, teaching by <em>example.</em></h1>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"className":"hero-description"} -->
      <p class="hero-description">I'm Jonathan — a developer advocate, educator, and open-source enthusiast from Cape Town, South Africa. I create educational content for WordPress developers and write about software, AI, and life.</p>
      <!-- /wp:paragraph -->

      <!-- wp:html -->
      <div class="hero-links">
        <a href="/about/" class="primary-link">
          About Me
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
        <a href="https://github.com/jonathanbossenger">
          <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0 1 12 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/></svg>
          GitHub
        </a>
        <a href="https://bsky.app/profile/jonathanbossenger.com">
          <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 10.8c-1.087-2.114-4.046-6.053-6.798-7.995C2.566.944 1.561 1.266.902 1.565.139 1.908 0 3.08 0 3.768c0 .69.378 5.65.624 6.479.785 2.627 3.6 3.501 6.204 3.12-3.6.558-6.741 2.032-2.882 7.152C7.724 25.7 10.347 19.346 12 16.87c1.653 2.477 4.189 8.672 8.054 3.649 3.859-5.12.718-6.594-2.882-7.152 2.604.382 5.42-.493 6.204-3.12C23.622 9.419 24 4.457 24 3.768c0-.689-.139-1.861-.902-2.203-.659-.3-1.664-.62-4.3 1.24C16.046 4.748 13.087 8.687 12 10.8z"/></svg>
          Bluesky
        </a>
        <a href="https://www.youtube.com/@jon_bossenger">
          <svg viewBox="0 0 24 24" fill="currentColor"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
          YouTube
        </a>
        <a href="https://www.linkedin.com/in/jonathanbossenger/">
          <svg viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
          LinkedIn
        </a>
      </div>
      <!-- /wp:html -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"hero-photo","layout":{"type":"default"}} -->
    <div class="wp-block-group hero-photo">
      <!-- wp:html -->
      <div class="hero-photo-frame">
        <img src="https://jonathanbossenger.com/wp-content/uploads/2023/06/NIL00118-1-2048x1368.jpg" alt="Jonathan Bossenger" loading="eager">
        <div class="hero-photo-meta">
          <span class="location">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
            Cape Town, South Africa
          </span>
        </div>
      </div>
      <!-- /wp:html -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
</section>
<!-- /wp:group -->
