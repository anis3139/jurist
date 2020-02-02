<?php

function jurist_customizer_settings( $wp_jurist ) {
    /**
	 * About Sections
	 */

	$wp_jurist->add_section( 'jurist_about', array(
		'title'           => __( 'About Sections Setting', 'jurist' ),
		'priority'        => '40',
		'active_callback' => function () {
			if(is_page_template('page-templates/landing.php')){
				return true;
			}
			return false;

			return is_page_template( 'page-templates/landing.php' );
		}
	) );
    
    
    $wp_jurist->add_setting( 'jurist_about_sub_heading', array(
		'default'   => "Welcome to Jurist",
		'transport' => 'postMessage',
	) );

	$wp_jurist->add_control( 'jurist_about_sub_heading', array(
		'label'    => __( 'About Page Sub Heading', 'jurist' ),
		'section'  => 'jurist_about',
		'type'     => 'text',

	) );
    
        
    $wp_jurist->selective_refresh->add_partial('jurist_about_sub_heading',array(
		'selector'=>'#about-sub-heading',
		'settings'=>'jurist_about_sub_heading',
		'render_callback'=>function(){
			return get_theme_mod('jurist_about_sub_heading');
		}
	));
    
    

	$wp_jurist->add_setting( 'jurist_about_heading', array(
		'default'   => "We Always Fight For Your Justice to Win",
		'transport' => 'postMessage',
	) );

	$wp_jurist->add_control( 'jurist_about_heading', array(
		'label'    => __( 'About Page Heading', 'jurist' ),
		'section'  => 'jurist_about',
		'type'     => 'text',

	) );
    
        

	$wp_jurist->selective_refresh->add_partial('jurist_about_heading',array(
		'selector'=>'#about-heading',
		'settings'=>'jurist_about_heading',
		'render_callback'=>function(){
			return get_theme_mod('jurist_about_heading');
		}
	));

    
	$wp_jurist->add_setting( 'jurist_about_description', array(
		'default'   => "Far far away, behind the word mountains, far from the countries Vokalia and Consonantia",
		'transport' => 'postMessage',
	) );

	$wp_jurist->add_control( 'jurist_about_description', array(
		'label'   => __( 'About Page Heading', 'jurist' ),
		'section' => 'jurist_about',
		'type'    => 'textarea',
	) );


	$wp_jurist->selective_refresh->add_partial('about_description',array(
		'selector'=>'#about-description',
		'settings'=>'jurist_about_description',
		'render_callback'=>function(){
			return apply_filters('the_content',get_theme_mod('jurist_about_description'));
		}
	));
    
    
 	$wp_jurist->add_setting( 'jurist_about_experiance', array(
		'default'   => "10",
		'transport' => 'postMessage',
	) );

	$wp_jurist->add_control( 'jurist_about_experiance', array(
		'label'   => __( 'About Page Experiance', 'jurist' ),
		'section' => 'jurist_about',
		'type'    => 'number',
	) );

    $wp_jurist->selective_refresh->add_partial('jurist_about_experiance',array(
        'selector'=>'#about-experiance',
		'settings'=>'jurist_about_experiance',
		'render_callback'=>function(){
			return apply_filters('the_content',get_theme_mod('jurist_about_experiance'));
		}
	));
    
    
    $wp_jurist->add_setting( 'jurist_about_image', array(
		'default'   => "Upload Image",
		'transport' => 'refresh',
	) );

	$wp_jurist->add_control(
		new WP_Customize_Image_Control(
			$wp_jurist,
			'jurist_about_image',
			array(
				'label'      => __( 'Upload About Image', 'theme_name' ),
				'section'    => 'jurist_about',
				'settings'   => 'jurist_about_image',
			)
		)
	);
    
    
	$wp_jurist->selective_refresh->add_partial('jurist_about_image',array(
		'selector'=>'#about-image',
		'settings'=>'jurist_about_image',
		'render_callback'=>function(){
			return apply_filters('the_content',get_theme_mod('jurist_about_image'));
		}
	)); 
    
      
	$wp_jurist->add_setting( 'jurist_about_url', array(
		'default'   => "https://www.youtube.com/watch?v=MZ552T1vzn8",
		'transport' => 'postMessage',
	) );

	$wp_jurist->add_control( 'jurist_about_url', array(
		'label'    => __( 'About Video Link', 'jurist' ),
		'section'  => 'jurist_about',
		'type'     => 'url',

	) );
    
        

	$wp_jurist->selective_refresh->add_partial('jurist_about_url',array(
		'selector'=>'#about-url',
		'settings'=>'jurist_about_url',
		'render_callback'=>function(){
			return get_theme_mod('jurist_about_url');
		}
	));
      
    
    $wp_jurist->add_setting( 'jurist_booking_image', array(
		'default'   => "Upload Image",
		'transport' => 'refresh',
	) );

	$wp_jurist->add_control(
		new WP_Customize_Image_Control(
			$wp_jurist,
			'jurist_booking_image',
			array(
				'label'      => __( 'Upload Booking Image', 'theme_name' ),
				'section'    => 'jurist_about',
				'settings'   => 'jurist_booking_image',
			)
		)
	);
    
    
	$wp_jurist->selective_refresh->add_partial('jurist_booking_image',array(
		'selector'=>'#booking-image',
		'settings'=>'jurist_booking_image',
		'render_callback'=>function(){
			return apply_filters('the_content',get_theme_mod('jurist_booking_image'));
		}
	));
    


    
    
    
    
    
    
  /**
	 * Front Page Settings
	 */

	$wp_jurist->add_section( 'jurist_front_page', array(
		'title'           => __( 'Front Page Settings', 'jurist' ),
		'priority'        => '40',
		'active_callback' => function () {
			if(is_page_template('page-templates/landing.php')){
				return true;
			}
			return false;

			return is_page_template( 'page-templates/landing.php' );
		}
	) );
    
    
    $wp_jurist->add_setting( 'jurist_front_page_sub_heading', array(
		'default'   => "Product Liabilty & Personal Injury",
		'transport' => 'postMessage',
	) );

	$wp_jurist->add_control( 'jurist_front_page_sub_heading', array(
		'label'    => __( 'Front Page Sub Heading', 'jurist' ),
		'section'  => 'jurist_front_page',
		'type'     => 'text',
        'active_callback'=>'homepage_sub_heading_display'

	) );
    
        
    $wp_jurist->selective_refresh->add_partial('jurist_front_page_sub_heading',array(
		'selector'=>'#front-sub-heading',
		'settings'=>'jurist_front_page_sub_heading',
		'render_callback'=>function(){
			return get_theme_mod('jurist_front_page_sub_heading');
		}
	));
        
    $wp_jurist->add_setting( 'jurist_display_sub_heading', array(
		'default'   => "1",
		'transport' => 'postMessage',
	) );

	$wp_jurist->add_control( 'jurist_display_sub_heading', array(
		'label'    => __( 'Display Sub Heading', 'jurist' ),
		'section'  => 'jurist_front_page',
		'type'     => 'checkbox',

	) );
    
        
    $wp_jurist->selective_refresh->add_partial('jurist_display_sub_heading',array(
		'selector'=>'#display-sub-heading',
		'settings'=>'jurist_display_sub_heading',
		'render_callback'=>function(){
			return get_theme_mod('jurist_display_sub_heading');
		}
	));
    

    
    $wp_jurist->add_setting( 'practice_area', array(
		'default'   => "Practice Areas",
		'transport' => 'postMessage',
	) );

	$wp_jurist->add_control( 'practice_area', array(
		'label'    => __( 'Practice Areas', 'jurist' ),
		'section'  => 'jurist_front_page',
		'type'     => 'text',

	) );
    
        
    $wp_jurist->selective_refresh->add_partial('practice_area',array(
		'selector'=>'#practice-area',
		'settings'=>'practice_area',
		'render_callback'=>function(){
			return get_theme_mod('practice_area');
		}
	));
    
    
        
          
    $wp_jurist->add_setting( 'practice_areas', array(
		'default'   => "Practice Areas",
		'transport' => 'postMessage',
	) );

	$wp_jurist->add_control( 'practice_areas', array(
		'label'    => __( 'Practice Areas', 'jurist' ),
		'section'  => 'jurist_front_page',
		'type'     => 'text',

	) );
    
        
    $wp_jurist->selective_refresh->add_partial('practice_areas',array(
		'selector'=>'#practice-areas',
		'settings'=>'practice_areas',
		'render_callback'=>function(){
			return get_theme_mod('practice_areas');
		}
	));
           
          
    $wp_jurist->add_setting( 'our_attorneys', array(
		'default'   => "Our Attorney",
		'transport' => 'postMessage',
	) );

	$wp_jurist->add_control( 'our_attorneys', array(
		'label'    => __( 'Our Attorney', 'jurist' ),
		'section'  => 'jurist_front_page',
		'type'     => 'text',

	) );
    
        
    $wp_jurist->selective_refresh->add_partial('our_attorneys',array(
		'selector'=>'#our-attorneys',
		'settings'=>'our_attorneys',
		'render_callback'=>function(){
			return get_theme_mod('our_attorneys');
		}
	));
              
    $wp_jurist->add_setting( 'our_attorney', array(
		'default'   => "Our Legal Attorneys",
		'transport' => 'postMessage',
	) );

	$wp_jurist->add_control( 'our_attorney', array(
		'label'    => __( 'Our Legal Attorneys', 'jurist' ),
		'section'  => 'jurist_front_page',
		'type'     => 'text',

	) );
    
        
    $wp_jurist->selective_refresh->add_partial('our_attorney',array(
		'selector'=>'#our-attorney',
		'settings'=>'our_attorney',
		'render_callback'=>function(){
			return get_theme_mod('our_attorney');
		}
	));
    
    
 
    $wp_jurist->add_setting( 'booking1', array(
		'default'   => "Booking an Appointment",
		'transport' => 'postMessage',
	) );

	$wp_jurist->add_control( 'booking1', array(
		'label'    => __( 'Booking Headings', 'jurist' ),
		'section'  => 'jurist_front_page',
		'type'     => 'text',

	) );
    
        
    $wp_jurist->selective_refresh->add_partial('booking1',array(
		'selector'=>'#booking1',
		'settings'=>'booking1',
		'render_callback'=>function(){
			return get_theme_mod('booking1');
		}
	));
    
    
    
    $wp_jurist->add_setting( 'booking2', array(
		'default'   => "Booking an Appointment",
		'transport' => 'postMessage',
	) );

	$wp_jurist->add_control( 'booking2', array(
		'label'    => __( 'Booking Headings', 'jurist' ),
		'section'  => 'jurist_front_page',
		'type'     => 'text',

	) );
    
        
    $wp_jurist->selective_refresh->add_partial('booking2',array(
		'selector'=>'#booking2',
		'settings'=>'booking2',
		'render_callback'=>function(){
			return get_theme_mod('booking2');
		}
	));
    
    
        
    $wp_jurist->add_setting( 'c_subheading', array(
		'default'   => "Explore Case Studies",
		'transport' => 'postMessage',
	) );

	$wp_jurist->add_control( 'c_subheading', array(
		'label'    => __( 'Case Study Sub Headings', 'jurist' ),
		'section'  => 'jurist_front_page',
		'type'     => 'text',

	) );
    
        
    $wp_jurist->selective_refresh->add_partial('c_subheading',array(
		'selector'=>'#c-subheading',
		'settings'=>'c_subheading',
		'render_callback'=>function(){
			return get_theme_mod('c_subheading');
		}
	));
      
        
    $wp_jurist->add_setting( 'c_heading', array(
		'default'   => "1000+ Completed Cases Successfully",
		'transport' => 'postMessage',
	) );

	$wp_jurist->add_control( 'c_heading', array(
		'label'    => __( 'Case Study Headings', 'jurist' ),
		'section'  => 'jurist_front_page',
		'type'     => 'text',

	) );
    
        
    $wp_jurist->selective_refresh->add_partial('c_heading',array(
		'selector'=>'#c-heading',
		'settings'=>'c_heading',
		'render_callback'=>function(){
			return get_theme_mod('c_heading');
		}
	));
    
          
        
    $wp_jurist->add_setting( 't_subheading', array(
		'default'   => "Testimonials",
		'transport' => 'postMessage',
	) );

	$wp_jurist->add_control( 't_subheading', array(
		'label'    => __( 'Testimonials Sub Heading', 'jurist' ),
		'section'  => 'jurist_front_page',
		'type'     => 'text',

	) );
    
        
    $wp_jurist->selective_refresh->add_partial('t_subheading',array(
		'selector'=>'#t-subheading',
		'settings'=>'t_subheading',
		'render_callback'=>function(){
			return get_theme_mod('t_subheading');
		}
	));
    
        
          
        
    $wp_jurist->add_setting( 't_heading', array(
		'default'   => "Happy Clients",
		'transport' => 'postMessage',
	) );

	$wp_jurist->add_control( 't_heading', array(
		'label'    => __( 'Testimonials Heading', 'jurist' ),
		'section'  => 'jurist_front_page',
		'type'     => 'text',

	) );
    
        
    $wp_jurist->selective_refresh->add_partial('t_heading',array(
		'selector'=>'#t-heading',
		'settings'=>'t_heading',
		'render_callback'=>function(){
			return get_theme_mod('t_heading');
		}
	));
    
            
          
        
    $wp_jurist->add_setting( 'o_blog', array(
		'default'   => "Our Blog",
		'transport' => 'postMessage',
	) );

	$wp_jurist->add_control( 'o_blog', array(
		'label'    => __( 'Our Blog', 'jurist' ),
		'section'  => 'jurist_front_page',
		'type'     => 'text',

	) );
    
        
    $wp_jurist->selective_refresh->add_partial('o_blog',array(
		'selector'=>'#o-blog',
		'settings'=>'o_blog',
		'render_callback'=>function(){
			return get_theme_mod('o_blog');
		}
	));
    
            
          
        
    $wp_jurist->add_setting( 'or_blog', array(
		'default'   => "Recent Blog",
		'transport' => 'postMessage',
	) );

	$wp_jurist->add_control( 'or_blog', array(
		'label'    => __( 'Recent Blog', 'jurist' ),
		'section'  => 'jurist_front_page',
		'type'     => 'text',

	) );
    
        
    $wp_jurist->selective_refresh->add_partial('or_blog',array(
		'selector'=>'#or-blog',
		'settings'=>'or_blog',
		'render_callback'=>function(){
			return get_theme_mod('or_blog');
		}
	));
    
      
        
    $wp_jurist->add_setting( 'je_mail', array(
		'default'   => "Subcribe to our Newsletter",
		'transport' => 'postMessage',
	) );

	$wp_jurist->add_control( 'je_mail', array(
		'label'    => __( 'Email Tag Line', 'jurist' ),
		'section'  => 'jurist_front_page',
		'type'     => 'text',

	) );
    
        
    $wp_jurist->selective_refresh->add_partial('je_mail',array(
		'selector'=>'#je-mail',
		'settings'=>'je_mail',
		'render_callback'=>function(){
			return get_theme_mod('je_mail');
		}
	));
    
    
    
    
    
    
    
    
    

    
    
    /**
	 * Social Link
	 */

	$wp_jurist->add_section( 'jurist_social_link', array(
		'title'           => __( 'Social Link', 'jurist' ),
		'priority'        => '40',
		'active_callback' => function () {
			if(is_page_template('page-templates/landing.php')){
				return true;
			}
			return false;

			return is_page_template( 'page-templates/landing.php' );
		}
	) );
    
   
	$wp_jurist->add_setting( 'jsocial_link_facebook', array(
		'default'   => "https://www.facebook.com/anis3139",
		'transport' => 'postMessage',
	) );

	$wp_jurist->add_control( 'jsocial_link_facebook', 
        array(
		'label'    => __( 'Facebook Link', 'jurist' ),
		'section'  => 'jurist_social_link',
		'type'     => 'url',

	) );
        
    
    $wp_jurist->selective_refresh->add_partial('jsocial_link_facebook',array(
		'selector'=>'#j-facebook',
		'settings'=>'jsocial_link_facebook',
		'render_callback'=>function(){
			return get_theme_mod('jsocial_link_facebook');
		}
	));
     
    
   
	$wp_jurist->add_setting( 'jsocial_link_twitter', array(
		'default'   => "https://www.twitter.com/anis3139",
		'transport' => 'postMessage',
	) );

	$wp_jurist->add_control( 'jsocial_link_twitter', 
        array(
		'label'    => __( 'Twitter Link', 'jurist' ),
		'section'  => 'jurist_social_link',
		'type'     => 'url',

	) );

    $wp_jurist->selective_refresh->add_partial('jsocial_link_twitter',array(
		'selector'=>'#j-twitter',
		'settings'=>'jsocial_link_twitter',
		'render_callback'=>function(){
			return get_theme_mod('jsocial_link_twitter');
		}
	));
       
    
    
	$wp_jurist->add_setting( 'jsocial_link_instagram', array(
		'default'   => "https://www.instagram.com/anis.arronno",
		'transport' => 'postMessage',
	) );

	$wp_jurist->add_control( 'jsocial_link_instagram', 
        array(
		'label'    => __( 'Instagram Link', 'jurist' ),
		'section'  => 'jurist_social_link',
		'type'     => 'url',

	) );
        
    
    $wp_jurist->selective_refresh->add_partial('jsocial_link_instagram',array(
		'selector'=>'#j-instagram',
		'settings'=>'jsocial_link_instagram',
		'render_callback'=>function(){
			return get_theme_mod('jsocial_link_instagram');
		}
	));
       

    
    
	$wp_jurist->add_setting( 'jsocial_link_youtube', array(
		'default'   => "https://www.youtube.com/",
		'transport' => 'postMessage',
	) );

	$wp_jurist->add_control( 'jsocial_link_youtube', 
        array(
		'label'    => __( 'Youtube Link', 'jurist' ),
		'section'  => 'jurist_social_link',
		'type'     => 'url',

	) );
        
    
    $wp_jurist->selective_refresh->add_partial('jsocial_link_youtube',array(
		'selector'=>'#j-youtube',
		'settings'=>'jsocial_link_youtube',
		'render_callback'=>function(){
			return get_theme_mod('jsocial_link_youtube');
		}
	));
       


 
}

add_action( 'customize_register', 'jurist_customizer_settings' );

function homepage_sub_heading_display() {
	if ( get_theme_mod( 'jurist_display_sub_heading' ) == 1 ) {
		return true;
	}

	return false;
}