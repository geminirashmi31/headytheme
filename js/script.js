/*jQuery(document).ready(function() {
	
	jQuery(".menu-trigger").click(function() {
		
		jQuery(".mobile-nav").slideToggle();
	});
	
});*/

/*jQuery(document).ready(function(){
	jQuery(".site-nav").on("click", function(){
		jQuery(".site-header nav ul").toggleClass("open");
	});
});
*/

$(document).ready(function(){
 $('.btn-close').fadeOut(200);
 var open = false;
 $('.button a').on('click',function(){
 if(open == false){
 $('.overlay, .btn-close').fadeIn(200);
 $('nav ul li, .btn-open').fadeOut(200);
 open = true;
 } else {
 $('.overlay, .btn-close').fadeOut(200)
 $('nav ul li, .btn-open').fadeIn(200);
 open = false;
 }
 });
 $('.overlay').on('mouseup', function(){
 $('.overlay, .btn-close').fadeOut(200);
 $('nav ul li, .btn-open').fadeIn(200);
 open = false;
 });
 $('.wrap').on('mouseup', function(){
 return false;
 });
 })