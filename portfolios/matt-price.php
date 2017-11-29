<?php
	$page['title'] = "Portfolios: Matt Price";

	ob_start();
?>

<div class="profile lg-all lg-clear md-all md-clear sm-all sm-clear">
	<h1>Portfolios</h1>
	<!-- Image -->
	<div class="side-column lg1-lg3 lg-padinfull md1-md2 md-padinfull sm-all sm-padinfull">
		<img src="../img/content/matt-price.jpg" alt="Matt Price" />
		<h3>Matt Price</h3>
	</div>
	<!-- / Image -->
	
	<!-- Bio Content -->
	<div class="lg4-lg12 md3-md4 sm-all">
		<h2>About Matt</h2>
		<iframe width="100%" height="125" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/20765896&amp;auto_play=false&amp;hide_related=false&amp;visual=true"></iframe>
		<br />
		<p>Matt is a trumpet player with experience as a lyricist/singer as well as playing the guitar, clarinet and piano. Knocking about for over a decade initially playing in Orchestras and Big bands, Matt entered the Ska scene at 14 and has since gone on to perform in over 10 countries across Europe with various projects on national and international tours, recording 3 albums and a few EPs in the process.</p>
		<p>After working with Ska acts such as <em>uniPoska</em>, <em>Harddiskaunt and Hierbamala</em>, Matt moved to Cardiff to study Popular Music. The move to Cardiff brought about numerous opportunities, with Matt playing in hip hop, ska/punk/reggae, jazz and funk outfits whilst exploring the festival scene and touring nationally and mainland Europe with bands such as Detached, as well as finding work as a session musician in the process. Matt currently plays live funk/jazz with <em>SuperChango</em> and Ska/Punk/Reggae with <em>Sharks Don’t Sleep</em>, and is extremely keen for any opportunities that might arise to play or help out in any way possible to meet new people.</p>
		<h2>Latest Sounds</h2>
		<div class="container lg4-lg9 md-all sm-all">
			<iframe width="560" height="315" src="http://www.youtube.com/embed/7a2quz5f_nY" frameborder="0" allowfullscreen></iframe>
		</div>
		<!-- Social Media -->
		<div class="social-media lg-all lg-clear md-all md-clear sm-all sm-clear">
			<a title="uniPoska's Facebook Profile" class="icon-facebook" href="https://www.facebook.com/uniposkaoffical" target="_blank"></a>
			<a title="Detached's Facebook Profile" class="icon-facebook" href="https://www.facebook.com/detachedska" target="_blank"></a>
			<a title="SuperChango's Facebook Profile" class="icon-facebook" href="https://www.facebook.com/superchangouk" target="_blank"></a>
			<a title="uniPoska's Youtube Page" class="icon-youtube" href="http://www.youtube.com/user/UniposkaOfficial" target="_blank"></a>
			<a title="Harddiskaunt's Wiki Page" class="icon-wordpress" href="http://it.wikipedia.org/wiki/Harddiskaunt" target="_blank"></a>
			<a title="Hierbamala's Wiki Page" class="icon-wordpress" href="http://it.wikipedia.org/wiki/Hierbamala" target="_blank"></a>
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