<?php
/**
 * The Header for gump
 *
 * @package gump
 * @since gump 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="only">
<head>
<meta name="google-site-verification" content="7p6p0CiPNHdHTWLglCjFoxC7Kk0gCbeaieK8VOf8hv4" />
<meta charset="<?php bloginfo( 'charset' ); ?>">
<?php 
$Path=$_SERVER['REQUEST_URI'];
if( $Path == '/kazino/'){
    echo '
    <title>Обзор онлайн казино на реальные деньги. Отзывы и Зеркала.</title>
    <meta name="Description" content="Обзоры и отзывы игроков о самых популярных онлайн казино на деньги Рунета. Актуальные ссылки и зеркала." />
    <meta name="Keywords" content="онлайн казино, казино на реальные деньги, онлайн казино на деньги, интернет казино на реальные деньги" />
    ';
    }else{?>
    <title><?php wp_title( '|', true, 'right' );?></title>
  <?php    } ?>
    

	<?php wp_head(); ?>
	<script type="text/javascript" src="https://slot-ok.azurewebsites.net/wp-content/themes/gump/js/jquery-1.8.3.js"></script>
	<script type="text/javascript" src="https://slot-ok.azurewebsites.net/index.js"></script>
    <script type="text/javascript" src="https://slot-ok.azurewebsites.net/wp-content/themes/gump/js/fancybox/jquery-1.3.2.min.js"></script>
    <script type="text/javascript" src="https://slot-ok.azurewebsites.net/wp-content/themes/gump/js/fancybox/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="https://slot-ok.azurewebsites.net/wp-content/themes/gump/js/fancybox/jquery.fancybox-1.2.1.pack.js"></script>
    <script type="text/javascript" src="https://slot-ok.azurewebsites.net/wp-content/themes/gump/js/jcarousellite_1.0.1.min.js"></script>
    <script type="text/javascript" src="https://slot-ok.azurewebsites.net/wp-content/themes/gump/js/slider.js"></script>
    <link href="https://slot-ok.azurewebsites.net/wp-content/themes/gump/css/style.css" rel="stylesheet" type="text/css" />

<meta name="viewport" content="width=device-width, initial-scale=1" />
<link href="https://slot-ok.azurewebsites.net/wp-content/themes/gump/css/adaptive.css" rel="stylesheet" type="text/css" />	
</head>  
    
<body>
<div class="loader"></div>
<div id="body_bg">
    <div id="page-wrap">
        <div id="page">
        
            <div id="body">
            <a href="/"><div class="logos"></div></a>
                <div id="header">

                    
                    <div id="top_menu">
                    <!-- верхнее меню start -->
                    
                    <ul class="dropdown">
                                         
                    <?php $args = array(
                    	'theme_location' => 'top-menu',
                        'container' => 'false',
                        
                        'walker'=> new True_Walker_Nav_Menu()
                    );
                    wp_nav_menu( $args );
                      
                    ?>
                    </ul>
                    
                    </div>
                <!-- верхнее меню end -->
                
                <!-- залы меню start -->
                
                    <div id="zalu"></div>
                    <div id="zalu_top_bg"></div>
                    <div id="zalu_bg">
                        <div id="zalu_norm_w">
                            
                            
                            <?php if ( is_active_sidebar( 'sidebar-top' ) ) : ?>
                            	<?php dynamic_sidebar( 'sidebar-top' ); ?>
                            <?php endif; ?>        
                        </div>
                    </div>
                    <div id="zalu_but_bg"></div>
                <!-- залы меню end -->
                
                </div>
                <div id="content">
                
                    <div id="content-block">                   
                    
<?php if($_SERVER['REQUEST_URI'] != '/'){?>        

<!-- breadcrumbs -->
<div id="cont_xleb_kroski">
<?php if(function_exists('bcn_display')) bcn_display(); ?>
</div>
<!-- .breadcrumbs -->
<?php } ?>

