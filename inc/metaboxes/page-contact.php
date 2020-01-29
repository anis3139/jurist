<?php

function jurist_contact_metabox($metaboxes){
    $page_id = 0;
    if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
        $page_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }

    $current_page_template = get_post_meta( $page_id, '_wp_page_template', true );
    if ( ! in_array( $current_page_template, array( 'page-templates/contact.php' ) ) ) {
        return $metaboxes;
    }

    $metaboxes[] = array(
        'id'        => 'jurist_contact_page_sections',
        'title'     => __( 'Contact Information', 'jurist' ),
        'post_type' => 'page',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
        array( 
                'name'  => 'jurist_contact_page_section',
                'title'           => __( 'Contact Information', 'jurist' ),
                'fields' => array( 
                    array(
                            'id'    => 'jurist_contact_address',
                            'type'  => 'textarea',
                            'title' =>  __( 'Contact Adress', 'jurist' ),
                          ),
                    array(
                            'id'    => 'jurist_contact_phone',
                            'type'  => 'text',
                            'title' =>  __( 'Contact Phone Number', 'jurist' ),
                          ), 
                    array(
                            'id'    => 'jurist_contact_email',
                            'type'  => 'text',
                            'title' => __( 'Contact Email', 'jurist' ),
                          ),
                      array(
                        'id'    => 'jurist_contact_website',
                        'title'   => __( 'Contact Website', 'jurist' ),
                        'type'    => 'text',
                        
                    ),                      
                    array(
                        'id'    => 'jurist_contact_form',
                        'title'   => __( 'Contact Form', 'jurist' ),
                        'type'    => 'textarea',
                        'default'=>__('Please Drop Here Your Contact Form Shortcode','jurist'),
                        
                    ),
                  
                
             ),
            ),
        ), 
        
  );

    return $metaboxes;
}
add_filter('cs_metabox_options','jurist_contact_metabox');
