<?php

get_header(); ?>

<nav class="category-nav"><ul><?php wp_list_cats(); ?></ul></nav>

<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>
		
	<article class="post">
		<p><a href="<?php the_permalink();?>"><?php the_title(); ?></a></p>
					  
		<?php echo get_avatar( get_the_author_meta('ID'), 60); ?>
		
		<p class="post-info"><?php the_author(); ?><br />
		<?php the_time('F j, Y'); ?>
		
		
		</p>
		
		<?php the_post_thumbnail('banner-image'); ?><br/>
		
		<?php the_content(); ?>
	</article>
	
	<?php endwhile;
	
	else :
		echo '<p>No content found</p>';
		
	endif;
	
	get_footer();
?>

