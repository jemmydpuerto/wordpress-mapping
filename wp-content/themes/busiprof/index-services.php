<?php
		get_header();
		$current_options=get_option('busiprof_theme_options');
?>	<div class="container">
			<?php if($current_options['service_heading_one']!='') {?>
		<div class="services_top_mn">
				<h2><?php echo $current_options['service_heading_one'];  ?>
				<?php } ?>
				<?php if($current_options['service_heading_two']!='') {?>
				<span><?php echo $current_options['service_heading_two'] ?></span>
				<?php } ?>
				</h2>
				<?php if($current_options['service_tagline']!='') {?>
			<p>	<?php echo $current_options['service_tagline'] ?>
			</p><?php } ?>
		</div>
		<div class="row-fluid service_section">
			<div class="span3">
				<div class="services_cols_mn">	
				<?php if($current_options['service_icon_one']!='') {?>
				<span><img class="services_cols_mn_icon" alt="Web Design" src="<?php echo $current_options['service_icon_one'] ?>"></span>
				<?php } ?>	
				<?php if($current_options['service_title_one']!='') {?>
					<h2><?php echo $current_options['service_title_one'] ?></h2>
				<?php } ?>		
				<?php if($current_options['service_text_one']!='') {?>
					<p><?php echo $current_options['service_text_one'] ?></p>
					<?php } ?>	
				</div>
			</div>
			
			<div class="span3">
				<div class="services_cols_mn">	
				<?php if($current_options['service_icon_two']!='') {?>
				<span><img class="services_cols_mn_icon" alt="Web Design" src="<?php echo $current_options['service_icon_two'] ?>"></span>
				<?php } ?>	
				<?php if($current_options['service_title_two']!='') {?>
					<h2><?php echo $current_options['service_title_two']; ?></h2>
				<?php } ?>		
				<?php if($current_options['service_text_two']!='') {?>
					<p><?php echo $current_options['service_text_two'] ?></p>
					<?php } ?>	
				</div>
			</div>			
			<div class="span3">
				<div class="services_cols_mn">	
				<?php if($current_options['service_icon_three']!='') {?>
				<span><img class="services_cols_mn_icon" alt="Web Design" src="<?php echo $current_options['service_icon_three'] ?>"></span>
				<?php } ?>	
				<?php if($current_options['service_title_three']!='') {?>
					<h2><?php echo $current_options['service_title_three'] ?></h2>
				<?php } ?>		
				<?php if($current_options['service_text_three']!='') {?>
					<p><?php echo $current_options['service_text_three'] ?></p>
					<?php } ?>	
				</div>
			</div>			
			<div class="span3">
				<div class="services_cols_mn">	
				<?php if($current_options['service_icon_four']!='') {?>
				<span><img class="services_cols_mn_icon" alt="Web Design" src="<?php echo $current_options['service_icon_four'] ?>"></span>
				<?php } ?>	
				<?php if($current_options['service_title_four']!='') {?>
					<h2><?php echo $current_options['service_title_four'] ?></h2>
				<?php } ?>		
				<?php if($current_options['service_text_four']!='') {?>
					<p><?php echo $current_options['service_text_four'] ?></p>
					<?php } ?>	
				</div>
			</div>			
			<?php if($current_options['service_link_btn']!='') {?>
			<div class="services_more_btn">
					<a href="<?php echo $current_options['service_link_btn'] ?>">
					<?php } ?>	
					<?php if($current_options['service_button_value']!='') {?>
					<?php echo $current_options['service_button_value'] ?></a>
					<?php } ?>	
			</div>			
		</div>
	</div>