<!doctype html>
<html <?php language_attributes(); ?>>
   <head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width"> 
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
   </head>
  
   <body <?php body_class(); ?>> <!-- it allows to target different pages with css very easily -->
  
		<div class="container">
	
			<!-- site-header -->
			<header class="site-header">
			
				<!-- site-nav -->
				<nav class="site-nav">
				<?php $args = array('theme_location' => 'primary'); ?>						
				<?php wp_nav_menu( $args); ?>
				</nav><!-- site-nav -->	
		  
			</header><!-- /site-header -->
		
		
		
	
	