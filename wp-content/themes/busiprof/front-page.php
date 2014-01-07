<?php
/*
 *Theme Name	: BusiProf
 * @file           front-page.php
 * @package        Busiprof
 * @author         Priyanshu Mittal
 * @copyright      2013 Webriti
 * @license        license.txt
 * @filesource     wp-content/themes/Busiprof/front-page.php
 *
 *					Template Name: Home
 */
$is_front_page = get_option('busiprof_theme_options');

if (  $is_front_page['front_page'] != 'yes' ) {
get_template_part('index');
}
else {	
		get_header();
		$current_options=get_option('busiprof_theme_options'); ?>

		<!---Slider Section of Index Page---->
		<?php get_template_part('index', 'slider') ;?>
		<!---Service Section of index Page---->
		<?php get_template_part('index', 'services') ;?>
		<!---Projects Section of index Page---->
		<?php get_template_part('index', 'projects') ;?>
		<?php get_template_part('index', 'testimonials') ;?>
		<!---footer Section of index Page---->
		<?php get_footer() ;
	} ?>