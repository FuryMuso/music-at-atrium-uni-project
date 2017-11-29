<?php
	$page['title'] = "Portfolios: Gemma Rose Thomas";

	ob_start();
?>

<div class="profile lg-all lg-clear md-all md-clear sm-all sm-clear">
	<h1>Portfolios</h1>
	<!-- Image -->
	<div class="side-column lg1-lg3 lg-padinfull md1-md2 md-padinfull sm-all sm-padinfull">
		<img src="../img/content/gemma-rose-thomas.jpg" alt="Gemma Rose Thomas" />
		<h3>Gemma Rose Thomas</h3>
	</div>
	<!-- / Image -->
	
	<!-- Bio Content -->
	<div class="lg4-lg12 md3-md4 sm-all">
		<h2>About Gemma Rose</h2>
		<iframe width="100%" height="125" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/147537143&amp;auto_play=false&amp;hide_related=false&amp;visual=true"></iframe>
		<br />
		<iframe width="100%" height="125" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/131136001&amp;auto_play=false&amp;hide_related=false&amp;visual=true"></iframe>
		<br />
		<p>Gemma Rose is a 20 years old musician currently studying at the University of South Wales. Gemma has been singing and playing the piano since she was 8 years old, and has completed her Grade 8 singing and Grade 7 piano exams.</p>
		<p>'Off the Record' is the function band that Gemma sing and play keys in, playing regularly at weddings and other live music venues. She is also currently working on new, original material that will be uploaded to SoundCloud very soon.</p>
		<p>Gemma also gives piano and singing lessons. You can contact her on: 07411111537 or via email at: <a href="mailto:gemmathomas13@hotmail.com">gemmathomas13@hotmail.com</a></p>
		<br />
		<h2>Latest Sounds</h2>
		<div class="container lg4-lg9 md-all sm-all">
			<iframe width="560" height="315" src="http://www.youtube.com/embed/Sg40NXTvI3w" frameborder="0" allowfullscreen></iframe>
		</div>
		<br />
		<div class="container lg4-lg9 md-all sm-all">
			<iframe width="560" height="315" src="http://www.youtube.com/embed/b_Bp9cvRg6o" frameborder="0" allowfullscreen></iframe>
		</div>
		<!-- Social Media -->
		<div class="social-media lg-all lg-clear md-all md-clear sm-all sm-clear">
			<a title="Gemma Rose Thomas's Facebook Profile" class="icon-facebook" href="https://www.facebook.com/gemmarosethomas" target="_blank"></a>
			<a title="Gemma Rose Thomas's Twitter Profile" class="icon-twitter" href="https://twitter.com/GemRoseThomas" target="_blank"></a>
			<a title="Gemma Rose Thomas's Youtube Page" class="icon-youtube" href="http://www.youtube.com/channel/UC9XZZumSdS2hCCTB0YaFY9g" target="_blank"></a>
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