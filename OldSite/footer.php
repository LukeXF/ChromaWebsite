	    <footer>
  		<div class="container">
    		<p class="fl"> &copy; 2014 copyright <a href="http://www.chromahills.com/forum/legal.php">legal </a> | <a href="http://www.chromahills.com/forum/viewtopic.php?f=5&amp;t=3l">contact</a></p>
    		<p class="fr"> Designed by <a href="http://luke.sx">Luke Brown</a></p>
  			</div>
		</footer>
				<script src="http://lokeshdhakar.com/projects/lightbox2/js/jquery-1.11.0.min.js"></script>

    	<script src="http://timeago.yarp.com/jquery.timeago.js"></script>
    	<script src="/owl/assets/js/bootstrap-collapse.js"></script>
    	<script src="/assets/js/owl.js"></script>
		<script src="/owl/assets/js/bootstrap-transition.js"></script>
		<script src="/owl/assets/js/bootstrap-tab.js"></script>
		<script src="/owl/assets/js/google-code-prettify/prettify.js"></script>
		<script src="/owl/assets/js/application.js"></script>

		<script src="http://lokeshdhakar.com/projects/lightbox2/js/lightbox.js"></script>
		<script type="text/javascript" src="http://www.steamdev.com/zclip/js/jquery.zclip.js"></script>
		<script src="/owl/owl-carousel/owl.carousel.js"></script>

    	<script type="text/javascript">
    	$(document).ready(function(){

		    $('a#copy-description').zclip({
		        path:'js/ZeroClipboard.swf',
		        copy:$('p#description').text()
		    });

		    // The link with ID "copy-description" will copy
		    // the text of the paragraph with ID "description"


		    $('a#copy-dynamic').zclip({
		        path:'js/ZeroClipboard.swf',
		        copy:function(){return $('input#dynamic').val();}
		    });

		    // The link with ID "copy-dynamic" will copy the current value
		    // of a dynamically changing input with the ID "dynamic"

		});
		</script>
		<script type="text/javascript">

    //
    // STUFF INNIT
    //

    	jQuery(document).ready(function() {
  		jQuery("abbr.timeago").timeago();
		});

		// Animate the element's value from x to y:
		$({ someValue: 0 }).animate({
		    duration: 3000,
		    easing: 'swing', // can be anything
		    step: function () { // called on every step
		        // Update the element's text with rounded-up value:
		        $('.count').text(commaSeparateNumber(Math.round(this.someValue)));
		    }
		});

		function commaSeparateNumber(val) {
		    while (/(\d+)(\d{3})/.test(val.toString())) {
		        val = val.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
		    }
		    return val;
		}
	</script>
  </body>
</html>
<?php if ($debugmode=="true") {
	$time = microtime();
	$time = explode(' ', $time);
	$time = $time[1] + $time[0];
	$finish = $time;
	$total_time = round(($finish - $start), 4);
	echo '<div align="center">DEBUG - This chroma page generated in '.$total_time.' seconds.<br>';
	echo 'Meeeeeoooahhhhhwww! Debug Mode is on!';
	echo '<br><br><i class="fa fa-fighter-jet fa-spin fa-5x"></i></div>';
} ?>


<!-- UserVoice JavaScript SDK (only needed once on a page) -->
<script>(function(){var uv=document.createElement('script');uv.type='text/javascript';uv.async=true;uv.src='//widget.uservoice.com/bO5f3R2zNwfnpyNDqGYwJA.js';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(uv,s)})()</script>

<!-- A tab to launch the Classic Widget -->
<script>
UserVoice = window.UserVoice || [];
UserVoice.push(['showTab', 'classic_widget', {
  mode: 'feedback',
  primary_color: '#cc6d00',
  link_color: '#007dbf',
  forum_id: 254253,
  tab_label: 'Feedback & Support',
  tab_color: '#cc6d00',
  tab_position: 'middle-left',
  tab_inverted: true
}]);
</script>

<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u=(("https:" == document.location.protocol) ? "https" : "http") + "://piwik.luke.sx/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 2]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0]; g.type='text/javascript';
    g.defer=true; g.async=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="http://piwik.luke.sx/piwik.php?idsite=2" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->
