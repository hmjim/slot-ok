<?php
/**
 * The main template file.
 *
 * @package gump
 * @since gump 1.0
 */

get_header(); ?>



    
    
    
    
    
                       
                       
                        <!-- content start -->
                        
                            <h1 id="cont_title">Игровые автоматы онлайн - играть бесплатно на slot-ok.com</h1>
                        
                        <div id="content-block-info">
              
        <?php /*if ( have_posts() ) : ?>      
              


			<?php while ( have_posts() ) : the_post(); ?>
            
            

				<?php get_template_part( 'content', get_post_format() ); ?>
            
			<?php endwhile; ?>
            
              
              <?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>

			<?php endif; */?>
            
            
            
         
         
 
  
  
              	<?php  $q = new WP_Query('post_type=avtomatu&post_status=publish&orderby=date&paged=2'); ?>

			<?php if ( $q->have_posts() ) : ?>

			
				<?php while ( $q->have_posts() ) : $q->the_post(); ?>

				
                
                
                
                            <div id="cont_block">
                                <div id="cont_block_title">
                                    <a href="<?php echo get_permalink();?>"><?php echo get_the_title();?></a>
                                </div>
                                <div id="cont_block_img">
                                    <a href="<?php echo get_permalink();?>">
                                       <img src="<?= get_post_meta(get_the_ID(), 'wpcf-miniatyra', true) ?>" alt="" style="width: 208px; height: 140px; object-fit: cover; object-position: center;">

                                    </a>
                                </div>
                                <div id="cont_block_btn_t">
                                    <div id="b_1">
                                        <a href="<?php echo get_permalink();?>">БЕСПЛАТНО</a>
                                    </div>
                                    <div id="b_2">
                                        <a href="/gocasino/formoney" target="_blank">НА ДЕНЬГИ</a>
                                    </div>
                                </div>
                            </div>
                
                
                
                
                

				<?php endwhile;  ?>
                
			<?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>

			<?php endif; ?>
            
            
            <?php wp_reset_postdata(); ?>

		<!-- #main -->
        </div>
        
         	<?php gump_paging_nav(); ?>
         
      <?php
      
      wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'gump' ),
				'after'  => '</div>',
			) );
            
            ?>
            
            
  <div id="cont_block_navi">
<?php kama_pagenavi(); ?>
  </div> 
 
              
                           
                            
                    <?php if ( is_active_sidebar( 'index-6' ) ) : ?>
				      <div id="cont_block_news">  <?php dynamic_sidebar( 'index-6' ); ?>
                    <?php endif; ?>
                    
                        
                   
                            
                        <!-- content end -->
                    </div>  </div>

	<?php get_sidebar(); ?>

<?php get_footer(); ?>
