<?php

function jurist_case_study_metabox($metaboxes){
    $page_id = 0;
    if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
        $page_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }

    $current_page_template = get_post_meta( $page_id, '_wp_page_template', true );
    if ( ! in_array( $current_page_template, array( 'page-templates/case.php' ) ) ) {
        return $metaboxes;
    }

    $metaboxes[] = array(
        'id'        => 'case_study_page_sections',
        'title'     => __( 'Case Study Portfolio', 'jurist' ),
        'post_type' => 'page',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
        array( 
                'name'  => 'case_study_page_section',
                'title'           => __( 'Case Study Area', 'jurist' ),
                'fields' => array( 
                 array(
                'id'  => 'case_study_sections',
                'name'  => 'case_study_section',
                'type'            => 'group',
                'title'           => __( 'Case Study Portfolio', 'jurist' ),
                'button_title'    => __( 'Add New Portfolio', 'jurist' ),
                'accordion_title' => __( 'Portfolio', 'jurist' ),
                'icon'   => 'fa fa-image',
                'fields' => array( 
                    array(
                            'id'    => 'portfolio_title',
                            'type'  => 'text',
                            'title' =>  __( 'Portfolio Title', 'jurist' ),
                          ), 
                    array(
                            'id'    => 'portfolio_fields',
                            'type'  => 'text',
                            'title' => __( 'Case Study Fields', 'jurist' ),
                          ),
                      array(
                        'id'    => 'Portfolio_image',
                        'title'   => __( 'Portfolio Image', 'jurist' ),
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
add_filter('cs_metabox_options','jurist_case_study_metabox');
