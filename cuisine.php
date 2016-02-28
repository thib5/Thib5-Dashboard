<?php
include "header.php";
?>

	<div style="margin-top: 40px;">
			<!--
	
			-->
		<center>
 
					

					<widget data-type="switch" data-item="milight" data-title="milight"></widget>
				<widget data-type="switch" data-item="CamSwitch" data-title="Camera" data-icon="video-camera"></widget>
			<widget data-type="trash" data-title="Trash" data-trashday="1" data-recycleday="2"></widget>		
		<a href="camchambre.php"><widget><div class="icon:before row"><img height="80%" src="http://thib5.com:8082/cam/stream.mjpg"></div><b>Chambre</b></widget></a>	
		<a href="recette.php"><widget data-type="switch"  data-title="Recette" data-icon="fa fa-book"></widget></a>	
			
	</center>
		</div>
		
		
<?php
    include "footer.php";
?>