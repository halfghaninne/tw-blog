<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
	<!-- This div is context for the elements that follow, not a block -->
		<img src="./public/tw-logo.png" class="logo">
		<ul class="page-navigation">
		<!-- This ul is a block -->
			<li class="page-navigation__link">
			<!-- And each li an element -->
				<a href="" class="nav-link">Articles</a>
			</li>
			<li class="page-navigation__link">
				<a href="" class="nav-link">Notes</a>
			</li>
			<li class="page-navigation__link">
				<a href="" class="nav-link">Info</a>
			</li> 
			<li class="page-navigation__link">
				<a href="" class="nav-link">Search</a>
			</li>
		</ul>
	</div>

	<div class="intro">
	<!-- This div is a block -->
		<h1 class="intro__paragraph">
			I'm a designer and web builder who works with two of my best friends at <a href="#" class="link">Paravel</a>.
		</h1>
		<div class="intro__social-links">
			<a href="" class="link">Twitter</a> / 
			<a href="" class="link">Dribbble</a> / 
			<a href="" class="link">Codepen</a> / 
			<a href="" class="link">GitHub</a> / 
			<a href="" class="link">Letterboxd</a> / 
			<a href="" class="link">DayTrip</a>
		</div>
	</div>

	<div class="work">
	<!-- This div is context for the blocks within it -->
		<div class="work-item">
			<img class="work-item__thumbnail" src="./public/daytrip.jpg">
			<p class="work-item__description">
				Near and dear to our hearts, <a href="#" class="link">DayTrip</a> is a Paravel project designed to make it easy to find something great to do and someplace great to go. Austin/Texas area private beta out now.
			</p>
		</div>

		<div class="work-item">
			<img class="work-item__thumbnail" src="./public/tmfo.jpg">
			<p class="work-item__description">
				We recently published two new <a href="#" class="link">TMFO</a> posts. One for <a href="#" class="link">Burt Reynolds</a>, and another one called <a href="#" class="link">Punch Dancing</a>.
			</p>
		</div>

		<div class="work-item">
			<img class="work-item__thumbnail" src="./public/paravel.jpg">
			<p class="work-item__description">
				We recently updated <a href="#" class="link">paravelinc.com</a> with some new portfolio items, talks, podcasts, interviews, and a brand new home page graphic from <a href="#" class="link">Curtis Jinkins</a>.
			</p>
		</div>

		<div class="more-work">
			More: 
			<a href="" class="link">Info</a>, 
			<a href="" class="link">Articles</a>, or 
			<a href="" class="link">Notes</a>	
		</div>
	</div>

	<div class="footer">
	<!-- This div is a block -->
		<a href="#" class="link">
			Follow me on Twitter
		</a>

		<div class="footer__right-links">
			<a href="#" class="footer__right-link link">
				Hire Paravel
			</a>
			<a href="#" class="footer__right-link link">
				RSS Feed
			</a>
		</div>

	</div>


</body>
</html>