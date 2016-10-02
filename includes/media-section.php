<section id="media" class="secondary">
	<div class="container">

	<!-- VIDEOS -->
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2>Videos - The Porch Sessions</h2>
			</div>
		</div>

		<!-- First Row -->
		<div class="row">
			<div class="col-sm-4 col-xs-10 col-xs-offset-1 col-sm-offset-0">
				<div class="thumbnail videoThumb">
					<a href='#videoModal-01' data-toggle='modal'>
						<span class='playButton'></span>
						<img class='videoThumb' src="images/videoThumbs/01_killingBlues.jpg" alt="Killing the Blues">
					</a>
					<div class='caption text-center'>Killing The Blues</div>
				</div>
			</div>

			<div class="col-sm-4 col-xs-10 col-xs-offset-1 col-sm-offset-0">
				<div class="thumbnail videoThumb">
					<a href='#videoModal-02' data-toggle='modal'>
						<span class='playButton'></span>
						<img class='videoThumb' src="images/videoThumbs/02_cantLetGo.jpg" alt="Can't Let Go">
					</a>
					<div class='caption text-center'>Can't Let Go</div>
				</div>
			</div>
			
			<div class="col-sm-4 col-xs-10 col-xs-offset-1 col-sm-offset-0">
				<div class="thumbnail videoThumb">
					<a href='#videoModal-03' data-toggle='modal'>
						<span class='playButton'></span>
						<img class='videoThumb' src="images/videoThumbs/03_longTime.jpg" alt="Long Time Gone">
					</a>
					<div class='caption text-center'>Long Time Gone</div>
				</div>
			</div>

			<div class="col-sm-4 col-xs-10 col-xs-offset-1 col-sm-offset-0">
				<div class="thumbnail videoThumb">
					<a href='#videoModal-04' data-toggle='modal'>
						<span class='playButton'></span>
						<img class='videoThumb' src="images/videoThumbs/04_monkey.jpg" alt="Monkey and the Engineer">
					</a>
					<div class='caption text-center'>Monkey and the Engineer</div>
				</div>
			</div>

			<div class="col-sm-4 col-xs-10 col-xs-offset-1 col-sm-offset-0">
				<div class="thumbnail videoThumb">
					<a href='#videoModal-05' data-toggle='modal'>
						<span class='playButton'></span>
						<img class='videoThumb' src="images/videoThumbs/06_greatDivide.jpg" alt="Across The Great Divide">
					</a>
					<div class='caption text-center'>Across The Great Divide</div>
				</div>
			</div>

			<div class="col-sm-4 col-xs-10 col-xs-offset-1 col-sm-offset-0">
				<div class="thumbnail videoThumb">
					<a href='#videoModal-06' data-toggle='modal'>
						<span class='playButton'></span>
						<img class='videoThumb' src="images/videoThumbs/07_theWayItGoes.jpg" alt="The Way It Goes">
					</a>
					<div class='caption text-center'>The Way It Goes</div>
				</div>
			</div>

		</div>
	<!-- /VIDEOS -->

	<!-- PHOTOS -->
		<div class="row spacerTop">
			<div class="col-lg-12 text-center">
				<h2>Photos</h2>
			</div>
		</div>

		<div class="row">
<?php

for($i = 0; $i <= 23; $i++)
{
	$slide = $i;
	$imageNumber = $i + 1;
	if($imageNumber <= 9){
		$imageNumber = "0" . strval($imageNumber);
	}else{
		$imageNumber = strval($imageNumber);
	}
	$path = 'images/thumbs/' . $imageNumber . '_Thumb.jpg';

	echo <<< EOD

			<div class="col-xs-4 col-md-2">
				<div class="thumbnail">
					<a href='#' class='photoThumb' data-target="#photoCarousel" data-slide-to='$i'>
						<img src='$path' alt="">
					</a>
				</div>
			</div>
EOD;
}

?>
			
		</div>
	<!-- /PHOTOS -->
	</div>
</section>