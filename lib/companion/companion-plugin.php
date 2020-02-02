<?php 

function jurist_register_my_cpts_section() {


	$labels = [
		"name" => __( "Practice Area", "jurist" ),
		"singular_name" => __( "Practice Area", "jurist" ),
        
	];

	$args = [
		"label" => __( "Practice Area", "jurist" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => [ "slug" => "practice", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 20,
		"menu_icon" => "dashicons-admin-generic",
		"supports" => [ "title", "editor","thumbnail"],
        "taxonomies"=>array('category'),
	];

	register_post_type( "practice", $args );

	
 
    
	$labels = [
		"name" => __( "Our Attorneys", "jurist" ),
		"singular_name" => __( "Our Attorney", "jurist" ),
	];

	$args = [
		"label" => __( "Our Attorneys", "jurist" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "Attorneys", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 20,
		"menu_icon" => "dashicons-groups",
		"supports" => [ "title", "editor","thumbnail"],
	];

	register_post_type( "attorneys", $args );	
    
    
    $labels = [
		"name" => __( "Case Studies", "jurist" ),
		"singular_name" => __( "Case Study", "jurist" ),
	];

	$args = [
		"label" => __( "Case Studies", "jurist" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "case-studies", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 20,
		"menu_icon" => "dashicons-format-image",
		"supports" => [ "title", "editor","thumbnail"],
	];

	register_post_type( "case_studies", $args );    
    
    $labels = [
		"name" => __( "Testimonials", "jurist" ),
		"singular_name" => __( "Testimonial", "jurist" ),
	];

	$args = [
		"label" => __( "Testimonials", "jurist" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "testimonials", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 20,
		"menu_icon" => "dashicons-thumbs-up",
		"supports" => [ "title", "editor","thumbnail"],
	];

	register_post_type( "testimonials", $args ); 
    
    
    $labels = [
		"name" => __( "Gallery", "jurist" ),
		"singular_name" => __( "Gallery Image", "jurist" ),
        "add_new"=>__("Add Image", "jurist"),
	];

	$args = [
		"label" => __( "Gallery", "jurist" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "gallery", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 20,
		"menu_icon" => "dashicons-format-gallery",
		"supports" => [ "thumbnail","title"],
	];

	register_post_type( "gallery", $args ); 
    
    
    
    $labels = [
		"name" => __( "Booking", "jurist" ),
		"singular_name" => __( "Booking", "jurist" ),
        "add_new"=>__("Add Booking", "jurist"),
	];

	$args = [
		"label" => __( "Booking", "jurist" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "booking", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 20,
		"menu_icon" => "dashicons-email-alt",
		"supports" => ["title"],
	];

	register_post_type( "booking", $args );    
    
    $labels = [
		"name" => __( "Featured Posts", "jurist" ),
		"singular_name" => __( "Featured Post", "jurist" ),
        "add_new"=>__("Add Featured Post", "jurist"),
	];

	$args = [
		"label" => __( "Featured Posts", "jurist" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "featured", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 20,
		"menu_icon" => "dashicons-visibility",
		"supports" => [ "title", "editor","thumbnail"],
	];

	register_post_type( "featured", $args );
}
add_action( 'init', 'jurist_register_my_cpts_section' );