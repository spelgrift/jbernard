<?php
$events = array();

// $events[] = array(
// 	'date' => 'FEB 2',
// 	'band' => 'The Rivertown Trio',
// 	'venue' => 'The Corkscrew Wine Bar - Petaluma, CA',
// 	'url' => 'https://www.facebook.com/events/1051982001529360/'
// );


$events[] = array(
	'date' => 'MAR 20',
	'band' => 'The Rivertown Trio',
	'venue' => 'Private Event - Mill Valley, CA',
	'url' => '#'
);

$events[] = array(
	'date' => 'MAR 24',
	'band' => 'The Rivertown Trio',
	'venue' => 'The Panama Hotel - San Rafael, CA',
	'url' => 'https://www.facebook.com/events/1160651137279537/'
);

$events[] = array(
	'date' => 'APR 5',
	'band' => 'The Rivertown Trio',
	'venue' => 'The Corkscrew Wine Bar - Petaluma, CA',
	'url' => 'http://corkscrewbar.com/csb/calendar/'
);

$events[] = array(
	'date' => 'APR 22',
	'band' => 'The Rivertown Trio',
	'venue' => "Tony's Seafood Restaurant - Marshall, CA",
	'url' => '#'
);

$events[] = array(
	'date' => 'APR 29',
	'band' => 'The Rivertown Trio',
	'venue' => 'Rancho Nicasio - Nicasio, CA',
	'url' => 'http://www.ranchonicasio.com/music.htm'
);

$events[] = array(
	'date' => 'MAY 3',
	'band' => 'The Rivertown Trio',
	'venue' => 'The Corkscrew Wine Bar - Petaluma, CA',
	'url' => 'http://corkscrewbar.com/csb/calendar/'
);

$events[] = array(
	'date' => 'MAY 15',
	'band' => 'The Rivertown Trio',
	'venue' => '19 Broadway - Fairfax, CA',
	'url' => 'http://bands.19broadway.com/event/1137149-rivertown-trio-fairfax/'
);

$events[] = array(
	'date' => 'May 24',
	'band' => 'The Rivertown Trio',
	'venue' => 'Fenix Supper Club - San Rafael, CA',
	'url' => 'http://www.fenixlive.com/show/the-rivertown-trio/'
);

?>

<section class="primary" id="upcoming">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2>Upcoming Shows</h2>
			</div>
		</div>

<?php
foreach($events as $event)
{
	$date = $event['date'];
	$band = $event['band'];
	$venue = $event['venue'];
	$url = $event['url'];

	echo <<< EOD
		<div class="row upcoming-li">
			<div class="col-sm-6 col-sm-offset-2 col-xs-6 col-xs-offset-1">
				<div class="row">
					<div class='col-sm-3'>
						<p><strong>$date</strong></p>
					</div>
					<div class='col-sm-9'>
						<p>$venue</p>
						
					</div>
				</div>                    
			</div>
			<div class="col-sm-2 text-right col-xs-4">
				<a href="$url" target='_blank' class="btn btn-sm btn-outline upcoming-btn">More Info</a>
			</div>                
		</div>
EOD;
}
?>
	</div>
</section>