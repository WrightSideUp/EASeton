<?php
/* Post Type for Get Help page */

function register_get_help() {
	// creating (registering) the custom type 
	register_post_type( 'GetHelp', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Get Help Page', 'EASeton'), /* This is the Title of the Group */
			), /* end of arrays */
			'description' => __( 'This is the Get Help page', 'EASeton' ),
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => get_stylesheet_directory_uri() . '/library/images/custom-post-icon.png', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'get_help', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'GetHelp', /* you can rename the slug here */
			'capability_type' => 'page',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields')
	 	) /* end of options */
	); /* end of register post type */
}

	// adding the function to the Wordpress init
	add_action( 'init', 'register_get_help');
	
?>
