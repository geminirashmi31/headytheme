<?php
/*All-posts page*/
	get_header();?>
	
<nav class="category-nav"><ul><?php  wp_list_pages('include=176&title_li=');  wp_list_cats(); ?></ul></nav>
				
<?php

// the query

$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>10)); ?>

<?php if ( $wpb_all_query->have_posts() ) : ?>

	
	<?php $count =0; ?>
    <!-- the loop -->
    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>	
	
	<?php $count++; ?>
	<?php if ($count == 1) : ?>
		<div class="latest-post">
	<?php else: ?>
		<div class="post-border">
	<?php endif; ?>
						
	<?php get_template_part('content'); ?></div>
	
    <?php endwhile; ?>
    <!-- end of the loop -->


    <?php wp_reset_postdata(); ?></div>

<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>




