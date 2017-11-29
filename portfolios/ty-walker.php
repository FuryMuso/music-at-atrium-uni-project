<?php
	$page['title'] = "Portfolios: Ty Walker";

	ob_start();
?>

<div class="profile lg-all lg-clear md-all md-clear sm-all sm-clear">
	<h1>Portfolios</h1>
	<!-- Image -->
	<div class="side-column lg1-lg3 lg-padinfull md1-md2 md-padinfull sm-all sm-padinfull">
		<img src="../img/content/ty-walker.jpg" alt="Ty Walker" />
		<h3>Ty Walker</h3>
	</div>
	<!-- / Image -->
	
	<!-- Bio Content -->
	<div class="lg4-lg12 md3-md4 sm-all">
		<h2>About Ty</h2>
		<iframe width="100%" height="125" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/147383291&amp;auto_play=false&amp;hide_related=false&amp;visual=true"></iframe>
        <br />
		<iframe width="100%" height="125" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/82902898&amp;auto_play=false&amp;hide_related=false&amp;visual=true"></iframe>
		<br />
		<p>From the small town of Crickhowell, South Wales comes the big noise that is Ty Walker. Ty began life as a solo artist by playing shows all over his local area for Oxjam, and has now established himself with a full band, performing several shows in and around the South Welsh area. Having already played Ponty’s Big Weekend Fringe Event and Brecon Jazz Fringe, Ty has featured alongside bands such as <em>The Undivided</em>, <em>Colours of One</em>, <em>Reaper in Sicily</em> and more.</p>
		<p>In 2013 Ty released his debut EP entitled ‘Connection Errors’, featuring a unique blend of Post-Punk, Rock, Ska, Alternative and Pop. The first Single from this EP was the track ‘Rabbit Hole,’ received great acclaim on Muso’s Guide’s Hot Five.</p>
		<br />
		<h2>Latest Sounds</h2>
		<div class="container lg4-lg9 md-all sm-all">
			<iframe width="560" height="315" src="http://www.youtube.com/embed/HIOgdF6Dw-Y" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="container lg4-lg9 md-all sm-all">
			<iframe width="560" height="315" src="http://www.youtube.com/embed/RbwOC_F2hrY" frameborder="0" allowfullscreen></iframe>
		</div>
		<!-- Social Media -->
		<div class="social-media lg-all lg-clear md-all md-clear sm-all sm-clear">
			<a title="Ty Walker's Twitter Profile" class="icon-twitter" href="https://twitter.com/Ty__Walker" target="_blank"></a>
			<a title="Ty Walker's Tumblr Profile" class="icon-tumblr" href="http://tywalkersmusicaladventures.tumblr.com/" target="_blank"></a>
			<a title="Ty Walker's Youtube Page" class="icon-youtube" href="http://www.youtube.com/user/OfficialTyWalker" target="_blank"></a>
			<a title="Ty Walker's Soundcloud Page" class="icon-soundcloud" href="https://soundcloud.com/officialtywalkermusic" target="_blank"></a>
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