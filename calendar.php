<?php include_once("includes/header.php"); ?>
<div class="container has-margin-bottom">
	<div class="row">
		<div class="col-md-9 has-margin-bottom">
			<?php
				$src = "https://www.google.com/calendar/embed?showTitle=0&amp;showTz=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF" . 
					"&amp;src=" . $calendarConfig['src1'] . "&amp;color=" . $calendarConfig['color1'] .
					"&amp;src=" . $calendarConfig['src2'] . "&amp;color=" . $calendarConfig['color2'] .
					"&amp;src=" . $calendarConfig['src3'] . "&amp;color=" . $calendarConfig['color3'] .
					"&amp;src=" . $calendarConfig['src4'] . "&amp;color=" . $calendarConfig['color4'] .
					"&amp;src=" . $calendarConfig['src5'] . "&amp;color=" . $calendarConfig['color5'] .
					"&amp;src=" . $calendarConfig['src6'] . "&amp;color=" . $calendarConfig['color6'] .
					"&amp;ctz=America%2FToronto";
			?>
			<iframe src="<?php echo($src)?>" style="border-width:0;" width="800" height="600" frameborder="0" scrolling="no"></iframe>     
		</div>
		<!--// col md 9--> 
		<?php include_once("includes/third-upcoming-events.php"); ?>
	</div>
</div>
<?php include_once("includes/footer.php"); ?>