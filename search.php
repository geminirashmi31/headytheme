<?php 
get_header();

	if (have_posts()) : ?>

		<br/><h2>Search results for: <?php the_search_query(); ?></h2><br/>
		
	
		<?php
			while(have_posts()) : the_post();?>
			<div class="post-border">	
			<?php get_template_part('content');?>
			</div>
		<?php endwhile;
	
	else :
		echo '<p>No content found</p>';
		
	endif;
		
		?>
	