<!DOCTYPE html>

<html>

<head>
	<meta name="description" content="Ismail Mehmood Designs (IMD) is Malawi's leading architectural firm">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>IMD Architects</title>
	<link rel="stylesheet" href="./architect_files/w3.css">
    <style type="text/css">
       .gm-style .gm-style-mtc label,
        .gm-style .gm-style-mtc div {
            font-weight: 400
        }
        
        ,
        .gm-style .gm-style-cc span,
        .gm-style .gm-style-cc a,
        .gm-style .gm-style-mtc div {
            font-size: 10px
        }
        
        ,
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
        
        ,
        .gm-style {
            font: 400 11px Roboto, Arial, sans-serif;
            text-decoration: none;
        }
        
        .gm-style img {
            max-width: none;
		}
    </style>
    
</head>

<body>
    <!-- Navbar (sit on top) -->
    <div class="w3-top">
        <div class="w3-bar w3-white w3-wide w3-padding w3-card-2">
            <a href="#home" class="w3-bar-item w3-button"><b>IMD</b>  Architects home</a>
            <!-- Float links to the right. Hide them on small screens -->
            <div class="w3-right w3-small">
                <a href="projects.php" class="w3-bar-item w3-button">Projects</a>
                <a href="about.php" class="w3-bar-item w3-button">About</a>
                <a href="#contact" class="w3-bar-item w3-button">Contact</a>

            </div>
        </div>
    </div>

    <!-- Header -->
    </br>
    </br>
    </br>
    <header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
        <img class="w3-image" src="./architect_files/im.jpg" alt="Architecture" width="1500" height="800">
        <div class="w3-display-middle w3-margin-top w3-center">
            <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>IMD</b></span> <span class="w3-hide-small w3-text-light-grey">  Architects</span></h1>
        </div>
    </header>

    <!-- Page content -->
    <div class="w3-content w3-padding" style="max-width:1564px; ">
	<!-- background-color:#e0e2e5; -->
        <!-- Project Section -->
        <div class="w3-container w3-padding-32" id="projects">

            <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Featured Projects</h3>
        </div>

        <div class="w3-row-padding" style="background-color:#e0e2e5;">

			<?php
			include 'database.php';

			if (mysqli_connect_errno())
				{
				echo "MySQLi Connection was not established: please refer to the documentation and user guide to fix this problem" . mysqli_connect_error();
				}
			  else
				{
				$sel = "select * from projects ORDER BY RAND() LIMIT 8 ";
                $i = 0;
                $projects = null;
				$run_user = mysqli_query($con, $sel);
				if (mysqli_num_rows($run_user) > 0)
					{
					while ($row = mysqli_fetch_assoc($run_user))
						{
						echo '	<form action="project.php" method="GET">  
												<button class="w3-col l3 m6 w3-margin-bottom w3-button  w3-ripple" id="submit" type="submit">
												  <div class="w3-display-container" style="background-color:#e0e2e5; ">';
						$filename = 'Projects//' . $row["project_name"] . '/images/thumbnail.jpg';
						if (file_exists($filename))
							{
							echo '<img src="Projects//' . $row["project_name"] . '/images/thumbnail.jpg" alt="House" style="width:100%; border:0">';
							}
						  else
							{
							echo '<img src="Projects/thumbnail.jpg" alt="House" style="width:100%">';
							}

						

						echo ' <input type="hidden" value="' . $row["project_name"] . '" name="project_name" id="project_name" />	
												 </div>
												  
												</button>
												</form>';
						$i++;
						if ($i == 4)
							{
							echo '</div>
													<div class="w3-row-padding" style="background-color:#e0e2e5;">';
							$i = 0;
							}
						}
					}
				}
			?>

        </div>



        <!-- End page content -->
    </div>

    <!-- Google Map -->
    <div id="googleMap" class="w3-grayscale" style="width: 100%; height: 450px; position: relative; overflow: hidden;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3871.513731389297!2d33.7754703154088!3d-13.987524990195283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTPCsDU5JzE1LjEiUyAzM8KwNDYnMzkuNiJF!5e0!3m2!1sen!2smw!4v1496356627372" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

    <!-- Footer -->
    <footer class="w3-center w3-black w3-padding-16" name="contact">

        <p>Contact us! Let's get in touch and talk about yours and our next project.</p>

        <i class="fa fa-map-marker " style="width:30px "></i>
		Plot No. 2/132, Bombay Road, Area 2, Lilongwe, MW
		
		<br/> P.O. Box 1475 </br>
		Lilongwe
        <br>
        <a class="fa fa-phone " style="width:30px " href="tel: +265 01 774 628 "> Phone: +265 01 727 952</a>
        <br>
        <a class="fa fa-envelope " style="width:30px " href="mailto:imd@imdesignsmw.com"> Email: imd@imdesignsmw.com</a>
        <br>

        </div>

    </footer>

</body>

</html>