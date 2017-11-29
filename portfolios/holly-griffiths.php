<?php
	$page['title'] = "Portfolios: Holly Griffiths";

	ob_start();
?>

<div class="profile lg-all lg-clear md-all md-clear sm-all sm-clear">
	<h1>Portfolios</h1>
	<!-- Image -->
	<div class="side-column lg1-lg3 lg-padinfull md1-md2 md-padinfull sm-all sm-padinfull">
		<img src="../img/content/holly-griffiths.jpg" alt="Holly Griffiths" />
		<h3>Holly Griffiths</h3>
	</div>
	<!-- / Image -->
	
	<!-- Bio Content -->
	<div class="lg4-lg12 md3-md4 sm-all">
		<h2>About Holly</h2>
		<iframe width="100%" height="125" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/96486357&amp;auto_play=false&amp;hide_related=false&amp;visual=true"></iframe>
		<br />
		<p>Holly is a musician (predominantly alto saxophone, drums and vocals) originally from Deeside in North East Wales, but now based in Cardiff. Although she loves any style of music, Holly is addicted to anything disco, groove and funk related. She has lots of experience in many bands that have varied from classic rock to pop punk, but currently has a solo project up and running which is mainly funk-based.</p>
		<p><a href="mailto:drummerholly@gmail.com">Email Holly Griffiths &raquo;</p>
		<!-- Social Media -->
		<div class="social-media lg-all lg-clear md-all md-clear sm-all sm-clear">
			<a title="Holly Griffiths's Facebook Profile" class="icon-facebook" href="https://www.facebook.com/mrsgizlo" target="_blank"></a>
			<a title="Holly Griffiths's Soundcloud Page" class="icon-soundcloud" href="https://soundcloud.com/mrs-gizlo" target="_blank"></a>
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