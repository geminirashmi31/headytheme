<?php

get_header();

   if (have_posts()) :
	while (have_posts()) : the_post(); ?>
	
	
		<h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
				
		<?php get_template_part('content'); 
	
	 endwhile;
	
	else :
	echo '<p>No content found</p>';
	endif; ?>
	
	
	
	<!-- secondary-column -->
	<!--<div class="secondary-column">
	<p>This is category column</p>
	</div> -->
	<!-- /secondary-column -->
	
	<?php get_footer();
?>

