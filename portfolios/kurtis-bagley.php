<?php
	$page['title'] = "Portfolios: Kurtis Bagley";

	ob_start();
?>

<div class="profile lg-all lg-clear md-all md-clear sm-all sm-clear">
	<h1>Portfolios</h1>
	<!-- Image -->
	<div class="side-column lg1-lg3 lg-padinfull md1-md2 md-padinfull sm-all sm-padinfull">
		<img src="../img/content/kurtis-bagley.jpg" alt="Kurtis Bagley" />
		<h3>Kurtis Bagley</h3>
	</div>
	<!-- / Image -->
	
	<!-- Bio Content -->
	<div class="lg4-lg12 md3-md4 sm-all">
		<h2>About Kurtis</h2>
		<iframe width="100%" height="125" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/97998547&amp;auto_play=false&amp;hide_related=false&amp;visual=true"></iframe>
		<br />
		<p>Kurtis is a classical/electric guitarist from Cardiff, South Wales. He’s been playing guitar since the age of 7, playing in numerous concerts and completing all 8 classical guitar grades in the process. Whilst he composes in several different genres with many projects on the go as a result of his University course, his main project is a 5-piece progressive/thrash metal band called Archean.</p>
		
		<!-- Social Media -->
		<div class="social-media lg-all lg-clear md-all md-clear sm-all sm-clear">
			<a title="Archean Facebook Profile" class="icon-facebook" href="https://www.facebook.com/pages/Archean/373761166074824?fref=ts" target="_blank"></a>
			<a title="Archean Youtube Page" class="icon-youtube" href="http://www.youtube.com/channel/UCCFXlUKBobsgRK1LbEEQNBQ/videos" target="_blank"></a>
			<a title="Kurtis Bagley's Youtube Page" class="icon-youtube" href="http://www.youtube.com/user/KBagaz/videos" target="_blank"></a>
			<a title="fezandkurt Soundcloud Band Page" class="icon-soundcloud" href="https://soundcloud.com/fezandkurt" target="_blank"></a>
			<a title="Kurtis Bagley's Soundcloud Page" class="icon-soundcloud" href="https://soundcloud.com/k_bagley6" target="_blank"></a>
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