<?php

// Our custom post type function
function create_posttype() {
	register_post_type( 'portfolio',
	// CPT Options
		array(
			'labels' => array(
				'name' => __( 'Portfolio' ),
				'singular_name' => __( 'Portfolio' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'portfolio'),
		)
	);
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );


/*
* Creating a function to create our CPT
*/

function custom_post_type() {

// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Portfolio', 'Post Type General Name', 'mia' ),
		'singular_name'       => _x( 'Portfolio', 'Post Type Singular Name', 'mia' ),
		'menu_name'           => __( 'Portfolio', 'mia' ),
		'parent_item_colon'   => __( 'Parent Portfolio', 'mia' ),
		'all_items'           => __( 'All Items', 'mia' ),
		'view_item'           => __( 'View Item', 'mia' ),
		'add_new_item'        => __( 'Add New Item', 'mia' ),
		'add_new'             => __( 'Add New', 'mia' ),
		'edit_item'           => __( 'Edit Item', 'mia' ),
		'update_item'         => __( 'Update Item', 'mia' ),
		'search_items'        => __( 'Search Item', 'mia' ),
		'not_found'           => __( 'Not Found', 'mia' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'mia' ),
	);
	
// Set other options for Custom Post Type
	
	$args = array(
		'label'               => __( 'portfolio', 'mia' ),
		'description'         => __( 'Portfolio Items', 'mia' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'taxonomies'          => array( 'topics', 'category' ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'portfolio', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'custom_post_type', 0 );
