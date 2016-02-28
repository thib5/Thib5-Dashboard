<?php
include "header.php";
?>


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
 
					

<div class="cam"  row onclick="history.go(-1)">	<img height="80%" src="/cam/stream.mjpg"></div>		
	

			
	</center>

		
		
<?php
    include "footer.php";
?>