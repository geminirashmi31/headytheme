<?php  
function heady_script_enqueue() {
	
	wp_enqueue_style('style', get_stylesheet_uri());
}
    
add_action('wp_enqueue_scripts', 'heady_script_enqueue');



// Get top ancestor
function get_top_ancestor_id() {
	
	global $post;
	
	if($post->post_parent) {
		$ancestors = array_reverse(get_post_ancestors($post->ID));
		return $ancestors[0];
	}
	
	return $post->ID;
}

// Customize excerpt word count length
function custom_excerpt_length() {
	return 25;
}

add_filter('excerpt_length', 'custom_excerpt_length');

// Theme setup
function heady_setup() {
	
	//  Navigation Menus	
	register_nav_menus(array('primary' => __( 'Primary Header Navigation')
));

    // Add featured image support
	add_theme_support('post-thumbnails');
	add_image_size('small-thumbnail', 180, 120, true);
	add_image_size('banner-image', 920, 210, true);
}

add_action('after_setup_theme', 'heady_setup');



 