<?php
/**
 * Accessible Single Post Template
 *
 * Falls back to including HTML template parts if present in the `parts/` folder
 * (e.g. `parts/header.html` / `parts/footer.html`). Uses standard WP functions
 * for title, content and comments to integrate with the theme.
 */

// Try to include a block template part if it exists, otherwise fall back to get_header().
$header_path = locate_template('parts/header.html', false, false);
if ( $header_path ) {
    include $header_path;
} else {
    get_header();
}

?>

<a class="sr-only" href="#maincontent"><?php echo esc_html__( 'Skip to main', 'ai-block-theme-template' ); ?></a>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'single-post' ); ?> aria-labelledby="post-title" aria-describedby="post-meta post-content">
  <header>
    <h1 id="post-title"><?php the_title(); ?></h1>
    <div id="post-meta" class="post-meta">
      <span class="author"><?php echo esc_html__( 'By', 'ai-block-theme-template' ); ?> <span aria-label="<?php echo esc_attr_x( 'Author', 'aria label', 'ai-block-theme-template' ); ?>"><?php the_author(); ?></span></span>
      <span class="date" aria-label="<?php echo esc_attr_x( 'Published on', 'aria label', 'ai-block-theme-template' ); ?>"><?php the_date(); ?></span>
      <span class="categories" aria-label="<?php echo esc_attr_x( 'Categories', 'aria label', 'ai-block-theme-template' ); ?>"><?php the_category( ', ' ); ?></span>
    </div>
  </header>

  <main id="maincontent" tabindex="-1">
    <div id="post-content">
      <?php the_content(); ?>
      <?php
        wp_link_pages( array(
          'before' => '<nav class="page-links">' . esc_html__( 'Pages:', 'ai-block-theme-template' ),
          'after'  => '</nav>',
        ) );
      ?>
    </div>
  </main>

  <section aria-labelledby="comments-title" class="comments">
    <h2 id="comments-title"><?php echo esc_html__( 'Comments', 'ai-block-theme-template' ); ?></h2>
    <?php
      if ( comments_open() || get_comments_number() ) :
        comments_template();
      else :
        echo '<p>' . esc_html__( 'Comments are closed.', 'ai-block-theme-template' ) . '</p>';
      endif;
    ?>
  </section>
</article>

<?php endwhile; endif; ?>

<!-- Accessible styles for skip link and focus (kept minimal; recommend moving into theme stylesheet) -->
<style>
.sr-only:not(:focus):not(:active) {
  clip: rect(0 0 0 0);
  clip-path: inset(50%);
  height: 1px;
  overflow: hidden;
  position: absolute;
  white-space: nowrap;
  width: 1px;
}
:focus {
  outline: 2px solid #005fcc;
  outline-offset: 2px;
}
.single-post {
  max-width: 700px;
  margin: 0 auto;
  padding: 2rem;
  background: #fff;
  color: #222;
}
.post-meta {
  font-size: 1rem;
  color: #666;
  margin-bottom: 1.5rem;
}
.comments {
  margin-top: 2rem;
  border-top: 1px solid #eee;
  padding-top: 2rem;
}
.comment-form label {
  display: block;
  margin-top: 1rem;
  font-weight: 600;
}
.comment-form input,
.comment-form textarea {
  width: 100%;
  margin-top: 0.5rem;
  padding: 0.5rem;
  border: 1px solid #ccc;
  border-radius: 4px;
  font-size: 1rem;
}
.comment-form button {
  margin-top: 1rem;
  padding: 0.75rem 1.5rem;
  background: #005fcc;
  color: #fff;
  border: none;
  border-radius: 4px;
  font-size: 1rem;
  cursor: pointer;
}
.comment-form button:focus {
  outline: 2px solid #222;
}
</style>

<?php
// Include footer block template part if present, otherwise call get_footer().
$footer_path = locate_template('parts/footer.html', false, false);
if ( $footer_path ) {
    include $footer_path;
} else {
    get_footer();
}

