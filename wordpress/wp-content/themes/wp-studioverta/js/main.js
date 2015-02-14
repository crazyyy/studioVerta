//Обработка клика на стрелку вправо
$(document).on('click', ".carousel-button-right",function(){ 
	var carusel = $(this).parents('.carousel');
	right_carusel(carusel);
	return false;
});
//Обработка клика на стрелку влево
$(document).on('click',".carousel-button-left",function(){ 
	var carusel = $(this).parents('.carousel');
	left_carusel(carusel);
	return false;
});
function left_carusel(carusel){
   var block_width = $(carusel).find('.carousel-block').outerWidth();
   $(carusel).find(".carousel-items .carousel-block").eq(-1).clone().prependTo($(carusel).find(".carousel-items")); 
   $(carusel).find(".carousel-items").css({"left":"-"+block_width+"px"});
   $(carusel).find(".carousel-items .carousel-block").eq(-1).remove();    
   $(carusel).find(".carousel-items").animate({left: "0px"}, 200); 
   
};
function right_carusel(carusel){
   var block_width = $(carusel).find('.carousel-block').outerWidth();
   $(carusel).find(".carousel-items").animate({left: "-"+ block_width +"px"}, 200, function(){
	  $(carusel).find(".carousel-items .carousel-block").eq(0).clone().appendTo($(carusel).find(".carousel-items")); 
      $(carusel).find(".carousel-items .carousel-block").eq(0).remove(); 
      $(carusel).find(".carousel-items").css({"left":"0px"}); 
   }); 
};

$(function() {
//Раскомментируйте строку ниже, чтобы включить автоматическую прокрутку карусели
auto_right('.carousel:first');
})

// Автоматическая прокрутка
function auto_right(carusel){
	setInterval(function(){
		if (!$(carusel).is('.hover'))
			right_carusel(carusel);
	}, 5000)
};
// Навели курсор на карусель
$(document).on('mouseenter', '.carousel', function(){$(this).addClass('hover')});
//Убрали курсор с карусели
$(document).on('mouseleave', '.carousel', function(){$(this).removeClass('hover')});
$(document).ready(function() {
	// Slider
	if(jQuery('#slider-slides').length){
		$('#slider-slides').cycle({
			pager:  '#slider-pager',
			pagerAnchorBuilder: function(idx, slide) { 
				return '<p></p>'; 
			},
			timeout: 7000,
			prev: '#slider-prev',
			next: '#slider-next',
			speed: 400,
			fx: 'fade',
			before: function(currSlideElement, nextSlideElement, options, forwardFlag){
				jQuery('#slide-caption').html(jQuery(nextSlideElement).find('.slide-caption').html());
			}
		});
	}
});
/* two step form */
/* 
	http://thecodeplayer.com/walkthrough/jquery-multi-step-form-with-progress-bar
*/	
//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
	if(animating) return false;
	animating = true;
/*	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
*/
	current_fs = $('.firstfs');
	next_fs = $('.secondfs');
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			$('.form-onlinecalc').height(310); 
			current_fs.css({'transform': 'scale('+scale+')'});
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 0, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});
/*
$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});
*/
$(".submit").click(function(){
	return false;
})
$('.addnum2').click(function(){	
	$('.keyinput2').show(); 
	$('.form-onlinecalc').height(310 + 55); 
});
$('.addnum3').click(function(){	
	$('.keyinput3').show(); 
	$('.form-onlinecalc').height(310 + 55 + 55); 
});
$('.addnum4').click(function(){	
	$('.keyinput4').show(); 
	$('.form-onlinecalc').height(310 + 55 + 55 + 55); 
});
$('.addnum5').click(function(){	
	$('.keyinput5').show(); 
	$('.form-onlinecalc').height(310 + 55 + 55 + 55 + 55); 
});
$('.addnum6').click(function(){	
	$('.keyinput6').show(); 
	$('.form-onlinecalc').height(310 + 55 + 55 + 55 + 55 + 55); 
});
$('.addnum7').click(function(){	
	$('.keyinput7').show(); 
	$('.form-onlinecalc').height(310 + 55 + 55 + 55 + 55 + 55 + 55); 
});
$('.addnum8').click(function(){	
	$('.keyinput8').show(); 
	$('.form-onlinecalc').height(310 + 55 + 55 + 55 + 55 + 55 + 55 + 55); 
});
$('.addnum9').click(function(){	
	$('.keyinput9').show(); 
	$('.form-onlinecalc').height(310 + 55 + 55 + 55 + 55 + 55 + 55 + 55 + 55); 
});
$('.addnum10').click(function(){	
	$('.keyinput10').show(); 
	$('.form-onlinecalc').height(310 + 55 + 55 + 55 + 55 + 55 + 55 + 55 + 55 + 55); 
});

$(document).ready(function(){
  $('.slider1').bxSlider({
    slideWidth: 250,
    minSlides: 1,
    maxSlides: 1,
    slideMargin: 10
  });
});

$('form').bind("keyup keypress", function(e) {
  var code = e.keyCode || e.which; 
  if (code  == 13) {               
    e.preventDefault();
    return false;
  }
});