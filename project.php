<!DOCTYPE html>
<!-- saved from url=(0064)https://www.w3schools.com/w3css/tryw3css_templates_architect.htm -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style type="text/css">.gm-style .gm-style-mtc label,.gm-style .gm-style-mtc div{font-weight:400}</style><link type="text/css" rel="stylesheet" href="./architect_files/css"><style type="text/css">.gm-style .gm-style-cc span,.gm-style .gm-style-cc a,.gm-style .gm-style-mtc div{font-size:10px}</style><style type="text/css">@media print {  .gm-style .gmnoprint, .gmnoprint {    display:none  }}@media screen {  .gm-style .gmnoscreen, .gmnoscreen {    display:none  }}</style><title>IMD   Architects</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./architect_files/w3.css">
<script type="text/javascript" charset="UTF-8" src="./architect_files/common.js.download"></script>
<script type="text/javascript" charset="UTF-8" src="./architect_files/map.js.download"></script>
<script type="text/javascript" charset="UTF-8" src="./architect_files/util.js.download"></script>
<script type="text/javascript" charset="UTF-8" src="./architect_files/marker.js.download"></script>
<style type="text/css">
		.gm-style 
		{
        font: 400 11px Roboto, Arial, sans-serif;
        text-decoration: none;
		}
		.gm-style img 
		{ max-width: none; }
		.mySlides {display:none}
		.w3-left, .w3-right, .w3-badge {cursor:pointer}
		.w3-badge {height:13px;width:13px;padding:0}
</style>
<script type="text/javascript" charset="UTF-8" src="./architect_files/onion.js.download"></script>
<script type="text/javascript" charset="UTF-8" src="./architect_files/ViewportInfoService.GetViewportInfo"></script>
<script type="text/javascript" charset="UTF-8" src="./architect_files/stats.js.download"></script>
<script type="text/javascript" charset="UTF-8" src="./architect_files/controls.js.download"></script>
<script type="text/javascript" charset="UTF-8" src="./architect_files/AuthenticationService.Authenticate"></script>
<script type="text/javascript" charset="UTF-8" src="./architect_files/vt"></script><script type="text/javascript" charset="UTF-8" src="./architect_files/QuotaService.RecordEvent"></script>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card-2">
    <a href="index.php" class="w3-bar-item w3-button"><b>IMD</b>  Architects home</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right ">
      <a href="projects.php" class="w3-bar-item w3-button">Projects</a>
      <a href="index.php#about" class="w3-bar-item w3-button">About</a>
      <a href="index.php#contact" class="w3-bar-item w3-button">Contact</a>
    </div>
  </div>
</div>

<!-- Header -->


<!-- Page content -->
<div class="w3-content w3-padding" ">

  <!-- Project Section -->
	<div class="w3-container w3-padding-32" id="projects">
		<?php
			echo '<br/><br/><h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">'.$_GET['project_name'].'</h3>';
	
			echo '<div class="w3-content w3-display-container" style="max-width:800px">';
			$dir1 = 'Projects/'.$_GET['project_name'].'/images';
			if (is_dir($dir1)) {
					if ($handle = opendir('Projects/'.$_GET['project_name'].'/images')) 
			{
				while (false !== ($entry = readdir($handle))) 
				{
					if ($entry != "." && $entry != "..") 
					{
						 echo '<img class="mySlides" src="Projects\\'.$_GET['project_name'].'\images\\'.$entry.'" style="width:100%">';	
					}
				}
				closedir($handle);
			}
			}
			
		?>
 
	<div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
	
		<?php
		
			$dir = 'Projects/'.$_GET['project_name'].'/images';
			if (is_dir($dir) )
			{
				if ($handle = opendir('Projects/'.$_GET['project_name'].'/images')) 
			{
				$i = 1;
				while (false !== ($entry = readdir($handle))) 
				{
					if ($entry != "." && $entry != "..") 
					{

					   
						echo '<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv('.$i.')"></span>';
						
					}
				$i++;
				}
				closedir($handle);
			}else {
				echo 'property has not been added yet';
			}
			}
			
	  ?>
    
	</div>
	</div>
	</div> 
	
	  <div class="w3-container w3-padding-32" id="about">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">About</h3>
	<?php
		$parser = xml_parser_create();
		function char($parser, $data)
		{
			echo '<p>
			'.$data.'</p>';
		}

		xml_set_character_data_handler($parser, "char");
		$filename = 'Projects/' .$_GET['project_name']. '/details.xml';
		
		
		//$handle = opendir('Projects\\'.$_GET['project_name'].'\images')
		if (file_exists($filename))
		{
			$fp = fopen($filename, "r");
			while ($data = fread($fp, 4096))
			{
				xml_parse($parser, $data, feof($fp)) or die(sprintf("XML Error: %s at line %d", xml_error_string(xml_get_error_code($parser)) , xml_get_current_line_number($parser)));
			}

			xml_parser_free($parser);
		}
		else
		{
			echo "No description has been added for this property";
			/*if (isset($_SESSION["user_name"]))
			{
				$use = $_SESSION["user_name"];
				if ($use == "admin")
				{
					if (isset($_SESSION['last_id']))
					{
						unset($_SESSION['last_id']);
						$_SESSION['last_id'] = $_GET['property_id'];
						echo '<span class="mdl-layout-title"><a class="mdl-navigation__link" href="text summary.php" style="font-size: 20px; margin-left:30%;">Add a description</span></a>';
					}
					else
					{
						$_SESSION['last_id'] = $_GET['property_id'];
						echo '<span class="mdl-layout-title"><a class="mdl-navigation__link" href="text summary.php" style="font-size: 20px; margin-left:30%;">Add a description</span></a>';
					}
				}
			}*/
		}
	
	?>
   
  </div>
   <div class="w3-container w3-padding-32" id="location">
   <!-- <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Location</h3>-->
 

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>
<?php
/*		$parser = xml_parser_create();
		function char1($parser, $data)
		{
			//AIzaSyDdF6Dw1u-2zgTS9Z3XBwqghgNamSFX2Tc
			
			echo '<script>
			function myMap()
			{
			  myCenter=new google.maps.LatLng('.$data.');
			  var mapOptions= {
				center:myCenter,
				zoom:12, scrollwheel: false, draggable: false,
				mapTypeId:google.maps.MapTypeId.ROADMAP
			  };
			  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

			  var marker = new google.maps.Marker({
				position: myCenter,
			  });
			  marker.setMap(map);
			}
			</script>';
		}

		xml_set_character_data_handler($parser, "char1");
		$filename = "projects/" .$_GET['project_name']. "/location.xml";
		//$handle = opendir('Projects\\'.$_GET['project_name'].'\images')
		if (file_exists($filename))
		{
			echo'<div id="googleMap" class="w3-grayscale" style="width: 100%; height: 450px; position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;"><div style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;"><div style="z-index: 1; position: absolute; top: 0px; left: 0px; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);"><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; position: absolute; left: 704px; top: 130px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 960px; top: 130px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 960px; top: -126px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 704px; top: -126px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 704px; top: 386px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 960px; top: 386px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 448px; top: 130px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 1216px; top: 130px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 448px; top: 386px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 1216px; top: -126px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 1216px; top: 386px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 448px; top: -126px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 1472px; top: 130px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 192px; top: 130px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 192px; top: 386px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 1472px; top: -126px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 1472px; top: 386px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 192px; top: -126px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 1728px; top: 130px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -64px; top: 130px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -64px; top: 386px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 1728px; top: -126px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -64px; top: -126px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 1728px; top: 386px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 704px; top: 130px;"><canvas draggable="false" height="256" width="256" style="user-select: none; position: absolute; left: 0px; top: 0px; height: 256px; width: 256px;"></canvas></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 960px; top: 130px;"><canvas draggable="false" height="256" width="256" style="user-select: none; position: absolute; left: 0px; top: 0px; height: 256px; width: 256px;"></canvas></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 960px; top: -126px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 704px; top: -126px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 704px; top: 386px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 960px; top: 386px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 448px; top: 130px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 1216px; top: 130px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 448px; top: 386px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 1216px; top: -126px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 1216px; top: 386px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 448px; top: -126px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 1472px; top: 130px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 192px; top: 130px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 192px; top: 386px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 1472px; top: -126px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 1472px; top: 386px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 192px; top: -126px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 1728px; top: 130px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -64px; top: 130px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -64px; top: 386px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 1728px; top: -126px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -64px; top: -126px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 1728px; top: 386px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="position: absolute; left: 704px; top: 130px; transition: opacity 200ms ease-out;"><img src="./architect_files/vt(1)" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 960px; top: 130px; transition: opacity 200ms ease-out;"><img src="./architect_files/vt(2)" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 960px; top: -126px; transition: opacity 200ms ease-out;"><img src="./architect_files/vt(3)" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 704px; top: -126px; transition: opacity 200ms ease-out;"><img src="./architect_files/vt(4)" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 704px; top: 386px; transition: opacity 200ms ease-out;"><img src="./architect_files/vt(5)" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 960px; top: 386px; transition: opacity 200ms ease-out;"><img src="./architect_files/vt(6)" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 448px; top: 130px; transition: opacity 200ms ease-out;"><img src="./architect_files/vt(7)" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 1216px; top: 130px; transition: opacity 200ms ease-out;"><img src="./architect_files/vt(8)" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 448px; top: 386px; transition: opacity 200ms ease-out;"><img src="./architect_files/vt(9)" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 1216px; top: -126px; transition: opacity 200ms ease-out;"><img src="./architect_files/vt(10)" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 1216px; top: 386px; transition: opacity 200ms ease-out;"><img src="./architect_files/vt(11)" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 448px; top: -126px; transition: opacity 200ms ease-out;"><img src="./architect_files/vt(12)" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 1472px; top: 130px; transition: opacity 200ms ease-out;"><img src="./architect_files/vt(13)" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 192px; top: 130px; transition: opacity 200ms ease-out;"><img src="./architect_files/vt(14)" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 192px; top: 386px; transition: opacity 200ms ease-out;"><img src="./architect_files/vt(15)" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 1472px; top: -126px; transition: opacity 200ms ease-out;"><img src="./architect_files/vt(16)" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 1472px; top: 386px; transition: opacity 200ms ease-out;"><img src="./architect_files/vt(17)" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 192px; top: -126px; transition: opacity 200ms ease-out;"><img src="./architect_files/vt(18)" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 1728px; top: 130px; transition: opacity 200ms ease-out;"><img src="./architect_files/vt(19)" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -64px; top: 130px; transition: opacity 200ms ease-out;"><img src="./architect_files/vt(20)" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -64px; top: 386px; transition: opacity 200ms ease-out;"><img src="./architect_files/vt(21)" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 1728px; top: -126px; transition: opacity 200ms ease-out;"><img src="./architect_files/vt(22)" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -64px; top: -126px; transition: opacity 200ms ease-out;"><img src="./architect_files/vt(23)" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 1728px; top: 386px; transition: opacity 200ms ease-out;"><img src="./architect_files/vt(24)" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div></div><div style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"></div><div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"><div style="z-index: 1; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"></div></div><div style="z-index: 4; position: absolute; top: 0px; left: 0px; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div><iframe frameborder="0" style="z-index: -1; border: 0px none; position: absolute; height: 100%; width: 100%; padding: 0px; margin: 0px; left: 0px; top: 0px;" src="./architect_files/saved_resource.html"></iframe></div><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a target="_blank" href="https://maps.google.com/maps?ll=41.878114,-87.629798&amp;z=12&amp;t=m&amp;hl=en-GB&amp;gl=US&amp;mapclient=apiv3" title="Click to see this area on Google Maps" style="position: static; overflow: visible; float: none; display: inline;"><div style="width: 66px; height: 26px; cursor: pointer;"><img src="./architect_files/google4.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></a></div><div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 256px; height: 148px; position: absolute; left: 802px; top: 135px;"><div style="padding: 0px 0px 10px; font-size: 16px;">Map Data</div><div style="font-size: 13px;">Map data ©2017 Google</div><div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img src="./architect_files/mapcnt6.png" draggable="false" style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 166px; bottom: 0px; width: 121px;"><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer; display: none;">Map Data</a><span>Map data ©2017 Google</span></div></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Map data ©2017 Google</div></div><div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 95px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/en-GB_US/help/terms_maps.html" target="_blank" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Terms of Use</a></div></div><div style="cursor: pointer; width: 25px; height: 25px; overflow: hidden; display: none; margin: 10px 14px; position: absolute; top: 0px; right: 0px;"><img src="./architect_files/sv9.png" draggable="false" class="gm-fullscreen-control" style="position: absolute; left: -52px; top: -86px; width: 164px; height: 175px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_new" title="Report errors in the road map or imagery to Google" href="https://www.google.com/maps/@41.878114,-87.629798,12z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Report a map error</a></div></div><div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false" controlwidth="28" controlheight="93" style="margin: 10px; user-select: none; position: absolute; bottom: 107px; right: 28px;"><div class="gmnoprint" controlwidth="28" controlheight="55" style="position: absolute; left: 0px; top: 38px;"><div draggable="false" style="user-select: none; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 28px; height: 55px;"><div title="Zoom in" style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;"><div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img src="./architect_files/tmapctrl.png" draggable="false" style="position: absolute; left: 0px; top: 0px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div></div><div style="position: relative; overflow: hidden; width: 67%; height: 1px; left: 16%; background-color: rgb(230, 230, 230); top: 0px;"></div><div title="Zoom out" style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;"><div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img src="./architect_files/tmapctrl.png" draggable="false" style="position: absolute; left: 0px; top: -15px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div></div></div></div><div class="gm-svpc" controlwidth="28" controlheight="28" style="background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; border-radius: 2px; width: 28px; height: 28px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default; position: absolute; left: 0px; top: 0px;"><div style="position: absolute; left: 1px; top: 1px;"></div><div style="position: absolute; left: 1px; top: 1px;"><div aria-label="Street View Pegman Control" style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px;"><img src="./architect_files/cb_scout5.png" draggable="false" style="position: absolute; left: -147px; top: -26px; width: 215px; height: 835px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div aria-label="Pegman is on top of the Map" style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="./architect_files/cb_scout5.png" draggable="false" style="position: absolute; left: -147px; top: -52px; width: 215px; height: 835px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div aria-label="Street View Pegman Control" style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="./architect_files/cb_scout5.png" draggable="false" style="position: absolute; left: -147px; top: -78px; width: 215px; height: 835px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div><div class="gmnoprint" controlwidth="28" controlheight="0" style="display: none; position: absolute;"><div title="Rotate map 90 degrees" style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; cursor: pointer; background-color: rgb(255, 255, 255); display: none;"><img src="./architect_files/tmapctrl4.png" draggable="false" style="position: absolute; left: -141px; top: 6px; width: 170px; height: 54px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div class="gm-tilt" style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; top: 0px; cursor: pointer; background-color: rgb(255, 255, 255);"><img src="./architect_files/tmapctrl4.png" draggable="false" style="position: absolute; left: -141px; top: -13px; width: 170px; height: 54px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div><div class="gmnoprint" style="margin: 10px; z-index: 0; position: absolute; cursor: pointer; left: 0px; top: 0px;"><div class="gm-style-mtc" style="float: left;"><div draggable="false" title="Show street map" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 8px; border-bottom-left-radius: 2px; border-top-left-radius: 2px; -webkit-background-clip: padding-box; background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; min-width: 22px; font-weight: 500;">Map</div><div style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; position: absolute; left: 0px; top: 29px; text-align: left; display: none;"><div draggable="false" title="Show street map with terrain" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap;"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden; display: none;"><img src="./architect_files/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Terrain</label></div></div></div><div class="gm-style-mtc" style="float: left;"><div draggable="false" title="Show satellite imagery" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(86, 86, 86); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 8px; border-bottom-right-radius: 2px; border-top-right-radius: 2px; -webkit-background-clip: padding-box; background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; border-left: 0px; min-width: 40px;">Satellite</div><div style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; position: absolute; right: 0px; top: 29px; text-align: left; display: none;"><div draggable="false" title="Show imagery with street names" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap;"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden;"><img src="./architect_files/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Labels</label></div></div></div></div></div></div></div>
';
			$fp = fopen("projects/" .$_GET['project_name']. "/location.xml", "r");
			while ($data = fread($fp, 4096))
			{
				xml_parse($parser, $data, feof($fp)) or die(sprintf("XML Error: %s at line %d", xml_error_string(xml_get_error_code($parser)) , xml_get_current_line_number($parser)));
			}

			xml_parser_free($parser);
		}
		else
		{
			echo "No GPS location has been added for this property";
			
		}
	*/
	?>


 	</div>
</div>

</div>
<script src="./architect_files/js"></script>

</body></html>