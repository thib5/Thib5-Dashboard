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


		<a href="presence.php"><widget><div class="row" style="margin-top: 2%"><br>
		<b><?php
$dom = file_get_contents('http://localhost:8880/rest/items/dom/state');
$eli = file_get_contents('http://localhost:8880/rest/items/eli/state');
echo "Dominic: ",str_replace("OFF","Absent",str_replace("ON","Présent",$dom)),"<br>","Éliane: ",str_replace("OFF","Absente",str_replace("ON","Présente",$eli));


?><br> <br>Présence</b></div></widget></a>	</b>




		<a href="historiqueBatt.php"><widget><div class="row" style="margin-top: 2%"><br>
		<b><?php
$Batdom1 = file_get_contents('http://localhost:8880/rest/items/BatDom1/state');
$Bateli1 = file_get_contents('http://localhost:8880/rest/items/BatEli1/state');

echo "Dominic: ",$Batdom1,"%","<br>","Éliane: ",$Bateli1,"%";


?><br> <br>Batterie iPhone</b></div></widget></a>	</b>

	<a href="#"><widget><div class="row" style="margin-top: 2%">
		<b><?php
$salon = file_get_contents('http://localhost:8880/rest/items/State/state');

echo "Salon: ",$salon,"<br>";
echo "chambre: ",$salon,"<br>";
echo "Toillette: ",$salon,"<br>";

?><br>kodi</b></div></widget></a>	</b>

 <widget data-type="openclose" data-item="rgbw" data-title="Porte Avant"></widget>
 	<widget data-type="trash" data-title="Trash" data-trashday="3" data-recycleday="4"></widget>

	</center>
		</div>
		
		
<?php
    include "footer.php";
?>