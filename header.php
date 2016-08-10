<!DOCTYPE html>
<html <?php language_attributes(); ?>>
   <head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width"> 
		<title><?php bloginfo('name'); ?></title>
		
		<?php wp_head(); ?>
   </head>
  
   <body <?php body_class(); ?>> <!-- it allows to target different pages with css very easily -->
   			 			
			<div class="logo"><img src="http://localhost:81/wordpress/wp-content/uploads/2016/07/heady-logo.png"></div>
			<!-- site-header -->
			<header class="site-header">
             				
				<!-- site-nav -->
				<nav class="site-nav">
				
				<?php $args = array('theme_location' => 'primary'); ?>						
				<?php wp_nav_menu( $args); ?>
				</nav><!-- site-nav -->	
		  
			</header><!-- /site-header -->
			<div class="container">
			
		<?php if ( is_page( 'blog' ) || is_category())
		{ ?>	
			<div id="blog-title"><?php bloginfo('name'); ?> </div>
			<!-- header-search -->
		 <div class="header-search">		
		<?php get_search_form(); ?>
		</div>
	  <!-- /header-search -->
		<?php }
		
		else
			echo ' ';
		?>
		 
		
		
	
	