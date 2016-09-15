<?php
get_header();?>
						
 <?php if (have_posts()) : ?>
  
 <nav class="category-nav"><ul><?php  wp_list_pages('include=181&title_li=');  wp_list_cats(); ?></ul></nav>

<h2><ul><?php
		if ( is_category() ) {
			 get_the_category( array(
			 'title_li' => ''));
			
		} else {
			echo 'Archives:';
		}
?></ul></h2>

<?php

    while (have_posts()) : the_post(); ?>
      	 <div class="other-post-border"> 					
       <?php get_template_part('content'); ?></div>
	   <?php endwhile;
 ?>
	
	 <?php else :
	echo '<p>No content found</p>'; 
	endif; ?>
	
	
	
	


