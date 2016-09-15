<?php
/*Blog page*/
	get_header();?>
	
	 <nav class="category-nav"><ul><?php  wp_list_pages('include=181&title_li=');/*include=176 is the id of the page*/  wp_list_cats(); ?></ul></nav>