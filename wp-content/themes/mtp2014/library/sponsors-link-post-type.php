<?php
/* Bones Custom Post Type Example
This page walks you through creating 
a custom post type and taxonomies. You
can edit this one or copy the following code 
to create another one. 

I put this in a separate file so as to 
keep it organized. I find it easier to edit
and change things if they are concentrated
in their own file.

Developed by: Eddie Machado
URL: http://themble.com/bones/
*/

// let's create the function for the custom type
function sponsors_link() { 
	// creating (registering) the custom type 
	register_post_type( 'sponsors_link', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this post type
		array( 'labels' => array(
			'name' => __( 'Sponsors Link', 'bonestheme' ), /* This is the Title of the Group */
			'singular_name' => __( 'locations', 'bonestheme' ), /* This is the individual type */
			'all_items' => __( 'All Locations', 'bonestheme' ), /* the all items menu item */
			'add_new' => __( 'Add New Location', 'bonestheme' ), /* The add new menu item */
			'add_new_item' => __( 'Add New Location', 'bonestheme' ), /* Add New Display Title */
			'edit' => __( 'Edit', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __( 'Edit Locations', 'bonestheme' ), /* Edit Display Title */
			'new_item' => __( 'New Location', 'bonestheme' ), /* New Display Title */
			'view_item' => __( 'View Location', 'bonestheme' ), /* View Display Title */
			'search_items' => __( 'Search Sponsors', 'bonestheme' ), /* Search Custom Type Title */ 
			'not_found' =>  __( 'Nothing found in the Database.', 'bonestheme' ), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __( 'Nothing found in Trash', 'bonestheme' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Locations custom post type', 'bonestheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => true,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => get_stylesheet_directory_uri() . '/library/images/custom-post-icon.png', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'sponsors-link', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => false, /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array('title')
		) /* end of options */
	); /* end of register post type */
	
	
}

	// adding the function to the Wordpress init
	add_action( 'init', 'sponsors_link');

?>
