<?php
/*
 * Theme Name	: BusiProf
 * Theme Core Functions and Codes
 * @file           functions.php
 * @package        Busiprof
 * @author         Priyanshu Mittal
 * @copyright      2013 Webriti
 * @license        license.txt
 * @filesource     wp-content/themes/Busiprof/functions.php
*/
define('WEBRITI_TEMPLATE_DIR',get_template_directory());
define('WEBRITI_THEME_FUNCTIONS_PATH',WEBRITI_TEMPLATE_DIR.'/functions');
/**Includes reqired resources here**/

	//Files for custom - defaults menus
	require( WEBRITI_THEME_FUNCTIONS_PATH. '/menu/busiprof_nav_walker.php' );
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/menu/default_menu_walker.php' );	
	
	require( WEBRITI_THEME_FUNCTIONS_PATH .'/resize_image/resize_image.php' );	
	require_once( WEBRITI_THEME_FUNCTIONS_PATH .'/commentbox/comment-function.php');
//content width
if ( ! isset( $content_width ) ) $content_width = 900;


//wp title tag starts here

function busiprof_head( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " ;

	return $title;
}
add_filter( 'wp_title', 'busiprof_head', 10, 2 );

//Scripts Enqueue here

function busiprof_scripts(){

	if ( is_singular() ) wp_enqueue_script( "comment-reply" );
	
	wp_enqueue_script('boot-business',get_template_directory_uri().'/js/menu/boot-business.js',array('jquery')); //Menu JS	
	wp_enqueue_script('bootstrap.min',get_template_directory_uri().'/js/menu/bootstrap.min.js'); //Responsive JS
	wp_enqueue_script('menu',get_template_directory_uri().'/js/menu/menu.js'); //Menu JS
	wp_enqueue_script('bootstrap',get_template_directory_uri().'/js/bootstrap.js'); //Responsive JS
	wp_enqueue_script('bootstrap-tab',get_template_directory_uri().'/js/bootstrap-tab.js'); 
	wp_enqueue_script('bootstrap-transition',get_template_directory_uri().'/js/bootstrap-transition.js');
	
	//CSS Links 	

	wp_enqueue_style('font', get_template_directory_uri().'/css/font/font.css');
	wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css');
	wp_enqueue_style('bootstrap-responsive', get_template_directory_uri().'/css/bootstrap-responsive.css');
	//wp_enqueue_style('docs',get_template_directory_uri().'/css/docs.css');	
}
add_action( 'wp_enqueue_scripts', 'busiprof_scripts' );
	
// Theme Setup /default data starts here
/** Tell WordPress to run busiprof_setup() when the 'after_setup_theme' hook is run. */
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * To override busiprof_setup() in a child theme, add your own busiprof_setup to your child theme's
 * functions.php file.
 *
 * @uses add_theme_support() To add support for post thumbnails and automatic feed links.
 * @uses register_nav_menus() To add support for navigation menus.
 * @uses add_custom_background() To add support for a custom background.
 * @uses add_editor_style() To style the visual editor.
 * @uses load_theme_textdomain() For translation/localization support.
 * @uses add_custom_image_header() To add support for a custom header.
 * @uses register_default_headers() To register the default custom header images provided with the theme.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 * @since BusiProf 1.0
 */
	global $resetno;
	add_action( 'after_setup_theme', 'busiprof_setup' ); 
	function busiprof_setup()
	{	// Load text domain for translation-ready
		load_theme_textdomain( 'busi_prof', get_template_directory() . '/functions/lang' );	
		
		add_theme_support( 'post-thumbnails' ); //supports featured image
		add_theme_support( 'automatic-feed-links' ); //feed links enabled
		add_theme_support( 'custom-header');
		add_theme_support( 'custom-background') ;
		do_action('busiprof_init');//load admin pannal file	
		
		// setup admin pannel defual data for index page
		$busiprof_theme_options=Theme_Setup_data(); 
		add_option('busiprof_theme_options',$busiprof_theme_options); 
		// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', __( 'Primary Menu', 'busi_prof' ) );
	}
	
	// load admin panal file
	add_action( 'busiprof_init', 'busiprof_load_files', 20 );
	function busiprof_load_files()
	{	
		require_once('theme_setup_data.php');
		require_once('functions/theme_options/theme_options.php');	// admin options panel		
	}
	
	// admin restore options page
	add_action('Busiprof_restore_data', 'Busiprof_restore_data_function', $resetno );		
	function Busiprof_restore_data_function($resetno)
	{	
		$busiprof_theme_options = Theme_Setup_data($resetno);
		update_option('busiprof_theme_options',$busiprof_theme_options);
		
	}	
		
add_action( 'widgets_init', 'busiprof_widgets_init');
function busiprof_widgets_init() {
/*sidebar*/
register_sidebar( array(
		'name' => __( ' Sidebar', 'busi_prof' ),
		'id' => 'sidebar-primary',
		'description' => __( 'The primary widget area', 'busi_prof' ),
		'before_widget' => '<div id="%1$s" class="widget">',
		'after_widget' => '</div><div class="sidebar_seprator"></div>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	) );

register_sidebar( array(
		'name' => __( 'First Footer Widget Area', 'busi_prof' ),
		'id' => 'first-footer-widget-area',
		'description' => __( 'The first footer widget area', 'busi_prof' ),
		'before_widget' => '<div id="%1$s" class="sidebar_widget">',
		'after_widget' => '</div><div class=""></div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Second Footer Widget Area', 'busi_prof' ),
		'id' => 'second-footer-widget-area',
		'description' => __( 'The second footer widget area', 'busi_prof' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Third Footer Widget Area', 'busi_prof' ),
		'id' => 'third-footer-widget-area',
		'description' => __( 'The third footer widget area', 'busi_prof' ),
		'before_widget' => '<divid="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	) );	
	
	register_sidebar( array(
		'name' => __( 'Fourth Footer Widget Area', 'busi_prof' ),
		'id' => 'fourth-footer-widget-area',
		'description' => __( 'The fourth footer widget area', 'busi_prof' ),
		'before_widget' => '<divid="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	) );
}	                     

?>