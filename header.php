<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
  
  <body <?php body_class(); ?>>
  
    <div class="container">
	
	<!-- site-header -->
	<header class="site-header">

		<!-- header-search -->
		<div class="header-search">		
		<?php get_search_form(); ?>
		</div>
		<!-- /header-search -->
		
		<nav class="site-nav">
		<?php
		$args = array('theme_location' => 'primary');
		?>
			<?php wp_nav_menu( $args); ?>
		</nav>		
	
	</header><!-- /site-header -->
	<?php if (( is_page('blog')) || ( is_category( array( 'all-posts', 'android', 'business', 'design', 'development', ios))))
	{ ?>
		<nav class="category-nav"><ul><?php wp_list_cats(); ?></ul></nav>
	<?php }
	else
		echo " ";
	?>
	