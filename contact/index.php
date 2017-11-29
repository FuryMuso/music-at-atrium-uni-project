<?php
	$page['title'] = "";
	$page['description'] = "";
	ob_start();
?>

<div class="lg-all lg-clear md-all md-clear sm-all sm-clear">
	<h1>Contact Us</h1>
	<div class="lg1-lg8">
		<p>If you have any enquiries or questions about the website, you can send us an email through any of the email links provided an we will try to reply as soon as we can.</p>
		<a href="mailto:social.media.musicatrium@gmail.com">social.media.musicatrium@gmail.com</a><br />
		<a href="mailto:content.musicatatrium@gmail.com">content.musicatatrium@gmail.com</a>
		<p>Alternatively you can click either of the two social networking links below and you will be directed to our facebook or twitter pages where you will also be able to keep up to date with the site and its content as well as information of the latest up and coming events that the website will be promoting. The blog will display the majority of this information so don’t forget to check it for daily updates!</p>
		<a href="https://facebook.com/pages/MusicatAtrium" target="_blank">Visit Our Facebook</a><br />
		<a href="https://twitter.com/MusicAtAtrium" target="_blank">Visit Our Twitter</a>
		<p>The website will also be looking to form connections with venues around Cardiff. Any of these connections will also be made public and made available to students though the website so if you would like to organize an event through one of these venues, we will attempt to contact and set/or set up a line of communication with them. Please note however, this may not always be successful.</p>
		<p>As well as the contact details available we have a SoundCloud and a YouTube account that demonstrate what the students of the University have to offer.</p>
		<a href="https://soundcloud.com/music-atrium" target="_blank">Visit Our SoundCloud</a><br />
		<a href="https://www.youtube.com/channel/UC3AvyS0-coeUWW7Igt3G9LA" target="_blank">Visit Our Youtube</a>
		<p>If you like a particular student’s work and would like to collaborate with them on a project of your own, then do not hesitate to contact them directly through any of the links provided. If this is not possible, we will be happy to contact them for you.</p>
	</div>
	
	<div class="lg9-lg12 sm-hide">
		<a class="twitter-timeline"  href="https://twitter.com/MusicAtAtrium"  data-widget-id="448655611316547584">Tweets by @MusicAtAtrium</a>
	</div>
	
	
</div>

    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	
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