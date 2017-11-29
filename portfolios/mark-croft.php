<?php
	$page['title'] = "Portfolios: Mark Croft";

	ob_start();
?>

<div class="profile lg-all lg-clear md-all md-clear sm-all sm-clear">
	<h1>Portfolios</h1>
	<!-- Image -->
	<div class="side-column lg1-lg3 lg-padinfull md1-md2 md-padinfull sm-all sm-padinfull">
		<img src="../img/content/mark-croft.jpg" alt="Mark Croft" />
		<h3>Mark Croft</h3>
	</div>
	<!-- / Image -->
	
	<!-- Bio Content -->
	<div class="lg4-lg12 md3-md4 sm-all">
		<h2>About Mark</h2>
		<p>Mark Croft plays guitar and sings backing vocals in a pop-rock band called <em>Ladies Love a Superhero</em>. They have played many venues across the UK most notably performed to 5,000 people at Plymouth Pavillions in support of <em>McFly</em>.</p>
		<br />
		<h2>Latest Sounds</h2>
		<div class="container lg4-lg9 md-all sm-all">
			<iframe width="560" height="315" src="http://www.youtube.com/embed/cRj-HbZQfOw" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="container lg4-lg9 md-all sm-all">
			<iframe width="560" height="315" src="http://www.youtube.com/embed/DnPQE7LeSOk" frameborder="0" allowfullscreen></iframe>
		</div>
		
		<!-- Social Media -->
		<div class="social-media lg-all lg-clear md-all md-clear sm-all sm-clear">
			<a title="Ladies Love a Superhero Facebook Profile" class="icon-facebook" href="https://www.facebook.com/LadiesLoveaSuperhero?fref=ts" target="_blank"></a>
			<a title="Mark Croft's Twitter Profile" class="icon-twitter" href="https://twitter.com/Mark_LLaS" target="_blank"></a>
			<a title="Ladies Love a Superhero Youtube Page" class="icon-youtube" href="http://www.youtube.com/channel/UCuLx1zIQSvGwVX6DnCkrZkA" target="_blank"></a>
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