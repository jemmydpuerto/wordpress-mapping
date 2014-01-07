<?php
	
	$current_options = get_option( 'busiprof_theme_options' );
	if(isset($_POST['busiprof_settings_save_4']))
	{		
	if($_POST['busiprof_settings_save_4'] == 1) 
	{
		if ( empty($_POST) || !wp_verify_nonce($_POST['busiprof_footer_nonce_customization'],'busiprof_customization_nonce_footer') )
		{
			print 'Sorry, your nonce did not verify.';
			exit;
		}
		else  
		{
			$current_options['busiprof_copy_rights_text'] = sanitize_text_field($_POST['busiprof_copy_rights_text']);
			$current_options['footer_designedby'] = sanitize_text_field($_POST['footer_designedby']);
			$current_options['footer_url'] = sanitize_text_field($_POST['footer_url']);	
			
			
			update_option('busiprof_theme_options' , stripslashes_deep($current_options));
		}
     }
	if($_POST['busiprof_settings_save_4'] == 2) 
	 {
		do_action('Busiprof_restore_data', '2');		
	 }
 }
 
 
?>
<form method="post" action = ""  id="theme_options_home_4">
	<?php wp_nonce_field('busiprof_customization_nonce_footer','busiprof_footer_nonce_customization'); ?>
	<div class="postbox" id="footer_1">
		<div title="Click to toggle" class="handlediv"><br></div>		
		<div class="inside">
			<p><h4 class="heading"><?php _e('Design By ','busi_prof');?></h4>
				<input class="inputwidth" type="text" value="<?php if($current_options['footer_designedby']!='') { echo esc_attr($current_options['footer_designedby']); } ?>" id="footer_designedby" name="footer_designedby" size="36" />
				<span class="icon help">
					<span class="tooltip"><?php  _e('Enter the designed by name','busi_prof');?></span></span>
				</span>				
			</p>
			<p><h4 class="heading"><?php _e('Footer URL','busi_prof');?></h4>
				<input class="inputwidth" type="text" value="<?php if($current_options['footer_url']!='') { echo esc_attr($current_options['footer_url']); } ?>" id="footer_url" name="footer_url" size="36" />
				<span class="icon help">
					<span class="tooltip"><?php  _e('Enter Footer URL','busi_prof');?></span></span>
				</span>
			</p>
			<p><h4 class="heading"><?php _e('Copyright Text','busi_prof');?></h4>
				<input class="inputwidth" type="text" value="<?php if($current_options['busiprof_copy_rights_text']!='') { echo esc_attr($current_options['busiprof_copy_rights_text']); } ?>" id="busiprof_copy_rights_text" name="busiprof_copy_rights_text" size="36" />
				<span class="icon help">
					<span class="tooltip"><?php  _e('Enter Copyright Text','busi_prof');?></span></span>
				</span>
			</p>			
		</div>	
	</div>
<!---DATA SAVE------>
    <div id="busiprof_optionsframework-submit">         
		<input type="hidden" value="1" id="busiprof_settings_save_4" name="busiprof_settings_save_4" />
		<input type="button" class="button-primary"  value= "<?php _e('Save Changes', 'busi_prof');?>" onclick="datasave_home('4')"/>									
		<input type="button" class="reset-button button-secondary"  value="<?php _e('Restore Defaults','busi_prof');?>" onclick="reset_data_home('4')" />
	</div>
</form>