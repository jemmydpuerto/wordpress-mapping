jQuery(document).ready(function($) {
	// tab js
	$('.nav-tab-wrapper a').click(function(evt) {
		$('.nav-tab-wrapper a').removeClass('nav-tab-active');
		$(this).addClass('nav-tab-active').blur();
		var clicked_group = $(this).attr('href');
		if (typeof(localStorage) != 'undefined' )
		{
			localStorage.setItem("activetab", $(this).attr('href'));
		}
		$('.group').hide();
		$(clicked_group).fadeIn();
		evt.preventDefault();
	});
	
	// media upload js
	var uploadID = ''; /*setup the var*/
	jQuery('.upload_image_button').click(function() {
		uploadID = jQuery(this).prev('input'); /*grab the specific input*/
		
		formfield = jQuery('.upload').attr('name');
		tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
		
		window.send_to_editor = function(html)
		{
			imgurl = jQuery('img',html).attr('src');
			uploadID.val(imgurl); /*assign the value to the input*/
			tb_remove();
		};		
		return false;
	});	
});	

	/*Admin options pannal data value*/
	function datasave_home(id) 
	{ 	
		var busiprof_settings_save= "#busiprof_settings_save_"+id;
		var theme_options_home = "#theme_options_home_"+id;
		
		jQuery(busiprof_settings_save).val("1");        
	    jQuery.ajax({
				   url:'admin.php?page=busi_prof',
				   type:'post',
				   data : jQuery(theme_options_home).serialize(),
				   success : function(data)
					{  	alert('Options data successfully saved');
						//jQuery('#success_message_save_general').show();
					   //jQuery("#success_message_save_general").fadeOut(5000);
					}			
				});
	}
	
	/*Admin options value reset */
	function reset_data_home(id) 
	{   
		var busiprof_settings_save= "#busiprof_settings_save_"+id;
		var theme_options_home = "#theme_options_home_"+id;
		 jQuery(busiprof_settings_save).val("2");
		jQuery.ajax({ 
			   url:'admin.php?page=busi_prof',
			   type:'post',
			  data : jQuery(theme_options_home).serialize(),
		   success : function(data)
			{		alert('Options data successfully reset');
				//jQuery('#success_message_reset_general').show();
			    //jQuery("#success_message_reset_general").fadeOut(5000);
			}		
	   });
	}



