<?php
/**
 * __FILE__ resolves to the TARGET of the symbolic link  :(
 */
include_once dirname(__FILE__) . '/../include/lib/PathToRoot.php';
?>

<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9 ie8 allie"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie9 ie9 allie"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head> <link rel="shortcut icon" href="http://www.iconj.com/ico/a/k/ako8r75zhi.ico" type="image/x-icon"/>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php
			// Properly shapes Title for SEO optimization on homepage, content pages, and other pages
			if (isset($page['title'])) 
				if ($page['title'] == "Music at University of South Wales Atrium")
					echo "Company Name  &#124; {$page['title']}";
				else
					echo "{$page['title']}  &#124; Music at University of South Wales Atrium"; 
			else
				echo  "Music at University of South Wales Atrium";
		?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, maximum-scale=1, minimum-scale=1, user-scalable=0, initial-scale=1">
		
		<link href='http://fonts.googleapis.com/css?family=Muli:300,400' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Rosario:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="../css/music-at-atrium.css">
		<link rel="stylesheet" href="../css/_owl-carousel/owl.carousel.css">
		<link rel="stylesheet" href="../css/_owl-carousel/owl.theme.css">
		<!-- Gridset CSS -->
		<!--[if (!IE) | (gt IE 9)]><!--><link rel="stylesheet" href="../css/_gridset/gridset.css" /><!--<![endif]-->
		<!--[if IE 9]><link rel="stylesheet" href="../css/_gridset/gridset-ie-9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="../css/_gridset/gridset-ie-lte8.css" /><![endif]-->
		
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="../js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
		<!-- Header -->
		<header class="lg-all lg-clear md-all md-clear sm-all sm-clear">
			<div class="wrapper clearfix">
				<div class="lg-all md-all sm-all">
					<a href="../home/"><img id="logo" src="../img/layout/logo.png" alt="Music at University of South Wales Atrium"></a>
					<img src="../img/layout/header-banner.jpg" alt="Music at University of South Wales Atrium">
				</div>
			</div>
		</header>
		<!-- / Header -->
		
		<!-- Primary Navigation -->
		<nav class="lg-all lg-clear md-all md-clear sm-all sm-clear">
			<div class="wrapper clearfix">
				<div class="desktop-wrap">
					<button class="toggle-nav">
						<span>Menu</span>
					</button>
					<ul class="nav lg-all md-all sm-all">
						<li><a href="../home/">Home</a></li>
						<li><a href="../about/">About</a></li>
						<li><a href="../portfolios/">Portfolios</a></li>
						<li><a href="http://musicatatrium.blogspot.co.uk/2014/03/music-at-atrium-atrium-sessions.html" target="_blank">Blog</a></li>
						<li><a href="../contact/">Contact</a></li>
					</ul>
				</div>
			</div> 
		</nav>
		<!-- / Primary Navigation -->
		
		<!-- Content Area -->
        <div id="content" class="lg-all lg-clear md-all md-clear sm-all sm-clear">
			<div class="wrapper clearfix">
				<div class="lg-all lg-clear lg-padinfull md-all md-clear md-padinfull sm-all sm-clear sm-padinfull">
					<?php echo $page['content']; ?>
				</div>
				<div id="footer-background" class="lg-all lg-clear md-all md-clear sm-all sm-clear">
					<img class="footer-background-image" src="../img/layout/footer-background.png" />
					<img class="matm-logo" src="../img/layout/matm-logo.png" alt="Music at University of South Wales Atrium" />
				</div>
			</div> 
		</div>
		<!-- / Content Area -->
		
		<!-- Footer -->
		<footer class="lg-all lg-clear md-all md-clear sm-all sm-clear">
			<div class="wrapper clearfix lg-padinfull md-padinfull sm-padinfull">
				<div class="lg1-lg8 md1-md2 sm-all sm-clear">
					Copyright &copy; 2014 Music at University of South Wales Atrium | <a href="http://www.southwales.ac.uk/" title="Visit the University Website" target="_blank">University of South Wales</a>
				</div>
				<div id="social-media-links" class="lg9-lg12 md3-md4 sm-all sm-clear">
					<p>
						<a href="https://www.facebook.com/MusicatAtrium" target="_blank" class="icon-facebook" title="Visit Our Facebook Page"></a>
						<a href="https://twitter.com/MusicatATRiuM" target="_blank" class="icon-twitter" title="Visit Our Twitter Page"></a>
						<a href="https://www.youtube.com/channel/UC3AvyS0-coeUWW7Igt3G9LA" target="_blank" class="icon-youtube" title="Visit Our Youtube Page"></a>
						<a href="https://soundcloud.com/music-atrium" target="_blank" class="icon-soundcloud" title="Visit Our Soundcloud Page"></a>
						<a href="http://musicatatrium.blogspot.co.uk/2014/03/music-at-atrium-atrium-sessions.html" target="_blank" class="icon-blogger" title="Visit Our Blogspot Page"></a>
					</p>
				</div>
			</div> 
		</footer>
		<!-- Footer -->
		
        
		<!-- Scripts Here -->
        <script src="../js/plugins.js"></script>
        <script src="../js/main.js"></script>
        <script>
            var _gaq=[['_setAccount','UA-49468349-1'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
        <script src="../js/jquery.fitvids.js"></script>
        <script>
          // Basic FitVids Test
          $(".container").fitVids();
          // Custom selector and No-Double-Wrapping Prevention Test
          $(".container").fitVids({ customSelector: "iframe[src^='http://socialcam.com']"});
        </script>
		<script src="../js/responsive-nav.js"></script>
		<script src="../js/gridset-overlay.js"></script>
		<script src="../js/owl.carousel.min.js"></script>
        <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                navigation: true,
                navigationText: ['previous', 'next'],
                slideSpeed: 300,
                paginationSpeed: 400,
                singleItem: true,
				autoPlay: true
            });
        });
        </script>
		<!-- / Scripts Here -->
    </body>
</html>
