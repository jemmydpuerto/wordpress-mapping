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
				
				<style type="text/css">
			      html { height: 100% }
			      body { height: 100%; margin: 0; padding: 0 }
			      #map-canvas { height: 100% }
			    </style>
			    <script type="text/javascript"
			      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRErrKyC1GbuTlerdBY3X3ykv_WrMqLRM&sensor=false&libraries=places">
			    </script>
			    <script type="text/javascript">

			   		var geocoder = new google.maps.Geocoder(), map = null, infowindow = null;

			      function initialize() {
			      	var centerLoc = new google.maps.LatLng(-33.8665433, 151.1956316);
			        var mapOptions = {
			          center: centerLoc,
			          zoom: 15
			        };
			        map = new google.maps.Map(document.getElementById("map-canvas"),
			            mapOptions);

			          var request = {
					    location: centerLoc,
					    radius: 1000,
					    types: ['store']
					  };
					  infowindow = new google.maps.InfoWindow();
					  var service = new google.maps.places.PlacesService(map);
					  service.nearbySearch(request, callback);
			      }

			      function callback(results, status) {
				  if (status == google.maps.places.PlacesServiceStatus.OK) {
				    for (var i = 0; i < results.length; i++) {
				      createMarker(results[i]);
				    }
				  }
				}

				function createMarker(place) {
				  var placeLoc = place.geometry.location;
				  var marker = new google.maps.Marker({
				    map: map,
				    position: place.geometry.location
				  });

				  google.maps.event.addListener(marker, 'click', function() {
				    infowindow.setContent(place.name);
				    infowindow.open(map, this);
				  });
				}

			      google.maps.event.addDomListener(window, 'load', initialize);
			    </script>


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