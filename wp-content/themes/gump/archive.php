<?php
/**
 * The template for displaying Archive pages.
 *
 * @package gump
 * @since gump 1.0
 */

get_header(); ?>


		<?php if ( have_posts() ) : ?>


				<h1 id="cont_title">
                
                



					<?php
						if ( is_category() ) :
							single_cat_title();

						elseif ( is_tag() ) :
							single_tag_title();

						elseif ( is_author() ) :
							printf( __( 'Author: %s', 'gump' ), '<span class="vcard">' . get_the_author() . '</span>' );

						elseif ( is_day() ) :
							printf( __( 'Day: %s', 'gump' ), '<span>' . get_the_date() . '</span>' );

						elseif ( is_month() ) :
							printf( __( 'Month: %s', 'gump' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'gump' ) ) . '</span>' );

						elseif ( is_year() ) :
							printf( __( 'Year: %s', 'gump' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'gump' ) ) . '</span>' );

						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Asides', 'gump' );

						elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
							_e( 'Galleries', 'gump');

						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Images', 'gump');

						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos', 'gump' );

						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Quotes', 'gump' );

						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links', 'gump' );

						elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
							_e( 'Statuses', 'gump' );

						elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
							_e( 'Audios', 'gump' );

						elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
							_e( 'Chats', 'gump' );

						else :
                         if(get_post_type() == 'kazino'){?>Онлайн казино на деньги<?php }elseif(get_post_type() == 'avtomatu'){?> Игровые автоматы<?php }else{
							_e( 'Latest from', 'gump' );
                            }
						endif;
					 ?>
				</h1>
		


        
        		<?php
					/*
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
					*/
				?>
                
                
                
<div id="cont_block_news_c2">





<?php if(get_post_type() == 'kazino'){?>



<div id="cont_rate">


                            <div id="cont_rate_kaz_title">
                                <div id="cont_rate_kaz_name_title">
                                    КАЗИНО
                                </div>
                                <div id="cont_rate_kaz_rate_title">
                                    РЕЙТИНГ
                                </div>
                                <div id="cont_rate_kaz_soft_title">
                                    ОСНОВАНО
                                </div>
                                <div id="cont_rate_kaz_obz_title">
                                    ОБЗОР
                                </div>
                                <div id="cont_rate_kaz_site_title">
                                    САЙТ КАЗИНО
                                </div>
                            </div>
                            
                            
 <?php } ?>                           
                            
			
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>

			<?php endwhile; ?>


		

			<?php else : ?>

				<?php //get_template_part( 'content', 'none' ); ?>

			<?php endif; ?>
            
            
            
            
   <?php if(get_post_type() == 'kazino'){?></div><?php } ?>           
            
            
 </div>
 
 
 
 <div id="cont_block_navi">
<?php kama_pagenavi(); ?>
  </div>
 
 
 
                                
                                
                    <?php if(get_post_type() == 'kazino' and is_post_type_archive() == true){?>         
                    <?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
				      <div id="cont_block_news">  <?php dynamic_sidebar( 'footer-4' ); ?></div>
                    <?php endif; ?>
                    <?php } ?>  
                    <?php if(get_post_type() == 'avtomatu'){?>         
                    <?php if ( is_active_sidebar( 'footer-5' ) ) : ?>
				      <div id="cont_block_news"><?php dynamic_sidebar( 'footer-5' ); ?></div>
                    <?php endif; ?>
                    <?php } ?>             
                                
                        
                    <?php if ( is_active_sidebar( 'index-7' ) ) : ?>
				      <div id="cont_block_news">  <?php dynamic_sidebar( 'index-7' ); ?></div>
                    <?php endif; ?>
               
                            
                           
                           
                            
                          
                            
                             </div>
	<?php get_sidebar(); ?>

<?php get_footer(); ?>
