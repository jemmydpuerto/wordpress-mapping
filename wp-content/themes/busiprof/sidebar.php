<?php
/*
	*Theme Name	: BusiProf
	
 * @file           sidebar.php
 * @package        Busiprof
 * @author         Priyanshu Mittal
 * @copyright      2013 Webriti
 * @license        license.txt
 * @filesource     wp-content/themes/Busiprof/sidebar.php
*/
?><div class="span4 sidebar">
  <?php if ( !dynamic_sidebar('sidebar-primary') ) : ?>		
		<?php the_widget('WP_Widget_Archives'); ?>
		<?php the_widget('WP_Widget_Categories'); ?>
		<?php the_widget('WP_Widget_Meta'); ?>
	<?php endif;?>
</div>