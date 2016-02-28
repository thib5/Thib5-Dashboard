
<?php
include "redirect.php";
include "header.php";

?>
	<script src='spectrum.js'></script>
<link rel='stylesheet' href='spectrum.css' />
<?php
$dim = file_get_contents('http://localhost:8880/rest/items/Dim/state');
$color = file_get_contents('http://localhost:8880/rest/items/color/state');
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

<widget data-type="switch" data-item="rgbw" data-title="plafond"></widget>
		<widget>
	<div style="margin-top: 20%";>	<input type='text' id="flat" onchange="colorchange(this.value)" oninput="colorchange(this.value)" />		
<script>

	mcolor = "hsl(<?php echo $color; ?>)";
	mcolor = ("" + mcolor).replace("100,100", "100,50");
$("#flat").spectrum({

    flat:false,
        showPaletteOnly: true,
        showPalette: true,
  showSelectionPalette: false,
            hideAfterPaletteSelect: true,
         color: mcolor,
            preferredFormat: "hsl",

       palette: [

           ["#f00","#f90","#ff0",],
        ["#0ff","#00f","#90f"],
       ["#f0f","#0f0","#87CEFA"],
   
   
    ]

});


</script>
</div>
<center>

<div style="margin-top: 2%";><input class="bar" type="range" min="0" max="100" value="<?php echo $dim; ?>" step="5" style="width: 82%" onchange="showValue(this.value)" oninput="showValue(this.value)" />
<span id="range"><b><?php echo $dim; ?>%</b></span>
</center>
<b>Plafond<b>
</widget>

			
							<widget data-type="switch" data-item="TV" data-title="TV"data-icon="desktop"></widget>

				<widget data-type="switch" data-item="love" data-title="Romance" data-icon="heart"></widget>	
<widget data-type="switch" data-item="rgb" data-title="Mode Nuit" data-icon="home"></widget>		
		<a href="camchambre.php"><widget><div class="icon:before row"><img height="80%" src="http://localhost:8082/cam/stream.mjpg"></div><b>Chambre</b></widget></a>	

	</center>
		</div>
		
		<script>
var dim = <?php echo $dim; ?>;
		function showValue(newValue)
{

	document.getElementById("range").innerHTML=newValue + "%";
	

	$.ajax({url:"ledon.php?item=Dim&value="+newValue});


}



	function colorchange(newValue)	
	{


	var color = $("#flat").spectrum("get");
color = ("" + color).replace( /%/g, "" );
color = ("" + color).replace(/[^\d,-]/g, '');
color = ("" + color).replace(/50/g, dim);
	$.ajax({url:"ledon.php?item=color&value="+color});
	setTimeout(function(){
       $.ajax({url:"ledon.php?item=color&value="+color});
    }, 800);
    setTimeout(function(){
       $.ajax({url:"ledon.php?item=color&value="+color});
    }, 800);
		
}
	
</script>
		
<?php
    include "footer.php";
?>