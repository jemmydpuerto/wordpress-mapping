<?php
	 global $front_page;
	$current_options = get_option( 'busiprof_theme_options' );
if(isset($_POST['busiprof_settings_save_1']))
{		
	if($_POST['busiprof_settings_save_1'] == 1) 
	{
		if ( empty($_POST) || !wp_verify_nonce($_POST['busiprof_gernalsetting_nonce_customization'],'busiprof_customization_nonce_gernalsetting') )
		{
			print 'Sorry, your nonce did not verify.';
			exit;
		}

		else  
		{
			$page; 
			$current_options['front_page'] = sanitize_text_field($_POST['front_page']) ; 
			$current_options['upload_image']=sanitize_text_field($_POST['upload_image']);
			$current_options['upload_image_favicon']=sanitize_text_field($_POST['upload_image_favicon']);
			
			$current_options['slider_head_title'] = sanitize_text_field($_POST['slider_head_title']);$current_options['slider_image'] = sanitize_text_field($_POST['slider_image']);
			$current_options['caption_head'] = sanitize_text_field($_POST['caption_head']);
			$current_options['caption_text'] = sanitize_text_field($_POST['caption_text']);
			$current_options['service_heading_one'] = sanitize_text_field($_POST['service_heading_one']);
			$current_options['service_heading_two'] = sanitize_text_field($_POST['service_heading_two']);
			$current_options['service_tagline'] = sanitize_text_field($_POST['service_tagline']);
			
			$current_options['service_link_btn'] = sanitize_text_field($_POST['service_link_btn']);
			$current_options['service_button_value'] = sanitize_text_field($_POST['service_button_value']);
			$current_options['busiprof_custom_css'] = sanitize_text_field($_POST['busiprof_custom_css']);
			
			$current_options['service_icon_one'] = sanitize_text_field($_POST['service_icon_one']);
			$current_options['service_title_one'] = sanitize_text_field($_POST['service_title_one']);
			$current_options['service_text_one'] = sanitize_text_field($_POST['service_text_one']);
			
			$current_options['service_icon_two'] = sanitize_text_field($_POST['service_icon_two']);
			$current_options['service_title_two'] = sanitize_text_field($_POST['service_title_two']);
			$current_options['service_text_two'] = sanitize_text_field($_POST['service_text_two']);
			
			$current_options['service_icon_three'] = sanitize_text_field($_POST['service_icon_three']);
			$current_options['service_title_three'] = sanitize_text_field($_POST['service_title_three']);
			$current_options['service_text_three'] = sanitize_text_field($_POST['service_text_three']);
			
			$current_options['service_icon_four'] = sanitize_text_field($_POST['service_icon_four']);
			$current_options['service_title_four'] = sanitize_text_field($_POST['service_title_four']);
			$current_options['service_text_four'] = sanitize_text_field($_POST['service_text_four']);
		
		update_option('busiprof_theme_options' , stripslashes_deep($current_options));
		}
     }	
	 if($_POST['busiprof_settings_save_1'] == 2) 
	 {
		do_action('Busiprof_restore_data','1');
	 }
 }

 ?>


<form method="post" action = ""  id="theme_options_home_1">
	<?php wp_nonce_field('busiprof_customization_nonce_gernalsetting','busiprof_gernalsetting_nonce_customization'); ?>
	<div class="postbox" id="Basic_setting_1">
		<div title="Click to toggle" class="handlediv"><br></div>
		<h3 class="hndle"><span><?php _e('Custom Static Front Page','sis_spa');?><span class="postbox-title-action">
		</h3>
		<div class="inside">
			<p><h4 class="heading"><?php _e('Do you want display Static Front Page: ','sis_spa');?></h4>
				<?php $front_page = $current_options['front_page']; ?>
				<?php _e('Yes','sis_spa');?> 
				<input type="radio" name="front_page" value="yes" <?php if($front_page == 'yes') echo "checked"; ?> >
				
				<a href="<?php echo admin_url('/options-reading.php'); ?>"><?php _e('front page option','sis_spa'); ?></a>
				&nbsp;&nbsp;
				<input type="radio" name="front_page" value="no" <?php if($front_page == 'no') echo "checked";  ?> >  <?php _e('No','sis_spa');?>  &nbsp;&nbsp;
				<span class="icon help">
					<span class="tooltip"><?php  _e('Shows Custom Static Front Page','sis_spa');?></span>
				</span>
			</p>
		</div>	
		<h3 class="hndle"><span><?php _e('Custom Logo','busi_prof');?><span class="postbox-title-action">
		</h3>
		<div class="inside">
			<p><h4 class="heading"><?php _e('Custom Logo','busi_prof');?></h4>
				<input class="inputwidth" type="text" value="<?php if($current_options['upload_image']!='') { echo esc_attr($current_options['upload_image']); } ?>" id="upload_image" name="upload_image" size="36" class="upload has-file"/>
				<input type="button" id="upload_button" value="Custom Logo" class="upload_image_button" class="upload_button" />
				<span class="icon help">
					<span class="tooltip"><?php  _e('Logo Must be in 60 X 250 px','busi_prof');?></span>
				</span>
			</p>
			
			<p><h4 class="heading"><?php _e('Custom Favicon','busi_prof'); ?></h4>
				<input class="inputwidth" type="text" value="<?php if($current_options['upload_image_favicon']!='') { echo esc_attr($current_options['upload_image_favicon']); } ?>" name="upload_image_favicon" size="36" class="upload has-file"/>
				<input type="button" value="Custom Favicon" class="upload_image_button" id="upload_button">
				<span class="icon help">
					<span class="tooltip"><?php _e('Favicon Icon Use .ico files or 32 X 32 px','busi_prof')?></span>
				</span>
			</p>	
			
		</div>	
	</div>
	<div class="postbox" id="Basic_setting_2">
		<div title="Click to toggle" class="handlediv"><br></div>		
		<h3 class="hndle"><span><?php _e('Home Image','busi_prof');?><span class="postbox-title-action">
		</h3>
		<div class="inside">
			<p><h4 class="heading"><?php _e('Slider Head Title','busi_prof');?></h4>
				<input type="text" class="inputwidth" name="slider_head_title" id="slider_head_title" value="<?php if($current_options['slider_head_title']!='') { echo esc_attr($current_options['slider_head_title']); } ?>"/>
				<span class="icon help">
					<span class="tooltip"><?php  _e('Enter the Slide Image Header','busi_prof');?></span>
				</span>
			</p>
				
			<p><h4 class="heading"><?php _e('Slide Image','busi_prof');?></h4>
				
				<input class="inputwidth" type="text" value="<?php if($current_options['slider_image']!='') { echo esc_attr($current_options['slider_image']); } ?>" id="slider_image" name="slider_image" size="36" />
				<input  type="button" id="upload_button" value="Select Image" class="upload_image_button"  />
				<span class="icon help">
					<span class="tooltip"><?php  _e('Use Image of 1440 X 885 px for better view','busi_prof');?></span>
				</span>
			</p>
			<p><h4 class="heading"><?php _e('Home Image Caption ','busi_prof');?></h4>
				<input type="text" class="inputwidth" name="caption_head" id="caption_head" value="<?php if($current_options['caption_head']!='') { echo esc_attr($current_options['caption_head']); } ?>"/>
				<span class="icon help">
					<span class="tooltip"><?php  _e('Enter Caption for The Home Image','busi_prof');?></span>
				</span>
			</p>
			<p><h4 class="heading"><?php _e('Home Image Caption Description ','busi_prof');?></h4>
				<textarea rows="5" cols="75" name="caption_text" id="caption_text"><?php if($current_options['caption_text']!='') { echo esc_attr($current_options['caption_text']); } ?></textarea>
				<span class="icon help">
					<span class="tooltip"><?php  _e('Enter Description for The Home Image','busi_prof');?></span>
				</span>							
			</p>
			
		</div>	
	</div>
	<div class="postbox" id="Basic_setting_custom_css">
		<div title="Click to toggle" class="handlediv"><br></div>		
		<h3 class="hndle"><span><?php _e('Custom CSS','busi_prof');?><span class="postbox-title-action">
		</h3>
		<div class="inside">			
			<p><h4 class="heading"><?php _e('Enter your Custom css','busi_prof');?></h4>
				<textarea rows="5" cols="75" name="busiprof_custom_css" id="busiprof_custom_css"><?php if($current_options['busiprof_custom_css']!='') { echo esc_attr($current_options['busiprof_custom_css']); } ?></textarea>
				<span class="icon help">
					<span class="tooltip"><?php  _e('Enter Custom CSS Code For Example: #service { color:#000;}','busi_prof');?></span>
				</span>							
			</p>
			
		</div>	
	</div>
	<div class="postbox" id="Basic_setting_3">
		<div title="Click to toggle" class="handlediv"><br></div>		
		<h3 class="hndle"><span><?php _e('Service Heading','busi_prof');?><span class="postbox-title-action">
		</h3>
		<div class="inside">
			<p><h4 class="heading"><?php _e('Service Heading One','busi_prof');?></h4>
				<input type="text" class="inputwidth" name="service_heading_one" id="service_heading_one" value="<?php if($current_options['service_heading_one']!='') { echo esc_attr($current_options['service_heading_one']); } ?>"/>
				<span class="icon help">
					<span class="tooltip"><?php  _e('Enter the Service Heading One','busi_prof');?></span>
				</span>
			</p>
				
			<p><h4 class="heading"><?php _e('Service Heading Two','busi_prof');?></h4>				
				<input class="inputwidth" type="text" value="<?php if($current_options['service_heading_two']!='') { echo esc_attr($current_options['service_heading_two']); } ?>" id="service_heading_two" name="service_heading_two" size="36" />
				<span class="icon help">
					<span class="tooltip"><?php  _e('Enter the Service Heading Two','busi_prof');?></span>
				</span>
			</p>			
			<p><h4 class="heading"><?php _e('Service Tagline  Description','busi_prof');?></h4>
				<textarea rows="5" cols="75" name="service_tagline" id="service_tagline"><?php if($current_options['service_tagline']!='') { echo esc_attr($current_options['service_tagline']); } ?></textarea>
				<span class="icon help">
					<span class="tooltip"><?php  _e('Enter Description for Tagline','busi_prof');?></span>
				</span>
			</p>
			<p><h4 class="heading"><?php _e('More Service Button text','busi_prof');?></h4>				
				<input class="inputwidth" type="text" value="<?php if($current_options['service_button_value']!='') { echo esc_attr($current_options['service_button_value']); } ?>" id="service_button_value" name="service_button_value" size="36" />
				<span class="icon help">
					<span class="tooltip"><?php  _e('Enter the Title for More Service Button','busi_prof');?></span>
				</span>
			</p>
			<p><h4 class="heading"><?php _e('More Service Button Link','busi_prof');?></h4>				
				<input class="inputwidth" type="text" value="<?php if($current_options['service_link_btn']!='') { echo esc_attr($current_options['service_link_btn']); } ?>" id="service_link_btn" name="service_link_btn" size="36" />
				<span class="icon help">
					<span class="tooltip"><?php  _e('Enter the URL for More Services button','busi_prof');?></span>
				</span>
			</p>
		</div>	
	</div>
	
	<div class="postbox" id="Basic_setting_3">
		<div title="Click to toggle" class="handlediv"><br></div>		
		<h3 class="hndle"><span><?php _e('Home Page Service One','busi_prof');?><span class="postbox-title-action">
		</h3>
		<div class="inside">
			<p><h4 class="heading"><?php _e('Home Page Service One Icon','busi_prof');?></h4>
				<input class="inputwidth" type="text" value="<?php if($current_options['service_icon_one']!='') { echo esc_attr($current_options['service_icon_one']); } ?>" id="service_icon_one" name="service_icon_one" size="36" />
				<input  type="button" id="upload_button" value="Select Image" class="upload_image_button"  />
				<span class="icon help">
					<span class="tooltip"><?php  _e('Insert Icon for Service One [35X34 px]','busi_prof');?></span></span>
				</span>
			</p>
				
			<p><h4 class="heading"><?php _e('Home Page Service One Title','busi_prof');?></h4>				
				<input class="inputwidth" type="text" value="<?php if($current_options['service_title_one']!='') { echo esc_attr($current_options['service_title_one']); } ?>" id="service_title_one" name="service_title_one" size="36" />
				<span class="icon help">
					<span class="tooltip"><?php  _e('Enter the service one title ','busi_prof');?></span></span>
				</span>							
			</p>			
			<p><h4 class="heading"><?php _e('Service One Description','busi_prof');?></h4>
				<textarea rows="5" cols="75" name="service_text_one" id="service_text_one"><?php if($current_options['service_text_one']!='') { echo esc_attr($current_options['service_text_one']); } ?></textarea>
				<span class="icon help">
					<span class="tooltip"><?php  _e('Enter description for service one ','busi_prof');?></span></span>
				</span>
				
			</p>			
		</div>	
	</div>	
	
	<div class="postbox" id="Homepage_service_2">
		<div title="Click to toggle" class="handlediv"><br></div>		
		<h3 class="hndle"><span><?php _e('Home Page Service Two','busi_prof');?><span class="postbox-title-action">
		</h3>
		<div class="inside">
			<p><h4 class="heading"><?php _e('Home Page Service Two Icon','busi_prof');?></h4>
				<input class="inputwidth" type="text" value="<?php if($current_options['service_icon_two']!='') { echo esc_attr($current_options['service_icon_two']); } ?>" id="service_icon_two" name="service_icon_two" size="36" />
				<input  type="button" id="upload_button" value="Select Image" class="upload_image_button"  />
				<span class="icon help">
					<span class="tooltip"><?php  _e('Insert Icon for Service Two [35X34 px]','busi_prof');?></span></span>
				</span>
			</p>
				
			<p><h4 class="heading"><?php _e('Home Page Service two Title','busi_prof');?></h4>				
				<input class="inputwidth" type="text" value="<?php if($current_options['service_title_two']!='') { echo esc_attr($current_options['service_title_two']); } ?>" id="service_title_two" name="service_title_two" size="36" />
				<span class="icon help">
					<span class="tooltip"><?php  _e('Enter the service two title','busi_prof');?></span></span>
				</span>
			</p>			
			<p><h4 class="heading"><?php _e('Service two Description','busi_prof');?></h4>
				<textarea rows="5" cols="75" name="service_text_two" id="service_text_two"><?php if($current_options['service_text_two']!='') { echo esc_attr($current_options['service_text_two']); } ?></textarea>
				<span class="icon help">
					<span class="tooltip"><?php  _e('Enter description for service two','busi_prof');?></span></span>
				</span>
			</p>			
		</div>	
	</div>
	
	<div class="postbox" id="homepage_service_3">
		<div title="Click to toggle" class="handlediv"><br></div>		
		<h3 class="hndle"><span><?php _e('Home Page Service three','busi_prof');?><span class="postbox-title-action">
		</h3>
		<div class="inside">
			<p><h4 class="heading"><?php _e('Home Page Service Three Icon','busi_prof');?></h4>
				<input class="inputwidth" type="text" value="<?php if($current_options['service_icon_three']!='') { echo esc_attr($current_options['service_icon_three']); } ?>" id="service_icon_three" name="service_icon_three" size="36" />
				<input  type="button" id="upload_button" value="Select Image" class="upload_image_button"  />
				<span class="icon help">
					<span class="tooltip"><?php  _e('Insert Icon for Service Three [35X34 px]','busi_prof');?></span></span>
				</span>
			</p>
				
			<p><h4 class="heading"><?php _e('Home Page Service Three Title','busi_prof');?></h4>				
				<input class="inputwidth" type="text" value="<?php if($current_options['service_title_three']!='') { echo esc_attr($current_options['service_title_three']); } ?>" id="service_title_three" name="service_title_three" size="36" />
				
				<span class="icon help">
					<span class="tooltip"><?php  _e('Enter the service three title','busi_prof');?></span></span>
				</span>
			</p>			
			<p><h4 class="heading"><?php _e('Service Three Description','busi_prof');?></h4>
				<textarea rows="5" cols="75" name="service_text_three" id="service_text_three"><?php if($current_options['service_text_three']!='') { echo esc_attr($current_options['service_text_three']); } ?></textarea>
				<span class="icon help">
					<span class="tooltip"><?php  _e('Enter  description for sevice three','busi_prof');?></span></span>
				</span>
			</p>			
		</div>	
	</div>
	
	<div class="postbox" id="homepage_service_4">
		<div title="Click to toggle" class="handlediv"><br></div>		
		<h3 class="hndle"><span><?php _e('Home Page Service four','busi_prof');?><span class="postbox-title-action">
		</h3>
		<div class="inside">
			<p><h4 class="heading"><?php _e('Home Page Service four Icon','busi_prof');?></h4>
				<input class="inputwidth" type="text" value="<?php if($current_options['service_icon_four']!='') { echo esc_attr($current_options['service_icon_four']); } ?>" id="service_icon_four" name="service_icon_four" size="36" />
				<input  type="button" id="upload_button" value="Select Image" class="upload_image_button"  />
				<span class="icon help">
					<span class="tooltip"><?php  _e('Insert Icon for Service Four [35X34 px]','busi_prof');?></span></span>
				</span>
			</p>
				
			<p><h4 class="heading"><?php _e('Home Page Service Four Title','busi_prof');?></h4>				
				<input class="inputwidth" type="text" value="<?php if($current_options['service_title_four']!='') { echo esc_attr($current_options['service_title_four']); } ?>" id="service_title_four" name="service_title_four" size="36" />
				<span class="icon help">
					<span class="tooltip"><?php  _e('Enter the serive four title','busi_prof');?></span></span>
				</span>
			</p>			
			<p><h4 class="heading"><?php _e('Service Four Description','busi_prof');?></h4>
				<textarea rows="5" cols="75" name="service_text_four" id="service_text_four"><?php if($current_options['service_text_four']!='') { echo esc_attr($current_options['service_text_four']); } ?></textarea>
				<span class="icon help">
					<span class="tooltip"><?php  _e('Enter description for service four','busi_prof');?></span></span>
				</span>
			</p>			
		</div>	
	</div>	
<!---DATA SAVE------>
    <div id="busiprof_optionsframework-submit">         
		<input type="hidden" value="1" id="busiprof_settings_save_1" name="busiprof_settings_save_1" />
		<input type="button" class="button-primary"  value= "<?php _e('Save Changes', 'busi_prof');?>" onclick="datasave_home('1')"/>									
		<input type="button" class="reset-button button-secondary"  value="<?php _e('Restore Defaults','busi_prof');?>" onclick="reset_data_home('1')" />		
	</div>
</form>