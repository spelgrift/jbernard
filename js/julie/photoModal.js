var $ = require('jquery');
require('../libs/carousel.js');
$(function() {
	// Photo Modal
	$('body').on('click', 'a.photoThumb', function(event){
		event.preventDefault();
		$('#photoModal').modal('toggle');
	});

	// init Carousel
	$('.carousel').carousel({
		interval:false
	});

	// Fix vertical images to fit inside frame
	var imageHeight;
	$('body').on('shown.bs.modal', '#photoModal', function (ev) {
		resetImageHeights();
	});

	$( window ).resize(function(){
		if(($('#photoModal').data('bs.modal') || {}).isShown){
			clearSlideCSS();
			resetImageHeights();
		}
	});

	function resetImageHeights(){
		imageHeight = $('.slide:first').height();
		$('.slideImg').css({
			'max-height' : imageHeight,
			'width' : 'auto',
			'margin' : '0 auto'
		});
	}

	function clearSlideCSS(){
		$('.slideImg').css('max-height', '');
	}
});