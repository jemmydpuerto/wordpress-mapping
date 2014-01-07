<?php
/*
 * @file           theme_option.php
 * @package        Busiprof
 * @copyright      2013 Webriti
 * @license        license.txt
 * @filesource     wp-content/themes/Busiprof/functions/theme_options.php
*/	
?>
<?php
add_action('admin_menu', 'busi_admin_menu_pannel');  
function busi_admin_menu_pannel()
 {
	wp_enqueue_script( 'dashboard');	
	wp_enqueue_script( 'wpb_option_pannel', get_template_directory_uri() . '/functions/theme_options/js/busiprof_option_pannel.js',array('media-upload','thickbox'));
	wp_enqueue_script( 'bootstrap-modal', get_template_directory_uri() . '/functions/theme_options/js/bootstrap-modal.js');
	wp_enqueue_style('thickbox');	
	wp_enqueue_style( 'wpb_option_pannel', get_template_directory_uri() . '/functions/theme_options/css/busiprof_option_pannel.css' );
	wp_enqueue_style('busiprof-bootstrap',get_bloginfo('template_directory').'/functions/theme_options/css/assets/css/busiprof-bootstrap.css');
	$page=add_theme_page( 'theme', 'Option Panel', 'edit_theme_options', 'busi_prof', 'busiprof_option_panal_function' ); 
}
function busiprof_option_panal_function () 
{	
	require_once('css/tooltip_css.php');
	require_once('webr_options_pannel.php');
}
?>