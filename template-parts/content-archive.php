<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Mia
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title">', '</h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>

		<div class="entry-meta">
			<?php mia_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="col-md-4">
		<?php if ( has_post_thumbnail()) : ?>
<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
<?php the_post_thumbnail('medium'); ?>
</a>
<?php endif; ?>
</div>
<div class="col-md-8">
		<?php
			the_excerpt( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'mia' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mia' ),
				'after'  => '</div>',
			) );
		?>
		</div>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php mia_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
