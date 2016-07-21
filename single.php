<?php

get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>
	
	<article class="post">
		<h2><a href="<?php the_permalink();?>"><?php the_title(); ?>
              </a></h2>			  
		
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
		
		<?php the_post_thumbnail('banner-image'); ?>
		
		<?php the_content(); ?>
	</article>
	
	<?php endwhile;
	
	else :
		echo '<p>No content found</p>';
		
	endif;
	
	get_footer();
?>

