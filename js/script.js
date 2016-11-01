function openNav() {
    document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.height = "0%";
}

jQuery(document).ready(function() {
	/* scroll setting*/
	jQuery(window).scroll(function(){
		if(jQuery(document).scrollTop() > 200 ){
			jQuery(".site-header").css({"width": "93px"});
		}
		else {
			jQuery(".site-header").css({"width": "100%"});
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
	
