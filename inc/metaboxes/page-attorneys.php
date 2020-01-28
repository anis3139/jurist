<?php

function jurist_attorneys_metabox($metaboxes){
    $page_id = 0;
    if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
        $page_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }

    $current_page_template = get_post_meta( $page_id, '_wp_page_template', true );
    if ( ! in_array( $current_page_template, array( 'page-templates/attorneys.php' ) ) ) {
        return $metaboxes;
    }

    $metaboxes[] = array(
        'id'        => 'jurist_attorneys_page_sections',
        'title'     => __( 'Our Attorneys', 'jurist' ),
        'post_type' => 'page',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
        array( 
                'name'  => 'jurist_attorneys_page_section',
                'title'           => __( 'Attorneys Bio', 'jurist' ),
                'fields' => array( 
                 array(
                'id'  => 'jurist_attorneys_sections',
                'name'  => 'jurist_attorneys_section',
                'type'            => 'group',
                'title'           => __( 'Attorneys Bio', 'jurist' ),
                'button_title'    => __( 'Add New Attorney', 'jurist' ),
                'accordion_title' => __( 'Attorneys', 'jurist' ),
                'icon'   => 'fa fa-image',
                'fields' => array( 
                    array(
                            'id'    => 'jurist_attorneys_name',
                            'type'  => 'text',
                            'title' =>  __( 'Attorneys Name', 'jurist' ),
                          ),
                    array(
                            'id'    => 'jurist_attorneys_designation',
                            'type'  => 'text',
                            'title' =>  __( 'Attorneys Designation', 'jurist' ),
                          ), 
                    array(
                            'id'    => 'jurist_attorneys_bio',
                            'type'  => 'textarea',
                            'title' => __( 'Attorneys Bio', 'jurist' ),
                          ),
                      array(
                        'id'    => 'jurist_attorneys_image',
                        'title'   => __( 'Attorneys Image', 'jurist' ),
                        'type'    => 'image',
                        
                    ),
                    ),
                 ),
                
             ),
            ),
        ), 
        
  );

    return $metaboxes;
}
add_filter('cs_metabox_options','jurist_attorneys_metabox');
