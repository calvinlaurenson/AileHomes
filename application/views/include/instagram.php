</div>
</div>
<?php
if($feed != null) {
?>
<section>
<div class="row">

	<?php
	foreach ($feed as $key => $value) {
		echo "<div class='col-2'>";
		echo "<br/><br/>";
		echo "<a href='" . $value[0] . "' target='_blank'>";
		echo "<div class='instaImage'>";
		if($value[5] > $value[6]) {
			$push = ((($value[5] - $value[6]) / 2) / $value[5]) * 100;
			$height = 285.5;
			echo "<img src='" . $value[1]  . "' class='homeInstaFeedImg' style='margin-top:" . $push . "%'>";
		} elseif($value[6] > $value[5]) {
			$height = 285.5;
			echo "<img src='" . $value[1]  . "' class='homeInstaFeedImg' style='top:25%'>";
		} else {
			$height = 285.5;
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
</section>
<?php } ?>