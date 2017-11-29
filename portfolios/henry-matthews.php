<?php
	$page['title'] = "Portfolios: Henry Matthews";

	ob_start();
?>

<div class="profile lg-all lg-clear md-all md-clear sm-all sm-clear">
	<h1>Portfolios</h1>
	<!-- Image -->
	<div class="side-column lg1-lg3 lg-padinfull md1-md2 md-padinfull sm-all sm-padinfull">
		<img src="../img/content/henry-matthews.jpg" alt="Henry Matthews" />
		<h3>Henry Matthews</h3>
	</div>
	<!-- / Image -->
	
	<!-- Bio Content -->
	<div class="lg4-lg12 md3-md4 sm-all">
		<h2>About Henry</h2>
		<iframe width="100%" height="125" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/89999567&amp;auto_play=false&amp;hide_related=false&amp;visual=true"></iframe>
		<br />
		<p>Henry Matthews is a member of four-piece Indie alternative band <a title="Visit the BRIDGES Band Page" href="http://www.bridgesofficial.com/" target="_blank">BRIDGES</a>, who formed in June 2012. Reviewers have previously described him as the creator of wonderful bass counter-melodies. During this time, <a title="Visit the BRIDGES Band Page" href="http://www.bridgesofficial.com/" target="_blank">BRIDGES</a> have toured independently, released two EP's and played national festivals such as Beach Break Live and Dot-to-Dot Festival. As well as this the band has supported established acts such as This Town Needs Guns, To Kill A King, BLEECH, M O N E Y and Brother and Bones, to name just a few.</p>
		<p><a href="http://www.bridgesofficial.com/" target="_blank" title="Visit the Official BRIDGES Website">Official BRIDGES Website &raquo;</a></p>
		<!-- Social Media -->
		<div class="social-media lg-all lg-clear md-all md-clear sm-all sm-clear">
			<a title="Henry Matthews's Youtube Page" class="icon-youtube" href="http://www.youtube.com/user/officialbridges" target="_blank"></a>
			<a title="Henry Matthews's Soundcloud Page" class="icon-soundcloud" href="https://soundcloud.com/bridgesofficial" target="_blank"></a>
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