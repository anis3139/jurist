<?php

function jurist_banner_section_metabox($metaboxes){
    $section_id = 0;
    if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
        $section_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }
 if ( 'section' != get_post_type( $section_id ) ) {
        return $metaboxes;
    }
    $section_meta= get_post_meta($section_id,'jurist-section-type',true);
    $section_type= $section_meta['type'];
    
    if('banner'!=$section_type){
        return $metaboxes;
    }

    $metaboxes[] = array(
        'id'        => 'jurist_banner_sections',
        'title'     => __( 'Banner Setting', 'jurist' ),
        'post_type' => 'section',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
            array(
                'id'     => 'jurist-banner_section_one',
                'name'  => '',
                'icon'   => 'fa fa-image',
                'fields' => array(
                    array(
                        'id'    => 'banner_image',
                        'title'   => __( 'Banner Image', 'jurist' ),
                        'type'    => 'image',
                        
                        ),
                    array(
                        'id'              => 'services',
                        'type'            => 'group',
                        'title'           => __( 'services_heading', 'saneem' ),
                        'button_title'    => __( 'New services Heading', 'saneem' ),
                        'accordion_title' => __( 'Add New services Heading', 'saneem' ),
                        'fields'          => array(
                          
                        array(
                        'id'    => 'services_number',
                        'title'   => __( 'Queue Number', 'saneem' ),
                        'type'    => 'text',
                        
                        ),                            
                        array(
                        'id'    => 'services_heading_title',
                        'title'   => __( 'Heading Title', 'saneem' ),
                        'type'    => 'text',
                        
                        ),                            
                        array(
                        'id'    => 'services_heading_subtitle',
                        'title'   => __( 'Heading Sub Title', 'saneem' ),
                        'type'    => 'text',
                        
                        ),
                   
                    ),
                )
            ),
        ),
    ),
       
    );
    
    
    
    
    
    return $metaboxes;
};

add_filter('cs_metabox_options', 'jurist_banner_section_metabox');