<!DOCTYPE html>
<html lang="bg" dir="ltr">
<head>
	<meta charset="utf-8" />
	<title>iGlass Demo</title>
	<link rel="stylesheet" type="text/css" href="css/weather-icons.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
	<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-43676903-1', 'rifix.net');ga('require', 'displayfeatures');ga('send', 'pageview');</script>
	<meta http-equiv="refresh" content="3600">
	<meta name="google" value="notranslate" />
</head>
<body>

    <div class="backgroundTint"></div>

	<div class="top left">
		<div class="date small dimmed"></div>
		<div class="time"></div>
		<div class="timeWarning xxsmall"></div>
		<div class="holidays xxsmall dimmed"></div>
		<div class="calendar xxsmall"></div>
	</div>

	<div class="top right">
	    <div class="windsun small dimmed"></div>
		<div class="temp"></div>
		<div class="tempfeelslike xxsmall"></div>
		<div class="spacer"></div>
		<!--<div class="tempgraph"></div>-->
		<div class="weekgraph"></div>
		<!--<div class="summary xxsmall2 dimmed"></div>-->
		<div class="weatheralerts xxsmall2 dimmed"></div>
	</div>

	<div class="center-ver center-hor">
		<!-- <div class="dishwasher light">!!!</div> -->
	</div>

	<div class="lower-third center-hor">
		<div class="compliment light"></div>
		<div class="weatherCompliment small light"></div>
	</div>

	<div class="bottom center-hor">
		<div class="newsTitle xsmall xxdimmed"></div>
		<div class="news medium"></div>
		<div class="news_desc xxsmall"></div>
	</div>

	<div class="farbottom center-hor">
		<div class="newsDots xxxsmall"></div>
	</div>
	<!--
	<div class="farbottom right">
		<div class="lastupdated luWeather xxxsmall xxdimmed"></div>
		<div class="lastupdated luMBTA xxxsmall xxdimmed"></div>
		<div class="lastupdated luRSS xxxsmall xxdimmed"></div>
		<div class="lastupdated luHolidays xxxsmall xxdimmed"></div>
	</div>
	-->

<script src="js/jquery.js"></script>
<script src="js/ical_parser.js"></script>
<script src="js/moment-with-locales.js"></script>
<script src="js/config.js"></script>
<script src="js/rrule.js"></script>
<script src="js/d3.js"></script>
<!--<script src="js/socket.io.min.js"></script>-->

<script src="js/main.js?nocache=<?php echo md5(microtime()) ?>"></script>
<script src="js/mm-weather.js?nocache=<?php echo md5(microtime()) ?>"></script>
</body>
</html>