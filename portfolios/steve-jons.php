<?php
	$page['title'] = "Portfolios: Steve Jons";

	ob_start();
?>

<div class="profile lg-all lg-clear md-all md-clear sm-all sm-clear">
	<h1>Portfolios</h1>
	<!-- Image -->
	<div class="side-column lg1-lg3 lg-padinfull md1-md2 md-padinfull sm-all sm-padinfull">
		<img src="../img/content/steve-jons.jpg" alt="Steve Jons" />
		<h3>Steve Jons</h3>
	</div>
	<!-- / Image -->
	
	<!-- Bio Content -->
	<div class="lg4-lg12 md3-md4 sm-all">
		<h2>About Steve</h2>
		<iframe width="100%" height="125" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/115902493&amp;auto_play=false&amp;hide_related=false&amp;visual=true"></iframe>
		<br />
		<p>Steve is a self-confessed musical tart. Occasionally he makes music with many other musical tarts, and sometimes he goes it alone. He currently lives in Cardiff whilst studying his degree, and is currently a guitarist in two bands; a 10-piece funk covers band called <em>Super Chango</em>, and another called <em>Lotus Postcard</em>. Steve loves to be experimental in his music, and has played in a variety of bands over the years. Sometimes these ventures are successful, but he also accepts that sometimes it doesn’t quite work.</p>
		<!-- Social Media -->
		<div class="social-media lg-all lg-clear md-all md-clear sm-all sm-clear">
			<a title="Super Chango's Facebook Profile" class="icon-facebook" href="https://www.facebook.com/superchangouk" target="_blank"></a>
			<a title="Lotus Postcard's Soundcloud Page" class="icon-soundcloud" href="https://soundcloud.com/lotus-postcards" target="_blank"></a>
			<a title="Super Chango's Soundcloud Page" class="icon-soundcloud" href="https://soundcloud.com/superchangouk" target="_blank"></a>
			<a title="Sven Jonzy's Soundcloud Page" class="icon-soundcloud" href="https://soundcloud.com/arthurq" target="_blank"></a>
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