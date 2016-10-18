<?php /* Template Name: Portfolio */

get_header(); ?>
 <div class="row">
 <div class="col-md-12">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<!-- Portfolio Page -->
      <?php $loop = new WP_Query( array( 'post_type' => 'Portfolio', 'posts_per_page' => 10 ) ); ?>

                          <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                              <?php if(has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                              <?php the_content();?>
                          <?php endwhile; ?>

                  <?php wp_reset_query(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	</div><!-- col-md-12-->
<?php
get_footer();
