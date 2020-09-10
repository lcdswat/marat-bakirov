$(document).ready(function(){

	$('.overlay, .sended').click(function(){
		$('.overlay').fadeOut();
		$('.sended').removeClass('active');
	});
	
	$(".menu a").click(function(){
		var selected = $(this).attr('href');	
		$.scrollTo(selected, 500);	
		return false;
	});	
	
	$('.slider_bx').bxSlider();
})
