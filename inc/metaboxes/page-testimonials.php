<?php
function jurist_testimonials_metabox( $metaboxes ) {
    $metaboxes[] = array(
        'id'        => 'jurist_testimonials',
        'title'     => __( 'testimonials Details', 'jurist' ),
        'post_type' => 'testimonials',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
            array(
                'name'     => 'jurist_testimonials_section_one',
                'icon'   => 'fa fa-image',
                'fields' => array(
                    array(
                        'id'    => 't_designation',
                        'title'   => __( 'Designation', 'jurist' ),
                        'type'    => 'text',
             ), 
          ),
      ),
  ),
);
    return $metaboxes;
}
add_filter( 'cs_metabox_options', 'jurist_testimonials_metabox' );
