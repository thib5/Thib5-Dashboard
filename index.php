<?php

include "redirect.php";
include "header.php";

?>
		<div style="margin-top: 40px;">
			<!--
				Each "widget" element below defines a single widget. 
				Each widget needs 3 data attributes: type, item & title.
				The other attributes only apply to certain types.

				TODO: 
				This is just an example setup - replace it with the widgets you want to show!
				
				The different data attributes:
				- type: switch, sensor, openclose, weather, trash
				- item: exact same item name as in OpenHAB items file
				- title: text to display in bottom part of widget
				- history: add this for items that use persistence (logging)
				- icon: [optional] [type=switch only]
						see https://fortawesome.github.io/Font-Awesome/icons/ for possible values
						when omitted defaults to a lightbulb
				- format: [optional] [type=sensor only]
						can be used to add characters around the value returned
				- trashday/recycleday: [type=trash only]
						Trash days; values range from 0 (Sunday) to 6 (Saturday)
			-->
		<center>
 
				<!--such WiDgEt wow-->	

<a href="piece.php"><widget data-type="switch" data-title="Pièce" data-icon="home"></widget></a>

<a href="info.php"><widget data-type="switch" data-title="Information" data-icon="file-text-o"></widget></a>	
<a href="multi.php"><widget data-type="switch" data-title="Multimédia" data-icon="music"></widget></a>
<a href="cam.php"><widget data-type="switch"  data-title="Caméra" data-icon="video-camera"></widget></a> 






<?php
    include "footer.php";
?>