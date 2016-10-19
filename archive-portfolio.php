<?php /* Template Name: Portfolio */

get_header(); ?>
 <div class="row">
 <div class="col-md-12">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<!-- Portfolio Archive Page -->
<ul id="filters">
    <li><a href="#" data-filter="*" class="selected">Everything</a></li>
	<?php
		$terms = get_terms('category', array(
 	'post_type' => array('portfolio'),
 	'fields' => 'all',
  'exclude' => array(7), // Manually Exclude Categories * NEED A FIX *
)); // get all categories, but you can use any taxonomy
		$count = count($terms); //How many are they?
		if ( $count > 0 ){  //If there are more than 0 terms
			foreach ( $terms as $term ) {  //for each term:
				echo "<li><a href='#' data-filter='.".$term->slug."'>" . $term->name . "</a></li>\n";
				//create a list item with the current term slug for sorting, and name for label
			}
		}
	?>
</ul>
      <?php $the_query = new WP_Query( array( 'post_type' => 'Portfolio', 'posts_per_page' => 50 ) ); //Check the WP_Query docs to see how you can limit which posts to display ?>
<?php if ( $the_query->have_posts() ) : ?>
    <div id="isotope-list">
    <?php while ( $the_query->have_posts() ) : $the_query->the_post();
	$termsArray = get_the_terms( $post->ID, "category" );  //Get the terms for this particular item
	$termsString = ""; //initialize the string that will contain the terms
		foreach ( $termsArray as $term ) { // for each term
			$termsString .= $term->slug.' '; //create a string that has all the slugs
		}
	?>
	<div class="<?php echo $termsString; ?> element-item"> <?php // 'item' is used as an identifier (see Setp 5, line 6) ?>
    <?php if ( has_post_thumbnail()) : ?>
<a class="overlay" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
<?php the_post_thumbnail('medium'); ?>
</a>
<?php endif; ?>
	</div> <!-- end item -->
    <?php endwhile;  ?>
    </div> <!-- end isotope-list -->
<?php endif; ?>
      <?php wp_reset_query(); ?>
    </main><!-- #main -->
	</div><!-- #primary -->
	</div><!-- col-md-12-->
<?php
get_footer();
