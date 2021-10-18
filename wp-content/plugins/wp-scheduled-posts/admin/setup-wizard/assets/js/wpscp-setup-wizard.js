jQuery(document).ready(function ($) {
    // quick setup wizard tab handle
    if(jQuery('.wpscp-setup-wizard').length){
        wpscpQuickSetupTabs();
    }
    function wpscpQuickSetupTabs(){
        var skipEmailStep = false;
        // tab click handler
        jQuery('#wpscp-prev-option').on('click', function(e){
            e.preventDefault();
            wpscpQswNextPrev(-1);
            wpscpQuickSetupWizardTabTracking(-1);
        });
        jQuery('#wpscp-next-option').on('click', function(e){
            e.preventDefault();
            wpscpQswNextPrev(1);
            if(wpscpQswValidateForm()){
                if( wpscpQuickSetupGetTrackNumber() === 0 ) {
                    wpscpQswOptinSubmit();
                }
                wpscpQuickSetupWizardTabTracking(1);
            }
        });
        jQuery('#wpscpqswemailskipbutton').on('click', function(e){
            e.preventDefault();
            skipEmailStep = true;
            wpscpQswNextPrev(1);
            wpscpQuickSetupWizardTabTracking(1);
        });

        var currentTab = wpscpQuickSetupGetTrackNumber(); // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab
        showTabNav(currentTab); // Display the current tab Nav
        function showTab(n) {
            // This function will display the specified tab of the form...
            var tabList = jQuery(".tab-content"); 
            for(i = 0; i <= tabList.length; i++ ){
                if(i === n){
                    jQuery(tabList[i]).addClass('active');
                } else {
                    jQuery(tabList[i]).removeClass('active');
                }
            }
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("wpscp-prev-option").style.display = "none";
                jQuery('.bottom-notice-left').show();
                jQuery('#wpscpqswemailskipbutton').show();
            } else {
                document.getElementById("wpscp-prev-option").style.display = "inline";
                jQuery('.bottom-notice-left').hide();
                jQuery('#wpscpqswemailskipbutton').hide();
            }
            if (n == (tabList.length - 1)) {
                document.getElementById("wpscp-next-option").innerHTML = "Submit";
                return false;
            } else {
                document.getElementById("wpscp-next-option").innerHTML = "Next";
            }
        }
        function showTabNav(n){
            var tabNavList = jQuery('.nav-item');
            for(i = 0; i <= tabNavList.length; i++ ){
                if(i <= n){
                    jQuery(tabNavList[i]).addClass('tab-active');
                }else {
                    if(jQuery(tabNavList[i]).hasClass('tab-active')){
                        jQuery(tabNavList[i]).removeClass('tab-active');
                    }
                }
            }
        }

        function wpscpQswNextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab-content"); 
           
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !wpscpQswValidateForm() && !skipEmailStep) return false;

            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            if(currentTab < x.length){
                // Otherwise, display the correct tab:
                showTab(currentTab);
                // display tab nav
                showTabNav(currentTab);
                 // ajax call after false
                 wpscpQswOptionSubmit();
            } else {
                // ajax call after false
                wpscpQswOptionSubmit();
                // pro option saved
                if (jQuery('.autoScheduler').length > 0 && jQuery('.manualScheduler').length > 0) { 
                    wpscpProManualAutoScheduledOptionSaved();
                }
                swal({
                    title: "Good job!",
                    text: "Setup is Complete.",
                    icon: "success",
                }).then(function() {
                    window.location = "admin.php?page=wp-scheduled-posts";
                });
                currentTab = ( x.length - 1);
                wpscpQuickSetupWizardTabTracking(-1);
            }
        }

        function wpscpQswValidateForm() {
            var valid = true;
            var requiredField = document.getElementById('wpscp_user_email_address');
            if(requiredField.value === "" || wpscpQswValidateEmail(requiredField.value) !== true){
                jQuery('#wpscp_user_email_address').addClass('invalid');
                valid = false;
            }
            return valid; 
        }
        function wpscpQswValidateEmail(email) {
            var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(String(email).toLowerCase());
        }
    }

    // Quick Setup Wizard Save
    function wpscpQswOptionSubmit(){
        var ajaxnonce  = $('.wpscp-setup-wizard input[name="wpscpqswnonce"]').val();
        var show_dashboard_widget  = $('.wpscp-setup-wizard input[name="show_dashboard_widget"]').attr("checked") ? 1 : 0;
        var show_in_front_end_adminbar  = $('.wpscp-setup-wizard input[name="show_in_front_end_adminbar"]').attr("checked") ? 1 : 0;
        var show_in_adminbar  = $('.wpscp-setup-wizard input[name="show_in_adminbar"]').attr("checked") ? 1 : 0;
        var prevent_future_post  = $('.wpscp-setup-wizard input[name="prevent_future_post"]').attr("checked") ? 1 : 0;
        // multiselect
        var allow_post_types  = wpscp_select_box_get_value('#allow_post_types');
        var allow_categories  = wpscp_select_box_get_value('#allow_categories');
        var allow_user_role  = wpscp_select_box_get_value('#allow_user_role');
        // indevisual option field data passing
        var autoScheduler  = $('.wpscp-setup-wizard input#autoScheduler').attr("checked") ? 'ok' : 0;
        var manualScheduler  = $('.wpscp-setup-wizard input#manualScheduler').attr("checked") ? 'ok' : 0;
        // missscheduled
        var missscheduled = $('#missscheduled').prop("checked") == true ? 1 : 0;
        // social integation - twitter
        var tw_integration_status  = $('.wpscp-setup-wizard input[name="wpscp_pro_twitter_integration_status"]').attr("checked") ? 'on' : '';
        var tw_consumer_key = $('.wpscp-setup-wizard input[name="tw_consumer_key"]').val();
        var tw_consumer_sec = $('.wpscp-setup-wizard input[name="tw_consumer_sec"]').val();
        var tw_access_key = $('.wpscp-setup-wizard input[name="tw_access_key"]').val();
        var tw_access_sec = $('.wpscp-setup-wizard input[name="tw_access_sec"]').val();
        
        // facebook
        var fb_integration_status  = $('.wpscp-setup-wizard input[name="wpscp_pro_facebook_integration_status"]').attr("checked") ? 'on' : '';
        var fb_app_id = $('.wpscp-setup-wizard input[name="fb_app_id"]').val();
        var fb_app_secret = $('.wpscp-setup-wizard input[name="fb_app_secret"]').val();
        var wpscp_pro_app_type = $('.wpscp-setup-wizard input[name="wpscp_pro_app_type"]:checked').val();
        var fb_access_token = $('#fb_access_token').val();
       
        var data = {
			'action': 'quick_setup_wizard_action',
			'security': ajaxnonce,
			'show_dashboard_widget': show_dashboard_widget,
			'show_in_front_end_adminbar': show_in_front_end_adminbar,
			'show_in_adminbar': show_in_adminbar,
			'prevent_future_post': prevent_future_post,
			'allow_post_types': allow_post_types,
			'allow_categories': allow_categories,
            'allow_user_role': allow_user_role,
            // indevisual option field data passing
            'autoScheduler': autoScheduler,
            'manualScheduler': manualScheduler,
            'missscheduled': missscheduled,
            // twitter
            'tw_integration_status' : tw_integration_status,
            'tw_consumer_key' : tw_consumer_key,
            'tw_consumer_sec' : tw_consumer_sec,
            'tw_access_key' : tw_access_key,
            'tw_access_sec' : tw_access_sec,
            // facebook
            'fb_integration_status' : fb_integration_status,
            'fb_app_id' : fb_app_id,
            'fb_app_secret' : fb_app_secret,
            'wpscp_pro_app_type' : wpscp_pro_app_type,
            'fb_access_token' : fb_access_token
		};
		// since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
		jQuery.post(ajaxurl, data, function(response) {});
        
   };

    function wpscpQswOptinSubmit(){
        var ajaxnonce  = $('.wpscp-setup-wizard input[name="wpscpqswnonce"]').val();
        var data = {
            "nonce" : ajaxnonce,
            'action': 'optin_wizard_action',
            "admin_email" : $('#wpscp_user_email_address').val(),
        };
        jQuery.post(ajaxurl, data, function(response) {});
    }

   /**
    * Get Value From Select Field
    * @param {id} selector 
    */
   function wpscp_select_box_get_value(selector){
        var selected=[];
        $( selector + ' :selected').each(function(){
            selected.push($(this).text());
        });
        return selected;
   }

   /**
    * Auto Schedule and Manual Schedule Toggle Swithing
    */
   function wpscp_quick_setup_auto_manual_toggle_schedule(){
       var autoScheduler = ".wpscp-setup-wizard input#autoScheduler";
       var manualScheduler = ".wpscp-setup-wizard input#manualScheduler";
       toggleControl();
       function toggleControl(){
            if($(autoScheduler).is(':checked') === true){ // auto scheduler
                $('#toggleSwithElementContent .manualScheduler').hide();
                $('#toggleSwithElementContent .autoScheduler').show();
            }else if($(manualScheduler).is(':checked') === true) {
                $('#toggleSwithElementContent .autoScheduler').hide();
                $('#toggleSwithElementContent .manualScheduler').show();
            }
       }
        $(autoScheduler).add(manualScheduler).click(function(){
            toggleControl();
        });
   }
   wpscp_quick_setup_auto_manual_toggle_schedule();

   // popup modal showing for error message
   $('.wpscp-pro-feature-checkbox label').on('click', function(){
        var premium_content = document.createElement("p");
        var premium_anchor = document.createElement("a");

        premium_anchor.setAttribute('href', 'https://wpdeveloper.net/in/wp-scheduled-posts-pro');
        premium_anchor.innerText = 'Premium';
        premium_anchor.style.color = 'red';
        var pro_label = $(this).find('.nx-pro-label');
        if (pro_label.hasClass('has-to-update')) {
            premium_anchor.innerText = 'Latest Pro v' + pro_label.text().toString().replace(/[ >=<]/g, '');
        }
        premium_content.innerHTML = 'You need to upgrade to the <strong>' + premium_anchor.outerHTML + ' </strong> Version to use this module.';

        swal({
            title: "Opps...",
            content: premium_content,
            icon: "warning",
            buttons: [false, "Close"],
            dangerMode: true,
        });
   });

    //  select2
    jQuery('.wpscp-setup-wizard select').select2();   

    /**
     * quick setup wizard tab tracking
     */
    function wpscpQuickSetupWizardTabTracking(tabNumber){
        var allTabs = jQuery('.wpscp-tabnav-wrap ul.tab-nav li.nav-item');
        var existing = localStorage.getItem('wpscpQswTabNumberTracking');
        existing = parseInt(existing) ? parseInt(existing) : 0;
        if(parseInt(existing) < allTabs.length){
            existing = existing + tabNumber;
            localStorage.setItem('wpscpQswTabNumberTracking', existing);
        } else if(parseInt(existing) >= allTabs.length) {
            localStorage.setItem('wpscpQswTabNumberTracking', allTabs.length - 1);
        }
        return parseInt(existing);
    }
    /***
     * Get Current Number
     */
    function wpscpQuickSetupGetTrackNumber(){
        var oldNumber = localStorage.getItem('wpscpQswTabNumberTracking');
        var allTabs = jQuery('.wpscp-tabnav-wrap ul.tab-nav li.nav-item');
        if(parseInt(oldNumber) >= allTabs.length) {
            localStorage.setItem('wpscpQswTabNumberTracking', allTabs.length - 1);
        }
        return (oldNumber ? parseInt(oldNumber) : 0);
    }

    // email input field length checking
    jQuery('#wpscp_user_email_address').on('keyup', function(e){
        if($(this).val() !== ""){
            $(this).removeClass('invalid');
        }
    });

    // collect Toggle
    jQuery('#whatwecollectdata').on('click', function(){
        jQuery('p.whatwecollecttext').toggle();
    });

    function wpscpProManualAutoScheduledOptionSaved(){
		var pub_check = $('#autoScheduler').attr("checked") ? 'ok' : 0;
		var cal_check = $('#manualScheduler').attr("checked") ? 'ok' : 0;
		var wpsp_start = $('#wpsp_start').val();
		var wpsp_end = $('#wpsp_end').val();
		var wpsp_pts_0 = $('#wpsp_sunday').val();
		var wpsp_pts_1 = $('#wpsp_monday').val();
		var wpsp_pts_2 = $('#wpsp_tuesday').val();
		var wpsp_pts_3 = $('#wpsp_wednesday').val();
		var wpsp_pts_4 = $('#wpsp_thursday').val();
		var wpsp_pts_5 = $('#wpsp_friday').val();
		var wpsp_pts_6 = $('#wpsp_saturday').val();


		//on save manage scedule option data
		var datas = {
			'pub_check': pub_check,
			'cal_check': cal_check,
			'days': {
				'wpsp_pts_0': wpsp_pts_0,
				'wpsp_pts_1': wpsp_pts_1,
				'wpsp_pts_2': wpsp_pts_2,
				'wpsp_pts_3': wpsp_pts_3,
				'wpsp_pts_4': wpsp_pts_4,
				'wpsp_pts_5': wpsp_pts_5,
				'wpsp_pts_6': wpsp_pts_6
			},
			'start_time': wpsp_start,
			'end_time': wpsp_end,
		}
		var submit_datas = {
			action: 'auto_scheduled_option_saved',
			datas: datas
		}

		$.post(wpscp_pro_ajax_object.ajax_url, submit_datas, function(msg) {}, 'json');
	}
});

