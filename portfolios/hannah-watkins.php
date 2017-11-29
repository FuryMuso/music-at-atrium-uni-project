<?php
	$page['title'] = "Portfolios: Hannah Watkins";

	ob_start();
?>

<div class="profile lg-all lg-clear md-all md-clear sm-all sm-clear">
	<h1>Portfolios</h1>
	<!-- Image -->
	<div class="side-column lg1-lg3 lg-padinfull md1-md2 md-padinfull sm-all sm-padinfull">
		<img src="../img/content/hannah-watkins.jpg" alt="Hannah Watkins" />
		<h3>Hannah Watkins</h3>
	</div>
	<!-- / Image -->
	
	<!-- Bio Content -->
	<div class="lg4-lg12 md3-md4 sm-all">
		<h2>About Hannah</h2>
		<iframe width="100%" height="125" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/124367364&amp;auto_play=false&amp;hide_related=false&amp;visual=true"></iframe>
		<br />
		<p>Hannah Watkins is a singer songwriter from South Wales who loves to perform. She does a lot of gigs with just her and her guitar, and Hannah has experience performing at the Royal Albert Hall and St David's Hall in Cardiff. Hannah’s YouTube and SoundCloud accounts have a mix of original songs and covers, hopefully you won't be disappointed!</p>
		<h2>Latest Sounds</h2>
		<div class="container lg4-lg9 md-all sm-all">
			<iframe width="560" height="315" src="http://www.youtube.com/embed/WxSHLuY4VOU" frameborder="0" allowfullscreen></iframe>
		</div>
		
		<!-- Social Media -->
		<div class="social-media lg-all lg-clear md-all md-clear sm-all sm-clear">
			<a title="Hannah Watkins's Facebook Profile" class="icon-facebook" href="https://www.facebook.com/hanawatkins" target="_blank"></a>
			<a title="Hannah Watkins's Twitter Profile" class="icon-twitter" href="https://twitter.com/hannahwatkins" target="_blank"></a>
			<a title="Hannah Watkins's Youtube Page" class="icon-youtube" href="http://www.youtube.com/user/xxhanawatkinsxx" target="_blank"></a>
			<a title="Hannah Watkins's Soundcloud Page" class="icon-soundcloud" href="https://soundcloud.com/hannahwatkins" target="_blank"></a>
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