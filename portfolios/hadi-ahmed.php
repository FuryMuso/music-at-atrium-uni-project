<?php
	$page['title'] = "Portfolios: Hadi Ahmed";

	ob_start();
?>

<div class="profile lg-all lg-clear md-all md-clear sm-all sm-clear">
	<h1>Portfolios</h1>
	<!-- Image -->
	<div class="side-column lg1-lg3 lg-padinfull md1-md2 md-padinfull sm-all sm-padinfull">
		<img src="../img/content/hadi-ahmed.jpg" alt="Hadi Ahmed" />
		<h3>Hadi Ahmed</h3>
	</div>
	<!-- / Image -->
	
	<!-- Bio Content -->
	<div class="lg4-lg12 md3-md4 sm-all">
		<h2>About Hadi</h2>
		<iframe width="100%" height="125" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/102323913&amp;auto_play=false&amp;hide_related=false&amp;visual=true"></iframe>
		<br />
		<iframe width="100%" height="125" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/142043771&amp;auto_play=false&amp;hide_related=false&amp;visual=true"></iframe>
		<br />
		<p>Hadi Ahmed is a 21 year-old musician and producer originally from Reading, but now residing in Cardiff, where he studies at the University of South Wales.</p>
		<p>Initially picking up the guitar at the age of 14, his musical interests were primarily rock-oriented, but over the years he has begun to take an interest in creating electronic music, spanning a variety of styles from house to ambient. As well as this, he has produced several recordings for others at his home studio, and is planning to stay in Cardiff to pursue a masters degree in music production and engineering.
		</p>
		<h2>Latest Sounds<h2>
		<div class="container lg4-lg9 md-all sm-all">
			<iframe width="560" height="315" src="http://www.youtube.com/embed/IWAWiM-nEEE" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="container lg4-lg9 md-all sm-all">
			<iframe width="560" height="315" src="http://www.youtube.com/embed/k7gY7a7EZtw" frameborder="0" allowfullscreen></iframe>
		</div>
		
		<!-- Social Media -->
		<div class="social-media lg-all lg-clear md-all md-clear sm-all sm-clear">
			<a title="Hadi Ahmed's Twitter Profile" class="icon-twitter" href="https://twitter.com/thisishadi" target="_blank"></a>
			<a title="Hadi Ahmed's Youtube Page" class="icon-youtube" href="http://www.youtube.com/user/hadiahmed" target="_blank"></a>
			<a title="Hadi Ahmed's Soundcloud Page" class="icon-soundcloud" href="https://soundcloud.com/hadiahmed" target="_blank"></a>
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