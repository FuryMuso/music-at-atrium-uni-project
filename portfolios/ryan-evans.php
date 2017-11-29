<?php
	$page['title'] = "Portfolios: Ryan Evans";

	ob_start();
?>

<div class="profile lg-all lg-clear md-all md-clear sm-all sm-clear">
	<h1>Portfolios</h1>
	<!-- Image -->
	<div class="side-column lg1-lg3 lg-padinfull md1-md2 md-padinfull sm-all sm-padinfull">
		<img src="../img/content/ryan-evans.jpg" alt="Ryan Evans" />
		<h3>Ryan Evans</h3>
	</div>
	<!-- / Image -->
	
	<!-- Bio Content -->
	<div class="lg4-lg12 md3-md4 sm-all">
		<h2>About Ryan</h2>
		<iframe width="100%" height="125" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/133894181&amp;auto_play=false&amp;hide_related=false&amp;visual=true"></iframe>
		<br />
		<p>Ryan is an aspiring composer, coming from an unhealthy obsession with video games and their music, especially the work of <em>Nobuo Uematsu</em>, <em>Koji Kondo</em> and <em>Jeremy Soule</em>. Examples of his music can be heard on SoundCloud and YouTube. Ryan has also had experience composing for short film. He is currently focusing on building a portfolio, but in the future would love to write music for role-playing, story driven games such as the Final Fantasy series, but is generally happy to write music for anything, from 20-second advertisements to full-length movies. He is currently working on composing for stop motion animation and a game.</p>
		<p><a href="mailto:ryancarlevans@hotmail.com" target="_blank">Email Ryan Evans &raquo;</a></p>
		<br />
		<h2>Latest Sounds</h2>
		<div class="container lg4-lg9 md-all sm-all">
			<iframe width="560" height="315" src="http://www.youtube.com/embed/CXhNde83xgc" frameborder="0" allowfullscreen></iframe>
		</div>
		<div>
		<div class="container lg4-lg9 md-all sm-all">
			<iframe width="560" height="315" src="http://www.youtube.com/embed/pKoeFp2IW6s" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
		<!-- Social Media -->
		<div class="social-media lg-all lg-clear md-all md-clear sm-all sm-clear">
			<a title="Ryan Evans's Youtube Page" class="icon-youtube" href="http://www.youtube.com/user/MetalheadRyan07" target="_blank"></a>
			<a title="Ryan Evans's Soundcloud Page" class="icon-soundcloud" href="https://soundcloud.com/ryanibanezman1" target="_blank"></a>
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