var $ = require('jquery');

var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player01,
player02,
player03,
player04;

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
	// console.log('iFrame API ready');
};

function onPlayerReady(event) {
   event.target.setPlaybackQuality('hd720');
   // console.log('yt players ready');
}
function onPlayerStateChange(event) {
   if (event.data == YT.PlayerState.BUFFERING) {
      event.target.setPlaybackQuality('hd720');
   }
}

function isPlayerReady(player) {
	return player && typeof player.playVideo === 'function';
}

function playVideo(player) {
	if(isPlayerReady(player)) {
		player.playVideo();
	} 
}

function pauseVideo(player) {
	if(isPlayerReady(player)) {
		player.pauseVideo();
	}
}


$(function() {


	// Pause video when modal closed

	$('#videoModal-01').on('hide.bs.modal', function (){
		pauseVideo(player01);
	});	

	$('#videoModal-02').on('hide.bs.modal', function (){
		pauseVideo(player02);
	});

	$('#videoModal-03').on('hide.bs.modal', function (){
		pauseVideo(player03);
	});

	$('#videoModal-04').on('hide.bs.modal', function (){
		pauseVideo(player04);
	});

	// $('#videoModal-05').on('hide.bs.modal', function (){
	// 	pauseVideo(player05);
	// });

	// $('#videoModal-06').on('hide.bs.modal', function (){
	// 	pauseVideo(player06);
	// });

	// Play video when modal shown

	$('#videoModal-01').on('show.bs.modal', function (){
		playVideo(player01);
	});

	$('#videoModal-02').on('show.bs.modal', function (){
		playVideo(player02);
	});

	$('#videoModal-03').on('show.bs.modal', function (){
		playVideo(player03);
	});

	$('#videoModal-04').on('show.bs.modal', function (){
		playVideo(player04);
	});

	// $('#videoModal-05').on('show.bs.modal', function (){
	// 	playVideo(player05);
	// });

	// $('#videoModal-06').on('show.bs.modal', function (){
	// 	playVideo(player06);
	// });



});