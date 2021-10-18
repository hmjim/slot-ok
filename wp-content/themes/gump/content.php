<?php
/**
 * The template used for displaying content
 *
 * @package gump
 * @since gump 1.0
 */
?>

<?php if(get_post_type() == 'avtomatu'){?>



                                <div id="cont_block_news_post_c2">
                                    <div id="cont_block_news_post_title_c2">
                                        
                                        
                                        <?php the_title( sprintf( '<a href="%s">', esc_url( get_permalink() ) ), '</a>' ); ?>
                                    </div>
                                    <div id="cont_block_news_post_cont_c2">
                                        <a href="<?php echo get_permalink();?>">
                                        <img width="208" height="109" src="<?= get_post_meta(get_the_ID(), 'wpcf-miniatyra', true) ?>" class="attachment-featureds" alt="<?php echo the_title();?>" title="<?php echo the_title();?>">
                                        
                                        </a>
                                        <div id="cont_block_news_post_cont_text_c2">
                                            <?php echo mb_substr(get_the_content( __( '', 'gump' ) ), 0, 320); ?>...
                                       
                                        <div id="cont_block_news_post_more_c22">
                                            
                                            <div id="cont_block_btn_s">
                                                <div id="b_1">
                                                    <a href="<?php echo get_permalink();?>" title="Игровой автомат <?php echo get_the_title();?> бесплатно">БЕСПЛАТНО</a>
                                                </div>
                                                <div id="b_2">
                                                    <a href="/gocasino/formoney" title="<?php echo get_the_title();?> на деньги онлайн">НА ДЕНЬГИ</a>
                                                </div>
                                            </div>
                                
                                        </div>
                                        </div>
                                    </div>
                                </div>


<?php }elseif(get_post_type() == 'kazino'){?>



                            
                            



                            <div id="cont_rate_kaz">
                                <div id="cont_rate_kaz_name">
                                
                                    <a href="<?= get_post_meta(get_the_ID(), 'wpcf-link-kaz', true) ?>" title="Перейти в онлайн казино">
                                        <img src="<?= get_post_meta(get_the_ID(), 'wpcf-img-1', true) ?>" alt=""
                                        style="width: 120px; height: 60px; object-fit: cover; object-position: center;">
                                    </a>
                                </div>
                                <div id="cont_rate_kaz_rate">
                                    <?php if(function_exists('the_ratings')) { the_ratings(); } ?>
                                </div>
                                <div id="cont_rate_kaz_soft">
                                   <?= get_post_meta(get_the_ID(), 'wpcf-since', true) ?>
                                </div>
                                <div id="cont_rate_kaz_obz"><a href="<?php echo esc_url( get_permalink() ) ?>" title="<?php echo get_the_title();?>">ОБЗОР</a></div>
                                <div id="cont_rate_kaz_site"><a href="<?= get_post_meta(get_the_ID(), 'wpcf-link-kaz', true) ?>" title="Перейти в онлайн казино" target="_blank">САЙТ КАЗИНО</a></div>
                            </div>












<?php }else{?>



<div id="cont_block_news_c">
                                <div id="cont_block_news_post_c">
                                    <div id="cont_block_news_post_title_c">
                                        
                                        <?php the_title( sprintf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' ); ?>
                                    </div>
                                    <div id="cont_block_news_post_cont_c">
                                        <a href="<?php echo wp_get_shortlink(get_the_ID()); ?>"><?php the_post_thumbnail('featureds'); ?></a>
                                        <div id="cont_block_news_post_cont_text_c">
                                            <?php echo mb_substr(get_the_content( __( '', 'gump' ) ), 0, 380); ?>...
                                        </div>
                                        <div id="cont_block_news_post_more_c">
                                            <a href="<?php echo wp_get_shortlink(get_the_ID()); ?>">Подробнее...</a>
                                        </div>
                                    </div>
                                </div>
                                
                               </div>  
                                
                                
                
                
<?php } ?>