<?php
$events = array();
$pastEvents = array();

require 'includes/pastEvents.php';

$events[] = array(
	'date' => 'Thurs, January 4 • 7-10 PM',
	'venue' => 'The Panama Hotel',
	'town' => 'San Rafael, CA',
	'comment' => "This may be our last gig at the Panama. It recently sold and it is unknown what they will do with it! We have loved playing here!!",
	'url' => 'http://www.panamahotel.com/music.html'
);

$events[] = array(
	'date' => 'Fri, January 26 • 6-8:30 PM ',
	'venue' => "Ray's Deli and Tavern",
	'town' => 'Petaluma, CA',
	'comment' => "Will be our first time playing here. Hang out with us and munch on gourmet deli treats made with local, handmade ingredients!",
	'url' => 'http://www.rays-deli.com/'
);

$events[] = array(
	'date' => 'Fri, February 2 • 8:30-11 PM',
	'venue' => "The Reel Fish Shop &amp; Grill",
	'town' => 'Sonoma, CA',
	'comment' => "It is worth coming to Sonoma for this! Local, sustainable food in an old barn! Be there!",
	'url' => 'http://www.thereelfishshop.com/'
);

$events[] = array(
	'date' => 'Fri, February 23 • 7-9 PM',
	'venue' => 'AQUS Cafe',
	'town' => 'Petaluma, CA',
	'comment' => "Where your weekend fun will begin…",
	'url' => 'http://www.aquscafe.com/'
);

$events[] = array(
	'date' => 'Saturday, March 17',
	'venue' => "",
	'town' => '',
	'comment' => "House Concert in West Marin…invitation only!",
	'url' => false
);

$events[] = array(
	'date' => 'Wed, March 21 • 4:20-7:30 PM',
	'venue' => 'Lagunitas Brewery',
	'town' => 'Petaluma, CA',
	'comment' => "",
	'url' => 'http://www.lagunitas.com/'
);

?>

<section class="primary" id="upcoming">
	<div class="container">
	
		<div class="row rtt-news">
			<div class="col-lg-12 text-center">
				<h2>New Recordings</h2>
				<p>Check out some tracks The Rivertown Trio recorded recently in the studio!</p>
			</div>
			<div class='col-xs-6 col-sm-4 col-md-3 col-lg-4 col-sm-offset-2 col-md-offset-3 col-lg-offset-2'>
				<iframe width="100%" height="115" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/317774291&amp;color=b13d29&amp;auto_play=false&amp;hide_related=true&amp;show_comments=false&amp;show_user=false&amp;show_reposts=false&amp;visual=false"></iframe>
			</div>
			<div class='col-xs-6 col-sm-4 col-md-3 col-lg-4'>
				<iframe width="100%" height="115" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/317773187&amp;color=b13d29&amp;auto_play=false&amp;hide_related=true&amp;show_comments=false&amp;show_user=false&amp;show_reposts=false&amp;visual=false"></iframe>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12 text-center">
				<h2>Upcoming Shows</h2>
				<h3>The Rivertown Trio</h3>
			</div>
		</div>

<?php
foreach($events as $event):

	$date = $event['date'];
	$venue = $event['venue'];
	$town = $event['town'];
	$comment = $event['comment'];
	$url = $event['url'];

	?>

	<div class='row upcoming-li'>
		<div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
			<div class='row'>
				<div class='col-xs-12 upcoming-date'>
					<? echo $date; ?>
				</div>
				<? if($url != false): ?>
					<div class='col-sm-10'>
						<span class='upcoming-venue'><? echo $venue; ?></span>
						<img src='./images/julieGlyph.svg' class='upcoming-glyph'>
						<span class='upcoming-town'><? echo $town; ?></span>
					</div>

					<div class='col-sm-2 text-right hidden-xs'>
						<a href='<? echo $url; ?>' target='_blank' class='btn btn-sm upcoming-btn'>More Info</a>
					</div>
				<? endif; ?>
				<div class='col-sm-10'>
					<p class='upcoming-comment'><? echo $comment; ?></p>
					<a href='<? echo $url; ?>' target='_blank' class='btn btn-sm upcoming-btn visible-xs-block'>More Info</a>
				</div>
				
			</div>
		</div>
	</div>

<? endforeach; ?>

		<div class='row'>
			<div class='col-lg-12 text-center'>
				<img src='./images/julieGlyph.svg' class='upcoming-glyph'>
				<a id='togglePastShows' data-toggle="collapse" href="#pastShows" aria-expanded="false" aria-controls="pastShows">past shows</a>
				<img src='./images/julieGlyph.svg' class='upcoming-glyph'>
			</div>
		</div>

		<div id='pastShows' class='collapse'>
<?php
foreach($pastEvents as $event):

	$date = $event['date'];
	$venue = $event['venue'];
	$town = $event['town'];
	?>

	<div class='row past-li'>
		<div class="col-sm-8 col-sm-offset-3 col-xs-10 col-xs-offset-1">
			<div class='row'>
				<div class='col-xs-12 col-md-3 upcoming-date text-right'>
					<? echo $date; ?>
				</div>
				<div class='col-xs-12 col-md-9'>
					<p class='upcoming-town'><? echo "<strong>" . $venue . "</strong> &#8212; " . $town; ?></p>
				</div>
			</div>
		</div>
	</div>

<? endforeach; ?>

		</div>

	</div>
</section>