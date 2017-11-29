<?php
	$page['title'] = "Portfolios: Daniel Lewis";

	ob_start();
?>

<div class="profile lg-all lg-clear md-all md-clear sm-all sm-clear">
	<h1>Portfolios</h1>
	<!-- Image -->
	<div class="side-column lg1-lg3 lg-padinfull md1-md2 md-padinfull sm-all sm-padinfull">
		<img src="../img/content/daniel-lewis.jpg" alt="Daniel Lewis" />
		<h3>Daniel Lewis</h3>
	</div>
	<!-- / Image -->
	
	<!-- Bio Content -->
	<div class="lg4-lg12 md3-md4 sm-all">
		<h2>About Daniel</h2>
		<iframe width="100%" height="125" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/131793427&amp;auto_play=false&amp;hide_related=false&amp;visual=true"></iframe>
		<br />
		<iframe width="100%" height="125" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/125418627&amp;auto_play=false&amp;hide_related=false&amp;visual=true"></iframe>
		<br />
		<p>Composer, Producer and Instrumentalist, Dan has been playing guitar and bass for over 10 years and has had experience with Jazz, Indie, Rock and Electronic music in various sub-genres. From a young age he taught guitar at 'Clive’s Easy-learn Music School,' where pupils of all ages learnt from a modern streamlined syllabus and performed in organized stage-shows.</p>
		<p>His current projects include two bands; 'Veritas,' a contemporary rock/punk &amp; soul band and 'In Bliss,' an indie/shoegaze combination of pop hooks and thick ambient guitars. Dan records and produces both bands whilst also composing for 'In Bliss.'
</p>
		<!-- Social Media -->
		<div class="social-media lg-all lg-clear md-all md-clear sm-all sm-clear">
			<a title="In Bliss Facebook Profile" class="icon-facebook" href="https://www.facebook.com/inblissuk?fref=ts" target="_blank"></a>
			<a title="Daniel Lewis's Soundcloud Page" class="icon-soundcloud" href="https://soundcloud.com/danieljlewis" target="_blank"></a>
			<a title="In Bliss Soundcloud Band Page - In Bliss" class="icon-soundcloud" href="https://soundcloud.com/in_bliss" target="_blank"></a>
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