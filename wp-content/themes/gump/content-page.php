<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package gump
 * @since gump 1.0
 */
?>



	<?php the_title( '<h1 id="cont_title">', '</h1>' ); ?>
	<!-- .entry-header -->


		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'gump' ),
				'after'  => '</div>',
			) );
		?>
<!-- .entry-content -->










		<?php edit_post_link( __( 'Редактировать', 'gump' ), '<span class="edit-link">', '</span>' ); ?>
	<!-- .entry-footer -->
<!-- #post-## -->
</div>