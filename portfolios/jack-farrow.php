<?php
	$page['title'] = "Portfolios: Jack Farrow";

	ob_start();
?>

<div class="profile lg-all lg-clear md-all md-clear sm-all sm-clear">
	<h1>Portfolios</h1>
	<!-- Image -->
	<div class="side-column lg1-lg3 lg-padinfull md1-md2 md-padinfull sm-all sm-padinfull">
		<img src="../img/content/jack-farrow.jpg" alt="Jack Farrow" />
		<h3>Jack Farrow</h3>
	</div>
	<!-- / Image -->
	
	<!-- Bio Content -->
	<div class="lg4-lg12 md3-md4 sm-all">
		<h2>About Jack</h2>
		<iframe width="100%" height="125" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/142919336&amp;auto_play=false&amp;hide_related=false&amp;visual=true"></iframe>
		<br />
		<p><em>JellyBear</em> is the alias of Jack Farrow, a twenty-year-old experimental producer currently living in Cardiff. After studying music from an early age playing the piano, <em>JellyBear</em> moved on to writing chiptune-influenced music in 2008 taking inspiration from Sabrepulse, Philter, nsrrenard and many other chip artists. In July 2013 JB released his colourful debut album <em>Hey, JellyBear!</em>, 10 tracks of buzzing squarewaves, looping samples and sweet as candy beats!</p>
		<br />
		<h2>Latest Sounds</h2>
		<div class="container lg4-lg9 md-all sm-all">
			<iframe width="560" height="315" src="http://www.youtube.com/embed/wLuS1XrhXDA" frameborder="0" allowfullscreen></iframe>
		</div>
		
		<!-- Social Media -->
		<div class="social-media lg-all lg-clear md-all md-clear sm-all sm-clear">
			<a title="Hey, JellyBear! Twitter Profile" class="icon-twitter" href="https://twitter.com/heyjellybear" target="_blank"></a>
			<a title="Hey, JellyBear! Youtube Page" class="icon-youtube" href="http://www.youtube.com/user/HeyJellyBear" target="_blank"></a>
			<a title="Hey, JellyBear! Soundcloud Page" class="icon-soundcloud" href="https://soundcloud.com/heyjellybear" target="_blank"></a>
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