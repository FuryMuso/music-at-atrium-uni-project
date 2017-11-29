<?php
	$page['title'] = "Portfolios: Chris Hutchings";

	ob_start();
?>

<div class="profile lg-all lg-clear md-all md-clear sm-all sm-clear">
	<h1>Portfolios</h1>
	<!-- Image -->
	<div class="side-column lg1-lg3 lg-padinfull md1-md2 md-padinfull sm-all sm-padinfull">
		<img src="../img/content/chris-hutchings.jpg" alt="Chris Hutchings" />
		<h3>Chris Hutchings</h3>
	</div>
	<!-- / Image -->
	
	<!-- Bio Content -->
	<div class="lg4-lg12 md3-md4 sm-all">
		<h2>About Chris</h2>
		<p>Chris is a 24 year-old guitarist and harmonica player from Caerphilly, South Wales. He has played in a variety in bands over the last 8 years, ranging in style from Delta Blues to Metal. He has previously had tracks featured as theme music for an Internet television series and also written three songs for his previous band Y Trydan, which are available as a <a title="Watch Chris' BBC Session" href="http://www.bbc.co.uk/radiocymru/c2/safle/sesiynau/cynnwys/2011ytrydan.shtml" target="_blank">BBC session</a>.</p>
		<!-- Social Media -->
		<div class="social-media lg-all lg-clear md-all md-clear sm-all sm-clear">
			<a title="The Electric Company Facebook Profile" class="icon-facebook" href="https://www.facebook.com/pages/The-Electric-Company/129303610415103" target="_blank"></a>
			<a title="The Electric Company Twitter Profile" class="icon-twitter" href="https://twitter.com/HutchTEC" target="_blank"></a>
			<a title="The Electric Company Youtube Page" class="icon-youtube" href="http://www.youtube.com/user/YTrydan" target="_blank"></a>
		</div>
		<!-- / Social Media -->
	</div>
	<!-- / Bio Content -->
</div>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49468349-1', 'musicatatrium.co.uk');
  ga('send', 'pageview');

</script>

<?php
	$page['content'] = ob_get_contents();
	ob_end_clean();

	include('../include/layout.php');
?>