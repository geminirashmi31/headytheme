<?php
get_header();?>

	<div id="blog-title"><h1><?php bloginfo('name'); ?></h1><br/></div>	
				
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

$count =0; 
	while (have_posts()) : the_post(); ?>
	<?php $count++; ?>
	<?php if ($count == 1) : ?>
	<div class="latest-post">
	<?php else : ?>
	<div class="post-border">
	<?php endif; ?>
	<h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
					
		<?php get_template_part('content'); ?>  </div>
	
	 <?php endwhile;
	
	else :
	echo '<p>No content found</p>'; 
	endif; ?>
	
	
	
	


