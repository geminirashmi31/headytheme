<?php
/*Blog page*/
	get_header();?>
	
	<h1><?php bloginfo('name'); ?></h1>
	
	<!-- header-search -->
		<div class="header-search">		
		<?php get_search_form(); ?>
		</div>
		<!-- /header-search -->
	
	<?php if (( is_page('blog')) || ( is_category( array( 'all-posts', 'android', 'business', 'design', 'development', ios))))
	{ ?>
		<nav class="category-nav"><ul><?php wp_list_cats(); ?></ul></nav>
	<?php }
	else
		echo " ";
	?>
	
		<?php if (have_posts()) :
		while (have_posts()) : the_post(); ?>
		
		<article class="post">		
		<?php
		$args = array( 'posts_per_page' => 10, 'order'=> 'DESC', 'orderby' => 'date' );
		$postslist = get_posts( $args );
		foreach ( $postslist as $post ) :
			setup_postdata( $post ); ?> 
										
						<br />
						<h2><a href="<?php the_permalink();?>"><?php the_title(); ?>
              </a></h2>			     
						<?php get_template_part('content'); ?>
				
		<?php
		endforeach; 
		wp_reset_postdata();
	?>			
	</article>	
	
		<?php endwhile;
	
   else :
	  echo '<p>No content found</p>';
   endif; ?>
   
	   