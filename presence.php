

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
		
		
<widget2><div class="icon:before row" onclick="history.go(-1)" style="margin-top: 0%"><h2>
<center>
<?php

		


$dom = file_get_contents('http://localhost:8080/data.php?item=dom');
$data = json_decode($dom, TRUE);
foreach  ( (array)$data as $row)
{


echo str_replace("Sun","Dim",str_replace("Fri","Ven",str_replace("Thu","Jeu",str_replace("Wed","Mer",str_replace("Tue","Mar",str_replace("Mon","Lun",str_replace('Sat',"Sam",str_replace("OFF","Départ",str_replace("ON","Arrivé",$row['timestamp']. " ".$row['value']."<br> \n")))))))));
}

?>



<center>
</div><div style="margin-top: 0%";><b><h2>Dominic</b></div></widget2>
<widget2><div class="icon:before row" style="margin-top: 0%"><h2>
<center>
<?php
		


$eli = file_get_contents('http://localhost:8080/data.php?item=eli');
$data = json_decode($eli, TRUE);
foreach  ( (array)$data as $row)
{


echo str_replace("Sun","Dim",str_replace("Fri","Ven",str_replace("Thu","Jeu",str_replace("Wed","Mer",str_replace("Tue","Mar",str_replace("Mon","Lun",str_replace('Sat',"Sam",str_replace("OFF","Départ",str_replace("ON","Arrivé",$row['timestamp']. " ".$row['value']."<br> \n")))))))));
}

?>


<center>
</div><div style="margin-top: 0%";><b><h2>Éliane</b></div></widge2t>







		
	</center>
		</div>
		
		
<?php
    include "footer.php";
?>