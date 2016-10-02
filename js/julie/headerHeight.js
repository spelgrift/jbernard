var $ = require('jquery');

$(function() {
	var minHeight = 500; // Set to adjust minimum height!

	setHeaderHeight();

	$( window ).resize(function(){
		setHeaderHeight();
	});

	function setHeaderHeight(){
		var height = window.innerHeight;
		if(height <= minHeight){
			height = minHeight;
		}
		$('header').css('min-height', height);
	}
});

