<?php
get_header();?>
						
 <?php if (have_posts()) : ?>
 
 <nav class="category-nav"><ul><?php wp_list_cats(); ?></ul></nav>

<h2><ul><?php
		if ( is_category() ) {
			 get_the_category( array(
			 'title_li' => ''));
			
		} else {
			echo 'Archives:';
		}
?></ul></h2>

<?php

if (is_search() || is_category('all-posts'))
{
	$count =0; 
	while (have_posts()) : the_post(); ?>
	<?php $count++; ?>
	<?php if ($count == 1) : ?>
	<div class="latest-post">
	<?php else: ?>
	<div class="post-border">
	<?php endif; ?>
						
		<?php get_template_part('content'); ?>  </div>
	 <?php endwhile;?></div>
    <?php
 }

else
{ 
    while (have_posts()) : the_post(); ?>
      <div class="post-border">
	  					
       <?php get_template_part('content'); ?></div>
	   <?php endwhile;
} ?>
	
	 <?php else :
	echo '<p>No content found</p>'; 
	endif; ?>
	
	
	
	


