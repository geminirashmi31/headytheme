<?php

get_header();
?>
<!--<nav class="category-nav">--> <?php if (have_posts()) : ?>

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
	
	
		<h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
				
		<?php get_template_part('content'); 
	
	 endwhile;
	
	else :
	echo '<p>No content found</p>'; 
	endif; ?>
	<!--</nav>-->
	
	
	


