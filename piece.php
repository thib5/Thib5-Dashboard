
<?php
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
 
<a href="chambre.php"><widget data-type="switch" data-title="Chambre" data-icon="user"></widget></a>
<a href="cuisine.php"><widget data-type="switch" data-title="Cuisine" data-icon="coffee"></widget></a>
<a href="chambre.php"><widget data-type="switch" data-title="Salon" data-icon="film"></widget></a>
<a href="chambre.php"><widget data-type="switch" data-title="Toilette" data-icon="fa fa-wheelchair"></widget></a>
<a href="entre.php"><widget data-type="switch" data-title="Entré" data-icon="home"></widget></a>
<a href="chambre.php"><widget data-type="switch" data-title="Exterieur" data-icon="home"></widget></a>
						
	</center>
		</div>
<?php
include "footer.php";
?>