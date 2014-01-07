<?php
/*---------------------------------------------------------------------------------*
 * @file           theme_stup_data.php
 * @package        Busiprof
 * @copyright      2013 Webriti
 * @license        license.txt
 * @filesource     wp-content/themes/Busiprof/theme_setup_data.php
 *	Admin  & front end defual data file 
 *-----------------------------------------------------------------------------------*/ 
	function Theme_Setup_data()
	{
		$template_uri=get_template_directory_uri(). '/images/default/' ;
		
		return $busiprof_theme_options=array(
				//Logo and Fevicon
				'front_page'  => 'yes',
				'upload_image'=>'',
				'height'=>'60',
				'width'=>'250',
				'upload_image_favicon'=>'',
				
				'slider_head_title' =>__("Backend as a Service Plateform for Any App Developer",'busi_prof'),//Slide Heading
				'slider_image'=>  $template_uri .'/Home_Slide.jpg',//Slide Image
				'caption_head' =>__("Busiprof With Responsive Design",'busi_prof'),//Image Caption Heading
				'caption_text' =>__("We are a group of passionate designers and developers who really love to create awesome wordpress themes with amazing support and ..",'busi_prof'),//Caption detail
				
				'service_heading_one' =>__("Awesome",'busi_prof'),//Service Heading One
				'service_heading_two' =>__("Services",'busi_prof'),//Service heading Two
				'service_tagline'  => __("We are a group of passionate designers and developers who really love to create awesome wordpress themes & support",'busi_prof'),//Service Tagline
				
				'service_icon_one' => $template_uri .'/services_ic1.png',//Service Icon First
				'service_icon_two' => $template_uri .'/services_ic2.png',//Service Icon Second	
				'service_icon_three' => $template_uri .'/services_ic3.png',	//Service Icon Third
				'service_icon_four' => $template_uri .'/services_ic4.png',//Service Icon Fourth
				
				'service_title_one' => __("Web Design",'busi_prof'),//Service Title One
				'service_title_two' =>__("Web Design",'busi_prof'),//Service Title Two
				'service_title_three' =>__("Web Design",'busi_prof'),//Service Title Three
				'service_title_four' =>__("Web Design",'busi_prof'),//Service Title Four
				
				'service_text_one' =>__("We are a group of passionate designers and developers who really love to create awesome wordpress themes",'busi_prof'),//Service Description One
				'service_text_two' => __("We are a group of passionate designers and developers who really love to create awesome wordpress themes",'busi_prof'),//Service Description Two
				'service_text_three' => __("We are a group of passionate designers and developers who really love to create awesome wordpress themes",'busi_prof'),//Service Description Three
				'service_text_four' => __("We are a group of passionate designers and developers who really love to create awesome wordpress themes",'busi_prof'),//Service Description Four
				
				'service_link_btn' => '#',//More Button Link
				'service_button_value' => __("More Services",'busi_prof'),
				'busiprof_custom_css' => '',
				
				'home_project_heading_one'=>__("Recent",'busi_prof'),//Project Heading One
				'home_project_heading_two'=>__("Projects",'busi_prof'),//Project Heading Two
				'project_tagline' => __("We are a group of passionate designers and developers who really love to create awesome wordpress themes & support",'busi_prof'), //project tagline
				
				'project_title_one' => __("Business Cards",'busi_prof'), //project title one
				'project_thumb_one' =>$template_uri .'/rec_project.jpg', //project thumbnail one
				'project_text_one'  => __("Graphic Design & Web Design",'busi_prof'), //project text-description one
				'project_one_url' => '#',
				
				
				'project_title_two' => __("Business Cards",'busi_prof'), //project title two
				'project_thumb_two' =>$template_uri .'/rec_project.jpg', //project thumbnail two
				'project_text_two'  => __("Graphic Design & Web Design",'busi_prof'), //project text-description two
				'project_two_url' => '#',
				
				'project_title_three' => __("Business Cards",'busi_prof'), //project title three
				'project_thumb_three' =>$template_uri .'/rec_project.jpg', //project thumbnail three
				'project_text_three'  => __("Graphic Design & Web Design",'busi_prof'), //project text-description three
				'project_three_url' => '#',
				
				'project_title_four' => __("Business Cards",'busi_prof'), //project title three
				'project_thumb_four' =>$template_uri .'/rec_project.jpg', //project thumbnail three
				'project_text_four'  => __("Graphic Design & Web Design",'busi_prof'), //project text-description three
				'project_four_url' => '#',	
				
				'testimonials_title' =>__("Testimonials",'busi_prof'), // Testimonials title 
				'testimonials_text' =>__("We are a group of passionate designers & developers",'busi_prof'), // Testimonials text  
				
				'testimonials_image_one' => $template_uri.'/testimonial.jpg', // Testimonials image 
				'testimonials_text_one' => __("We are group of passionate designers and developers who really love to create awesome wordpress themes with amazing support & cooles video documentations...",'busi_prof'), // Testimonials description
				'testimonials_name_one' => __("Hari maliya",'busi_prof'), // Testimonials name
				'testimonials_designation_one' => __("Web Developer",'busi_prof'), // testmonials designation
				
				'testimonials_image_two' => $template_uri.'/testimonial.jpg',  // Testimonials image 
				'testimonials_text_two' => __("We are group of passionate designers and developers who really love to create awesome wordpress themes with amazing support & cooles video documentations...",'busi_prof'), // Testimonials description
				'testimonials_name_two' => __("Faraz Khan",'busi_prof'), // Testimonials name
				'testimonials_designation_two' => __("Web Developer",'busi_prof'), // testmonials designation	
				
				'recent_blog_title' =>__("Recent Blog",'busi_prof'),
				'recent_blog_description' =>__("We are a group of passionate designers &amp; developers",'busi_prof'),
				
				'busiprof_copy_rights_text' => __('&copy; 2013. All Rights Reserved by ','busi_prof'),
				
				'footer_designedby' =>__('webriti','busi_prof'),
				'footer_url' => 'http://www.webriti.com',
				);
	}
?>