<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mia
 */

?>
</div><!-- .row -->
</div><!-- #content -->
</div><!-- #page -->
</div><!-- .container -->
<div class="container">
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'mia' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'mia' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'mia' ), 'mia', '<a href="http://alfredonavas.com" rel="designer">3LPU4S</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- .container -->
<!-- Navigation Modal -->
<div class="modal fade" id="nav-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
         <div class="modal-header">
        <a class="fa fa-close fa-5x" data-dismiss="modal"></a>
        </div>
        <div class="menu-primary">
           <?php
            wp_nav_menu( array(
                'menu'              => '',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => '',
                'container_class'   => 'nvbar',
                'container_id'      => 'full-screen',
                'menu_class'        => 'nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
            ?>
             </div>
    </div>
  </div>
</div><!-- End Modal -->
<?php wp_footer(); ?>

</body>
</html>
