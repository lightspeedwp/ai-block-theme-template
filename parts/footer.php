<?php
/**
 * Footer template part wrapper.
 * Includes `parts/footer.html` when present so PHP-based templates can use
 * get_template_part( 'parts/footer' ).
 */
if ( locate_template( 'parts/footer.html', false, false ) ) {
    include locate_template( 'parts/footer.html' );
    return;
}
?>
<footer class="site-footer">
  <div class="site-info">
    <p>&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?></p>
  </div>
</footer>
