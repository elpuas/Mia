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

<?php wp_footer(); ?>

</body>
</html>