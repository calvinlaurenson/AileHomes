</div>
<section style="background-color:#ffc14d;overflow:auto">
	<div class="container">
		<div class="row">
			<div class="col">
				<br/>
			<h1>About Aile Homes</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent a pellentesque dui. Nulla suscipit porta libero in aliquam.</p>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="row">
			<div class="col">
				<br/>
				<h2 class="text-white">The Journey</h2>
				<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent a pellentesque dui. Nulla suscipit porta libero in aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent a pellentesque dui. Nulla suscipit porta libero in aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent a pellentesque dui. Nulla suscipit porta libero in aliquam</p>
				<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent a pellentesque dui. Nulla suscipit porta libero in aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent a pellentesque dui. Nulla suscipit porta libero in aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent a pellentesque dui. Nulla suscipit porta libero in aliquam</p>
				<br/>
		</div>
	</div>
</section>

<section style="background-color:#fff">
	<div class="container">
		<div class="row">
			<div class="col">
			<br/><br/>
			<h2>Behind The Scenes</h2>
			<p>Follow us on Instagam - <a href="https://instagram.com/ailehomes" target="_blank">@AileHomes</a> and Facebook - <a href="https://facebook.com/ailehomes" target="_blank">/AileHomes</a> for more Behind the scenes content and see how our developments come together
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