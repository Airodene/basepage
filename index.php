<!DOCTYPE html>
<html>

<head>
	<!-- Search engine stuff -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="BasePage: an open-source web design template for beginners!">
	<meta property="og:description" content="BasePage: an open-source web design template for beginners!">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

	<!-- Imports the several stylesheets -->
	<link rel="stylesheet" href="css/styles.css"></link>
	<link rel="stylesheet" href="css/para.css"></link>
	<link rel="stylesheet" href="css/components.css"></link>

	<!-- Other imports; scripts, fonts etc. -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

	<!-- Add a favicon to the tab -->
	<link rel="icon" href="favicon.ico" type="image/x-icon"></link>

	<!-- This is the text that appears on the tab, change this to what you want displayed -->
	<title>My BasePage Installation</title>
</head>

<body>
	<!-- PLEASE NOTE: 
		If you are using Edge, the navbar blur WILL work.
		If you are using Chrome, the navbar blur WON'T work, unless you enable 'Experimental Web Platform features' flag.
			Note for Chrome: ensure 'Hardware acceleration' is enabled in settings, otherwise it may lag.
		If you are using Firefox, the navbar blur WON'T work.
		If you are using Safari, the navbar blur WILL work.
	 -->
	<header>
		<div class="navBar" id="navBar">
			<div class="navBarWrapper blur">
				<ul class="navBarUl">
					<li class="itemLi">
						<a class="item button navBtn">
							<strong>Home</strong>
						</a>
					</li>
					<li class="itemLi">
						<a class="item button navBtn" href="info.html">Info</a>
					</li>
					<li class="itemLi">
						<a class="item button navBtn" href="addpagehere.html">Add</a>
					</li>
					<li class="itemLi">
						<a class="item button navBtn" href="addpagehere.html">Pages</a>
					</li>
				</ul>
			</div>
		</div>
	</header>

	<div class="parallaxSection parallax5">
		<div class="headerWrapper">
			<h1 class="header">
				<!-- This is the text that appears on the 1st parallax box -->
				Welcome to BasePage!
			</h1>
		</div>
	</div>

	<div class="content">
		<!-- The header for the 1st content section -->
		<h1 class="contentHeader">What is BasePage?</h1>
		<!-- The body for the 1st content section -->
		<p>BasePage is a simple, easy to use template for newcomers to web design! This project is free and open-source, so feel free
			to fork it!</p>
	</div>

	<div class="parallaxSection parallax2">
		<div class="headerWrapper">
			<h1 class="header">
				<!-- This is the text that appears on the 2nd parallax box -->
				Simple Components
			</h1>
		</div>
	</div>

	<div class="content">
		<!-- The header for the 2nd content section -->
		<h1 class="contentHeader">Buttons</h1>
		<!-- The body for the 2nd content section -->
		<p>An example of our buttons!</p>

		<div class="buttonWrapper">
			<button class="button darkBtn">This is a dark button</button>
		</div>
		<br>
		<!-- Add a line break between 2 components directly after each other! -->
		<div class="buttonWrapper">
			<button class="button lightBtn">This is a light button</button>
		</div>

		<!-- You can have multiple headers in one content, just make sure to add a separator! -->
		<div class="contentSeparator"></div>

		<!-- Don't duplicate the 'content' div; make sure they're in the same div with a separator -->
		<h1 class="contentHeader">Sliders</h1>
		<p>Check out our dark range slider!</p>
		<div class="sliderWrapper darkSlider">
			<input type="range" min="1" max="100" value="50" class="slider" id="rangeSlider1">
		</div>
	</div>

	<div class="parallaxSection parallax3">
		<div class="headerWrapper">
			<h1 class="header">
				<!-- This is the text that appears on the 2nd parallax box -->
				Themes
			</h1>
		</div>
	</div>

	<div class="content darkContent">
		<!-- The header for the 2nd content section -->
		<h1 class="contentHeader">Dark Mode</h1>
		<!-- The body for the 2nd content section -->
		<p>Our colour system allows flexible theming! Here's a light slider:</p>
		<div class="sliderWrapper lightSlider">
			<input type="range" min="1" max="100" value="50" class="slider" id="rangeSlider1">
		</div>

		<p>Both buttons work in both themes:</p>
		<div class="buttonWrapper">
			<button class="button darkBtn">This is a dark button</button>
		</div>
		<br>
		<!-- Add a line break between 2 components directly after each other! -->
		<div class="buttonWrapper">
			<button class="button lightBtn">This is a light button</button>
		</div>
	</div>

	<div class="parallaxSection parallax4">
		<div class="headerWrapper">
			<h1 class="header">
				<!-- This is the text that appears on the 2nd parallax box -->
				BasePage
			</h1>
		</div>
	</div>

	<div class="content">
		<!-- The header for the 1st content section -->
		<h1 class="contentHeader">Modern & Simple</h1>
		<!-- The body for the 1st content section -->
		<p>BasePage focuses on a modern aesthetic, while remaining easy for beginers. The flexible theme and component support allows
			anyone to setup a website easily!</p>
	</div>

</body>

<footer>
        <div class="footerWrapper">
            <!-- The text that appears in the footer -->
            <p class="footerMain lightText">© BasePage 2018</p>
            <p class="footerSecondary lightText">This site uses the BasePage template.
                <a href="https://github.com/Airodene/basepage" style="color: white;" target="_blank">Learn More</a>
            </p>
        </div>
    </footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
 crossorigin="anonymous"></script>

<script src="scr/scroller.js"></script>

</html>
