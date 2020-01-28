<?php

function jurist_about_us_pages_metabox($metaboxes){
    $page_id = 0;
    if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
        $page_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }

    $current_page_template = get_post_meta( $page_id, '_wp_page_template', true );
    if ( ! in_array( $current_page_template, array( 'page-templates/about-us.php' ) ) ) {
        return $metaboxes;
    }

    $metaboxes[] = array(
        'id'        => 'jurist_about_page_sections',
        'title'     => __( 'About us', 'jurist' ),
        'post_type' => 'page',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
        array( 
                'name'  => 'jurist_about_page_section',
                'title'           => __( 'About Us', 'jurist' ),
                'button_title'    => __( 'About Us Heading', 'jurist' ),
                'accordion_title' => __( 'Add New About Us Heading', 'jurist' ),
                'icon'   => 'fa fa-image',
                'fields' => array( 
                    array(
                            'id'    => 'about_sub_title',
                            'type'  => 'text',
                            'title' =>  __( 'About Sub Title', 'jurist' ),
                          ), 
                    array(
                            'id'    => 'about_title',
                            'type'  => 'text',
                            'title' =>  __( 'About Title', 'jurist' ),
                          ),
                    array(
                            'id'    => 'about_description',
                            'type'  => 'textarea',
                            'title' => __( 'About Description', 'jurist' ),
                          ),
                     array(
                        'id'    => 'experince',
                        'title'   => __( 'Experience', 'jurist' ),
                        'type'    => 'text',
                        
                        ),
                         array(
                        'id'    => 'about_image',
                        'title'   => __( 'About Image', 'jurist' ),
                        'type'    => 'image',
                        
                        ),                    
                    array(
                        'id'    => 'video_link',
                        'title'   => __( 'Video Link', 'jurist' ),
                        'type'    => 'text',
                        
                        ),
                      array(
                        'id'    => 'contact_image',
                        'title'   => __( 'Contact Form Image', 'jurist' ),
                        'type'    => 'image',
                        
                        ),
                 array(
                'id'  => 'jurist_testimonial_sections',
                'name'  => 'jurist_testimonial_section',
                'type'            => 'group',
                'title'           => __( 'Testimonial', 'jurist' ),
                'button_title'    => __( 'Add New Testimonial', 'jurist' ),
                'accordion_title' => __( 'Testimonial', 'jurist' ),
                'icon'   => 'fa fa-image',
                'fields' => array( 
                    array(
                            'id'    => 'name',
                            'type'  => 'text',
                            'title' =>  __( 'Name', 'jurist' ),
                          ), 
                    array(
                        'id'    => 'designation',
                        'title'   => __( 'Designation', 'jurist' ),
                        'type'    => 'text',
                        
                        ),
                    array(
                            'id'    => 'description',
                            'type'  => 'textarea',
                            'title' => __( 'Testimonial Description', 'jurist' ),
                          ),
                      array(
                        'id'    => 'testimonial_image',
                        'title'   => __( 'Testimonial Image', 'jurist' ),
                        'type'    => 'image',
                        
                        ),
                   
                    ),
                 ),
                  array(
                        'id'              => 'jurist_gallery',
                        'type'            => 'group',
                        'title'           => __( 'Gallery', 'jurist' ),
                        'button_title'    => __( 'Add New Image', 'jurist' ),
                        'accordion_title' => __( 'Gallery Images', 'jurist' ),
                        'fields'          => array(
                      array(
                        'id'    => 'jurist_gallery_image',
                        'title'   => __( 'Gallery Image', 'jurist' ),
                        'type'    => 'image',
                        
                     ),
                    ),  
                  ),
                  array(
                        'id'    => 'jurist_contact_form_shortcode',
                        'title'   => __( 'Contact Form Shortcode', 'saneem' ),
                        'type'    => 'textarea',
                        'default' => 'Please Drop Here Your Contact Form Short Code'
                        ),
             ),
            ),
        ), 
        
  );

    return $metaboxes;
}
add_filter('cs_metabox_options','jurist_about_us_pages_metabox');
