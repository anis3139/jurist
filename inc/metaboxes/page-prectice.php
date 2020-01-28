<?php

function jurist_practice_area_pages_metabox($metaboxes){
    $page_id = 0;
    if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
        $page_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }

    $current_page_template = get_post_meta( $page_id, '_wp_page_template', true );
    if ( ! in_array( $current_page_template, array( 'page-templates/practice-areas.php' ) ) ) {
        return $metaboxes;
    }

    $metaboxes[] = array(
        'id'        => 'jurist_practice_area_page_sections',
        'title'     => __( 'Practice Area', 'jurist' ),
        'post_type' => 'page',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
        array( 
                'name'  => 'jurist_practice_area_page_section',
                'title'           => __( 'Practice Area', 'jurist' ),
                'fields' => array( 
                 array(
                'id'  => 'jurist_practice_area_sections',
                'name'  => 'jurist_testimonial_section',
                'type'            => 'group',
                'title'           => __( 'Practice Area', 'jurist' ),
                'button_title'    => __( 'Add New Practice Area', 'jurist' ),
                'accordion_title' => __( 'Practice Area', 'jurist' ),
                'icon'   => 'fa fa-image',
                'fields' => array( 
                    array(
                            'id'    => 'practice_area_name',
                            'type'  => 'text',
                            'title' =>  __( 'Practice Area Title', 'jurist' ),
                          ), 
                    array(
                            'id'    => 'practice_area_description',
                            'type'  => 'textarea',
                            'title' => __( 'Practice Area Description', 'jurist' ),
                          ),
                      array(
                        'id'    => 'practice_area_icon',
                        'title'   => __( 'Practice Area Icon', 'jurist' ),
                        'type'    => 'select',
                        'options' => array(
                            'flaticon-family' => __('Flaticon Family', 'jurist'),
                             'flaticon-auction' => __('Flaticon Auction', 'jurist'),
                             'flaticon-shield' => __('Flaticon Shield', 'jurist'),
                             'flaticon-handcuffs' => __('Flaticon Handcuffs', 'jurist'),
                             'flaticon-house' => __('Flaticon House', 'jurist'),
                             'flaticon-employee' => __('Flaticon Employeer', 'jurist'),
                             'flaticon-fire' => __('Flaticon Fire', 'jurist'),
                             'flaticon-money' => __('Flaticon Money', 'jurist'),
                             'flaticon-medicine' => __('Flaticon Medicine', 'jurist'),
                            
                        
                        ),
                    ),
                    ),
                 ),
                
             ),
            ),
        ), 
        
  );

    return $metaboxes;
}
add_filter('cs_metabox_options','jurist_practice_area_pages_metabox');
