window.isNavOpen = false;

function openNav() {
    document.getElementById("myNav").style.height = "100%";
	window.isNavOpen = true;
	jQuery(".burgerMenuFixed").css({"display": "none"});
}

function closeNav() {
    document.getElementById("myNav").style.height = "0%";
	window.isNavOpen = false;
	jQuery(".burgerMenuFixed").css({"display": "block"});
}

jQuery(document).ready(function() {
	/* scroll setting*/
	jQuery(window).scroll(function(){
		if(jQuery(document).scrollTop() > 200 && window.isNavOpen == false){
			jQuery(".site-header").css({"width": "93px"}); /*for desktop*/
			jQuery(".burgerMenuFixed").css({"display": "block"});
			jQuery(".burgerMenuFixed").css({"width": "100%"}); /*for ipad and mobile*/
			jQuery(".pinkCornerLogo").css({"display": "none"});
			jQuery(".blackHamburgerIcon").css({"display": "none"});
			jQuery("#burgerNav").css({"display": "block"});
			jQuery(".mobile-search").css({"display": "block"});
			jQuery(".left").css({"display": "block"});
			jQuery(".center").css({"display": "block"});
			jQuery(".right").css({"display": "block"});
		}
		else {
			jQuery(".site-header").css({"width": "100%"});
			jQuery(".burgerMenuFixed").css({"display": "none"});
			jQuery(".burgerMenuFixed").css({"width": "0%"}); /*for ipad and mobile*/
			jQuery(".pinkCornerLogo").css({"display": "block"});
			jQuery(".blackHamburgerIcon").css({"display": "block"});
			jQuery("#burgerNav").css({"display": "none"});
			jQuery(".mobile-search").css({"display": "none"});
			jQuery(".left").css({"display": "none"});
			jQuery(".center").css({"display": "none"});
			jQuery(".right").css({"display": "none"});
		}
	});
	
	/* mouse over*/
    jQuery(".site-header").hover(
		function(){ 
		  if(jQuery(document).scrollTop() > 200 ){
		  jQuery(this).stop().animate({"width": "100%"}, 'fast');} 
		}, 
		function(){
			if(jQuery(document).scrollTop() > 200 ){
			jQuery(this).stop().animate({"width": "93px"}, 'fast');} 
		}
			
	);
	
	
	
});
	
