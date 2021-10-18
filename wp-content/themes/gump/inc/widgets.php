<?php
/**
 * Custom Widgets
 *
 * @package gump
 * @since gump 1.0
 */

/**
 * Social Links
 *
 * @since gump 1.0
 */
class social_gump extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	function social_gump() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'widget-social', 'description' => 'Show Icons of your Social Links.', 'gump' );

		/* Widget control settings. */
		$control_ops = array( 'id_base' => 'social_gump' );

		/* Create the widget. */
		$this->WP_Widget( 'social_gump', 'Social Links (gump)', $widget_ops, $control_ops );
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	function widget( $args, $instance ) {
		extract( $args );

		/* User-selected settings. */
		$title = apply_filters( 'widget_title', $instance['title'] );
		$feed = $instance['feed'];
		$linkedin = $instance['linkedin'];
		$twitter = $instance['twitter'];
		$facebook = $instance['facebook'];
		$googleplus = $instance['googleplus'];
		$pinterest = $instance['pinterest'];
		$instagram = $instance['instagram'];
		$flickr = $instance['flickr'];
		$youtube = $instance['youtube'];
		$vimeo = $instance['vimeo'];
		$dribbble = $instance['dribbble'];
		$behance = $instance['behance'];
		$github = $instance['github'];
		$skype = $instance['skype'];
		$tumblr = $instance['tumblr'];
		$wordpress = $instance['wordpress'];


		/* Before widget (defined by themes). */
		echo $before_widget;

		if ( $title )
			echo $before_title . $title . $after_title;

		if ( $feed )
			echo '<span><a href="' . $feed . '" title="' . __( 'Feed', 'gump' ) . '" class="' . __( 'social social-feed', 'gump' ) . '" target="' . __( '_blank', 'gump' ) . '"></a></span>';

		if ( $linkedin )
			echo '<span><a href="' . $linkedin . '" title="' . __( 'Linkedin', 'gump' ) . '" class="' . __( 'social social-linkedin', 'gump' ) . '" target="' . __( '_blank', 'gump' ) . '"></a></span>';

		if ( $twitter )
			echo '<span><a href="' . $twitter . '" title="' . __( 'Twitter', 'gump' ) . '" class="' . __( 'social social-twitter', 'gump' ) . '" target="' . __( '_blank', 'gump' ) . '"></a></span>';

		if ( $facebook )
			echo '<span><a href="' . $facebook . '" title="' . __( 'Facebook', 'gump' ) . '" class="' . __( 'social social-facebook', 'gump' ) . '" target="' . __( '_blank', 'gump' ) . '"></a></span>';

		if ( $googleplus )
			echo '<span><a href="' . $googleplus . '" title="' . __( 'Googleplus', 'gump' ) . '" class="' . __( 'social social-googleplus', 'gump' ) . '" target="' . __( '_blank', 'gump' ) . '"></a></span>';

		if ( $pinterest )
			echo '<span><a href="' . $pinterest . '" title="' . __( 'Pinterest', 'gump' ) . '" class="' . __( 'social social-pinterest', 'gump' ) . '" target="' . __( '_blank', 'gump' ) . '"></a></span>';

		if ( $instagram )
			echo '<span><a href="' . $instagram . '" title="' . __( 'Instagram', 'gump' ) . '" class="' . __( 'social social-instagram', 'gump' ) . '" target="' . __( '_blank', 'gump' ) . '"></a></span>';

		if ( $flickr )
			echo '<span><a href="' . $flickr . '" title="' . __( 'Flickr', 'gump' ) . '" class="' . __( 'social social-flickr', 'gump' ) . '" target="' . __( '_blank', 'gump' ) . '"></a></span>';

		if ( $youtube )
			echo '<span><a href="' . $youtube . '" title="' . __( 'Youtube', 'gump' ) . '" class="' . __( 'social social-youtube', 'gump' ) . '" target="' . __( '_blank', 'gump' ) . '"></a></span>';

		if ( $vimeo )
			echo '<span><a href="' . $vimeo . '" title="' . __( 'Vimeo', 'gump' ) . '" class="' . __( 'social social-vimeo', 'gump' ) . '" target="' . __( '_blank', 'gump' ) . '"></a></span>';

		if ( $dribbble )
			echo '<span><a href="' . $dribbble . '" title="' . __( 'Dribbble', 'gump' ) . '" class="' . __( 'social social-dribbble', 'gump' ) . '" target="' . __( '_blank', 'gump' ) . '"></a></span>';

		if ( $behance )
			echo '<span><a href="' . $behance . '" title="' . __( 'Behance', 'gump' ) . '" class="' . __( 'social social-behance', 'gump' ) . '" target="' . __( '_blank', 'gump' ) . '"></a></span>';

		if ( $github )
			echo '<span><a href="' . $github . '" title="' . __( 'Github', 'gump' ) . '" class="' . __( 'social social-github', 'gump' ) . '" target="' . __( '_blank', 'gump' ) . '"></a></span>';

		if ( $skype )
			echo '<span><a href="' . $skype . '" title="' . __( 'Skype', 'gump' ) . '" class="' . __( 'social social-skype', 'gump' ) . '" target="' . __( '_blank', 'gump' ) . '"></a></span>';

		if ( $tumblr )
			echo '<span><a href="' . $tumblr . '" title="' . __( 'Tumblr', 'gump' ) . '" class="' . __( 'social social-tumblr', 'gump' ) . '" target="' . __( '_blank', 'gump' ) . '"></a></span>';

		if ( $wordpress )
			echo '<span><a href="' . $wordpress . '" title="' . __( 'Wordpress', 'gump' ) . '" class="' . __( 'social social-wordpress', 'gump' ) . '" target="' . __( '_blank', 'gump' ) . '"></a></span>';
		
		/* After widget (defined by themes). */
		echo $after_widget;
	}

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 */
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags (if needed) and update the widget settings. */
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['feed'] = $new_instance['feed'];
		$instance['linkedin'] = $new_instance['linkedin'];
		$instance['twitter'] = $new_instance['twitter'];
		$instance['facebook'] = $new_instance['facebook'];
		$instance['googleplus'] = $new_instance['googleplus'];
		$instance['pinterest'] = $new_instance['pinterest'];
		$instance['instagram'] = $new_instance['instagram'];
		$instance['flickr'] = $new_instance['flickr'];
		$instance['youtube'] = $new_instance['youtube'];
		$instance['vimeo'] = $new_instance['vimeo'];
		$instance['dribbble'] = $new_instance['dribbble'];
		$instance['behance'] = $new_instance['behance'];
		$instance['github'] = $new_instance['github'];
		$instance['skype'] = $new_instance['skype'];
		$instance['tumblr'] = $new_instance['tumblr'];
		$instance['wordpress'] = $new_instance['wordpress'];

		return $instance;
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array( 
						'title' => 'Social Links', 
						'feed' => 'http://www.website.com/feed/', 
						'linkedin' => '',
						'twitter' => '',
						'facebook' => '',
						'googleplus' => '',
						'pinterest' => '',
						'instagram' => '',
						'flickr' => '',
						'youtube' => '',
						'vimeo' => '',
						'dribbble' => '',
						'behance' => '',
						'github' => '',
						'skype' => '',
						'tumblr' => '',
						'tumblr' => ''
					);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:','gump'); ?></label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'feed' ); ?>"><?php _e('Feed:','gump'); ?></label>
			<input id="<?php echo $this->get_field_id( 'feed' ); ?>" name="<?php echo $this->get_field_name( 'feed' ); ?>" value="<?php echo $instance['feed']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'linkedin' ); ?>"><?php _e('Linkedin:','gump'); ?></label>
			<input id="<?php echo $this->get_field_id( 'linkedin' ); ?>" name="<?php echo $this->get_field_name( 'linkedin' ); ?>" value="<?php echo $instance['linkedin']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'twitter' ); ?>"><?php _e('Twitter:','gump'); ?></label>
			<input id="<?php echo $this->get_field_id( 'twitter' ); ?>" name="<?php echo $this->get_field_name( 'twitter' ); ?>" value="<?php echo $instance['twitter']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'facebook' ); ?>"><?php _e('Facebook:','gump'); ?></label>
			<input id="<?php echo $this->get_field_id( 'facebook' ); ?>" name="<?php echo $this->get_field_name( 'facebook' ); ?>" value="<?php echo $instance['facebook']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'googleplus' ); ?>"><?php _e('Googleplus:','gump'); ?></label>
			<input id="<?php echo $this->get_field_id( 'googleplus' ); ?>" name="<?php echo $this->get_field_name( 'googleplus' ); ?>" value="<?php echo $instance['googleplus']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'pinterest' ); ?>"><?php _e('Pinterest:','gump'); ?></label>
			<input id="<?php echo $this->get_field_id( 'pinterest' ); ?>" name="<?php echo $this->get_field_name( 'pinterest' ); ?>" value="<?php echo $instance['pinterest']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'instagram' ); ?>"><?php _e('Instagram:','gump'); ?></label>
			<input id="<?php echo $this->get_field_id( 'instagram' ); ?>" name="<?php echo $this->get_field_name( 'instagram' ); ?>" value="<?php echo $instance['instagram']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'flickr' ); ?>"><?php _e('Flickr:','gump'); ?></label>
			<input id="<?php echo $this->get_field_id( 'flickr' ); ?>" name="<?php echo $this->get_field_name( 'flickr' ); ?>" value="<?php echo $instance['flickr']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'youtube' ); ?>"><?php _e('Youtube:','gump'); ?></label>
			<input id="<?php echo $this->get_field_id( 'youtube' ); ?>" name="<?php echo $this->get_field_name( 'youtube' ); ?>" value="<?php echo $instance['youtube']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'vimeo' ); ?>"><?php _e('Vimeo:','gump'); ?></label>
			<input id="<?php echo $this->get_field_id( 'vimeo' ); ?>" name="<?php echo $this->get_field_name( 'vimeo' ); ?>" value="<?php echo $instance['vimeo']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'dribbble' ); ?>"><?php _e('Dribbble:','gump'); ?></label>
			<input id="<?php echo $this->get_field_id( 'dribbble' ); ?>" name="<?php echo $this->get_field_name( 'dribbble' ); ?>" value="<?php echo $instance['dribbble']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'behance' ); ?>"><?php _e('Behance:','gump'); ?></label>
			<input id="<?php echo $this->get_field_id( 'behance' ); ?>" name="<?php echo $this->get_field_name( 'behance' ); ?>" value="<?php echo $instance['behance']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'github' ); ?>"><?php _e('Github:','gump'); ?></label>
			<input id="<?php echo $this->get_field_id( 'github' ); ?>" name="<?php echo $this->get_field_name( 'github' ); ?>" value="<?php echo $instance['github']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'skype' ); ?>"><?php _e('Skype:','gump'); ?></label>
			<input id="<?php echo $this->get_field_id( 'skype' ); ?>" name="<?php echo $this->get_field_name( 'skype' ); ?>" value="<?php echo $instance['skype']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'tumblr' ); ?>"><?php _e('Tumblr:','gump'); ?></label>
			<input id="<?php echo $this->get_field_id( 'tumblr' ); ?>" name="<?php echo $this->get_field_name( 'tumblr' ); ?>" value="<?php echo $instance['tumblr']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'wordpress' ); ?>"><?php _e('Wordpress:','gump'); ?></label>
			<input id="<?php echo $this->get_field_id( 'wordpress' ); ?>" name="<?php echo $this->get_field_name( 'wordpress' ); ?>" value="<?php echo $instance['wordpress']; ?>" style="width:100%;" />
		</p>

		<?php
	}

}

function register_social_gump() {
    register_widget( 'social_gump' );
}
add_action( 'widgets_init', 'register_social_gump' );









/****************************************/






class top_menu_gump extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	function top_menu_gump() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'widget-top-menu', 'description' => 'Вывод блоков в шапке меню', 'gump' );

		/* Widget control settings. */
		$control_ops = array( 'id_base' => 'top_menu_gump' );

		/* Create the widget. */
		$this->WP_Widget( 'top_menu_gump', 'Топ меню блоки (gump)', $widget_ops, $control_ops );
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	function widget( $args, $instance ) {
		extract( $args );

		/* User-selected settings. */
		$title = apply_filters( 'widget_title', $instance['title'] );
        
		$img_1 = $instance['img_1'];
		$link_1 = $instance['link_1'];
		$desc_1 = $instance['desc_1'];
        
        $img_2 = $instance['img_2'];
		$link_2 = $instance['link_2'];
		$desc_2 = $instance['desc_2'];
        
        $img_3 = $instance['img_3'];
		$link_3 = $instance['link_3'];
		$desc_3 = $instance['desc_3'];
        
        $img_4 = $instance['img_4'];
		$link_4 = $instance['link_4'];
		$desc_4 = $instance['desc_4'];




		/* Before widget (defined by themes). */
		echo $before_widget;

		if ( $title )
			//echo $before_title . $title . $after_title;

		if ( $img_1 and $link_1 and $desc_1){
        
            echo '<div id="zalu_game">
                                <div id="zalu_game_img">
                                    <a href="'.$link_1.'" target="_blank">
                                        <img src="'.$img_1.'" width="208" height="99" />
                                    </a>
                                    <span>
                                        <div id="p_t"></div>
                                        <div id="p_c">
                                            '.$desc_1.'
                                        </div>
                                        <div id="p_b"></div>
                                    </span>
                                    
                                </div> 
                                <div id="zalu_game_btn">
                                    <a href="'.$link_1.'"></a>
                                </div>
                            </div>';
			}
            
            
            if ( $img_2 and $link_2 and $desc_2){
        
            echo '<div id="zalu_game">
                                <div id="zalu_game_img">
                                    <a href="'.$link_2.'" target="_blank">
                                        <img src="'.$img_2.'" width="208" height="99" />
                                    </a>
                                    <span>
                                        <div id="p_t"></div>
                                        <div id="p_c">
                                            '.$desc_2.'
                                        </div>
                                        <div id="p_b"></div>
                                    </span>
                                    
                                </div> 
                                <div id="zalu_game_btn">
                                    <a href="'.$link_2.'"></a>
                                </div>
                            </div>';
			}
            
            
            
            if ( $img_3 and $link_3 and $desc_3){
        
            echo '<div id="zalu_game">
                                <div id="zalu_game_img">
                                    <a href="'.$link_3.'" target="_blank">
                                        <img src="'.$img_3.'" width="208" height="99" />
                                    </a>
                                    <span>
                                        <div id="p_t"></div>
                                        <div id="p_c">
                                            '.$desc_3.'
                                        </div>
                                        <div id="p_b"></div>
                                    </span>
                                    
                                </div> 
                                <div id="zalu_game_btn">
                                    <a href="'.$link_3.'"></a>
                                </div>
                            </div>';
			}
            
            
            
            if ( $img_4 and $link_4 and $desc_4){
        
            echo '<div id="zalu_game">
                                <div id="zalu_game_img">
                                    <a href="'.$link_4.'" target="_blank">
                                        <img src="'.$img_4.'" width="208" height="99" />
                                    </a>
                                    <span>
                                        <div id="p_t"></div>
                                        <div id="p_c">
                                            '.$desc_4.'
                                        </div>
                                        <div id="p_b"></div>
                                    </span>
                                    
                                </div> 
                                <div id="zalu_game_btn">
                                    <a href="'.$link_4.'"></a>
                                </div>
                            </div>';
			}

            
            
            
      
            
            
		
		/* After widget (defined by themes). */
		echo $after_widget;
	}

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 */
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags (if needed) and update the widget settings. */
		$instance['title'] = strip_tags( $new_instance['title'] );
        
		$instance['img_1'] = $new_instance['img_1'];
		$instance['link_1'] = $new_instance['link_1'];
		$instance['desc_1'] = $new_instance['desc_1'];
        
        $instance['img_2'] = $new_instance['img_2'];
		$instance['link_2'] = $new_instance['link_2'];
		$instance['desc_2'] = $new_instance['desc_2'];
        
        $instance['img_3'] = $new_instance['img_3'];
		$instance['link_3'] = $new_instance['link_3'];
		$instance['desc_3'] = $new_instance['desc_3'];
        
        $instance['img_4'] = $new_instance['img_4'];
		$instance['link_4'] = $new_instance['link_4'];
		$instance['desc_4'] = $new_instance['desc_4'];
        
	

		return $instance;
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array( 
						'title' => 'Топ меню блоки', 
                        
						'img_1' => '', 
						'link_1' => '',
						'desc_1' => '',
                        
						'img_2' => '', 
						'link_2' => '',
						'desc_2' => '',
                        
                        'img_3' => '', 
						'link_3' => '',
						'desc_3' => '',
                        
                        
                        'img_4' => '', 
						'link_4' => '',
						'desc_4' => ''
                        
                        
						
					);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Название блока:','gump'); ?></label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />
		</p>
        
<!-- /**********************/  --> 

		<p>
			<label for="<?php echo $this->get_field_id( 'img_1' ); ?>" style="color: red;"><?php _e('Сылка на картинку 1:','gump'); ?><br /><small style="color: gray;">http://site.ru/zal_1.gif (208*99)</small></label>
			<input id="<?php echo $this->get_field_id( 'img_1' ); ?>" name="<?php echo $this->get_field_name( 'img_1' ); ?>" value="<?php echo $instance['img_1']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'link_1' ); ?>" style="color: red;"><?php _e('Ссылка на сайт 1:','gump'); ?><br /><small style="color: gray;">http://site.ru/</small></label>
			<input id="<?php echo $this->get_field_id( 'link_1' ); ?>" name="<?php echo $this->get_field_name( 'link_1' ); ?>" value="<?php echo $instance['link_1']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'desc_1' ); ?>" style="color: red;"><?php _e('Текст для подсказки 1:','gump'); ?><br /><small style="color: gray;">&lt;b&gt;Желтый текст:&lt;/b&gt; Описание.</small></label>
			<input id="<?php echo $this->get_field_id( 'desc_1' ); ?>" name="<?php echo $this->get_field_name( 'desc_1' ); ?>" value="<?php echo $instance['desc_1']; ?>" style="width:100%;" />
		</p>
        
<!-- /**********************/  -->         
        
        <p>
			<label for="<?php echo $this->get_field_id( 'img_2' ); ?>" style="color: green;"><?php _e('Сылка на картинку 2:','gump'); ?></label>
			<input id="<?php echo $this->get_field_id( 'img_2' ); ?>" name="<?php echo $this->get_field_name( 'img_2' ); ?>" value="<?php echo $instance['img_2']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'link_2' ); ?>" style="color: green;"><?php _e('Ссылка на сайт 2:','gump'); ?></label>
			<input id="<?php echo $this->get_field_id( 'link_2' ); ?>" name="<?php echo $this->get_field_name( 'link_2' ); ?>" value="<?php echo $instance['link_2']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'desc_2' ); ?>" style="color: green;"><?php _e('Текст для подсказки 2:','gump'); ?></label>
			<input id="<?php echo $this->get_field_id( 'desc_2' ); ?>" name="<?php echo $this->get_field_name( 'desc_2' ); ?>" value="<?php echo $instance['desc_2']; ?>" style="width:100%;" />
		</p>
        
<!-- /**********************/  -->         
        
        <p>
			<label for="<?php echo $this->get_field_id( 'img_3' ); ?>" style="color: blue;"><?php _e('Сылка на картинку 3:','gump'); ?></label>
			<input id="<?php echo $this->get_field_id( 'img_3' ); ?>" name="<?php echo $this->get_field_name( 'img_3' ); ?>" value="<?php echo $instance['img_3']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'link_3' ); ?>" style="color: blue;"><?php _e('Ссылка на сайт 3:','gump'); ?></label>
			<input id="<?php echo $this->get_field_id( 'link_3' ); ?>" name="<?php echo $this->get_field_name( 'link_3' ); ?>" value="<?php echo $instance['link_3']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'desc_3' ); ?>" style="color: blue;"><?php _e('Текст для подсказки 3:','gump'); ?></label>
			<input id="<?php echo $this->get_field_id( 'desc_3' ); ?>" name="<?php echo $this->get_field_name( 'desc_3' ); ?>" value="<?php echo $instance['desc_3']; ?>" style="width:100%;" />
		</p>
        
<!-- /**********************/  -->       
        
        <p>
			<label for="<?php echo $this->get_field_id( 'img_4' ); ?>" style="color: orange;"><?php _e('Сылка на картинку 4:','gump'); ?></label>
			<input id="<?php echo $this->get_field_id( 'img_4' ); ?>" name="<?php echo $this->get_field_name( 'img_4' ); ?>" value="<?php echo $instance['img_4']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'link_4' ); ?>" style="color: orange;"><?php _e('Ссылка на сайт 4:','gump'); ?></label>
			<input id="<?php echo $this->get_field_id( 'link_4' ); ?>" name="<?php echo $this->get_field_name( 'link_4' ); ?>" value="<?php echo $instance['link_4']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'desc_4' ); ?>" style="color: orange;"><?php _e('Текст для подсказки 4:','gump'); ?></label>
			<input id="<?php echo $this->get_field_id( 'desc_4' ); ?>" name="<?php echo $this->get_field_name( 'desc_4' ); ?>" value="<?php echo $instance['desc_4']; ?>" style="width:100%;" />
		</p>

	
    

		<?php
	}

}

function register_top_menu_gump() {
    register_widget( 'top_menu_gump' );
}
add_action( 'widgets_init', 'register_top_menu_gump' );





/****************************************/






class sitebar_menu_gump extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	function sitebar_menu_gump() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'widget-top-menu', 'description' => 'Вывод блоков справа меню', 'gump' );

		/* Widget control settings. */
		$control_ops = array( 'id_base' => 'sitebar_menu_gump' );

		/* Create the widget. */
		$this->WP_Widget( 'sitebar_menu_gump', 'Игровые слоты справа (gump)', $widget_ops, $control_ops );
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	function widget( $args, $instance ) {
		extract( $args );

		/* User-selected settings. */
		$title = apply_filters( 'widget_title', $instance['title'] );
        
		$img_1 = $instance['img_1'];
		$link_1 = $instance['link_1'];
		$desc_1 = $instance['desc_1'];
        
        $img_2 = $instance['img_2'];
		$link_2 = $instance['link_2'];
		$desc_2 = $instance['desc_2'];
        
        $img_3 = $instance['img_3'];
		$link_3 = $instance['link_3'];
		$desc_3 = $instance['desc_3'];
        
        $img_4 = $instance['img_4'];
		$link_4 = $instance['link_4'];
		$desc_4 = $instance['desc_4'];




		/* Before widget (defined by themes). */
		echo $before_widget;

		if ( $title )
			echo $before_title . $title . $after_title;

		if ( $img_1 and $link_1 and $desc_1){
        
            echo '<div id="sitebar_game">
                                    <div id="sitebar_game_img">
                                        <a href="'.$link_1.'">
                                            <img src="'.$img_1.'" alt="'.$desc_1.'" title="'.$desc_1.'"/>
                                        </a>
                                    </div>
                                    <div class="sitebar_game_name">
                                        <a href="'.$link_1.'">
                                            '.$desc_1.'
                                        </a>
                                    </div>
                                </div>';
			}
            
            
            if ( $img_2 and $link_2 and $desc_2){
        
            echo '<div id="sitebar_game">
                                    <div id="sitebar_game_img">
                                        <a href="'.$link_2.'">
                                            <img src="'.$img_2.'"/ alt="'.$desc_2.'" title="'.$desc_2.'">
                                        </a>
                                    </div>
                                    <div class="sitebar_game_name">
                                        <a href="'.$link_2.'">
                                            '.$desc_2.'
                                        </a>
                                    </div>
                                </div>';
			}
            
            
            
            if ( $img_3 and $link_3 and $desc_3){
        
            echo '<div id="sitebar_game">
                                    <div id="sitebar_game_img">
                                        <a href="'.$link_3.'">
                                            <img src="'.$img_3.'"/ alt="'.$desc_3.'" title="'.$desc_3.'">
                                        </a>
                                    </div>
                                    <div class="sitebar_game_name">
                                        <a href="'.$link_3.'">
                                            '.$desc_3.'
                                        </a>
                                    </div>
                                </div>';
			}
            
            
            
            if ( $img_4 and $link_4 and $desc_4){
        
            echo '<div id="sitebar_game">
                                    <div id="sitebar_game_img">
                                        <a href="'.$link_4.'">
                                            <img src="'.$img_4.'"/ alt="'.$desc_4.'" title="'.$desc_4.'">
                                        </a>
                                    </div>
                                    <div class="sitebar_game_name">
                                        <a href="'.$link_4.'">
                                            '.$desc_4.'
                                        </a>
                                    </div>
                                </div>';
			}

            
            
            
      
            
            
		
		/* After widget (defined by themes). */
		echo $after_widget;
	}

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 */
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags (if needed) and update the widget settings. */
		$instance['title'] = strip_tags( $new_instance['title'] );
        
		$instance['img_1'] = $new_instance['img_1'];
		$instance['link_1'] = $new_instance['link_1'];
		$instance['desc_1'] = $new_instance['desc_1'];
        
        $instance['img_2'] = $new_instance['img_2'];
		$instance['link_2'] = $new_instance['link_2'];
		$instance['desc_2'] = $new_instance['desc_2'];
        
        $instance['img_3'] = $new_instance['img_3'];
		$instance['link_3'] = $new_instance['link_3'];
		$instance['desc_3'] = $new_instance['desc_3'];
        
        $instance['img_4'] = $new_instance['img_4'];
		$instance['link_4'] = $new_instance['link_4'];
		$instance['desc_4'] = $new_instance['desc_4'];
        
	

		return $instance;
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array( 
						'title' => 'Топ меню блоки', 
                        
						'img_1' => '', 
						'link_1' => '',
						'desc_1' => '',
                        
						'img_2' => '', 
						'link_2' => '',
						'desc_2' => '',
                        
                        'img_3' => '', 
						'link_3' => '',
						'desc_3' => '',
                        
                        
                        'img_4' => '', 
						'link_4' => '',
						'desc_4' => ''
                        
                        
						
					);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Название блока:','gump'); ?></label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />
		</p>
        
<!-- /**********************/  --> 

		<p>
			<label for="<?php echo $this->get_field_id( 'img_1' ); ?>" style="color: red;"><?php _e('Сылка на картинку 1:','gump'); ?><br /><small style="color: gray;">http://site.ru/zal_1.gif (60*60)</small></label>
			<input id="<?php echo $this->get_field_id( 'img_1' ); ?>" name="<?php echo $this->get_field_name( 'img_1' ); ?>" value="<?php echo $instance['img_1']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'link_1' ); ?>" style="color: red;"><?php _e('Ссылка на сайт 1:','gump'); ?><br /><small style="color: gray;">http://site.ru/</small></label>
			<input id="<?php echo $this->get_field_id( 'link_1' ); ?>" name="<?php echo $this->get_field_name( 'link_1' ); ?>" value="<?php echo $instance['link_1']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'desc_1' ); ?>" style="color: red;"><?php _e('Название 1:','gump'); ?><br /><small style="color: gray;">RICHES OF INDIA</small></label>
			<input id="<?php echo $this->get_field_id( 'desc_1' ); ?>" name="<?php echo $this->get_field_name( 'desc_1' ); ?>" value="<?php echo $instance['desc_1']; ?>" style="width:100%;" />
		</p>
        
<!-- /**********************/  -->         
        
        <p>
			<label for="<?php echo $this->get_field_id( 'img_2' ); ?>" style="color: green;"><?php _e('Сылка на картинку 2:','gump'); ?></label>
			<input id="<?php echo $this->get_field_id( 'img_2' ); ?>" name="<?php echo $this->get_field_name( 'img_2' ); ?>" value="<?php echo $instance['img_2']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'link_2' ); ?>" style="color: green;"><?php _e('Ссылка на сайт 2:','gump'); ?></label>
			<input id="<?php echo $this->get_field_id( 'link_2' ); ?>" name="<?php echo $this->get_field_name( 'link_2' ); ?>" value="<?php echo $instance['link_2']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'desc_2' ); ?>" style="color: green;"><?php _e('Название 2:','gump'); ?></label>
			<input id="<?php echo $this->get_field_id( 'desc_2' ); ?>" name="<?php echo $this->get_field_name( 'desc_2' ); ?>" value="<?php echo $instance['desc_2']; ?>" style="width:100%;" />
		</p>
        
<!-- /**********************/  -->         
        
        <p>
			<label for="<?php echo $this->get_field_id( 'img_3' ); ?>" style="color: blue;"><?php _e('Сылка на картинку 3:','gump'); ?></label>
			<input id="<?php echo $this->get_field_id( 'img_3' ); ?>" name="<?php echo $this->get_field_name( 'img_3' ); ?>" value="<?php echo $instance['img_3']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'link_3' ); ?>" style="color: blue;"><?php _e('Ссылка на сайт 3:','gump'); ?></label>
			<input id="<?php echo $this->get_field_id( 'link_3' ); ?>" name="<?php echo $this->get_field_name( 'link_3' ); ?>" value="<?php echo $instance['link_3']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'desc_3' ); ?>" style="color: blue;"><?php _e('Название 3:','gump'); ?></label>
			<input id="<?php echo $this->get_field_id( 'desc_3' ); ?>" name="<?php echo $this->get_field_name( 'desc_3' ); ?>" value="<?php echo $instance['desc_3']; ?>" style="width:100%;" />
		</p>
        
<!-- /**********************/  -->       
        
        <p>
			<label for="<?php echo $this->get_field_id( 'img_4' ); ?>" style="color: orange;"><?php _e('Сылка на картинку 4:','gump'); ?></label>
			<input id="<?php echo $this->get_field_id( 'img_4' ); ?>" name="<?php echo $this->get_field_name( 'img_4' ); ?>" value="<?php echo $instance['img_4']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'link_4' ); ?>" style="color: orange;"><?php _e('Ссылка на сайт 4:','gump'); ?></label>
			<input id="<?php echo $this->get_field_id( 'link_4' ); ?>" name="<?php echo $this->get_field_name( 'link_4' ); ?>" value="<?php echo $instance['link_4']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'desc_4' ); ?>" style="color: orange;"><?php _e('Название 4:','gump'); ?></label>
			<input id="<?php echo $this->get_field_id( 'desc_4' ); ?>" name="<?php echo $this->get_field_name( 'desc_4' ); ?>" value="<?php echo $instance['desc_4']; ?>" style="width:100%;" />
		</p>

	
    

		<?php
	}

}

function register_sitebar_menu_gump() {
    register_widget( 'sitebar_menu_gump' );
}
add_action( 'widgets_init', 'register_sitebar_menu_gump' );



/************************************************/





class fot_menu_gump extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	function fot_menu_gump() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'widget-fot-menu', 'description' => 'Вывод блока снизу в категориях', 'gump' );

		/* Widget control settings. */
		$control_ops = array( 'id_base' => 'fot_menu_gump' );

		/* Create the widget. */
		$this->WP_Widget( 'fot_menu_gump', 'Вывод блока снизу (gump)', $widget_ops, $control_ops );
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	function widget( $args, $instance ) {
		extract( $args );

		/* User-selected settings. */
		$title = apply_filters( 'widget_title', $instance['title'] );
        

      
		$desc_1 = html_entity_decode($instance['desc_1']);
        $title_1 = $instance['title_1'];
        
    




		/* Before widget (defined by themes). */
		echo $before_widget;

		if ( $title )
			//echo $before_title . $title . $after_title;



  



		if ($desc_1 and $title_1){
        
        
        
        
        
                  echo  '<div id="cont_block_news_post">
                                    <div id="cont_block_news_post_title">
                                       <h2>'.$title_1.'</h2>
                                    </div>
                                    <div class="cont_block_news_post_cont_t">
                                        
                                        <div class="cont_block_news_post_cont_text_t">
                                            '.$desc_1.'
                                        </div>
                                    </div>
                                </div>';
                                
                                
                }                
                                
                                
            
            
		
            
      

            
            
            
      
            
            
		
		/* After widget (defined by themes). */
		echo $after_widget;
	}

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 */
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags (if needed) and update the widget settings. */
		$instance['title'] = strip_tags( $new_instance['title'] );

		$instance['desc_1'] = htmlspecialchars($new_instance['desc_1']);
        $instance['title_1'] = $new_instance['title_1'];
        

        
	

		return $instance;
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array( 
						'title' => 'Снизу блок', 
                        
          
						'desc_1' => '',
                        'title_1' => ''
            
                        
                        
						
					);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Название блока:','gump'); ?></label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />
		</p>
        
<!-- /**********************/  --> 

    
        
		<p>
			<label for="<?php echo $this->get_field_id( 'desc_1' ); ?>" ><?php _e('Текст для подсказки:','gump'); ?><br /><small style="color: gray;">Описание.</small></label>
            <textarea rows="16" cols="20" id="<?php echo $this->get_field_id( 'desc_1' ); ?>" name="<?php echo $this->get_field_name( 'desc_1' ); ?>" style="width:100%;" ><?php echo $instance['desc_1']; ?></textarea>
		</p>
        
        <p>
			<label for="<?php echo $this->get_field_id( 'title_1' ); ?>" ><?php _e('Текст для заголовка:','gump'); ?><br /><small style="color: gray;">Игровые автоматы LAVA SLOTS</small></label>
            <input id="<?php echo $this->get_field_id( 'title_1' ); ?>" name="<?php echo $this->get_field_name( 'title_1' ); ?>" value="<?php echo $instance['title_1']; ?>" style="width:100%;" />
		</p>
        


	
    

		<?php
	}

}

function register_fot_menu_gump() {
    register_widget( 'fot_menu_gump' );
}
add_action( 'widgets_init', 'register_fot_menu_gump' );







/************************************************/





class fot_menu_gump2 extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	function fot_menu_gump2() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'widget-fot-menu', 'description' => 'Вывод блока снизу в SEO', 'gump' );

		/* Widget control settings. */
		$control_ops = array( 'id_base' => 'fot_menu_gump2' );

		/* Create the widget. */
		$this->WP_Widget( 'fot_menu_gump2', 'Вывод блока снизу SEO', $widget_ops, $control_ops );
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	function widget( $args, $instance ) {
		extract( $args );

		/* User-selected settings. */
		$title = apply_filters( 'widget_title', $instance['title'] );
        

        $links_1 = $instance['links_1'];
		$desc_1 = html_entity_decode($instance['desc_1']);
        $title_1 = $instance['title_1'];
        
    




		/* Before widget (defined by themes). */
		echo $before_widget;

		if ( $title )
			//echo $before_title . $title . $after_title;



$result  = 'http://';
$result .= $_SERVER['SERVER_NAME'];
$result .= $_SERVER['REQUEST_URI'];
  
  



		if ($desc_1 and $title_1){
        
        
        if($result == $links_1){
        
        
                  echo  '<div id="cont_block_news_post">
                                    <div id="cont_block_news_post_title">
                                       <h2>'.$title_1.'</h2>
                                    </div>
                                    <div class="cont_block_news_post_cont_t">
                                        
                                        <div class="cont_block_news_post_cont_text_t">
                                            '.$desc_1.'
                                        </div>
                                    </div>
                                </div>';
                                
                                
                }                
                                
                                
            
            
			}
            
      

            
            
            
      
            
            
		
		/* After widget (defined by themes). */
		echo $after_widget;
	}

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 */
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags (if needed) and update the widget settings. */
		$instance['title'] = strip_tags( $new_instance['title'] );
        
        $instance['links_1'] = $new_instance['links_1'];
		$instance['desc_1'] = htmlspecialchars($new_instance['desc_1']);
        $instance['title_1'] = $new_instance['title_1'];
        

        
	

		return $instance;
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array( 
						'title' => 'Снизу блок', 
                        
                        'links_1' => '',
						'desc_1' => '',
                        'title_1' => ''
            
                        
                        
						
					);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Название блока:','gump'); ?></label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />
		</p>
        
<!-- /**********************/  --> 

        <p>
			<label for="<?php echo $this->get_field_id( 'links_1' ); ?>" ><?php _e('Точная ссылка на страницу где должен отображаться блок:','gump'); ?><br /><small style="color: gray;">http://onl1ne.slot-okey.com/category/uncategorized/</small></label>
            <input id="<?php echo $this->get_field_id( 'links_1' ); ?>" name="<?php echo $this->get_field_name( 'links_1' ); ?>" value="<?php echo $instance['links_1']; ?>" style="width:100%;" />
		</p>
        
		<p>
			<label for="<?php echo $this->get_field_id( 'desc_1' ); ?>" ><?php _e('Текст для подсказки:','gump'); ?><br /><small style="color: gray;">Описание.</small></label>
            <textarea rows="16" cols="20" id="<?php echo $this->get_field_id( 'desc_1' ); ?>" name="<?php echo $this->get_field_name( 'desc_1' ); ?>" style="width:100%;" ><?php echo $instance['desc_1']; ?></textarea>
		</p>
        
        <p>
			<label for="<?php echo $this->get_field_id( 'title_1' ); ?>" ><?php _e('Текст для заголовка:','gump'); ?><br /><small style="color: gray;">Игровые автоматы LAVA SLOTS</small></label>
            <input id="<?php echo $this->get_field_id( 'title_1' ); ?>" name="<?php echo $this->get_field_name( 'title_1' ); ?>" value="<?php echo $instance['title_1']; ?>" style="width:100%;" />
		</p>
        


	
    

		<?php
	}

}

function register_fot_menu_gump2() {
    register_widget( 'fot_menu_gump2' );
}
add_action( 'widgets_init', 'register_fot_menu_gump2' );
