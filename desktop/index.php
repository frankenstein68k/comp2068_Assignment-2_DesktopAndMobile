<!doctype html>

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

	<head>
		<meta charset="utf-8">
		<title>Neil MacKenzie</title>
		<link rel="stylesheet" href="css/style.css">
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
								<a class="active" href="index.php">Home</a>
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

	</body>
</html>
