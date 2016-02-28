
<html>

	<head>
		<title>Dashboard</title>
		
			<meta name="apple-mobile-web-app-capable" content="yes">
			<meta name="apple-mobile-web-app-status-bar-style" content="black">
			<link rel="apple-touch-icon" sizes="120x120" href="icon.png">
<link rel="apple-touch-icon" sizes="152x152" href="icon.png">
<link rel="apple-touch-icon" href="icon.png">
			<script>(function(a,b,c){if(c in b&&b[c]){var d,e=a.location,f=/^(a|html)$/i;a.addEventListener("click",function(a){d=a.target;while(!f.test(d.nodeName))d=d.parentNode;"href"in d&&(d.href.indexOf("http")||~d.href.indexOf(e.host))&&(a.preventDefault(),e.href=d.href)},!1)}})(document,window.navigator,"standalone")</script>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		

			<!--This viewport specification makes touch events a little more responsive in Chrome for Android-->
	<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
	
	<script type="text/javascript">
var id = window.location.search.split('?')[1];

	if (id != "id=1") {
  
setTimeout(function () {
   
   window.location.replace("http://localhost:8080/index.php?auto=1");
}, 60000);	} 	

</script>  
		<!--This script is to redirect to index every 60 seconds. see redirect.php to alow a redirect to other page on a specific ip address-->
		
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.atmosphere.js"></script>
		<script src="js/dashboard.js"></script>


	<!--such responsive wow-->
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<!--such saison and event  css -->
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />


<?php
		


$day = date('z');
if( $day >= 43 && $day < 45) $season = "valentin";
elseif( $day < 79) $season = "winter"; 
elseif( $day < 171) $season = "spring";
elseif( $day < 265) $season = "sumer";
elseif( $day >= 350 && $day < 361) $season = "noel";
elseif( $day >= 296 && $day < 305) $season = "haloween";
elseif( $day < 354) $season = "automne";
else $season = "winter";

 echo '
<link rel="stylesheet" media="screen" type="text/css" title="'.$season.'" href="css/'.$season.'.css" />';


?>
	
	<!--The "manifest.json" file enables the "Add to homescreen" functionality in Chrome for Android see https://developer.chrome.com/multidevice/android/installtohomescreen>-->
		
		<link rel="manifest" href="manifest.json">
		<!--such openhab wow-->
		
		<script type="text/javascript">
		
		
		
			// OpenHAB URL (without the "http://" part; note that you can't use "localhost" or "127.0.0.1" or OpenHAB will send "Connection Refused")
			var openhabURL = "localhost:8880/rest/items/";	// TODO: change this to your Pi's IP address
			// Log URL
			var logURL = "http://localhost:8080/data.php?item=";	// TODO: change this to your Pi's IP address
			// Wunderground API
			// TODO: insert your API key and location code (example location code: pws:KNYNEWYO118)
			var weatherURL = "http://api.wunderground.com/api/a162ed76b512f540/conditions/lang:FR/q/Canada/Montreal.json";
			var forecastURL = "http://api.wunderground.com/api/a162ed76b512f540/forecast/lang:FR/q/Canada/Montreal.json";
			// Logging level (0 = off, 1 = ajax errors only, 2 = some logging, 3 = full logging)
			// This logs to the developer console: in Google Chrome, press F12 and make sure the "Console" tab is selected
			var loggingLevel = 3;
			// How often to check weather (in milliseconds)
			var weatherFrequency = 600000;	// every 600 seconds (= 10 minutes)
			var forecastFrequency = 3600000;	// every 3600 seconds (= 1 hour)
			
			var reloadHour = 4;	// time at which to reload the entire page. Helps keep things fresh (Chrome tends to time out the websockets). 24 hour format (0 = midnight, 23 = 11 PM)

			$(document).ready(function() {
				Log("Document ready", 2);
				Start();
			});
		</script>
		<!--such itunes status wow
  <?php
$status = exec("osascript -e 'tell application \"iTunes\" to player state as string'");
$track = exec("osascript -e 'tell app \"iTunes\" to name of current track as string'");
$artist = exec("osascript -e 'tell app \"iTunes\" to artist of current track as string'");
?>
-->

	</head>
	
<body vlink=white alink=white link=white>
	
	
		<div class="topbar">
			<div class="date">2015-01-01</div> <!--such date wow-->
			<div class="refresh fa fa-refresh fa-fw" onclick="history.go(0)"></div> <!--such refresh wow-->
			<div class="refresh fa fa-chevron-right fa-fw" onclick="history.go(1)"></div> <!--such next button-->
				<div class="refresh fa fa-home fa-fw" onclick="document.location='index.php'"></div> <!--such Home button-->
			<div class="refresh fa fa-chevron-left fa-fw" onclick="history.go(-1)"></div> <!--such back wow-->
			<div class="clock">12:00</div> <!--such heure wow-->
		</div>
	
			<!--
		<div class="topbar2"> 
		<div class="itunes"
	
	
<font color = white size = 3px><b>iTunes: </b><?php echo $track; ?> - <?php echo $artist; ?></font>

such itunes status wow-->

