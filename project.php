<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>IMD Architects</title>
	<link rel="stylesheet" href="./architect_files/w3.css">
    <style type="text/css">
        .gm-style .gm-style-mtc label,
        .gm-style .gm-style-mtc div {
            font-weight: 400
        }

  
        .gm-style .gm-style-cc span,
        .gm-style .gm-style-cc a,
        .gm-style .gm-style-mtc div {
            font-size: 10px
        }
        @media print {
            .gm-style .gmnoprint,
            .gmnoprint {
                display: none
            }
        }
        
        @media screen {
            .gm-style .gmnoscreen,
            .gmnoscreen {
                display: none
            }
        }
        .gm-style {
            font: 400 11px Roboto, Arial, sans-serif;
            text-decoration: none;
        }
        
        .gm-style img {
            max-width: none;
        }
        
        .mySlides {
            display: none
        }
        
        .w3-left,
        .w3-right,
        .w3-badge {
            cursor: pointer
        }
        
        .w3-badge {
            height: 13px;
            width: 13px;
            padding: 0
        }
    </style>
   
</head>

<body>

    <!-- Navbar (sit on top) -->
    <div class="w3-top">
        <div class="w3-bar w3-white w3-wide w3-padding w3-card-2">
            <a href="index.php" class="w3-bar-item w3-button"><b>IMD</b>  Architects home</a>
            <!-- Float links to the right. Hide them on small screens -->
            <div class="w3-right ">
                <a href="projects.php" class="w3-bar-item w3-button">Projects</a>
                <a href="about.php" class="w3-bar-item w3-button">About</a>
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
			echo '<br/><br/><h3 class="w3-border-bottom w3-border-light-grey w3-padding-16"></h3>';
			echo '<div class="w3-content w3-display-container" style="max-width:800px">';
			$dir1 = 'Projects/' . $_GET['project_name'] . '/images';

			if (is_dir($dir1))
				{
				if ($handle = opendir('Projects/' . $_GET['project_name'] . '/images'))
					{
					while (false !== ($entry = readdir($handle)))
						{
						if ($entry != "." && $entry != "..")
							{
							echo '<img class="mySlides" src="Projects/' . $_GET['project_name'] . '/images//' . $entry . '" style="width:100%">';
							}
						}

					closedir($handle);
					}
				}

	?>

	<div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle " style="width:100% ">
    <div class="w3-left w3-hover-text-khaki " onclick="plusDivs(-1) ">&#10094;</div>
    <div class="w3-right w3-hover-text-khaki " onclick="plusDivs(1) ">&#10095;</div>

	
	<?php
	$dir = 'Projects/' . $_GET['project_name'] . '/images';

	if (is_dir($dir))
		{
		if ($handle = opendir('Projects/' . $_GET['project_name'] . '/images'))
			{
			$i = 1;
			while (false !== ($entry = readdir($handle)))
				{
				if ($entry != "." && $entry != "..")
					{
					echo '<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(' . $i . ')"></span>';
					}

				$i++;
				}

			closedir($handle);
			}
		  else
			{
			echo 'property has not been added yet';
			}
		}

	?>
	</div>
	</div>
	</div> 

	  <div class="w3-container w3-padding-32 " id="about ">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16 ">About</h3>


	<?php
		$parser = xml_parser_create();

		function char($parser, $data)
			{
			echo '<p>
					' . $data . '</p>';
			}

		xml_set_character_data_handler($parser, "char");
		$filename = 'Projects/' . $_GET['project_name'] . '/details.xml';

		// $handle = opendir('Projects\\'.$_GET['project_name'].'\images')

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
			}
	?>

	</div>
	<div class="w3-container w3-padding-32 " id="location ">
	<!-- <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16 ">Location</h3>-->
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
		  var x = document.getElementsByClassName("mySlides ");
		  var dots = document.getElementsByClassName("demo ");
		  if (n > x.length) {slideIndex = 1}    
		  if (n < 1) {slideIndex = x.length}
		  for (i = 0; i < x.length; i++) {
			 x[i].style.display = "none ";  
		  }
		  for (i = 0; i < dots.length; i++) {
			 dots[i].className = dots[i].className.replace(" w3-white ", " ");
		  }
		  x[slideIndex-1].style.display = "block ";  
		  dots[slideIndex-1].className += " w3-white ";
		}
		</script>

 	</div>
</div>

</div>

</body></html>