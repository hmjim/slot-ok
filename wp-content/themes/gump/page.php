<?php
/**
 * The template for displaying all pages.
 *
 * @package gump
 * @since gump 1.0
 */

get_header(); ?>





			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				

			<?php endwhile; // end of the loop. ?>

	<!-- #main -->
<!-- #primary -->

</div>

	<?php get_sidebar(); ?>

<?php get_footer(); ?>
