<?php
/*Blog page*/
	get_header();?>
	
	<h1><?php bloginfo('name'); ?></h1><br/>
		
		<nav class="category-nav"><ul><?php wp_list_cats(); ?></ul></nav>
			
		<?php if(have_posts()) :
				while (have_posts()) : the_post(); ?>
				
		<p><a href="<?php the_permalink();?>"> All posts </p>	
				
		<?php
		$args = array( 'posts_per_page' => 10, 'order'=> 'DESC', 'orderby' => 'date' );
		$postslist = get_posts( $args );
		foreach ( $postslist as $post ) :
			setup_postdata( $post ); ?> 
						<div class="post-border">				
						<br />
						<h3><a href="<?php the_permalink();?>"><?php the_title(); ?>
              </a></h3>			     
						<?php get_template_part('content'); ?>  </div>	
				
		<?php
		endforeach; 
		wp_reset_postdata();
	?>	
      
		
	
		<?php endwhile;
	
   else :
	  echo '<p>No content found</p>';
   endif; ?>
   
	   