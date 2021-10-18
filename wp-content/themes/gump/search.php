<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package gump
 * @since gump 1.0
 */

get_header(); ?>

	

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h3 class="page-title"><?php //printf( __( 'Search Results for: %s', 'gump' ), '<span>' . get_search_query() . '</span>' ); ?></h3>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'search' ); ?>

			<?php endwhile; ?>

			<?php gump_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

	<!-- #primary -->
</div>
	<?php get_sidebar(); ?>

<?php get_footer(); ?>
