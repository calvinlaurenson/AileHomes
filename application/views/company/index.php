</div>
<section>
	<div class="container">
		<div class="row">
			<div class="col">
				<br/>
			<h1 class="text-center text-white">About Aile Homes</h1>
			<p class="text-white text-center">Antony Iren and Luke Phillimore-Kelly, the Managing Directors are proud to offer high quality family homes built in extremely desirable locations within the Garden of England.</p>
			<p class="text-center text-white">The company is dedicated to combining all the best in local architectural history with the very latest in modern amenities. The AILE product typically has a traditional exterior design with an impressive high level specification and meticulous attention to every detail.</p>
		</div>
	</div>
</div>

	<br/>
	<br/>
	<div class="hr"></div>
</section>

<section>
	<div class="container">
		<div class="row">
			<div class="col">
				<br/>
				<h2 class="text-white text-center">The Journey</h2>
				<p class="text-white text-center">Aile Homes started life as a dream between the founders Antony Iren and Luke Phillimore-Kelly.</p>
				<p class="text-white text-center">After finding the perfect parcel of land within commuting distance of London, Aile set about developing their first four properties.</p>
				<p class="text-white text-center">With Charing Cross due to be complete in late 2019, Aile are looking forward to the next development announcing in 2020.</p>
				<br/>
		</div>
	</div>
</div>

	<br/>
	<br/>
	<div class="hr"></div>
</section>

<section style="background-color:#000">
	<div class="container">
		<div class="row">
			<div class="col">
			<br/><br/>
			<h2 class="text-center text-white">Behind The Scenes</h2>
			<p class="text-center text-white">Follow us on Instagam - <a href="https://instagram.com/ailehomes" target="_blank">@AileHomes</a> and Facebook - <a href="https://facebook.com/ailehomes" target="_blank">/AileHomes</a> for more Behind the scenes content and see how our developments come together
		</div>
		<div class="row">
			<?php
			foreach ($feed as $key => $value) {
				echo "<div class='col-4'>";
				echo "<a href='" . $value[0] . "' target='_blank'>";
				echo "<div class='instaImage'>";
				if($value[5] > $value[6]) {
					$push = ((($value[5] - $value[6]) / 2) / $value[5]) * 100;
					$height = 350;
					echo "<img src='" . $value[1]  . "' class='homeInstaFeedImg' style='margin-top:" . $push . "%'>";
				} elseif($value[6] > $value[5]) {
					$height = 437.5;
					echo "<img src='" . $value[1]  . "' class='homeInstaFeedImg' style='top:25%'>";
				} else {
					$height = 350;
					echo "<img src='" . $value[1]  . "' class='homeInstaFeedImg'>";
				}
				//echo $value[2] . ' ' . $value[3];
				echo "<div class='instaHiddenMeta' style='height:" . $height . "px'>";
				echo "<div class='text'><i class='far fa-heart'></i> " . $value[2] . " <span style='margin-left:20px'></span><i class='far fa-comment-alt'></i> " . $value[3] . "</div>";
				echo "</div>";
				echo "</div>";
				echo "</a>";
				echo "<br/><br/>";
				echo "</div>";
			}
			?>
		</div>
		</div>
	</div>
</section>