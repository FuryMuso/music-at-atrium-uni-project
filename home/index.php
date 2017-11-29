<?php
	$page['title'] = "";
	$page['description'] = "";
	ob_start();
?>
<?php if (false) { ?>
<link href="../styles/.css" rel="stylesheet" type="text/css">
<?php } ?>

<h1>Welcome to the Music At Atrium</h1>

<div class="lg-all md-all sm-all">
	<div class="lg1-lg8 md-all md-clear sm-all">
		<div id="owl-demo" class="owl-carousel owl-theme lg-all md-all sm-all">
		  <div class="item"><img src="../img/slider/fullimage1.jpg" alt="The Last of us"></div>
		  <div class="item"><a href="https://www.wmc.org.uk/Productions/2014-2015/DonaldGordonTheatre/LionKing/"  target="_blank" title="Lion King Musical - Cardiff Millenium Centre Event Page"><img src="../img/slider/fullimage2.jpg" alt="GTA V"></a></div>
		  <div class="item"><a href="https://www.facebook.com/events/1446718572209756/" target="_blank" title="Sounds of the Baskerville facebook event page"><img src="../img/slider/fullimage3.jpg" alt="Mirror Edge"></a></div>
		</div>
		<div class="welcome-message lg-all md-all sm-all">
			<h2>Welcome to the Music At Atrium Website!</h2> 
			<p>Our site is designed to connect the students of the University of South Wales to the diverse music scene in Cardiff, and vice versa. Have a browse of our fantastic students’ profiles and portfolios to find out more of what they do, and keep up to date with our progress and events happening in the university and around Cardiff by following our blog and our social media websites!</p>
		</div>
		<div class="current-event lg-all md-all sm-all">
		        <h2>Latest Event!</h2>
				<a href="https://www.facebook.com/events/1446718572209756/" target="_blank" title="Sounds of the Baskerville facebook event page"><img src="../img/content/currentevent1.png" alt="Catapult Presents - Sounds of the Baskerville"/></a>
				
				<p>Catapult Records presents <em>'Sounds of the Baskerville'</em> at Baskerville Hall Hotel in Hereford on Fri 6th Jun 2014, 8pm - 8am. This summer Catapult Presents 'The Sounds of The Baskerville' a fun and fresh party festival set in and around the stunning stately home, Baskerville Hall.
 Be sure to <a href="http://catapultrecords.fatsoma.com/events/103503/" title="Book tickets for 'Sounds of the Baskerville'" target="_blank">book</a> your tickets!</p>
		</div>
	</div>
	
	<div class="lg9-lg12 md-hide sm-hide">
		<a class="twitter-timeline"  href="https://twitter.com/MusicAtAtrium"  data-widget-id="448655611316547584">Tweets by @MusicAtAtrium</a>
	</div>
</div>

<div class="lg-all md-all sm-all">
	<div class="container home-featured-video lg1-lg4 md1-md2 sm-all">
		<iframe width="560" height="315" src="http://www.youtube.com/embed/Ix0L_hX4PEU" frameborder="0" allowfullscreen></iframe>
	</div>
	<div class="container home-featured-video lg5-lg8 md3-md4 sm-all">
		<iframe width="560" height="315" src="http://www.youtube.com/embed/RbwOC_F2hrY" frameborder="0" allowfullscreen></iframe>
	</div>
	<div class="container home-featured-video lg9-lg12 md1-md2 sm-all">
		<iframe width="560" height="315" src="http://www.youtube.com/embed/XGnIcXcCF_g" frameborder="0" allowfullscreen></iframe>
	</div>
</div>



<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
</script>

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