<?php

get_header(); ?>

<nav class="category-nav"><ul><?php wp_list_cats(); ?></ul></nav>

<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>
		
	<article class="post">
		<h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>	
		
        <div id="author-pic">			  
		<?php echo get_avatar( get_the_author_meta('ID'), 60); ?>
		</div>
		<p class="post-info"><?php the_author(); ?><br />
		<?php the_time('F j Y'); ?>
		<?php $categories = get_the_category();
		$seperator = ", ";
		$output = '';
		
		if($categories) {
			foreach ($categories as $category) {
				$output .= '<a href="' . get_category_link($category->term_id) . '">' .$category->cat_name . '</a>' .$seperator;
			}
			
			echo trim($output, $seperator);
		}
		?>
		
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

