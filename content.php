<article class="has-thumbnail">
              
		<!-- post-thumbnail -->
		<div class="post-thumbnail">
			<?php the_post_thumbnail('small-thumbnail'); ?>
		</div><!-- /post-thumbnail -->
				
		<div class="post-date"><?php the_time('F j, Y'); ?></div>
				
	
		<div class="excerpt">
		
		<?php if ( is_search() OR is_archive()) { 
		echo get_the_excerpt(); } ?></div>
		
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
		
		<?php if ( is_search() OR is_archive()) { ?>
			<div class="read-more"><a href="<?php the_permalink(); ?>">Read More</a></div>
		<?php } ?> 
		
	</article>