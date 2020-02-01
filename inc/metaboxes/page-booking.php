<?php
function jurist_booking_metabox( $metaboxes ) {
    $metaboxes[] = array(
        'id'        => 'jurist_booking',
        'title'     => __( 'booking Details', 'jurist' ),
        'post_type' => 'booking',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
            array(
                'name'     => 'jurist_booking_section_one',
                'icon'   => 'fa fa-image',
                'fields' => array(
                    array(
                        'id'    => 'booking_shortcode',
                        'title'   => __( 'Contact Form Shortcode', 'jurist' ),
                        'type'    => 'textarea',
                        'default'=> __( 'Please Drop Here Contact Form Short code', 'jurist' ),
             ), 
          ),
      ),
  ),
);
    return $metaboxes;
}
add_filter( 'cs_metabox_options', 'jurist_booking_metabox' );
