<?php get_header();		
	$current_options=get_option('busiprof_theme_options');		
?>
	<div class="services_mid_mn">
		<div class="container">
			<div class="services_top_mn">
			<?php if($current_options['home_project_heading_one']!='') {?>
				<h2><?php echo $current_options['home_project_heading_one'] ?>
			<?php } ?>
			<?php if($current_options['home_project_heading_two']!='') {?>
				<span> <?php echo $current_options['home_project_heading_two'] ?>
				<?php } ?>
				</span>
				</h2>
				<?php if($current_options['project_tagline']!='') {?>
				
				<p><?php echo  $current_options['project_tagline'] ?></p>
				<?php }  ?>
			</div>
			<div class="row-fluid">
			<div class="tab-content" id="myTabContent">			
			  <div id="all" class="tab-pane fade active in">
					<!---First Project Work---->
					<div class="row-fluid service_section">
					<div class="span3 rec_cols_mn">
					<?php if($current_options['project_one_url']!='') {?>
					<a href="<?php echo $current_options['project_one_url'] ?>">
					<?php } ?>
					<?php if($current_options['project_thumb_one']!='') {?>
					<img alt="" src="<?php echo $current_options['project_thumb_one']?>" class="project_feature_img" />
					<?php } ?></a>
						<?php if($current_options['project_one_url']!='') {?>
						<h3><a href="<?php echo $current_options['project_one_url'] ?>">
						<?php } ?>
					<?php if($current_options['project_title_one']!='') {?>
					<?php echo $current_options['project_title_one'] ?></a>
					<?php } ?>
					</h3>
					<?php if($current_options['project_text_one']!='') {?>
							<p><?php echo $current_options['project_text_one'] ?></p>
					<?php } ?>		
					</div>
					
					<!---Second Project Work---->
					<div class="span3 rec_cols_mn">
					<?php if($current_options['project_two_url']!='') {?>
					<a href="<?php echo $current_options['project_two_url'] ?>">
					<?php } ?>
					<?php if($current_options['project_thumb_two']!='') {?>
					<img alt="" src="<?php echo $current_options['project_thumb_two']?>" class="project_feature_img" />
					<?php } ?></a>
						<?php if($current_options['project_two_url']!='') {?>
						<h3><a href="<?php echo $current_options['project_two_url'] ?>">
						<?php } ?>
					<?php if($current_options['project_title_two']!='') {?>
					<?php echo $current_options['project_title_two'] ?></a>
					<?php } ?>
					</h3>
					<?php if($current_options['project_text_two']!='') {?>
							<p><?php echo $current_options['project_text_two'] ?></p>
					<?php } ?>		
					</div>
					<!---3rd Project Work---->
					<div class="span3 rec_cols_mn">
					<?php if($current_options['project_three_url']!='') {?>
					<a href="<?php echo $current_options['project_three_url'] ?>">
					<?php } ?>
					<?php if($current_options['project_thumb_three']!='') {?>
					<img alt="" src="<?php echo $current_options['project_thumb_three']?>" class="project_feature_img" />
					<?php } ?></a>
						<?php if($current_options['project_three_url']!='') {?>
						<h3><a href="<?php echo $current_options['project_three_url'] ?>">
						<?php } ?>
					<?php if($current_options['project_title_three']!='') {?>
					<?php echo $current_options['project_title_three'] ?></a>
					<?php } ?>
					</h3>
					<?php if($current_options['project_text_three']!='') {?>
							<p><?php echo $current_options['project_text_three'] ?></p>
					<?php } ?>		
					</div>
					<!---4th Project Work---->
					<div class="span3 rec_cols_mn">
					<?php if($current_options['project_four_url']!='') {?>
					<a href="<?php echo $current_options['project_four_url'] ?>">
					<?php } ?>
					<?php if($current_options['project_thumb_four']!='') {?>
					<img alt="" src="<?php echo $current_options['project_thumb_four']?>" class="project_feature_img" />
					<?php } ?></a>
						<?php if($current_options['project_four_url']!='') {?>
						<h3><a href="<?php echo $current_options['project_four_url'] ?>">
						<?php } ?>
					<?php if($current_options['project_title_four']!='') {?>
					<?php echo $current_options['project_title_four'] ?></a>
					<?php } ?>
					</h3>
					<?php if($current_options['project_text_four']!='') {?>
							<p><?php echo $current_options['project_text_four'] ?></p>
					<?php } ?>		
					</div>
					</div>
				</div>	
			</div>			
		</div>
	</div>		
</div>