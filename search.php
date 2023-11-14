<?php include_once("includes/header.php"); ?>
<script>
  (function() {
    var cx = '000654933645843630745:-_9opcvqb50';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<div class="container has-margin-bottom">
	<div class="row">
		<div class="col-md-9 has-margin-bottom">
			<gcse:search></gcse:search>
		</div>
		<!--// col md 9--> 
		<?php include_once("includes/third-upcoming-events.php"); ?>
	</div>
</div>
<?php include_once("includes/footer.php"); ?>