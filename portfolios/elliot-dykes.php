<?php
	$page['title'] = "Portfolios: Elliot Dykes";

	ob_start();
?>

<div class="profile lg-all lg-clear md-all md-clear sm-all sm-clear">
	<h1>Portfolios</h1>
	<!-- Image -->
	<div class="side-column lg1-lg3 lg-padinfull md1-md2 md-padinfull sm-all sm-padinfull">
		<img src="../img/content/elliot-dykes.jpg" alt="Elliot Dykes" />
		<h3>Elliot Dykes</h3>
	</div>
	<!-- / Image -->
	
	<!-- Bio Content -->
	<div class="lg4-lg12 md3-md4 sm-all">
		<h2>About Elliot</h2>
		<iframe width="100%" height="125" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/130641150&amp;auto_play=false&amp;hide_related=false&amp;visual=true"></iframe>
		<br />
		<iframe width="100%" height="125" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/145021369&amp;auto_play=false&amp;hide_related=false&amp;visual=true"></iframe>
		<br />
		<p>Elliot Dykes is a composer, songwriter and performer from the South West of England. Playing guitar from the age of eight. Elliot has gained knowledge of many styles of music from blues, to contemporary, to jazz, to fakebit chiptune music.</p>
		<p>Armed with a small arsenal of recording equipment and a laptop, Elliot has been able to score and write music in university and hopes to be a composer for film and television once he completes his degree.</p>
		<h2>Latest Sounds</h2>
		<div class="container lg4-lg9 md-all sm-all">
			<iframe width="560" height="315" src="http://www.youtube.com/embed/jJaEhpOXiME" frameborder="0" allowfullscreen></iframe>
		</div>
		<br> 
		<br/>
		<div class="container lg4-lg9 md-all sm-all">
			<iframe width="560" height="315" src="http://www.youtube.com/embed/4kxWpmcTbB8" frameborder="0" allowfullscreen></iframe>
		</div>
		<!-- Social Media -->
		<div class="social-media lg-all lg-clear md-all md-clear sm-all sm-clear">
			<a title="Elliot Dykes's Facebook Profile" class="icon-facebook" href="https://www.facebook.com/ElliotJDy" target="_blank"></a>
			<a title="Elliot Dykes's Youtube Page" class="icon-youtube" href="http://www.youtube.com/user/Sunuke" target="_blank"></a>
			<a title="Elliot Dykes's Soundcloud Page" class="icon-soundcloud" href="https://soundcloud.com/elliot-dykes" target="_blank"></a>
			<a title="Elliot Dykes's WordPress" class="icon-wordpress" href="http://wearemusicmakers.wordpress.com/" target="_blank"></a>
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