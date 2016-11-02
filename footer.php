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
<div class="container-fluid footer-container">
<div class="container">
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-md-8 col-sm-8 col-xs-12">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'mia' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'mia' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', '3LPU4S' ), 'Mia', '<a href="http://alfredonavas.com/" rel="designer">3LPU4S</a>' ); ?>
		</div><!-- .site-info -->
                </div><!--col-md-8 -->
            <div class="col-md-4 col-sm-4 col-xs-12 pull-right icons-box-footer" style="text-align:right;">
							<a class="sc-icons" href="twitter.com/3lpu4s"><i class="fa fa-twitter green"></i></a>
							<a type="button" class="sc-icons link-modal-mia" data-toggle="modal" data-target="#fb-modal"><i class="fa fa-facebook-square green"></i></a>
							<a class="sc-icons" href="http://www.linkedin.com/pub/alfredo-navas-fernandini/28/489/62a"><i class="fa fa-linkedin green"></i></a>
							<a class="sc-icons" href="https://plus.google.com/u/0/109068090628310748694"><i class="fa fa-google-plus-square green"></i></a>
							<a class="sc-icons" href="https://github.com/elpuas"><i class="fa fa-github-alt green"></i></a>
						</div><!-- col-md-4 -->
	</footer><!-- #colophon -->
</div><!-- .container -->
</div><!-- .container-fluid -->
<!-- Navigation Modal -->
<?php get_template_part( 'template-parts/modal', 'navigation' ); ?>
<!-- Facebook Page Modal -->
<?php get_template_part( 'template-parts/modal', 'facebook' ); ?>
<?php wp_footer(); ?>

</body>
</html>
