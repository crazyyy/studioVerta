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