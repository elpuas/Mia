<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Mia
 */

get_header(); ?>
<!-- Single Portfolio -->
<div class="row">
    <div class="col-md-8 col-xs-12">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content-portfolio', get_post_format() );

			the_post_navigation(array(
            'prev_text'                  => __( '&#xf104;' ),
            'next_text'                  => __( '&#xf105;' ),
        ));

    endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!--col-md-8 col-xs-12 -->
<?php
get_sidebar();
get_footer();
