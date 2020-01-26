<?php
function jurist_section_type_metabox( $metaboxes ) {
    $metaboxes[] = array(
        'id'        => 'jurist-section-type',
        'title'     => __( 'section type', 'jurist' ),
        'post_type' => 'section',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
            array(
                'name'     => 'jurist-section-type-one',
                'icon'   => 'fa fa-image',
                'fields' => array(
                    array(
                        'id'    => 'type',
                        'title'   => __( 'Select section type', 'jurist' ),
                        'type'    => 'select',
                        'options' => array(
                            'banner' => __('Banner', 'jurist'),
                             'about_us' => __('About us', 'jurist'),
                             'practice_area' => __('Practice Areas', 'jurist'),
                             'team' => __('Our Legal Attorneys', 'jurist'),
                             'portfolio' => __('Portfolio', 'jurist'),
                             'testmoinial' => __('Testimonial', 'jurist'),
                             'blog' => __('Our Blog', 'jurist'),
                             'gallery' => __('Gallery', 'jurist'),                      
                        )
                    ),
                )
            ),

        )
    );

    return $metaboxes;
}

add_filter( 'cs_metabox_options', 'jurist_section_type_metabox' );