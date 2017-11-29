<?php
	$page['title'] = "Portfolios: Milosz Niziol";

	ob_start();
?>

<div class="profile lg-all lg-clear md-all md-clear sm-all sm-clear">
	<h1>Portfolios</h1>
	<!-- Image -->
	<div class="side-column lg1-lg3 lg-padinfull md1-md2 md-padinfull sm-all sm-padinfull">
		<img src="../img/content/milosz-niziol.jpg" alt="Milosz Niziol" />
		<h3>Milosz Niziol</h3>
	</div>
	<!-- / Image -->
	
	<!-- Bio Content -->
	<div class="lg4-lg12 md3-md4 sm-all">
		<h2>About Milosz</h2>
		<p>Milosz is a performer, songwriter and composer based in the South West. He plays bass, as well as keys, and is a keen rock and metal fan (although does enjoy a good bit of <em>Simon &amp; Garfunkel</em> on occasion).</p>
		<p>Milosz started his music education at the age of 17. He graduated from Weston College in 2011 with a triple distinction before starting at the University of South Wales the same year. He has achieved Rockschool Grade 6 on bass, and has played live all over the UK.</p>
		<p>Milosz has recorded a demo with <em>Gelgothen</em> (Plagues, 2011), as well as an EP with <em>Rager</em> (Image of Fear, 2012). His current band <em>Medusa</em> are set to record a full-length album in 2014 at Regal Studios in Cambridgeshire. More gigs and video shoots are also in the pipeline.</p>
		<br />
		<h2>Latest Sounds</h2>
		<div class="container lg4-lg9 md-all sm-all">
			<iframe width="560" height="315" src="http://www.youtube.com/embed/-oGg_8x-SuQ" frameborder="0" allowfullscreen></iframe>
		</div>
		<!-- Social Media -->
		<div class="social-media lg-all lg-clear md-all md-clear sm-all sm-clear">
			<a title="Milosz Niziol's Youtube Page" class="icon-youtube" href="http://www.youtube.com/user/MilekCliff" target="_blank"></a>
			<a title="Gelgothen's Youtube Page" class="icon-youtube" href="http://www.youtube.com/user/Gelgothen" target="_blank"></a>
			<a title="RagerMetal's Youtube Page" class="icon-youtube" href="http://www.youtube.com/user/RagerMetal" target="_blank"></a>
			<a title="Medusa's Youtube Page" class="icon-youtube" href="http://www.youtube.com/user/umbillybagneys" target="_blank"></a>
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