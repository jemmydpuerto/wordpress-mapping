<?php
	
	$current_options = get_option( 'busiprof_theme_options' );
	if(isset($_POST['busiprof_settings_save_2']))
	{		
	if($_POST['busiprof_settings_save_2'] == 1) 
	{
		if ( empty($_POST) || !wp_verify_nonce($_POST['busiprof_gernalsetting_nonce_customization'],'busiprof_customization_nonce_gernalsetting') )
		{
			print 'Sorry, your nonce did not verify.';
			exit;
		}
		else  
		{
			$current_options['home_project_heading_one'] = sanitize_text_field($_POST['home_project_heading_one']);
			$current_options['home_project_heading_two'] = sanitize_text_field($_POST['home_project_heading_two']);
			$current_options['project_tagline'] = sanitize_text_field($_POST['project_tagline']);	
				
			$current_options['project_title_one'] = sanitize_text_field($_POST['project_title_one']);
			$current_options['project_thumb_one'] = sanitize_text_field($_POST['project_thumb_one']);
			$current_options['project_text_one'] = sanitize_text_field($_POST['project_text_one']);
			$current_options['project_one_url'] = sanitize_text_field($_POST['project_one_url']);
			
			$current_options['project_title_two'] = sanitize_text_field($_POST['project_title_two']);
			$current_options['project_thumb_two'] = sanitize_text_field($_POST['project_thumb_two']);
			$current_options['project_text_two'] = sanitize_text_field($_POST['project_text_two']);
			$current_options['project_two_url'] = sanitize_text_field($_POST['project_two_url']);
			
			$current_options['project_title_three'] = sanitize_text_field($_POST['project_title_three']);
			$current_options['project_thumb_three'] = sanitize_text_field($_POST['project_thumb_three']);
			$current_options['project_text_three'] = sanitize_text_field($_POST['project_text_three']);
			$current_options['project_three_url'] = sanitize_text_field($_POST['project_three_url']);
			
			$current_options['project_title_four'] = sanitize_text_field($_POST['project_title_four']);
			$current_options['project_thumb_four'] = sanitize_text_field($_POST['project_thumb_four']);
			$current_options['project_text_four'] = sanitize_text_field($_POST['project_text_four']);
			$current_options['project_four_url'] = sanitize_text_field($_POST['project_four_url']);			
			
			update_option('busiprof_theme_options' , stripslashes_deep($current_options));
		}
     }
	if($_POST['busiprof_settings_save_2'] == 2) 
	 {
		do_action('Busiprof_restore_data', '2');		
	 }
 }
 
 
?>
<form method="post" action = ""  id="theme_options_home_2">
	<?php wp_nonce_field('busiprof_customization_nonce_gernalsetting','busiprof_gernalsetting_nonce_customization'); ?>
	<div class="postbox" id="home_page_project_1">
		<div title="Click to toggle" class="handlediv"><br></div>		
		<h3 class="hndle"><span><?php _e('Recent Projects','busi_prof');?><span class="postbox-title-action">
		</h3>
		<div class="inside">
			<p><h4 class="heading"><?php _e('Home Project Heading One','busi_prof');?></h4>
				<input class="inputwidth" type="text" value="<?php if($current_options['home_project_heading_one']!='') { echo esc_attr($current_options['home_project_heading_one']); } ?>" id="home_project_heading_one" name="home_project_heading_one" size="36" />
				<span class="icon help">
					<span class="tooltip"><?php  _e('Enter home project heading one','busi_prof');?></span></span>
				</span>				
			</p>
			<p><h4 class="heading"><?php _e('Home Project Heading Two','busi_prof');?></h4>
				<input class="inputwidth" type="text" value="<?php if($current_options['home_project_heading_two']!='') { echo esc_attr($current_options['home_project_heading_two']); } ?>" id="home_project_heading_two" name="home_project_heading_two" size="36" />
				<span class="icon help">
					<span class="tooltip"><?php  _e('Enter home project heading two','busi_prof');?></span></span>
				</span>
			</p>
			<p><h4 class="heading"><?php _e('Project Tagline','busi_prof');?></h4>
				<textarea rows="5" cols="75" name="project_tagline" id="project_tagline"><?php if($current_options['project_tagline']!='') { echo esc_attr($current_options['project_tagline']); } ?></textarea>
				<span class="icon help">
					<span class="tooltip"><?php  _e('Enter home project tagline','busi_prof');?></span></span>
				</span>
			</p>			
		</div>	
	</div>
	
	<div class="postbox" id="home_page_project_2">
		<div title="Click to toggle" class="handlediv"><br></div>		
		<h3 class="hndle"><span><?php _e('Projects One','busi_prof');?><span class="postbox-title-action">
		</h3>
		<div class="inside">
			<p><h4 class="heading"><?php _e('Projectt title one','busi_prof');?></h4>
				<input class="inputwidth" type="text" value="<?php if($current_options['project_title_one']!='') { echo esc_attr($current_options['project_title_one']); } ?>" id="project_title_one" name="project_title_one" size="36" />
				<span class="icon help">
					<span class="tooltip"><?php  _e('Enter home project title one','busi_prof');?></span></span>
				</span>
			</p>
			<p><h4 class="heading"><?php _e('Project thumb one','busi_prof');?></h4>
				<input class="inputwidth" type="text" value="<?php if($current_options['project_thumb_one']!='') { echo esc_attr($current_options['project_thumb_one']); } ?>" id="project_thumb_one" name="project_thumb_one" size="36" />
				<input  type="button" id="upload_button" value="Select Image" class="upload_image_button"  />
				<span class="icon help">
					<span class="tooltip"><?php  _e('Enter home project thumb one 495 x 265','busi_prof');?></span></span>
				</span>
			</p>
			<p><h4 class="heading"><?php _e('Project text ','busi_prof');?></h4>
				<textarea rows="5" cols="75" name="project_text_one" id="project_text_one"><?php if($current_options['project_text_one']!='') { echo esc_attr($current_options['project_text_one']); } ?></textarea>
				<span class="icon help">
					<span class="tooltip"><?php  _e('Enter project description','busi_prof');?></span></span>
				</span>
			</p>
			<input class="inputwidth" type="hidden" value="<?php if($current_options['project_one_url']!='') { echo esc_attr($current_options['project_one_url']); } ?>" id="project_one_url" name="project_one_url" size="36" />
		</div>	
	</div>
	
	<div class="postbox" id="home_page_project_3">
		<div title="Click to toggle" class="handlediv"><br></div>		
		<h3 class="hndle"><span><?php _e('Projects Two','busi_prof');?><span class="postbox-title-action">
		</h3>
		<div class="inside">
			<p><h4 class="heading"><?php _e('Projectt title two','busi_prof');?></h4>
				<input class="inputwidth" type="text" value="<?php if($current_options['project_title_two']!='') { echo esc_attr($current_options['project_title_two']); } ?>" id="project_title_two" name="project_title_two" size="36" />
				<span class="icon help">
					<span class="tooltip"><?php  _e('Enter project title','busi_prof');?></span></span>
				</span>
			</p>
			<p><h4 class="heading"><?php _e('Project thumb two','busi_prof');?></h4>
				<input class="inputwidth" type="text" value="<?php if($current_options['project_thumb_two']!='') { echo esc_attr($current_options['project_thumb_two']); } ?>" id="project_thumb_two" name="project_thumb_two" size="36" />
				<input  type="button" id="upload_button" value="Select Image" class="upload_image_button"  />
				<span class="icon help">
					<span class="tooltip"><?php  _e('Enter project thumb 495 X 265','busi_prof');?></span></span>
				</span>
			</p>
			<p><h4 class="heading"><?php _e('Project text ','busi_prof');?></h4>
				<textarea rows="5" cols="75" name="project_text_two" id="project_text_two"><?php if($current_options['project_text_two']!='') { echo esc_attr($current_options['project_text_two']); } ?></textarea>
				<span class="icon help">
					<span class="tooltip"><?php  _e('Enter description','busi_prof');?></span></span>
				</span>
			</p>
			<input class="inputwidth" type="hidden" value="<?php if($current_options['project_two_url']!='') { echo esc_attr($current_options['project_two_url']); } ?>" id="project_two_url" name="project_two_url" size="36" />
			<!--<p><h4 class="heading"><?php _e('Project Tagline','busi_prof');?></h4>
				<input class="inputwidth" type="text" value="<?php if($current_options['project_two_url']!='') { echo esc_attr($current_options['project_two_url']); } ?>" id="project_two_url" name="project_two_url" size="36" />
				<span id="explaincolor"><?php  _e('Enter project teo url','busi_prof');?>.</span>				
			</p> -->
		</div>	
	</div>
	
	<div class="postbox" id="home_page_project_4">
		<div title="Click to toggle" class="handlediv"><br></div>		
		<h3 class="hndle"><span><?php _e('Projects Three','busi_prof');?><span class="postbox-title-action">
		</h3>
		<div class="inside">
			<p><h4 class="heading"><?php _e('Projectt title three','busi_prof');?></h4>
				<input class="inputwidth" type="text" value="<?php if($current_options['project_title_three']!='') { echo esc_attr($current_options['project_title_three']); } ?>" id="project_title_three" name="project_title_three" size="36" />
				<span class="icon help">
					<span class="tooltip"><?php  _e('Enter project title','busi_prof');?></span></span>
				</span>
			</p>
			<p><h4 class="heading"><?php _e('Project thumb three','busi_prof');?></h4>
				<input class="inputwidth" type="text" value="<?php if($current_options['project_thumb_three']!='') { echo esc_attr($current_options['project_thumb_three']); } ?>" id="project_thumb_three" name="project_thumb_three" size="36" />
				<input  type="button" id="upload_button" value="Select Image" class="upload_image_button"  />
				<span class="icon help">
					<span class="tooltip"><?php  _e('Enter project thumb 495 x 265','busi_prof');?></span></span>
				</span>
			</p>
			<p><h4 class="heading"><?php _e('Project text ','busi_prof');?></h4>
				<textarea rows="5" cols="75" name="project_text_three" id="project_text_three"><?php if($current_options['project_text_three']!='') { echo esc_attr($current_options['project_text_three']); } ?></textarea>
				<span class="icon help">
					<span class="tooltip"><?php  _e('Enter project description','busi_prof');?></span></span>
				</span>
			</p>
			<input class="inputwidth" type="hidden" value="<?php if($current_options['project_three_url']!='') { echo esc_attr($current_options['project_three_url']); } ?>" id="project_three_url" name="project_three_url" size="36" />
			<!--<p><h4 class="heading"><?php _e('Project Tagline','busi_prof');?></h4>
				<input class="inputwidth" type="text" value="<?php if($current_options['project_three_url']!='') { echo esc_attr($current_options['project_three_url']); } ?>" id="project_three_url" name="project_three_url" size="36" />
				<span id="explaincolor"><?php  _e('Enter project teo url','busi_prof');?>.</span>				
			</p> -->
		</div>	
	</div>
	
	<div class="postbox" id="home_page_project_5">
		<div title="Click to toggle" class="handlediv"><br></div>		
		<h3 class="hndle"><span><?php _e('Projects Four','busi_prof');?><span class="postbox-title-action">
		</h3>
		<div class="inside">
			<p><h4 class="heading"><?php _e('Projectt title four','busi_prof');?></h4>
				<input class="inputwidth" type="text" value="<?php if($current_options['project_title_four']!='') { echo esc_attr($current_options['project_title_four']); } ?>" id="project_title_four" name="project_title_four" size="36" />
				<span class="icon help">
					<span class="tooltip"><?php  _e('Enter project title','busi_prof');?></span></span>
				</span>
			</p>
			<p><h4 class="heading"><?php _e('Project thumb four','busi_prof');?></h4>
				<input class="inputwidth" type="text" value="<?php if($current_options['project_thumb_four']!='') { echo esc_attr($current_options['project_thumb_four']); } ?>" id="project_thumb_four" name="project_thumb_four" size="36" />
				<input  type="button" id="upload_button" value="Select Image" class="upload_image_button"  />
				<span class="icon help">
					<span class="tooltip"><?php  _e('Enter project thumb 495 x 262','busi_prof');?></span></span>
				</span>
			</p>
			<p><h4 class="heading"><?php _e('Project text ','busi_prof');?></h4>
				<textarea rows="5" cols="75" name="project_text_four" id="project_text_four"><?php if($current_options['project_text_four']!='') { echo esc_attr($current_options['project_text_four']); } ?></textarea>
				<span class="icon help">
					<span class="tooltip"><?php  _e('Enter project description','busi_prof');?></span></span>
				</span>
				
			</p>
			<input class="inputwidth" type="hidden" value="<?php if($current_options['project_four_url']!='') { echo esc_attr($current_options['project_four_url']); } ?>" id="project_four_url" name="project_four_url" size="36" />
			<!--<p><h4 class="heading"><?php _e('Project Tagline','busi_prof');?></h4>
				<input class="inputwidth" type="text" value="<?php if($current_options['project_four_url']!='') { echo esc_attr($current_options['project_four_url']); } ?>" id="project_four_url" name="project_four_url" size="36" />
				<span id="explaincolor"><?php  _e('Enter project teo url','busi_prof');?>.</span>				
			</p> -->
		</div>	
	</div>	
<!---DATA SAVE------>
    <div id="busiprof_optionsframework-submit">         
		<input type="hidden" value="1" id="busiprof_settings_save_2" name="busiprof_settings_save_2" />
		<input type="button" class="button-primary"  value= "<?php _e('Save Changes', 'busi_prof');?>" onclick="datasave_home('2')"/>									
		<input type="button" class="reset-button button-secondary"  value="<?php _e('Restore Defaults','busi_prof');?>" onclick="reset_data_home('2')" />
	</div>
</form>