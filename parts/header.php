<?php
/**
 * Header template part wrapper.
 * Includes `parts/header.html` when present so PHP-based templates can use
 * get_template_part( 'parts/header' ).
 */
if ( locate_template( 'parts/header.html', false, false ) ) {
    include locate_template( 'parts/header.html' );
    return;
}
// Fallback simple header if the HTML part is missing
?>
<header class="site-header">
  <div class="site-branding">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
  </div>
</header>
