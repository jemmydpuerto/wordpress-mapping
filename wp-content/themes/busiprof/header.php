<?php
/*
 * @file           header.php
 * @package        Busiprof
 * @author         Priyanshu Mittal
 * @copyright      2013 Webrit
 * @license        license.txt
 * @filesource     wp-content/themes/Busiprof/header.php
*/	
?>
<!--Header Starts-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=9">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">  
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>" charset="<?php bloginfo('charset'); ?>" />
		
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<?php 
				//get theme options here
				if(get_option('busiprof_theme_options')!='')
			
			{
				$busiprof_current_options=get_option('busiprof_theme_options');
			}
		 if($busiprof_current_options['upload_image_favicon']!=''){?>
				<link rel="shortcut icon" href="<?php  echo $busiprof_current_options['upload_image_favicon']; ?>" /> 
			<?php } ?>	
			
				<link rel="profile" href="http://gmpg.org/xfn/11" />
				<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
	
				<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
				<div class="container">
						<div class="navbar" id="busimenu">
								<div class="navbar-inner">
								<div class="container">
									<a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</a>
								
								
								<?php 	if($busiprof_current_options['upload_image']!='') { ?>
								
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand">
								<img src="<?php echo $busiprof_current_options['upload_image']; ?>"  alt="Logo" class="logo-img" />
								</a>
								 
								<?php   } else { ?>
									
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand">
								<img src="<?php echo get_template_directory_uri();?>/images/logo.png">
								</a>
								<?php } ?>
								<div class="nav-collapse collapse navbar-responsive-collapse">
								 <?php
											wp_nav_menu( array(  
												'theme_location' => 'primary',
												//'container'  => 'nav-collapse collapse navbar-inverse-collapse',
												'menu_class' => 'nav',
												'fallback_cb' => 'busiprof_fallback_page_menu',
												'walker' => new busiprof_nav_walker()
																)
														);
								?> 
								</div>			<!-- /.nav-collapse -->
								</div>
								</div><!-- /navbar-inner -->
						</div>
				</div>	