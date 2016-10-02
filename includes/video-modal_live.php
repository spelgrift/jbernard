<?php

$videos = array();

// Video 1
$videos[] = array(
	'id' => 'videoModal-01',
	'playerID' => 'player-01',
	'name' => 'Killing The Blues (Robert Plant/Alison Krauss)',
	'YTid' => 'QZ1rxccnsVI',
	'description' => "<p class='videoDescription'><strong>The Back Porch Session - The Rivertown Trio</strong></p><p class='videoDescription'>Julie Bernard: Vocals<br>Russ Gauthier: Guitar, Vocals<br>Gary Vogensen: Guitar, Vocals</p><p class='videoDescription'>Playing with Gary and Russ is pure joy. We play Americana, roots music, blues, country rock and some honky-tonk. They both played for many years with New Riders of the Purple Sage and other well-known bands. When we're in the zone with 3-part harmonies, it's magical and just plain down-home fun!</p>"
);

// Video 2
$videos[] = array(
	'id' => 'videoModal-02',
	'playerID' => 'player-02',
	'name' => "Can't Let Go (Lucinda Williams)",
	'YTid' => 'H1XtYAyizak',
	'description' => "<p class='videoDescription'><strong>The Back Porch Session - The Rivertown Trio</strong></p><p class='videoDescription'>Julie Bernard: Vocals<br>Russ Gauthier: Mandolin, Vocals<br>Gary Vogensen: Guitar, Vocals</p><p class='videoDescription'>Playing with Gary and Russ is pure joy. We play Americana, roots music, blues, country rock and some honky-tonk. They both played for many years with New Riders of the Purple Sage and other well-known bands. When we're in the zone with 3-part harmonies, it's magical and just plain down-home fun!</p>"
);

// Video 3
$videos[] = array(
	'id' => 'videoModal-03',
	'playerID' => 'player-03',
	'name' => 'Long Time Gone (Everly Brothers)',
	'YTid' => 'aAn0xkDv61I',
	'description' => "<p class='videoDescription'><strong>The Back Porch Session - The Rivertown Trio</strong></p><p class='videoDescription'>Julie Bernard: Vocals<br>Russ Gauthier: Guitar<br>Gary Vogensen: Guitar, Vocals</p><p class='videoDescription'>Playing with Gary and Russ is pure joy. We play Americana, roots music, blues, country rock and some honky-tonk. They both played for many years with New Riders of the Purple Sage and other well-known bands. When we're in the zone with 3-part harmonies, it's magical and just plain down-home fun!</p><p class='testimonial'>'Julie works hard, she plays hard, and she sings her heart out…what more could a picker like me ask for? The Rivertown Trio is a wonderful musical experience for me and above all else, it’s fun!' -Gary Vogensen</p>"
);

// Video 4
$videos[] = array(
	'id' => 'videoModal-04',
	'playerID' => 'player-04',
	'name' => 'The Monkey and the Engineer (The Grateful Dead)',
	'YTid' => '4uNg4dWb6XM',
	'description' => "<p class='videoDescription'><strong>The Back Porch Session - The Rivertown Trio</strong></p><p class='videoDescription'>Julie Bernard: Vocals, Guitar<br>Russ Gauthier: Guitar, Vocals<br>Gary Vogensen: Harmonica, Vocals</p><p class='videoDescription'>Playing with Gary and Russ is pure joy. We play Americana, roots music, blues, country rock and some honky-tonk. They both played for many years with New Riders of the Purple Sage and other well-known bands. When we're in the zone with 3-part harmonies, it's magical and just plain down-home fun!</p>"
);

// Video 5
$videos[] = array(
	'id' => 'videoModal-05',
	'playerID' => 'player-05',
	'name' => 'Across The Great Divide (Kate Wolf)',
	'YTid' => 'MQz745UDKjg',
	'description' => "<p class='videoDescription'><strong>The Front Porch Session - The 3 of Us</strong></p><p class='videoDescription'>Julie Bernard: Vocals<br>Fred Renfroe: Guitar, Vocals<br>Allen Samelson: Mandolin</p><p class='videoDescription'>Great guys, fabulous musicians, and a great session!</p>"
);

// Video 6
$videos[] = array(
	'id' => 'videoModal-06',
	'playerID' => 'player-06',
	'name' => 'The Way It Goes (Gillian Welch)',
	'YTid' => '-AO8E23mPa8',
	'description' => "<p class='videoDescription'><strong>The Front Porch Session - The 3 of Us</strong></p><p class='videoDescription'>Julie Bernard: Vocals<br>Fred Renfroe: Guitar, Vocals<br>Allen Samelson: Mandolin</p><p class='videoDescription'>Great guys, fabulous musicians, and a great session!</p>"
);

// UPDATE JS WHEN ADDING VIDEOS!

foreach($videos as $video){
	$id = $video['id'];
	$playerID = $video['playerID'];
	$name = $video['name'];
	$YTid = $video['YTid'];
	$description = $video['description'];

	echo <<< EOD

<div class="simple-modal modal fade" id="$id" tabindex="-1" role="dialog" aria-hidden="true">

	<div class="close-modal" data-dismiss="modal"><div class="lr"><div class="rl"></div></div></div>

	<div class="modal-dialog modal-lg">
	   <div class="modal-content">
		   <div class="modal-body">

		   <div class="embed-responsive embed-responsive-16by9">
				<iframe id="$playerID" class="embed-responsive-item" src="https://www.youtube.com/embed/$YTid?autoplay=0&showinfo=0&enablejsapi=1&origin=http://juliebernardmusic.com" frameborder="0" allowfullscreen></iframe>
			</div>
					
			<div class="container-fluid">
				<div class="row">
					<div class='col-md-10 col-md-offset-1 text-center'>
			        	<h3>$name</h3>
			        	$description
					</div>
				</div>
			</div>

		   </div>
		</div>
   </div>
</div>

EOD;
}
?>