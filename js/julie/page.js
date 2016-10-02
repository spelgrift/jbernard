var $ = require('jquery');
require('../libs/jquery.easing.js');
require('../libs/scrollspy.js');

// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
	$('body').on('click', '.page-scroll a', function(event) {
		var $anchor = $(this);
		$('html, body').stop().animate({
			scrollTop: $($anchor.attr('href')).offset().top
		}, 1500, 'easeInOutExpo', function(){
			
		});

		event.preventDefault();
	});
});

// Highlight the top nav as scrolling occurs
$('body').scrollspy({
    target: '.navbar-fixed-top'
});

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
	if($(window).width() < 768){
		$(this).closest('.navbar-collapse').siblings('.navbar-header').find('.navbar-toggle').click();
	}
});

$(window).load(function(){
	$('.loaderFrame').remove();
	$('#loader').fadeOut('slow');
	loadPhotos();
});

function loadPhotos(){
	$('#photoLoad').load(window.location + 'includes/photo-modal.php');
}

// Toggle show/hide past events button
// $(function() {
// 	var $pastEventsToggle = $('#upcoming').find('#togglePastShows'),
// 	$pastShows = $('#upcoming').find('#pastShows');
	
// 	$pastShows.on('show.bs.collapse', function() {
// 		$pastEventsToggle.html('Hide past events');
// 	});

// 	$pastShows.on('hide.bs.collapse', function() {
// 		$pastEventsToggle.html('Show past events');
// 	});
// });

