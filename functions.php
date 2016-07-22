<?php 

// link css stylesheet  
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
	
//  Navigation Menu	
	register_nav_menu('primary', __( 'Primary Menu Navigation'));

    // Add featured image support
	add_theme_support('post-thumbnails');
	add_image_size('small-thumbnail', 180, 120, true);
	add_image_size('banner-image', 920, 210, true);
}

add_action('after_setup_theme', 'heady_setup');

// filter to add the categories list in single post
 function sgr_show_current_cat_on_single($output) {
     global $post;
     if( is_single() ) {
          $categories = wp_get_post_categories($post->ID);
          foreach( $categories as $catid ) {
	  $cat = get_category($catid);

	       // Find cat-item-ID in the string
	       if(preg_match('#cat-item-' . $cat->cat_ID . '#', $output)) {
	            $output = str_replace('cat-item-'.$cat->cat_ID, 'cat-item-'.$cat->cat_ID . ' current-cat', $output);
	       }
          }

     }
     return $output;
}

add_filter('wp_list_categories', 'sgr_show_current_cat_on_single');




 