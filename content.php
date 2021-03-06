<article class="has-thumbnail">
		
		<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
              
		<!-- post-thumbnail -->
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small-thumbnail'); ?></a>
		</div><!-- /post-thumbnail -->
						
		<div class="post-date"><?php the_time('F j, Y'); ?></div>
					
		<div class="excerpt">
		
		
		<?php echo get_the_excerpt(); ?></div>
		
		<div class="cat-display">	                 
			<?php $categories = get_the_category();		
		
			/*display the category associated with the post excluding the all-posts category whose id is 12*/
			if($categories) {
				foreach ($categories as $category) {
					if ($category->term_id != 12){
					$output .= '<a href="' . get_category_link($category->term_id) . '">' .$category->cat_name . '</a>' .$seperator;
				  }
				}			
				echo trim($output, $seperator);
			}				
			else
			{
				echo ' ';
			} 
		?></div>
		
		<?php if ( is_search() || is_archive() || is_page('all-posts') || is_home() ) { ?>
			<div class="read-more"><a href="<?php the_permalink(); ?>">Read More</a></div>
		<?php } ?> 
		
		
	</article>