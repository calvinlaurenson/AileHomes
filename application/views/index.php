<div class="container">
<div class="row h-100">
	<div class="col">
		<img src="<?php echo base_url() ?>images/ogo.webp" class="homeImg">
	</div>
	<div class="col">
		<ul id="homeList" style='height:100%'>
			<a href="<?php echo base_url() ?>Developments/">
				<li>Aile Developments</li>
			</a>
			<a href="<?php echo base_url() ?>Company/">
				<li>Discover Aile</li>
			</a>
			<a href="<?php echo base_url() ?>Company/contact">
				<li>Contact Us</li>
			</a>
		</ul>
	</div>

	<div class="row h-100" style="display:none;">
		<div class="col-lg-12 mx-auto">
			<?php
			foreach ($feed as $key => $value) {
				echo "<div class='homeInstaFeed'>";
				echo "<img src='" . $value[1]  . "' class='homeInstaFeedImg'>";
				echo "</div>";
			}
			?>
		</div>
		
	</div>

</div>
