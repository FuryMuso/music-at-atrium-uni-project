<?php
	$page['title'] = "Portfolios: Barnaby Cockell";

	ob_start();
?>

<div class="profile lg-all lg-clear md-all md-clear sm-all sm-clear">
	<h1>Portfolios</h1>
	<!-- Image -->
	<div class="side-column lg1-lg3 lg-padinfull md1-md2 md-padinfull sm-all sm-padinfull">
		<img src="../img/content/barnaby-cockell.jpg" alt="Barnaby Cockell" />
		<h3>Barnaby Cockell</h3>
	</div>
	<!-- / Image -->
	
	<!-- Bio Content -->
	<div class="lg4-lg12 md3-md4 sm-all">
		<h2>About Barnaby</h2>
		<iframe width="100%" height="125" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/133365239&amp;auto_play=false&amp;hide_related=false&amp;visual=true"></iframe>
		<br />
		<p>Barnaby Cockell creates music inspired by despair, joy, narcissism, practice, jamming, love, despair and Jeff Buckley. His passion for songwriting encourages him to write continually, and he plans to continue writing when he graduates from USW. Barney is primarily a guitarist and vocalist, and he enjoys sharing his music with people. LAST OF THE DARK HEARTS is Barney’s one-man band, and you can check this project out on a range of social networking sites.</p>
		<h2>Latest Sounds<h2>
		<div class="container lg4-lg9 md-all sm-all">
			<iframe width="560" height="315" src="http://www.youtube.com/embed/PHfP6aCJHUg" frameborder="0" allowfullscreen></iframe>
		</div>
		<!-- Social Media -->
		<div class="social-media lg-all lg-clear md-all md-clear sm-all sm-clear">
			<a title="Lastofthedarkhearts Twitter Profile" class="icon-twitter" href="https://twitter.com/LOTDHEARTS" target="_blank"></a>
			<a title="Barnaby Cockell's Soundcloud Page" class="icon-soundcloud" href="https://soundcloud.com/barney-cockell" target="_blank"></a>
			<a title="Lastofthedarkhearts Youtube Page" class="icon-youtube" href="http://www.youtube.com/channel/UCv3-rk89V5iY9VIQpdBxHMQ" target="_blank"></a>
			<a title="Lastofthedarkhearts Reverb Nation Profile" class="icon-star" href="http://www.reverbnation.com/LastoftheDarkHearts?profile_view_source=profile_box" target="_blank"></a>
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