<?php
	$page['title'] = "Portfolios: Kathryn Hailes";

	ob_start();
?>

<div class="profile lg-all lg-clear md-all md-clear sm-all sm-clear">
	<h1>Portfolios</h1>
	<!-- Image -->
	<div class="side-column lg1-lg3 lg-padinfull md1-md2 md-padinfull sm-all sm-padinfull">
		<img src="../img/content/kathryn-hailes.jpg" alt="Kathryn Hailes" />
		<h3>Kathryn Hailes</h3>
	</div>
	<!-- / Image -->
	
	<!-- Bio Content -->
	<div class="lg4-lg12 md3-md4 sm-all">
		<h2>About Kathryn</h2>
		<iframe width="100%" height="125" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/90510112&amp;auto_play=false&amp;hide_related=false&amp;visual=true"></iframe>
		<br />
		<iframe width="100%" height="125" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/147544368&amp;auto_play=false&amp;hide_related=false&amp;visual=true"></iframe>
		<br />
		<p>Kathryn is currently a 3rd year BA (Hons) Popular Music Student. She plays Piano (Grade 8), Flute (Grade 5), Guitar, Bass Guitar, as well as occasionally singing too. Kathryn is used to playing in a range of styles including Classical music for Piano and Flute. She is able to sight read and improvise on Piano and Flute, and has experience playing as part of a band, an orchestra, a flute choir, and a vocal choir as well as playing solo. </p>
		<!-- Social Media -->
		<div class="social-media lg-all lg-clear md-all md-clear sm-all sm-clear">
			<a title="Kathryn Hailes's Youtube Page" class="icon-youtube" href="http://www.youtube.com/user/LovesPlayingGuitar" target="_blank"></a>
			<a title="Kathryn Hailes's Soundcloud Page" class="icon-soundcloud" href="https://soundcloud.com/kathrynhailes" target="_blank"></a>
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