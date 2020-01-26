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
                'name'  => 'jurist_page_section_one',
                'icon'   => 'fa fa-image',
                'fields' => array(
                    array(
                        'id'    => 'sections',
                        'title'   => __( 'Select sections', 'jurist' ),
                        'type'    => 'group',
                        'button_title'    => __('New Section','jurist'),
                        'accordion_title' => __('Add New Section','jurist'),
                        'fields'=>array(
                            array(
                                'id'=>'section',
                                'title'=>__('Select sections','jurist'),
                                'type'=>'select',
                                'options'=>'post',
                                'query_args'=>array(
                                    'post_type'=>'section',
                                    'posts_per_page'=>-1
                                )
                            )
                        )
                    ),
                )
            ),

        )
    );

    return $metaboxes;
}
add_filter('cs_metabox_options','jurist_section_picker_metabox');