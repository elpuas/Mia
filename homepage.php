<?php /* Template Name: Homepage */

get_header(); ?>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="img-responsive" src="<?php echo get_theme_mod('first_slide') ?>" alt="First Slide">
    </div>
    <div class="item">
      <img class="img-responsive" src="<?php echo get_theme_mod('second_slide') ?>" alt="Second Slide">
    </div>
     <div class="item">
      <img class="img-responsive" src="<?php echo get_theme_mod('third_slide') ?>" alt="Third Slide">
    </div>
  </div>
  <!-- Controls
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a> -->
</div>
 <div class="row">
 <div class="col-md-12">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
<div class="row">
  <div class="col-md-3 col-sm-3 theme-icon-container"><img class="theme-frontpage-icon" src="<?php echo get_theme_mod('first_icon') ?>" alt="Front End Developer"></div>
  <div class="col-md-9 col-sm-9">
    <?php
    if(is_active_sidebar('home-area-1')){
      dynamic_sidebar('home-area-1');
    }
    ?>
  </div>
</div>
<div class="row">
  <div class="col-md-3 col-sm-3 theme-icon-container"><img class="theme-frontpage-icon" src="<?php echo get_theme_mod('second_icon') ?>" alt="UI/UX"></div>
  <div class="col-md-9 col-sm-9">
    <?php
    if(is_active_sidebar('home-area-2')){
      dynamic_sidebar('home-area-2');
    }
    ?>
  </div>
</div>
<div class="row">
  <div class="col-md-3 col-sm-3 theme-icon-container"><img class="theme-frontpage-icon" src="<?php echo get_theme_mod('third_icon') ?>" alt="Blog"></div>
  <div class="col-md-9 col-sm-9">
    <?php query_posts( 'category_name=blog&posts_per_page=1' ); ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <header class="widget_title">
    		<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
    	</header><!-- .entry-header -->
    	<div class="textwidget">
    		<?php
    			the_excerpt();
    		?>
  <?php endwhile; ?>
  </div>
</div>
</div>
		</main><!-- #main -->
	</div><!-- #primary -->
	</div><!-- col-md-12-->
<?php
get_footer();
