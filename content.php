<article class="post has-thumbnail">
		<!-- post-thumbnail -->
		<div class="post-thumbnail">
			<?php the_post_thumbnail('small-thumbnail'); ?>
		</div><!-- /post-thumbnail -->
		
		<p class="post-info"><?php the_time('F j Y'); ?></p>
				
		<p>
		<?php echo get_the_excerpt(); ?>
		<div class="read-more"><a href="<?php the_permalink(); ?>">Read more</a></div>
		</p>
	</article>