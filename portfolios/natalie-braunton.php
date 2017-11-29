<?php
	$page['title'] = "Portfolios: Natalie Braunton";

	ob_start();
?>

<div class="profile lg-all lg-clear md-all md-clear sm-all sm-clear">
	<h1>Portfolios</h1>
	<!-- Image -->
	<div class="side-column lg1-lg3 lg-padinfull md1-md2 md-padinfull sm-all sm-padinfull">
		<img src="../img/content/natalie-braunton.jpg" alt="Natalie Braunton" />
		<h3>Natalie Michelle Braunton</h3>
	</div>
	<!-- / Image -->
	
	<!-- Bio Content -->
	<div class="lg4-lg12 md3-md4 sm-all">
		<h2>About Natalie</h2>
		<iframe width="100%" height="125" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/142354110&amp;auto_play=false&amp;hide_related=false&amp;visual=true"></iframe>
		<br />
		<iframe width="100%" height="125" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/142043771&amp;auto_play=false&amp;hide_related=false&amp;visual=true"></iframe>
		<br />
		<p>Natalie has been playing bass guitar since the age of 14, and has been writing songs since I was around 15. She has been part of a few ensembles such as an acoustic duo called <em>Holly Mauris</em> and a funk/rock band called <em>The Funky Jam Jams</em>.</p>
		<p>Natalie was the bassist and backing vocalist of indie/rock/pop band <em>Atoms</em>, but is currently part of smaller collaboration projects. These inculde projects with Hadi Ahmed and Gemma Rose Thomas.</p>
		<p>An on-going project of hers is recording the original songs she has composed over the past 7 years using recording equipment at her home as well as asking Music Technology students to record using the facilities at the Atrium.</p>
		<h2>Latest Sounds</h2>
		<div class="container lg4-lg9 md-all sm-all">
			<iframe src="//player.vimeo.com/video/84663896" width="500" height="379" frameborder="0" webkitallowfullscreen mozallowfullscreen      allowfullscreen></iframe> <p><a href="http://vimeo.com/84663896">Stalker</a> from <a href="http://vimeo.com/user19471946">Natalie Michelle Braunton</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
		</div>
		<div class="container lg4-lg9 md-all sm-all">
			<iframe src="//player.vimeo.com/video/84585536" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="http://vimeo.com/84585536">Trailer for Witcher II</a> from <a href="http://vimeo.com/user19471946">Natalie Michelle Braunton</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
		</div>
		<!-- Social Media -->
		<div class="social-media lg-all lg-clear md-all md-clear sm-all sm-clear">
			<a title="Atom's Facebook Profile" class="icon-facebook" href="https://www.facebook.com/thisisatoms" target="_blank"></a>
			<a title="Atom's Twitter Profile" class="icon-twitter" href="https://twitter.com/thisisatoms" target="_blank"></a>
			<a title="Natalie Braunton's Soundcloud Page" class="icon-soundcloud" href="https://soundcloud.com/natalie-michelle-braunton" target="_blank"></a>
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