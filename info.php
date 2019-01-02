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
	<title>BasePage Installation</title>
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
						<a class="item button navBtn" href="index.html">
							Home
						</a>
					</li>
					<li class="itemLi">
						<a class="item button navBtn" href="info.html">
							<strong>Info</strong>
						</a>
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
				Specifications
			</h1>
		</div>
	</div>

	<div class="content">
		<!-- The header for the 1st content section -->
		<h1 class="contentHeader">About the Project</h1>
		<!-- The body for the 1st content section -->
		<p>This project was started by Airodene, later helped a lot by TDS Studios, who took the project, and made it look better :)</p>
	</div>

	<div class="parallaxSection parallax2">
		<div class="headerWrapper">
			<h1 class="header">
				<!-- This is the text that appears on the 2nd parallax box -->
				Server Requirements
			</h1>
		</div>
	</div>

	<div class="content">
		<!-- The header for the 2nd content section -->
		<h1 class="contentHeader">What You Need to Run BasePage</h1>
		<!-- The body for the 2nd content section -->
		<p>Well actually, pretty much any web server can run BasePage, as long as it supports installation in the root directory and CSS, JavaScript, and HTML 5</p>
	</div>

	<div class="parallaxSection parallax3">
		<div class="headerWrapper">
			<h1 class="header">
				<!-- This is the text that appears on the 2nd parallax box -->
				Thanks
			</h1>
		</div>
	</div>

	<div class="content darkContent">
		<!-- The header for the 2nd content section -->
		<h1 class="contentHeader">TDS Studios</h1>
		<!-- The body for the 2nd content section -->
		<p>Man, these guys (literally one person) helped out so much with the CSS side of the template. While I am fluent, they took a unique approach to design that I still admire!</p>

		<h1 class="contentHeader">You</h1>
		
		<p>Thank you so much for downloading and installing BasePage, it means a lot :)</p>

	</div>

	<div class="parallaxSection parallax4">
		<div class="headerWrapper">
			<h1 class="header">
				<!-- This is the text that appears on the 2nd parallax box -->
				Now get editing!
			</h1>
		</div>
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