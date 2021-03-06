<?php 

// link css stylesheet  
function heady_script_enqueue() {
	
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), NULL, false);
}
    
add_action('wp_enqueue_scripts', 'heady_script_enqueue');


/* Get top ancestor
function get_top_ancestor_id() {
	
	global $post;
	
	if($post->post_parent) {
		$ancestors = array_reverse(get_post_ancestors($post->ID));
		return $ancestors[0];
	}
	
	return $post->ID;
} */

// Customize excerpt word count length
function custom_excerpt_length() {
	return 80;
}

add_filter('excerpt_length', 'custom_excerpt_length');

// Theme setup
function heady_setup() {
	
//  Navigation Menu	
	register_nav_menu('primary', __( 'Primary Menu Navigation'));

    // Add featured image support
	add_theme_support('post-thumbnails');
	add_image_size('small-thumbnail', 250, 250, true);  
	add_image_size('banner-image', 997, 376, true); // this function considers size in pixels 997 * 376
}

add_action('after_setup_theme', 'heady_setup');

// filter to add the categories list in single post
 function show_current_cat_on_single($output) {
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

add_filter('wp_list_categories', 'show_current_cat_on_single');

// highlight search terms in search results
function highlight_search_term($text){
    if(is_search()){
		$keys = implode('|', explode(' ', get_search_query()));
		$text = preg_replace('/(' . $keys .')/iu', '<span class="search-term">\0</span>', $text);
	}
    return $text;
}
add_filter('get_the_excerpt', 'highlight_search_term');
add_filter('the_title', 'highlight_search_term');




 