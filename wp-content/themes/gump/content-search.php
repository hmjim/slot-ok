<?php
/**
 * The template used for displaying single post
 *
 * @package gump
 * @since gump 1.0
 */
?>


	<?php //the_title( '<div id="cont_title">', '</div>' ); ?>
	<!-- .entry-header -->
<div class="sk_ser">
<a href="<?php echo get_permalink();?>"><?php echo get_the_title();?></a>
	</div>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'gump' ),
				'after'  => '</div>',
			) );
		?>
        
        
        
  