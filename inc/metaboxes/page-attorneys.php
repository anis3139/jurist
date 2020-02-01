<?php
function jurist_attorneys_metabox( $metaboxes ) {
    $metaboxes[] = array(
        'id'        => 'jurist_attorneys',
        'title'     => __( 'attorneys Details', 'jurist' ),
        'post_type' => 'attorneys',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
            array(
                'name'     => 'jurist_attorneys_section_one',
                'icon'   => 'fa fa-image',
                'fields' => array(
                    array(
                        'id'    => 'attorneys_sub_title',
                        'title'   => __( 'Sub Title', 'jurist' ),
                        'type'    => 'text',
                    ),
                ),
                ),
            ),
    );

    return $metaboxes;
}

add_filter( 'cs_metabox_options', 'jurist_attorneys_metabox' );

