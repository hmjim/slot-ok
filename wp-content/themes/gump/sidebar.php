<?php
/**
 * The Sidebar containing the Sidebar
 *
 * @package gump
 * @since gump 1.0
 */
?>


    
    
    
    
    
    
    
        
                    <div id="sitebar">


                    
       
       
        
        
                        <!-- sitebar start -->
                            
                    <div class="share42init" data-url="<?php the_permalink() ?>" data-title="<?php the_title() ?>"></div>
                            <div id="sitebar_games">
                            
                            
                             <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
			
				                    <?php dynamic_sidebar( 'sidebar-1' ); ?>

                            <?php endif; ?>
        
        
        
                            
                                
                                
                            </div>
                            
                            
                            
              
              
            
            
            
                            <div id="sitebar_search">
                                <form role="search" method="get" action="https://slot-oker.com/" class="search">  
                                  <input type="search" name="s" value="поиск автомата" class="input" 
                                    onblur="if(this.value=='') this.value='поиск автомата';" 
                                    onfocus="if(this.value=='поиск автомата') this.value='';"/>  
                                  <input type="submit" name="" value="" class="submit" />  
                                </form>  
                            </div>
                        
                        <!-- sitebar end -->
                    </div>