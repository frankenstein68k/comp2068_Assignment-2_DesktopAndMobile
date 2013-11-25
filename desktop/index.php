<!doctype html>

<!--index.html / Neil MacKenzie / COMP 2068 Personal Portfolio / homepage for the website / HTML -->

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!-->

<?php
$iphone=strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$android=strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$palmpre=strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
$berry=strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$ipod=strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
if($iphone||$android||$palmpre||$ipod||$berry==true) {
//Visitor is browsing on an iPhone, redirect them to your web app page
if($_GET["view"]!="full") {
header('Location: http://webdesign4.georgianc.on.ca/~200249489/comp2068/project1/index.html');
}
}
?>

<html class="no-js" lang="en">
	<!--<![endif]-->
	<head>
		<meta charset="utf-8">

		<!-- Use the .htaccess and remove these lines to avoid edge case issues.
		More info: h5bp.com/b/378 -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>Neil MacKenzie</title>
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Mobile viewport optimized: j.mp/bplateviewport -->
		<meta name="viewport" content="width=device-width,initial-scale=1">

		<!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

		<!-- CSS: implied media=all -->
		<!-- CSS concatenated and minified via ant build script-->
		<link rel="stylesheet" href="css/style.css">
		<!-- end CSS-->

		<!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

		<!-- All JavaScript at the bottom, except for Modernizr / Respond.
		Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
		For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
		<script src="js/libs/modernizr-2.0.6.min.js"></script>
	</head>

	<body>

		<div id="container">
			<header class="title">
				<div>
					<img src="img/Logo-v2.gif" alt="MacKenzie Logo" width="250" height="184">
				</div>
				<div>
					<h1>Neil MacKenzie</h1>
					<br>
					<nav>
						<ul id="simplenav">
							<li>
								<a class="active" href="index.html">Home</a>
							</li>
							<li>
								<a href="about_me.html">About Me</a>
							</li>
							<li>
								<a href="projects.html">Projects</a>
							</li>
							<li>
								<a href="services.html">Sevices</a>
							</li>
							<li>
								<a href="contact_me.html">Contact Me</a>
							</li>
							<li>
								<a href="login.html">Business Contacts</a>
							</li>
						</ul>
					</nav>
				</div>
			</header>
			<div id="main">
				<article>
					<header>
						<h1>Welcome the my website, I hope you like it!</h1>
						<h2>Mission Statement</h2>
						<p>
							Thank you for visiting my site, I have created this to showcase my talents and abilities. Here's what I have to offer
							<ul>
								<li>
									Genuine interest and fascination with modern technology
								</li>
								<li>
									Easy going and hard working
								</li>
								<li>
									Goal oriented with experience working in fast-paced environments with high expectations
								</li>
							</ul>
						</p>
					</header>

				</article>

				<article>
					<section id"featured">
						<h2>Featured Work</h2>
						<p>
							<!-- This slider is from a template by Joshua Hibbert and can be found at http://cssdeck.com/labs/pure-css-slider-target-->
							<div class="slider">
								<ul class="frames">
									<li id="one" class="slide">
										<a href="projects.html#sonnenblume"> <img src="img/sonnenblume.jpg" alt="Slide 1">
										<nav>
											<a class="prev" href="#six">&larr;</a>
											<a class="next" href="#two">&rarr;</a>
										</nav> </a>
									</li>
									<li id="two" class="slide">
										<a href="projects.html#barrielong"> <img src="img/BarrieLong.png" alt="Slide 2">
										<nav>
											<a class="prev" href="#one">&larr;</a>
											<a class="next" href="#three">&rarr;</a>
										</nav> </a>
									</li>
									<li id="three" class="slide">
										<a href="projects.html#atxpower"> <img src="img/atxPowerBoard.jpg" alt="Slide 3">
										<nav>
											<a class="prev" href="#two">&larr;</a>
											<a class="next" href="#four">&rarr;</a>
										</nav> </a>
									</li>
									<li id="four" class="slide">
										<a href="projects.html#barriesnow"> <img src="img/BarrieSnowy.png" alt="Slide 4">
										<nav>
											<a class="prev" href="#three">&larr;</a>
											<a class="next" href="#five">&rarr;</a>
										</nav> </a>
									</li>
									<li id="five" class="slide">
										<a href="projects.html#website"> <img src="img/personalPortfolioWebsite.png" alt="Slide 5">
										<nav>
											<a class="prev" href="#four">&larr;</a>
											<a class="next" href="#six">&rarr;</a>
										</nav> </a>
									</li>
									<li id="six" class="slide">
										<a href="projects.html#toronto"> <img src="img/Toronto.png" alt="Slide 6">
										<nav>
											<a class="prev" href="#five">&larr;</a>
											<a class="next" href="#one">&rarr;</a>
										</nav> </a>
									</li>
									<li class="quicknav">
										<ul>
											<li>
												<a href="#one"></a>
											</li>
											<li>
												<a href="#two"></a>
											</li>
											<li>
												<a href="#three"></a>
											</li>
											<li>
												<a href="#four"></a>
											</li>
											<li>
												<a href="#five"></a>
											</li>
											<li>
												<a href="#six"></a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</p>
					</section>
				</article>
				<article>
					<h4 id="calltoaction"><a class="link" href="projects.html">View more work!</a></h4>
				</article>
				<aside class="aside">
					<h3>Keep Connected</h3>
					<p>
						Feel free to follow me on <a href="https://twitter.com/frankenstein68k">Twitter</a>, <a href="ca.linkedin.com/pub/neil-mackenzie/35/4a6/925/">LinkedIn</a> and <a href="https://github.com/frankenstein68k">GitHub</a>
					</p>
				</aside>
			</div>
			<footer class="footer">
				<h4>Copyright Neil MacKenzie 2013</h4>
			</footer>
		</div>
		<!--! end of #container -->

		<!-- JavaScript at the bottom for fast page loading -->

		<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
		<script>
			window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>');
		</script>

		<!-- scripts concatenated and minified via ant build script-->
		<script defer src="js/plugins.js"></script>
		<script defer src="js/script.js"></script>
		<!-- end scripts-->

		<!-- Change UA-XXXXX-X to be your site's ID -->
		<script>
			window._gaq = [['_setAccount', 'UAXXXXXXXX1'], ['_trackPageview'], ['_trackPageLoadTime']];
			Modernizr.load({
				load : ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
			});
		</script>

		<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
		chromium.org/developers/how-tos/chrome-frame-getting-started -->
		<!--[if lt IE 7 ]>
		<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
		<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->

	</body>
</html>
