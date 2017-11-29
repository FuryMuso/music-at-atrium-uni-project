<?php
	$page['title'] = "Portfolios: Dan Tucker";

	ob_start();
?>

<div class="profile lg-all lg-clear md-all md-clear sm-all sm-clear">
	<h1>Portfolio</h1>
	<!-- Image -->
	<div class="side-column lg1-lg3 lg-padinfull md1-md2 md-padinfull sm-all sm-padinfull">
		<img src="../img/content/dan-tucker.jpg" alt="Dan Tucker" />
		<h3>Dan Tucker</h3>
	</div>
	<!-- / Image -->
	
	<!-- Bio Content -->
	<div class="lg4-lg12 md3-md4 sm-all">
		<h2>About Dan</h2>
		<iframe width="100%" height="125" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/147495382&amp;auto_play=false&amp;hide_related=false&amp;visual=true"></iframe>
		<br />
		<iframe width="100%" height="125" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/147495711&amp;auto_play=false&amp;hide_related=false&amp;visual=true"></iframe>
		<br />
		<p>Dan is a bassist from the Bristol area who started to learn bass around the age of 18 with a select few rock bands influencing his playing style. As his learning progressed, a more diverse range of musical styles developed his playing. These included funk, jazz, progressive and blues. As well as playing bass, he also has a keen interest in composing for various media platforms such as film, television and video games.</p>
		<br />
		<h2>Latest Sounds</h2>
		<div class="container lg4-lg9 md-all sm-all">
			<iframe width="560" height="315" src="http://www.youtube.com/embed/89AgTW8AYew" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="container lg4-lg9 md-all sm-all">
			<iframe width="560" height="315" src="http://www.youtube.com/embed/teeL1acHF7k" frameborder="0" allowfullscreen></iframe>
		</div>
		<!-- Social Media -->
		<div class="social-media lg-all lg-clear md-all md-clear sm-all sm-clear">
			<a title="Dan Tucker's Facebook Profile" class="icon-facebook" href="https://www.facebook.com/VirtualMuse" target="_blank"></a>
			<a title="Dan Tucker's Twitter Profile" class="icon-twitter" href="https://twitter.com/FuryMuso" target="_blank"></a>
			<a title="Dan Tucker's Youtube Page" class="icon-youtube" href="http://www.youtube.com/user/FuryMuso/videos" target="_blank"></a>
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