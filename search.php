<?php 
get_header(); ?>

<nav class="category-nav"><ul><?php  wp_list_pages('include=181&title_li=');  wp_list_cats(); ?></ul></nav>

	<?php if (have_posts()) : ?>

		<br/><h2>Search results for: <?php the_search_query(); ?></h2><br/>
		
	
		<?php
			while(have_posts()) : the_post();?>
			<div class="other-post-border">	
			<?php get_template_part('content');?>
			</div>
		<?php endwhile;
	
	else :
		echo '<p>No content found</p>';
		
	endif;
		
		?>
	