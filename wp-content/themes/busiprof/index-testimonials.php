<?php 
$current_options=get_option('busiprof_theme_options');
$template_uri=get_template_directory_uri(). '/images/default' ;
?>
<div class="container">		
	<div class="row">
		<div class="span6 testimonial_mn">
				<?php if($current_options['testimonials_title']!='') {?>
				<h2><?php echo $current_options['testimonials_title']; ?>
				<?php } ?><br><span><?php if($current_options['testimonials_text']!='') { echo $current_options['testimonials_text'];  } ?></span></h2>
				<div id="testimonial_mn_cols" class="media">
					<img src="<?php if($current_options['testimonials_image_one']!='') { echo $current_options['testimonials_image_one'];} ?>"  class="media-object img-circle pull-left recent_blog_thumb">
					<div class="media-body">
					<p><?php if($current_options['testimonials_text_one']!='') { echo $current_options['testimonials_text_one'];} ?></p>
					<a href="#"><?php if($current_options['testimonials_name_one']!='') { echo $current_options['testimonials_name_one'];} ?> <span>(<?php if($current_options['testimonials_designation_one']!='') { echo $current_options['testimonials_designation_one'];} ?>)</span></a>
					</div>
				</div>
				
				<div id="testimonial_mn_cols" class="media">
					<img src="<?php if($current_options['testimonials_image_two']!='') { echo $current_options['testimonials_image_two'];} ?>"  class="media-object img-circle pull-left recent_blog_thumb">
					<div class="media-body">
					<p><?php if($current_options['testimonials_text_two']!='') { echo $current_options['testimonials_text_two'];} ?></p>
					<a href="#"><?php if($current_options['testimonials_name_two']!='') { echo $current_options['testimonials_name_two'];} ?> <span>(<?php if($current_options['testimonials_designation_two']!='') { echo $current_options['testimonials_designation_two'];} ?>)</span></a>
					</div>
				</div>
		</div>
		<div class="span6 recent_blog">			
			<h2><?php if($current_options['recent_blog_title']!='') { echo $current_options['recent_blog_title'];} ?><br><span><?php if($current_options['recent_blog_description']!='') { echo $current_options['recent_blog_description'];} ?></span></h2>
			<div class="row">
				<?php	$args = array( 'numberposts' => '4' );
						$recent_posts = wp_get_recent_posts( $args );
						if($recent_posts)
						{ foreach( $recent_posts as $recent )
							{ ?><div class="span3">
										<div id="recent_blog_cols" class="media">
										<?php if(get_post_thumbnail_id($recent["ID"])!='') {?>
										<?php 	$defalt_arg=array('class'=>'media-object img-circle pull-left recent_blog_thumb');
												echo get_the_post_thumbnail($recent["ID"],'recent-blog-thumb', $defalt_arg); ?>
											<?php } else { ?>
											<img src="<?php echo $template_uri .'/testimonial.jpg'; ?>"  class="media-object img-circle pull-left recent_blog_thumb">
											<?php } ?>
											<div class="media-body">
											<p><?php echo '<a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a>'; ?></p>
											<span><?php echo date("M d. Y", strtotime($recent['post_modified'])); ?></span>
											</div>
										</div>
								</div>		
								<?php } } else { ?>
								<div class="span3">
									<div class="media-body">
									<p><?php _e("NO POST TO DISPLAY...",'busi_prof');?></p>
									</div>
								</div>
								<?php } ?>	
			</div>	
		</div>
	</div>			
</div>