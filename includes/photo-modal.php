<?php

$path = "images/photos/";
$photoURLs = array();
$photoCount = 24;

for($i = 0; $i <= ($photoCount - 1); $i++)
{
	$imageNumber = $i + 1;
	$paddedNumber = str_pad((int) $imageNumber, 2, "0", STR_PAD_LEFT);
	$photoURLs[] = $path . $paddedNumber . "_Photo.jpg";
}

?>

<div class="simple-modal modal fade" id="photoModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="close-modal" data-dismiss="modal"><div class="lr"><div class="rl"></div></div></div>
	<div class="modal-dialog modal-lg">
	   <div class="modal-content">
		   <div class="modal-body">
				<div id="photoCarousel" class="carousel slide" data-ride="carousel">
					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<?php

						$flag = true;

						foreach($photoURLs as $URL){
							if($flag){
								$class = 'item active';
								$flag = false;
							} else {
								$class = 'item';
							}
							echo <<< EOD

<div class="$class slide text-center">
	<img class="slideImg" src="$URL" alt="">
</div>
EOD;
						}
						?>
					</div>
					<!-- Controls -->
					<a class="left carousel-control" href="#photoCarousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#photoCarousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
		   </div>
		</div>
   </div>
</div>