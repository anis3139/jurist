<?php
function jurist_practice_metabox( $metaboxes ) {
    $metaboxes[] = array(
        'id'        => 'jurist_practice',
        'title'     => __( 'practice Details', 'jurist' ),
        'post_type' => 'practice',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
            array(
                'name'     => 'jurist_practice_section_one',
                'icon'   => 'fa fa-image',
                'fields' => array(
                    array(
                        'id'    => 'icon',
                        'title'   => __( 'Select Icon', 'jurist' ),
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
                )
            ),

        )
    );

    return $metaboxes;
}

add_filter( 'cs_metabox_options', 'jurist_practice_metabox' );

