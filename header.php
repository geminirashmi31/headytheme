<!DOCTYPE html>
<html <?php language_attributes(); ?>>
   <head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title><?php bloginfo('name'); ?></title>
		
		<?php wp_head(); ?>
   </head>
  
   <body <?php body_class(); ?> > <!-- it allows to target different pages with css very easily -->
   			 										
			<!-- site-header -->
			<header class="site-header"> 
			<div class="logo"><a href="http://www.heady.io/"><img id="headyImg" src="/wordpress/wp-content/themes/headytheme/images/heady-logo.png" /></a></div>
				<!-- site-nav -->
				<nav class="site-nav">				
						<?php $args = array('theme_location' => 'primary'); ?>						
						<?php wp_nav_menu( $args); ?>					
				</nav><!-- /site-nav -->			 
			</header><!-- /site-header -->
			
			
			
			
			<div class="pinkLogo">
				<div class="pinkCornerLogo"><img src="/wordpress/wp-content/themes/headytheme/images/heady-logo.png" /></div>
				<div class="blackHamburgerIcon" span class="open" style="font-size:30px;cursor:pointer" onclick="openNav()">
					<img src="/wordpress/wp-content/themes/headytheme/images/hamburgerIcon.png" /></span></div>				
					<div id="myNav" class="overlay">
					<a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><img src="/wordpress/wp-content/themes/headytheme/images/x_button.png" /></a>
					<div class="overlay-content">
						<?php wp_nav_menu(); ?>
					</div>
				</div>
			</div>
			
			<div class="burgerMenuFixed">				
				<div id="burgerNav">
				<div class="left"><img id="leftIcon" src="/wordpress/wp-content/themes/headytheme/images/Heady_Dark_Logo.png" /></div>
				<div class="center"><img id="centerHeadyWord" src="/wordpress/wp-content/themes/headytheme/images/headyWord.png" onclick="scrollToTopPosition()"/></div>
				<div class="right" span class="open" style="font-size:30px;cursor:pointer" onclick="openNav()">
				<img id="rightIcon" src="/wordpress/wp-content/themes/headytheme/images/hamburgerIcon.png" /></span></div>
				<div id="myNav" class="overlay">
					<a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><img src="/wordpress/wp-content/themes/headytheme/images/x_button.png" /></a>
					<div class="overlay-content">
						<?php wp_nav_menu(); ?>
					</div>
				</div>
			</div>
			<div id="mobile-search-display">
				<div class="mobile-search">
			<?php get_search_form(); ?>
			</div>
			</div>
			</div>
			<div class="container">
			
		<?php if ( is_page( 'blog' ) || is_page( 'all-posts' ) || is_category() || is_home() || is_search())
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
		 
		
	
	