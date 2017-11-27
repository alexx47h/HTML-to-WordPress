<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ThemeforDev
 */
?>
  </div><!-- #content -->
  <footer id="colophon" class="site-footer">
    <div class="site-info">
      <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'themefordev' ) ); ?>"><?php
        /* translators: %s: CMS name, i.e. WordPress. */
        printf( esc_html__( 'Proudly powered by %s', 'themefordev' ), 'WordPress' );
      ?></a>
      <span class="sep"> | </span>
      <?php
        /* translators: 1: Theme name, 2: Theme author. */
        printf( esc_html__( 'Theme: %1$s by %2$s.', 'themefordev' ), 'themefordev', '<a href="https://alexx47h.github.io">Alexander</a>' );
      ?>
    </div><!-- .site-info -->
  </footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>

<!-- <p>Copyright &copy; <?php echo get_bloginfo('name').' '.date('Y'); ?></p> -->