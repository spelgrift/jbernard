var $ = require('jquery');

var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player01;
var player02;
var player03;
var player04;
var player05;
var player06;

window.onYouTubeIframeAPIReady = function() {
	player01 = new YT.Player('player-01', {
		events: {
			'onReady' : onPlayerReady,
			'onStateChange' : onPlayerStateChange
		}
	});
	player02 = new YT.Player('player-02', {
		events: {
			'onReady' : onPlayerReady,
			'onStateChange' : onPlayerStateChange
		}
	});
	player03 = new YT.Player('player-03', {
		events: {
			'onReady' : onPlayerReady,
			'onStateChange' : onPlayerStateChange
		}
	});
	player04 = new YT.Player('player-04', {
		events: {
			'onReady' : onPlayerReady,
			'onStateChange' : onPlayerStateChange
		}
	});
	player05 = new YT.Player('player-05', {
		events: {
			'onReady' : onPlayerReady,
			'onStateChange' : onPlayerStateChange
		}
	});
	player06 = new YT.Player('player-06', {
		events: {
			'onReady' : onPlayerReady,
			'onStateChange' : onPlayerStateChange
		}
	});
};

function onPlayerReady(event) {
   event.target.setPlaybackQuality('hd720');
}
function onPlayerStateChange(event) {
   if (event.data == YT.PlayerState.BUFFERING) {
      event.target.setPlaybackQuality('hd720');
   }
}


$(function() {

	// Pause video when modal closed

	$('#videoModal-01').on('hide.bs.modal', function (){
		player01.pauseVideo();
	});	

	$('#videoModal-02').on('hide.bs.modal', function (){
		player02.pauseVideo();
	});

	$('#videoModal-03').on('hide.bs.modal', function (){
		player03.pauseVideo();
	});

	$('#videoModal-04').on('hide.bs.modal', function (){
		player04.pauseVideo();
	});

	$('#videoModal-05').on('hide.bs.modal', function (){
		player05.pauseVideo();
	});

	$('#videoModal-06').on('hide.bs.modal', function (){
		player06.pauseVideo();
	});

	// Play video when modal shown

	$('#videoModal-01').on('show.bs.modal', function (){
		player01.playVideo();
	});

	$('#videoModal-02').on('show.bs.modal', function (){
		player02.playVideo();
	});

	$('#videoModal-03').on('show.bs.modal', function (){
		player03.playVideo();
	});

	$('#videoModal-04').on('show.bs.modal', function (){
		player04.playVideo();
	});

	$('#videoModal-05').on('show.bs.modal', function (){
		player05.playVideo();
	});

	$('#videoModal-06').on('show.bs.modal', function (){
		player06.playVideo();
	});



});