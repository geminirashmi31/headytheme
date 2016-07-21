<?php
/*All the pages */
   get_header();

if(have_posts()) :
   while (have_posts()) : the_post(); ?>
   
   <article class="post page">
     <nav class="site-nav children-links clearfix">
	 <ul>
		   <?php
		   $args = array(
		   'child_of' => get_top_ancestor_id(),
		   'title_li' => ''
		   );
		   ?>
		   <?php wp_list_pages($args); ?>
	   </ul>
	   </nav>
     
   </article>
   
   <?php endwhile;
   
   else :
   echo '<p>No content found</p>';
   endif;
   
   get_footer()
   ?>
	   