<?php

get_header();
	?>
	
	<h1><?php bloginfo('name'); ?></h1>
	
	<!-- header-search -->
		<div class="header-search">		
		<?php get_search_form(); ?>
		</div>
		<!-- /header-search -->

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
	while (have_posts()) : the_post(); ?>
	
	
		<h2><a href="<?php the_permalink();?>"><?php the_title(); ?>
              </a></h2>
				
		<?php get_template_part('content'); 
	
	 endwhile;
	
	else :
	echo '<p>No content found</p>'; 
	endif; ?>
	
	
	
	


