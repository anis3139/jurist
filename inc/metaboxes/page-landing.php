<?php

function jurist_section_picker_metabox($metaboxes){
    $page_id = 0;
    if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
        $page_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }

    $current_page_template = get_post_meta( $page_id, '_wp_page_template', true );
    if ( ! in_array( $current_page_template, array( 'page-templates/landing.php' ) ) ) {
        return $metaboxes;
    }

    $metaboxes[] = array(
        'id'        => 'jurist-page-sections',
        'title'     => __( 'Sections', 'jurist' ),
        'post_type' => 'page',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
            array(
               
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
                        'title'           => __( 'services_heading', 'jurist' ),
                        'button_title'    => __( 'services Heading', 'jurist' ),
                        'accordion_title' => __( 'Add New services Heading', 'jurist' ),
                        'fields'          => array(
                          
                        array(
                        'id'    => 'services_number',
                        'title'   => __( 'Queue Number', 'jurist' ),
                        'type'    => 'select',
                        'options' => array(
                            '01' => __('One', 'jurist'),
                             '02' => __('Two', 'jurist'),
                             '03' => __('Three', 'jurist'),
                             '04' => __('Four', 'jurist'),
                                                   
                        )
                        
                        ),                            
                        array(
                        'id'    => 'services_heading_title',
                        'title'   => __( 'Heading Title', 'jurist' ),
                        'type'    => 'text',
                        
                        ),                            
                        array(
                        'id'    => 'services_heading_subtitle',
                        'title'   => __( 'Heading Sub Title', 'jurist' ),
                        'type'    => 'textarea',
                        
                        ),
                   
                    ),
                ),
            ),
        ),
    ),
    );

    return $metaboxes;
}
add_filter('cs_metabox_options','jurist_section_picker_metabox');