<?php
/**
 * The template used for displaying single post
 *
 * @package gump
 * @since gump 1.0
 */
?>

<?php if(get_post_type() == 'avtomatu'){?>




<h1 id="cont_title">Игровой автомат <?php the_title(); ?></h1>




       <?php                                
        $out = ''; 
        $x = 0;                               
        $q = new WP_Query('post_type=avtomatu&post_status=publish&orderby=rand&post_limits=10&posts_per_page=10');
		if( $q->have_posts() ):
		
			while( $q->have_posts() ): $q->the_post();
			$x++;
                
               $out .= '<li>
                <div>
                <div id="im">
                <a class="gallery" rel="group" title="Автомат '.$x.'" href="';
                $out .= get_permalink();
                $out .= '"><img src="'.get_post_meta(get_the_ID(), 'wpcf-miniatyra', true).'" alt="" style="width: 60px; height: 60px; object-fit: cover; object-position: center;">
                </a>
                </div>
                <div class="text"> 
                
                <a href="';
                
               $out .= get_permalink();
                
               $out .= '">';
                
               $out .= get_the_title();
                
               $out .= '</a>
                
                </div>
                </div>
                </li>';
          
                
                
                               
              
			endwhile;
		
		endif;
        
		wp_reset_postdata();
        ?>
        
        
        
       
       
                            
                            <div id="cont_block_game">
                                
                                	 <div class="Vwidget">
                                 		<a href="#" class="up"></a>
                                  		<div class="VjCarouselLite">
                                   		<ul>
                                        
                                        
                                            
                            
                                     		
                                     	<?php echo $out;?>
                                     	
 
        
        
                                   		</ul>
                                  		</div>
                                 		<a href="#" class="down"></a>
                                	</div>
    
                            <div id="cont_block_game_frame">
                                
                                <?= get_post_meta(get_the_ID(), 'wpcf-flash-game', true) ?>
                                
                                
                            </div>
                            
                            <div id="cont_block_game_btn">
                                <a href="<?php if(!get_post_meta(get_the_ID(), 'wpcf-game_cash_2', true)){
                                    echo '/gocasino/formoney';
                                } else { 
                                    echo get_post_meta(get_the_ID(), 'wpcf-game_cash_2', true);
                                } ?>" target="_blank">ИГРАТЬ НА РЕАЛЬНЫЕ ДЕНЬГИ</a>
                            </div>
    
                            </div>
                            
                  
              
                            
                            
                            
                                <div id="cont_block_news">
                                <div id="cont_block_news_post">
                                    <div id="cont_block_news_post_title">
                                        Описание игрового автомата
                                    </div>
                                    <div class="cont_block_news_post_cont">
                                        
                                        <div class="cont_block_news_post_cont_text_big">
                                            <?php the_content(); ?>
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div>
                            
  


<?php }elseif(get_post_type() == 'kazino'){?>

<h1 id="cont_title"><?php the_title(); ?></h1>


                      <div id="cont_info_kaz">
                            <div id="cont_info_kaz_block_1">
                                <div id="c_b_i">Язык:</div><div id="c_b_o"><?= get_post_meta(get_the_ID(), 'wpcf-lang', true) ?></div>
                                <div id="c_b_i">Бонусы:</div><div id="c_b_o"><?= get_post_meta(get_the_ID(), 'wpcf-bonus', true) ?></div>
                                <div id="c_b_i">Валюта:</div><div id="c_b_o"><?= get_post_meta(get_the_ID(), 'wpcf-val', true) ?></div>
                            </div>
                            <div id="cont_info_kaz_block_1">
                                <div id="c_b_i">Игр:</div><div id="c_b_o"><?= get_post_meta(get_the_ID(), 'wpcf-slots', true) ?></div>
                                <div id="c_b_i">Адрес:</div><div id="c_b_o"> <a href="<?= get_post_meta(get_the_ID(), 'wpcf-link-kaz', true) ?>" target="_blank">
                                <?= get_post_meta(get_the_ID(), 'wpcf-downt', true) ?>
                                </a></div>
                                <div id="c_b_i">Основано:</div><div id="c_b_o"><?= get_post_meta(get_the_ID(), 'wpcf-since', true) ?></div>
                            </div>
                            <div id="cont_info_kaz_block">
                                <div id="title"></div>
                                <div id="img">
                                <a href="<?= get_post_meta(get_the_ID(), 'wpcf-link-kaz', true) ?>" target="_blank">
                                <img src="<?= get_post_meta(get_the_ID(), 'wpcf-img-1', true) ?>" alt="" style="width: 120px; height: 57px; object-fit: cover; object-position: center;">
                                </a>
</div>
                                <div id="rate"><?php if(function_exists('the_ratings')) { the_ratings(); } ?></div>
                            </div>
                      </div>    
                      
                      
                      
                              <div id="cont_game_btn">
                                <a href="<?= get_post_meta(get_the_ID(), 'wpcf-link-kaz', true) ?>" target="_blank">ИГРАТЬ В КАЗИНО</a>
                              </div>  
                                
                                <div id="cont_block_news">
                                <div id="cont_block_news_post">
                                    <div class="cont_block_news_post_cont">
                                        
                                        <div class="cont_block_news_post_cont_text_2">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div>
                            
                            <div id="cont_game_ad">
                                <a href="<?=  get_post_meta(get_the_ID(), 'link-kaz', true) ?>" target="_blank">
                                <img src="<?= get_post_meta(get_the_ID(), 'wpcf-banner', true) ?>" alt="" style="width: 700px; height: 315px; object-fit: cover; object-position: center;">
                                </a>
                            </div>
                            
                            <div id="cont_game_btn">
                                <a href="<?= get_post_meta(get_the_ID(), 'wpcf-link-kaz', true) ?>" target="_blank">ИГРАТЬ В КАЗИНО</a>
                            </div>  
                            
                           
                           
                            
                        
                        






<?php }else{?>





<div id="cont_block_news_post_n">
                                <div id="cont_block_news_post_post">
                                    
                                       <?php the_title( '<h1 id="cont_title">', '</h1>' ); ?>
                                    </div>
                                    <div id="cont_block_news_post_cont_post">
                                        <div id="cont_block_news_post_cont_text_post">
                                        
                                            
                                            
                                            <?php the_post_thumbnail('featureds', 'id=cont_block_news_post_cont_post_imgs'); ?>
                                        
                                        
                                           <?php the_content(); ?>
                                           
                                        
                                        </div>
                                    </div>
                                </div>
                                
                        
                        
                        
                        
                        
                        
                        
                            
                            
              	<?php $q = new WP_Query('post_type=post&post_status=publish&orderby=rand&post_limits=3&posts_per_page=3'); ?>

			<?php if ( $q->have_posts() ) : ?>
<div id="cont_title">ПОХОЖИЕ НОВОСТИ</div>
<div class="content-block-poxozie">
				<?php /* Start the Loop */ ?>
				<?php while ( $q->have_posts() ) : $q->the_post(); ?>

				
                
                
                
                            
                            
                            
                            
                                <div id="cont_block_pn">
                                    <div id="cont_block_title_pn">
                                        <center><a href="<?php echo get_permalink();?>"><?php echo get_short_title(20); ?></a></center>
                                    </div>
                                    <div id="cont_block_img_pn">
                                        <a href="<?php echo get_permalink();?>">
                                            <?php the_post_thumbnail('featureds'); ?>
                                        </a>
                                        <div id="cont_block_text_pn">
                                            <?php echo mb_substr(get_the_content(), 0, 140); ?>
                                        </div>
                                    <div id="cont_block_link_pn"><a href="<?php echo get_permalink();?>">Подробнее...</a></div>
                                    </div>
                                    
                                    
                                  </div> 
                                   
                                   
                              
                       
                       
                
                
                
                
                

				<?php endwhile; ?>  
                
                </div>  
                             
                        <?php endif; ?>    
        
        
<?php }?>


                    <?php if ( is_active_sidebar( 'index-7' ) ) : ?>
				      <div id="cont_block_news">  <?php dynamic_sidebar( 'index-7' ); ?></div>
                    <?php endif; ?>
                    
                    
                    
                    
                    
                    