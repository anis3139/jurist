<?php
function jurist_about_metabox( $metaboxes ) {
    $metaboxes[] = array(
        'id'        => 'jurist_about',
        'title'     => __( 'about Details', 'jurist' ),
        'post_type' => 'about-us',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
            array(
                'name'     => 'jurist_about_section_one',
                'icon'   => 'fa fa-image',
                'fields' => array(
                    array(
                        'id'    => 'about_sub_title',
                        'title'   => __( 'Sub Title', 'jurist' ),
                        'type'    => 'text',
                    ),
                
                array(
                        'id'    => 'experience',
                        'title'   => __( 'Experience Year', 'jurist' ),
                        'type'    => 'text',
                    ),
                    array(
                        'id'    => 'video_link',
                        'title'   => __( 'Cideo Link', 'jurist' ),
                        'type'    => 'text',
                    ),
                ),
                ),
            ),
    );

    return $metaboxes;
}

add_filter( 'cs_metabox_options', 'jurist_about_metabox' );

