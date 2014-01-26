<?php get_header();?>
<?php $current_options=get_option('busiprof_theme_options'); ?>


<!---Slide heading---->
<?php if($current_options['slider_head_title']!='') {?>
<div class="header_top_slide">
	<button class = "btn pull-left btn-info" id = "findMe">Find me</button>

	<div class="container">
		

		<input type = "text" placeholder = "<?php echo SEARCH_TEXT ?>" id = "searchPlace" class = "typeahead">
		<!-- <input type="text" placeholder="countries" class="typeahead tt-query" autocomplete="off" spellcheck="false" style="position: relative; vertical-align: top; background-color: transparent;" dir="auto"> -->
</div>
		<?php //echo $current_options['slider_head_title'] ?>
	</div>
	<?php } ?>
</div>	

<?php if($current_options['slider_image']!='') {?>
<div class="main_slider" style = "height: 500px">
	<!-- <img class="slider_img busi_slider_image" src="<?php echo $current_options['slider_image']; ?>"> -->
	<?php } ?>
		<div class="place-list">
			<ul id = "places">
			</ul>
		</div>

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


</script>