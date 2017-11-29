<?php
	$page['title'] = "About the Music at University of South Wales Atrium";

	ob_start();
?>

<div class="lg-all lg-clear md-all md-clear sm-all sm-clear">
	<h1>About Us</h1>
	<!-- Image -->
	<div class="lg1-lg8 md1-md2 sm-all">
		<h2>The Beginning</h2>
		<p>Music at Atrium was started by <a href="../portfolios/tom-fake.php" title="Learn More About Tom Fake">Tom Fake</a>, <a href="../portfolios/mollie-ford.php" title="Learn More About Mollie Ford">Mollie Ford</a>, <a href="../portfolios/dan-tucker.php" title="Learn More About Dan Tucker">Dan Tucker</a> and <a href="../portfolios/hannah-watkins.php" title="Learn More About Hannah Watkins">Hannah Watkins</a> as part of a Business and Entrepreneurship module on the Popular Music course at University of South Wales.</p>
		<h2>Our Goals</h2>
		<p>Its purpose has gradually developed since its inception and aims to create new and stronger connections between the popular music students of the University, as well as forge new relationships with students from other courses in the music field, or even courses that revolve around film, such as the animation or media students. Both may requite music or sound so collaboration could be hugely beneficial. The website also keeps students up to date with new academic material being created, to showcase it and to hopefully attract potential students. Another aim is the idea of linking the students with professional situations in Cardiff, such as venues, promoters and A&amp;R representatives. Forming these connections creates the chance to host events such as live streams, document performances relevant to the university and the course and further establish relationships with these venues.</p>
		<h2>What the Website Offers</h2>
		<p>This practice also allows student collaboration. For example with a promotions project that sets up an event night in one of these venues, whilst we were record and publish it. Something we wanted to address was the seemingly apparent lack of student collaboration that is put forward to us, but is rarely taken advantage of. We are hoping to push this through by giving students a tool of which they can reach out with on a less formal basis, in hopes that connections will be made. If they see an opportunity to collaborate with students who they feel will benefit their academic studies further, this website will offer that possibility.</p>
		<h2>The Outcome</h2>
		<p>Creating the website independently allowed us the opportunity to make something completely unique that showcased the skills that each member of the group possessed, as well as creating a professional looking platform for the course to catalogue and showcase the work of music based students in the University.</p>
	</div>
	<div id="about" class="side-column lg9-lg12 lg-padinfull md3-md4 md-padinfull sm-all sm-padinfull">
		<div class="listing lg-all md-all sm-all">
			<div class="lg9-lg10 md3 sm1">
				<img src="../img/content/tom-fake-about.jpg" alt="Tom Fake" />
			</div>
			<div class="lg11-lg12 md4 sm2">
				<h3>Tom Fake</h3>
				<p>
					<em>
						Website Developer &bull;
						Website Designer &bull;
						Researcher
					</em>
				</p>
			</div>
		</div>
		<div class="listing lg-all md-all sm-all">
			<div class="lg9-lg10 md3 sm1">
				<img src="../img/content/mollie-ford-about.jpg" alt="Mollie Ford" />
			</div>
			<div class="lg11-lg12 md4 sm2">
				<h3>Mollie Ford</h3>
				<p>
					<em>
						Social Network Editor &bull;
						Content Creator &bull;
						Communications Liason
					</em>
				</p>
			</div>
		</div>
		<div class="listing lg-all md-all sm-all">
			<div class="lg9-lg10 md3 sm1">
				<img src="../img/content/dan-tucker-about.jpg" alt="Dan Tucker" />
			</div>
			<div class="lg11-lg12 md4 sm2">
				<h3>Dan Tucker</h3>
				<p>
					<em>
						Website Developer &bull;
						Website Designer &bull;
						Content Creator / Editor
					</em>
				</p>
			</div>
		</div>
		<div class="listing lg-all md-all sm-all">
			<div class="lg9-lg10 md3 sm1">
				<img src="../img/content/hannah-watkins-about.jpg" alt="Hannah Watkins" />
			</div>
			<div class="lg11-lg12 md4 sm2">
				<h3>Hannah Watkins</h3>
				<p>
					<em>
						Social Networking Editor &bull;
						Communications Liason &bull;
						Content Provider
					</em>
				</p>
			</div>
		</div>
	</div>
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