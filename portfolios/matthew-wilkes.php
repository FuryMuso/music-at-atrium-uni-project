<?php
	$page['title'] = "Portfolios: Matthew Wilkes";

	ob_start();
?>

<div class="profile lg-all lg-clear md-all md-clear sm-all sm-clear">
	<h1>Portfolios</h1>
	<!-- Image -->
	<div class="side-column lg1-lg3 lg-padinfull md1-md2 md-padinfull sm-all sm-padinfull">
		<img src="../img/content/matthew-wilkes.jpg" alt="Matthew Wilkes" />
		<h3>Matthew Wilkes</h3>
	</div>
	<!-- / Image -->
	
	<!-- Bio Content -->
	<div class="lg4-lg12 md3-md4 sm-all">
		<h2>About Matthew</h2>
		<iframe width="100%" height="125" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/147707224&amp;auto_play=false&amp;hide_related=false&amp;visual=true"></iframe>
		<br />
		<iframe width="100%" height="125" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/33257147&amp;auto_play=false&amp;hide_related=false&amp;visual=true"></iframe>
		<br />
		<p>Matthew Wilkes is a very open-minded musician and instrumentalist. He is a drummer of more than eleven years with a grade 8 certificate, and also a guitar player of 7 years. Matthew also dabbles at other instruments, as he believe that is what musicianship is about.</p>
		<p>Matthew is passionate abut music theory; his main hobby, as well as musical practice, is composition, and he finds having the aid of music theory at your side is very gratifying. </p>
		<p><a href="mailto:enegd8@gmail.com" target="_blank">Email Matthew Wilkes's Band &raquo;</a></p>
		<p><a href="mailto:matthewwilkes5@hotmail.com" target="_blank">Email Matthew Wilkes &raquo;</a></p>
		<!-- Social Media -->
		<div class="social-media lg-all lg-clear md-all md-clear sm-all sm-clear">
			<a title="Matthew Wilkes's Facebook Profile" class="icon-facebook" href="https://www.facebook.com/mattsmusicalodyssey2013" target="_blank"></a>
			<a title="Matthew Wilkes's Soundcloud Page" class="icon-soundcloud" href="https://soundcloud.com/matthew-wilkes" target="_blank"></a>
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