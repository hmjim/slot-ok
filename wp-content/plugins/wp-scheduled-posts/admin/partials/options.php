<?php 
    //when slug is for integration tab
    $gen_content_active = '';
    if( !isset($_GET['wpsptab']) ) {
        $gen_content_active = 'wpsp_nav_tab_content_active';
    }else{
        $tab = $_GET['wpsptab'];
        if($tab == 'gen') {
            $gen_content_active = 'wpsp_nav_tab_content_active';
        }
    }
?>
<div class="wpsp-settings-wrap wpsp_nav_tab_content <?php echo $gen_content_active; ?>" id="wpsp-wpsp_gen">
    <!-- admin sidebar -->
    <div class="wpsp-options-wrap">

        <form action="<?php print esc_url( admin_url( 'admin-post.php' ) ); ?>" method="post">
            <input type="hidden" name="action" value="wpscp_general_options_saved">
            <input type="hidden" name="nonce_wpscp_general_options" value="<?php print wp_create_nonce('nonce_wpscp_general_options'); ?>">
            <table class="form-table">
                <tr class="wpsp_option_chek_row">
                    <td  colspan="2" align="left">
                        <label for="show_dashboard_widget"><?php _e( 'Show Scheduled Posts in Dashboard Widget', 'wp-scheduled-posts' ); ?></label>
                        <div class="wpsp_switch">
                            <input id="show_dashboard_widget" class="wpsp_field_activate" type="checkbox" name="show_dashboard_widget" value="1" <?php checked($wpscp_options['show_dashboard_widget']);?> />
                            <span class="wpsp_switch_slider wpsp_round"></span>
                        </div>
                    </td>
                </tr>

                <tr class="wpsp_option_chek_row">
                    <td  colspan="2" align="left">
                        <label for="show_in_front_end_adminbar"><?php _e( 'Show Scheduled Posts in Sitewide Admin Bar', 'wp-scheduled-posts' ); ?></label>
                        <div class="wpsp_switch">
                            <input type="checkbox" id="show_in_front_end_adminbar" class="wpsp_field_activate" name="show_in_front_end_adminbar" value="1" <?php checked($wpscp_options['show_in_front_end_adminbar']);?>/>
                            <span class="wpsp_switch_slider wpsp_round"></span>	
                        </div>
                        
                    </td>
                </tr>

                <tr class="wpsp_option_chek_row">
                    <td  colspan="2" align="left">
                        <label for="show_in_adminbar"><?php _e( 'Show Scheduled Posts in Admin Bar', 'wp-scheduled-posts' ); ?></label>
                        <div class="wpsp_switch">
                            <input type="checkbox" id="show_in_adminbar" class="wpsp_field_activate" name="show_in_adminbar" value="1" <?php checked($wpscp_options['show_in_adminbar']);?> />
                            <span class="wpsp_switch_slider wpsp_round"></span>	
                        </div>
                        
                    </td>
                </tr>

                <tr class="wpsp_option_select_tr">
                    <td scope="row" align="left" style="vertical-align:top;"><?php esc_html_e('Show Post Types:', 'wpscp'); ?> </td>
                    <td>
                        <?php 
                            $post_types = wpscp_get_all_post_type();
                            $allow_post_types = ($wpscp_options['allow_post_types'] == '' ? array('post') : $wpscp_options['allow_post_types']);
                        ?>
                        <select name="allow_post_types[]" class="wpsp_field_activate" MULTIPLE style="height:80px;width:200px;">
                            <?php
                                foreach ($post_types as $post_type ) {
                                    //do not print not neccessary post type
                                    echo "<option ";
                                        if(in_array($post_type,$allow_post_types)) echo "selected ";
                                    echo 'value="'.$post_type.'">'.$post_type.'</option>';
                                }
                            ?>
                        </select>
                    </td>
                </tr>
        
                <tr class="wpsp_option_select_tr">
                    <td scope="row" align="left" style="vertical-align:top;"><?php esc_html_e('Show Categories:', 'wpscp'); ?></td>
                    <td>
                        <select name="allow_categories[]" class="wpsp_field_activate" MULTIPLE style="height:100px;width:200px;">
                            <?php
                                $args = array(
                                    'type'                     => 'post',
                                    'child_of'                 => 0,
                                    'parent'                   => '',
                                    'orderby'                  => 'name',
                                    'order'                    => 'ASC',
                                    'hide_empty'               => 0,
                                    'hierarchical'             => 0,
                                    'exclude'                  => '',
                                    'include'                  => '',
                                    'number'                   => '',
                                    'taxonomy'                 => 'category',
                                    'pad_counts'               => false 
                                
                                ); 
                                $categories = get_categories( $args );
                                array_unshift($categories, (object)array("term_id"=>0, "name"=>"All Categories"));

                                foreach ($categories as $cat ) {
                                    echo "<option ";
                                    
                                    if(is_array($wpscp_options['allow_categories'])) {
                                        if(in_array($cat->term_id,$wpscp_options['allow_categories'])) 
                                            echo "selected ";
                                    }
                                        echo 'value="'.$cat->term_id.'">'.$cat->name.'</option>';

                                }
                            ?>
                        </select>
                    </td>
                </tr>
        
                
                <tr valign="top" class="wpsp_option_select_tr">
                    <td width="150" scope="row" align="left">
                        <label for="allow_user_role"><?php esc_html_e('Allow users:', 'wpscp'); ?></label>
                    </td>
                    <td>
                        <select name="allow_user_role[]" class="wpsp_field_activate" id="allow_user_role" multiple="multiple"  style="height:80px;width:200px;" >
                            <?php  
                                print wpscp_dropdown_roles( $wpscp_options['allow_user_role'] ); 
                            ?>
                        </select>
                    </td>
                </tr>

                <tr class="wpsp_cus_temp_opt_tr">
                    <td  colspan="2" align="left">
                        <div class="toggle_arrow">
                            <img src="<?php echo WPSCP_ADMIN_URL .'assets/images/arrow.png'; ?>" height="8px" width="14px" alt="toggle arrow">
                        </div>

                        <div class="cus_temp_opt_tr_con">
                            <?php esc_html_e('Custom item template for scheduled posts list in adminbar:', 'wpscp'); ?><br />
                            <div class="wpsp_cus_temp_opt" style="display: none;">
                                
                                
                                <div class="wpsp_cus_temp_item">
                                    <label for="adminbar_item_template"><?php _e( 'Item template:', 'wp-scheduled-posts' ); ?></label> 
                                    <input type="text" id="adminbar_item_template" class="wpsp_field_activate" name="adminbar_item_template" size="50" placeholder="<strong>%TITLE%</strong> / %AUTHOR% / %DATE%"  value="<?php echo htmlspecialchars(stripslashes($wpscp_options['adminbar_item_template'])) ?>"  />
                                </div>

                                <div class="wpsp_cus_temp_item">
                                    <label for="adminbar_title_length"><?php _e( 'Title length:', 'wp-scheduled-posts' ); ?></label> 
                                    <input type="text" id="adminbar_title_length" class="wpsp_field_activate" name="adminbar_title_length" size="5" placeholder="45"  value="<?php echo $wpscp_options['adminbar_title_length'] ?>" />
                                </div>
                                
                                <div class="wpsp_cus_temp_item">
                                    <label for="adminbar_date_format"><?php _e( 'Date format:', 'wp-scheduled-posts' ); ?></label>
                                    <input type="text" id="adminbar_date_format" class="wpsp_field_activate" name="adminbar_date_format" size="10" placeholder="M-d h:i:a"  value="<?php echo htmlspecialchars(stripslashes($wpscp_options['adminbar_date_format'])) ?>" />
                                </div>

                                

                                <div style="color:#999999; padding: 10px;"><?php esc_html_e('For item template use', 'wpscp'); ?> <strong>%TITLE%</strong> <?php esc_html_e('for post title,', 'wpscp'); ?> <strong>%AUTHOR%</strong> <?php esc_html_e('for post author and', 'wpscp'); ?> <strong>%DATE%</strong> <?php esc_html_e('for post scheduled date-time. You can use HTML tags with styles also', 'wpscp'); ?> 
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr class="wpsp_show_pub_im_btn">
                    <td  colspan="2" align="left" >
                        <div class="wpsp_switch">
                            <input type="checkbox" id="prevent_future_post" class="wpsp_field_activate" name="prevent_future_post" value="1" <?php checked($wpscp_options['prevent_future_post']); ?> />
                            <span class="wpsp_switch_slider wpsp_round"></span>
                        </div>    
                        <label for="prevent_future_post"><?php _e('Show Publish Post Immediately Button', 'wp-scheduled-posts'); ?></label>

                    </td>
                    <td>
                        <span> <?php esc_html_e('(A checkbox will be appeared in date-time edit section in the post edit panel)', 'wpscp'); ?> </span>
                    </td>

                </tr>  

                <tr>
                    <td>
                        <input type="submit" name="save_options" value="Save Options" class='wpsp_form_submit'/>
                    </td>
                </tr>

            </table>
        </form>

        
    </div>

    <!-- Pro Features Section start-->
    <div class="wpsp_pro_features_wrapper">
        <?php 
            include WPSCP_ADMIN_DIR_PATH . '/partials/upgrade.php';
        ?>
        <div class="wpsp_pro_features_lists">
            <h3><?php esc_html_e('WP Scheduled Posts - Pro Features', 'wpscp'); ?></h3>
            <div class="wpsp_pro_support_panel">
                <?php 
                    if( ! class_exists('WpScp_Pro') ) {
                ?>
                <h4><?php esc_html_e('In Pro version, You will get following supports:', 'wpscp'); ?></h4>
                <?php } ?>
                <div class="wpsp_pro_suppurt_lists">

                    <div class="wpsp_support_items">

                        <a href="https://wpdeveloper.net/docs/wp-scheduled-posts/how-does-auto-scheduler-work/" target="__blank">

                            <img src="<?php echo plugins_url(); ?>/wp-scheduled-posts/admin/assets/images/auto_scheduler.png" alt="">
                            <h4><?php esc_html_e('Auto Scheduler', 'wpscp'); ?></h4>
                        </a>

                    </div>

                    <div class="wpsp_support_items">

                        <a href="https://wpdeveloper.net/docs/wp-scheduled-posts/how-does-manual-scheduler-work/" target="__blank">
                            
                            <img src="<?php echo plugins_url(); ?>/wp-scheduled-posts/admin/assets/images/manual_scheduler.png" alt="">
                            <h4><?php esc_html_e('Manual Scheduler', 'wpscp'); ?></h4>
                        </a>
                    </div>

                    <div class="wpsp_support_items">
                        <a href="https://wpdeveloper.net/docs/wp-scheduled-posts/how-to-handle-the-missed-schedule-error-using-wp-scheduled-post/" target="__blank">
                            <img src="<?php echo plugins_url(); ?>/wp-scheduled-posts/admin/assets/images/manual_scheduler_handler.png" alt="">
                            <h4><?php esc_html_e('Missed Schedule Handler', 'wpscp'); ?></h4>
                        </a>
                    </div>

                    <div class="wpsp_support_items">
                        <a href="https://wpdeveloper.net/support/" target="__blank">
                            <img src="<?php echo plugins_url(); ?>/wp-scheduled-posts/admin/assets/images/premium_support_care.png" alt="">
                            <h4><?php esc_html_e('Premium Support', 'wpscp'); ?></h4>
                            
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
    <!-- Instruction Section -->
    <div class="instruction_wrapper">
        <div class="instruction_item">
            <div class="instruction_item_top">
                <div class="instruction_log">
                    <img src="<?php echo plugins_url(); ?>/wp-scheduled-posts/admin/assets/images/documentation.png" alt="Documentation">
                </div>
                <h3 class="instruction_label"><?php esc_html_e('Documentation', 'wpscp'); ?></h3>
            </div>
            <p><?php esc_html_e('Get started spending some time with the documentation to get familiar with WP Scheduled Posts. Build awesome websites for you or your clients with ease.', 'wpscp'); ?></p>
            <a href="https://wpdeveloper.net/docs/wp-scheduled-posts/?utm_medium=admin&utm_source=wp.org&utm_term=wpsp" rel="nofollow" class="instructin_btn"><?php esc_html_e('Documentation', 'wpscp'); ?></a>
        </div>

        <div class="instruction_item">
            <div class="instruction_item_top">
                <div class="instruction_log">
                    <img src="<?php echo plugins_url(); ?>/wp-scheduled-posts/admin/assets/images/contribute.png" alt="Contribute">
                </div>
                <h3 class="instruction_label"><?php esc_html_e('Contribute to WP Scheduled Posts', 'wpscp'); ?></h3>
            </div>
            <p><?php esc_html_e('You can contribute to make WP Scheduled Posts better reporting bugs, creating issues, pull requests at Github.', 'wpscp'); ?></p>
            <a href="https://github.com/WPDevelopers/wp-scheduled-posts/issues/new" rel="nofollow" class="instructin_btn"><?php esc_html_e('Report A Bug', 'wpscp'); ?></a>
        </div>

        <div class="instruction_item">
            <div class="instruction_item_top">
                <div class="instruction_log">
                    <img src="<?php echo plugins_url(); ?>/wp-scheduled-posts/admin/assets/images/chat.png" alt="Chat">
                </div>
                <h3 class="instruction_label"><?php esc_html_e('Need Help?', 'wpscp'); ?></h3>
            </div>
            <p><?php esc_html_e('Stuck with something? Get help from the community WPDeveloper Forum or Facebook Community. In case of emergency, initiate live chat at WP Scheduled Posts website.', 'wpscp'); ?></p>
            <a href="https://wpdeveloper.net/support/" rel="nofollow" class="instructin_btn"><?php esc_html_e('Get Support', 'wpscp'); ?></a>
        </div>

        <div class="instruction_item">
            <div class="instruction_item_top">
                <div class="instruction_log">
                    <img src="<?php echo plugins_url(); ?>/wp-scheduled-posts/admin/assets/images/love.png" alt="Love">
                </div>
                <h3 class="instruction_label"><?php esc_html_e('Show your Love', 'wpscp'); ?></h3>
            </div>
            <p><?php esc_html_e('We love to have you in WP Scheduled Posts family. We are making it more awesome everyday.', 'wpscp'); ?></p>
            <a href="https://wordpress.org/support/plugin/wp-scheduled-posts/reviews/?rate=5#new-post" rel="nofollow" class="instructin_btn"><?php esc_html_e('Leave a Review', 'wpscp'); ?></a>
        </div>
    </div>
</div>