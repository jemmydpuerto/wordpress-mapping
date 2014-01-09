<?php get_header();?>
<?php $current_options=get_option('busiprof_theme_options'); ?>


<!---Slide heading---->
<?php if($current_options['slider_head_title']!='') {?>
<div class="header_top_slide">
	<button class = "btn pull-left btn-info" id = "findMe">Find me</button>

	<div class="container">
		Search text place here...
		<?php //echo $current_options['slider_head_title'] ?>
	</div>
	<?php } ?>
</div>	
<!----/slide heading---->
<!-------Slide---------->
<?php if($current_options['slider_image']!='') {?>
<div class="main_slider" style = "height: 400px">
	<!-- <img class="slider_img busi_slider_image" src="<?php echo $current_options['slider_image']; ?>"> -->
	<?php } ?>
		<div id="map-canvas"/>
			<!--Caption Block---->

			<!-- <div class="row-fluid slider_desc">
				<div class="span5 offset7 slide_content">
				<?php if($current_options['caption_head']!='') {?>
				<h2><?php echo $current_options['caption_head'] ?></h2>
				<?php } else {?>
				<h2><?php _e("Busiprof With Responsive Design",'busi_prof') ?></h2>
				<?php } ?>
				<?php if($current_options['caption_text']!='') {?>
				<p><?php echo $current_options['caption_text'] ?></p>
				<?php } else { ?>
				<p><?php _e("We are a group of passionate designers and developers who really love to create awesome wordpress themes with amazing support and ....",'busi_prof') ?></p>
				<?php } ?>
				</div>
			</div> -->
</div>

<script type="text/javascript">
var $j = jQuery;

//(function($){

$j('#findMe').on('click',function(){

	get_location();
	//reverseGeocoding();

});


//})(jQuery);
//var 

function get_location() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(getLatLng);
  } else {
    // no native support; maybe try a fallback?
  }
}

function getLatLng(position) {

	//reverseGeocoding(position.coords.latitude, position.coords.longitude);
	var lat 	= parseFloat(position.coords.latitude);
    var lng 	= parseFloat(position.coords.longitude);
    var latlng 	= new google.maps.LatLng(lat,lng);

	map.setCenter(latlng);

	geoCodeIt(position.coords.latitude, position.coords.longitude);

}

function geoCodeIt( latitude, longitude ) {

    var lat = parseFloat(latitude);
    var lng = parseFloat(longitude);
    var latlng = new google.maps.LatLng(lat, lng);

	geocoder.geocode( { 'latLng': latlng }, function(results, status) {

	  if (status == google.maps.GeocoderStatus.OK) {

	  	console.log(results);
	    
	  	console.log(results[0].formatted_address);

	  } 
	});

}

function reverseGeocoding(latitude, longitude) {

	$j.ajax({
		url: 'http://maps.googleapis.com/maps/api/geocode/json?latlng= ' + latitude + ',' + longitude + '&sensor=true',
		dataType: 'json',
		success: function(response) {

			console.log(response);

		}
	});

}


</script>