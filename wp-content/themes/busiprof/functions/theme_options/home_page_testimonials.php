<?php
	
	$current_options = get_option( 'busiprof_theme_options' );
	if(isset($_POST['busiprof_settings_save_3']))
	{		
	if($_POST['busiprof_settings_save_3'] == 1) 
	{
		if ( empty($_POST) || !wp_verify_nonce($_POST['busiprof_gernalsetting_nonce_customization'],'busiprof_customization_nonce_gernalsetting') )
		{
			print 'Sorry, your nonce did not verify.';
			exit;
		}
		else  
		{
			$current_options['testimonials_title'] = sanitize_text_field($_POST['testimonials_title']);
			$current_options['testimonials_text'] = sanitize_text_field($_POST['testimonials_text']);
				
			$current_options['testimonials_image_one'] = sanitize_text_field($_POST['testimonials_image_one']);
			$current_options['testimonials_text_one'] = sanitize_text_field($_POST['testimonials_text_one']);
			$current_options['testimonials_name_one'] = sanitize_text_field($_POST['testimonials_name_one']);
			$current_options['testimonials_designation_one'] = sanitize_text_field($_POST['testimonials_designation_one']);
			
			$current_options['testimonials_image_two'] = sanitize_text_field($_POST['testimonials_image_two']);
			$current_options['testimonials_text_two'] = sanitize_text_field($_POST['testimonials_text_two']);
			$current_options['testimonials_name_two'] = sanitize_text_field($_POST['testimonials_name_two']);
			$current_options['testimonials_designation_two'] = sanitize_text_field($_POST['testimonials_designation_two']);
			
			$current_options['recent_blog_title'] = sanitize_text_field($_POST['recent_blog_title']);
			$current_options['recent_blog_description'] = sanitize_text_field($_POST['recent_blog_description']);
			
			update_option('busiprof_theme_options' ,stripslashes_deep($current_options));
		}
     }
	if($_POST['busiprof_settings_save_3'] == 2) 
	 {
		do_action('Busiprof_restore_data', '2');		
	 }
 }
 
 
?>
<form method="post" action = ""  id="theme_options_home_3">
	<?php wp_nonce_field('busiprof_customization_nonce_gernalsetting','busiprof_gernalsetting_nonce_customization'); ?>
	<div class="postbox" id="home_page_testimonials_1">
		<div title="Click to toggle" class="handlediv"><br></div>		
		<h3 class="hndle"><span><?php _e('Testimonials','busi_prof');?><span class="postbox-title-action">
		</h3>
		<div class="inside">
			<p><h4 class="heading"><?php _e('Testimonials title','busi_prof');?></h4>
				<input class="inputwidth" type="text" value="<?php if($current_options['testimonials_title']!='') { echo esc_attr($current_options['testimonials_title']); } ?>" id="testimonials_title" name="testimonials_title" size="36" />
				<span class="icon help">
					<span class="tooltip"><?php  _e('Enter testimonials title','busi_prof');?></span></span>
				</span>
			</p>
			<p><h4 class="heading"><?php _e('Testimonials description','busi_prof');?></h4>
				<textarea rows="5" cols="75" name="testimonials_text" id="testimonials_text"><?php if($current_options['testimonials_text']!='') { echo esc_attr($current_options['testimonials_text']); } ?></textarea>
				<span class="icon help">
					<span class="tooltip"><?php  _e('Enter testimonials description','busi_prof');?></span></span>
				</span>
			</p>		
		</div>	
	</div>
	
	<div class="postbox" id="home_page_testimonials_2">
		<div title="Click to toggle" class="handlediv"><br></div>		
		<h3 class="hndle"><span><?php _e('Testimonials One','busi_prof');?><span class="postbox-title-action">
		</h3>
		<div class="inside">
			<p><h4 class="heading"><?php _e('Testimonials Image','busi_prof');?></h4>
				<input class="inputwidth" type="text" value="<?php if($current_options['testimonials_image_one']!='') { echo esc_attr($current_options['testimonials_image_one']); } ?>" id="testimonials_image_one" name="testimonials_image_one" size="36" class="upload has-file"/>
				<input type="button" id="upload_button" value="Custom Logo" class="upload_image_button" class="upload_button" />
				<span class="icon help">
					<span class="tooltip"><?php  _e('Image must be in 60 X 250','busi_prof');?></span></span>
				</span>
				
			</p>
			<p><h4 class="heading"><?php _e('Testimonials text','busi_prof');?></h4>
				<textarea rows="5" cols="75" name="testimonials_text_one" id="testimonials_text_one"><?php if($current_options['testimonials_text_one']!='') { echo esc_attr($current_options['testimonials_text_one']); } ?></textarea>
				<span class="icon help">
					<span class="tooltip"><?php  _e('Enter testimominals','busi_prof');?></span></span>
				</span>
			</p>
			<p><h4 class="heading"><?php _e('Testimonials By','busi_prof');?></h4>
				<input class="inputwidth" type="text" value="<?php if($current_options['testimonials_name_one']!='') { echo esc_attr($current_options['testimonials_name_one']); } ?>" id="testimonials_name_one" name="testimonials_name_one" size="36" />
				<span class="icon help">
					<span class="tooltip"><?php  _e('Testimonials By','busi_prof');?></span></span>
				</span>
			</p>
			<p><h4 class="heading"><?php _e('Testimonials Author Designation','busi_prof');?></h4>
				<input class="inputwidth" type="text" value="<?php if($current_options['testimonials_designation_one']!='') { echo esc_attr($current_options['testimonials_designation_one']); } ?>" id="testimonials_designation_one" name="testimonials_designation_one" size="36" />
				<span class="icon help">
					<span class="tooltip"><?php  _e('Enter Testimonials designation','busi_prof');?></span></span>
				</span>
			</p>			
		</div>	
	</div>
	
	<div class="postbox" id="home_page_testimonials_3">
		<div title="Click to toggle" class="handlediv"><br></div>		
		<h3 class="hndle"><span><?php _e('Testimonials Two','busi_prof');?><span class="postbox-title-action">
		</h3>
		<div class="inside">
			<p><h4 class="heading"><?php _e('Testimonials Image','busi_prof');?></h4>
				<input class="inputwidth" type="text" value="<?php if($current_options['testimonials_image_two']!='') { echo esc_attr($current_options['testimonials_image_two']); } ?>" id="testimonials_image_two" name="testimonials_image_two" size="36" class="upload has-file"/>
				<input type="button" id="upload_button" value="Custom Logo" class="upload_image_button" class="upload_button" />
				<span class="icon help">
					<span class="tooltip"><?php  _e('Image must be in 60 X 250 px','busi_prof');?></span></span>
				</span>
			</p>
			<p><h4 class="heading"><?php _e('Testimonials text','busi_prof');?></h4>
				<textarea rows="5" cols="75" name="testimonials_text_two" id="testimonials_text_two"><?php if($current_options['testimonials_text_two']!='') { echo esc_attr($current_options['testimonials_text_two']); } ?></textarea>
				<span class="icon help">
					<span class="tooltip"><?php  _e('Enter Testimonials descriptions','busi_prof');?></span></span>
				</span>
			</p>
			<p><h4 class="heading"><?php _e('Testimonials By','busi_prof');?></h4>
				<input class="inputwidth" type="text" value="<?php if($current_options['testimonials_name_two']!='') { echo esc_attr($current_options['testimonials_name_two']); } ?>" id="testimonials_name_two" name="testimonials_name_two" size="36" />
				<span class="icon help">
					<span class="tooltip"><?php  _e('Testimonials By','busi_prof');?></span></span>
				</span>
			</p>
			<p><h4 class="heading"><?php _e('Testimonials Author Designation','busi_prof');?></h4>
				<input class="inputwidth" type="text" value="<?php if($current_options['testimonials_designation_two']!='') { echo esc_attr($current_options['testimonials_designation_two']); } ?>" id="testimonials_designation_two" name="testimonials_designation_two" size="36" />
				<span class="icon help">
					<span class="tooltip"><?php  _e('Enter testimonials designations','busi_prof');?></span></span>
				</span>
			</p>			
		</div>	
	</div>
	
	<div class="postbox" id="home_page_testimonials_4">
		<div title="Click to toggle" class="handlediv"><br></div>		
		<h3 class="hndle"><span><?php _e('Recent Blog','busi_prof');?><span class="postbox-title-action">
		</h3>
		<div class="inside">
			<p><h4 class="heading"><?php _e('Recent blog title','busi_prof');?></h4>
				<input class="inputwidth" type="text" value="<?php if($current_options['recent_blog_title']!='') { echo esc_attr($current_options['recent_blog_title']); } ?>" id="recent_blog_title" name="recent_blog_title" size="36" />
				<span class="icon help">
					<span class="tooltip"><?php  _e('Enter recent blog title','busi_prof');?></span></span>
				</span>
			</p>
			<p><h4 class="heading"><?php _e('Recent blog description','busi_prof');?></h4>
				<input class="inputwidth" type="text" value="<?php if($current_options['recent_blog_description']!='') { echo esc_attr($current_options['recent_blog_description']); } ?>" id="recent_blog_description" name="recent_blog_description" size="36" />
				<span class="icon help">
					<span class="tooltip"><?php  _e('Enter recent blog desccriptions','busi_prof');?></span></span>
				</span>
			</p>		
		</div>	
	</div>	
<!---DATA SAVE------>
    <div id="busiprof_optionsframework-submit">         
		<input type="hidden" value="1" id="busiprof_settings_save_3" name="busiprof_settings_save_3" />
		<input type="button" class="button-primary"  value= "<?php _e('Save Changes', 'busi_prof');?>" onclick="datasave_home('3')"/>									
		<input type="button" class="reset-button button-secondary"  value="<?php _e('Restore Defaults','busi_prof');?>" onclick="reset_data_home('3')" />		
	</div>
</form>