<?php 

function jurist_register_my_cpts_section() {


	$labels = [
		"name" => __( "Practice Areas", "jurist" ),
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
		"hierarchical" => false,
		"rewrite" => [ "slug" => "practice-area", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 20,
		"menu_icon" => "dashicons-book-alt",
		"supports" => [ "title", "editor", "thumbnail","excerpt" ],
        "taxonomies"=>array('category'),
	];

	register_post_type( "practice_area", $args );
}
add_action( 'init', 'jurist_register_my_cpts_section' );