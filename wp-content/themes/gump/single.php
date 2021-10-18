<?php
/**
 * The Template for displaying all single posts.
 *
 * @package gump
 * @since gump 1.0
 */

get_header(); ?>




                        <!-- content start -->
                        
                   




			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'single' ); ?>

				<?php //gump_post_nav(); ?>

				<?php
                
                if(get_post_type() == 'kazino'){
                
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
                    }
				?>

			<?php endwhile; // end of the loop. ?>

	<!-- #main -->



 </div>
 <!-- #primary -->

	<?php get_sidebar(); ?>

<?php get_footer(); ?>