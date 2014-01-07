<?php
/*
 *Theme Name	: BusiProf
 * @file           banner-header.php
 * @package        Busiprof
 * @author         Priyanshu Mittal
 * @copyright      2013 Webriti
 * @license        license.txt
 * @filesource     wp-content/themes/Busiprof/banner-header.php
*/
	get_header();
	$current_options=get_option('busiprof_theme_options'); 
?>	<!-- Header top Slide -->
<div class="inner_top_mn">
	<div class="container">
		<div class="row-fluid about_space">
			<h2 class="about_head pull-left"><?php the_title(); ?><br /><span><?php bloginfo('description');?></span></h2>
			<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<div class="input-append search_head pull-right">				
					<input type="text"name="s" placeholder=<?php _e( 'Search', 'busi_prof' ); ?> class="search_input" id="appendedInputButton">
				</div>
			</form>
		</div>
	</div>
</div>			