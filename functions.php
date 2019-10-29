<?php 

function resourcesget() {
	
	wp_enqueue_style('style', get_stylesheet_uri());
	
	
}

add_action('wp_enqueue_scripts', 'resourcesget');



// get top ancestor
function get_top_ancestor_id() {
	
	global $post;
	
	if ($post->post_parent) {
		$ancestors = array_reverse(get_post_ancestors($post->ID));
		return $ancestors[0];
	}
	
	return $post ->ID;
}

// page has children?
function has_children() {
	
	global $post;
	
	$pages = get_pages('child_of=' . $post->ID);
	return count($pages);	
}

// supportmodules

function setupSupport() {
	
	// featured Image
	
	add_theme_support('post-thumbnails');
	add_image_size('small-thumbnail', 180, 120, true);
	add_image_size('banner-image', 920, 210, array('top', 'left'));
	
	// Navigation Menus
	register_nav_menus(array(
		'primary' => __( 'Primary Menu'),
		'footer' => __( 'Footer Menu'),
	));
}

add_action('after_setup_theme', 'setupSupport');