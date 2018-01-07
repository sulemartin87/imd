<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
            .gm-style {
                font: 400 11px Roboto, Arial, sans-serif;
                text-decoration: none;
            }
            .gm-style img {
                max-width: none;
            }
    </style>
    <title>IMD Architects</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./architect_files/w3.css">

</head>

<body>
    <!-- Navbar (sit on top) -->
    <div class="w3-top">
        <div class="w3-bar w3-white w3-wide w3-padding w3-card-2">
            <a href="index.php" class="w3-bar-item w3-button"><b>IMD</b>  Architects home</a>
            <!-- Float links to the right. Hide them on small screens -->
            <div class="w3-right w3-small">
                <a href="projects.php" class="w3-bar-item w3-button">Projects</a>
                <a href="about.php" class="w3-bar-item w3-button">About</a>
                <a href="index.php#contact" class="w3-bar-item w3-button">Contact</a>
            </div>
        </div>
    </div>

    <!-- Header -->

    <!-- Page content -->
    <div class="w3-content w3-padding" style="max-width:1564px">
        <!-- php goes here -->
		<?php
			include 'database.php';
			   if (mysqli_connect_errno())
							{
							 echo "MySQLi Connection was not established: please refer to the documentation and user guide to fix this problem" . mysqli_connect_error();
							 
							}

							else
							{
								 
								
								
			echo '
			  <!-- Project Section -->
			  </br></br>
			  <div class="w3-container w3-padding-32" id="projects">
				<!--<h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Projects</h3>-->
				 <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Individual Houses</h3>';
				 $sel = "SELECT * FROM `projects` WHERE `project_type` = 'Individual Housing'";
								$i = 0;
								$run_user = mysqli_query($con, $sel);
								if (mysqli_num_rows($run_user) > 0) 
								{
									while($row = mysqli_fetch_assoc($run_user)) 
									{
										echo '	<form action="project.php" method="GET">  
												<button class="w3-col l3 m6 w3-margin-bottom w3-button w3-white w3-ripple" id="submit" type="submit">
												  <div class="w3-display-container">
													';
													$filename = 'Projects/'.$row["project_name"].'/images/thumbnail.jpg';
													if (file_exists($filename)) {
													echo '<img src="Projects/'.$row["project_name"].'/images/thumbnail.jpg" alt="House" style="width:100%">';
													}else {
														echo '<img src="Projects/thumbnail.jpg" alt="House" style="width:100%">';
													}
													
													echo' <input type="hidden" value="'.$row["project_name"].'" name="project_name" id="project_name" />	
												 </div>
												  
												</button>
												</form>';
												$i++;
												if ($i == 4) {
													echo '</div>
													<div class="w3-row-padding">';
													$i = 0;
												}
									}
									
								  
								}	
				  echo '</div><div class="w3-container w3-padding-32" > <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Housing</h3>';
				  $sel = "SELECT * FROM `projects` WHERE `project_type` = 'Housing'";
								$i = 0;
								$run_user = mysqli_query($con, $sel);
								if (mysqli_num_rows($run_user) > 0) 
								{
									while($row = mysqli_fetch_assoc($run_user)) 
									{
										echo '	<form action="project.php" method="GET">  
												<button class="w3-col l3 m6 w3-margin-bottom w3-button w3-white w3-ripple" id="submit" type="submit">
												  <div class="w3-display-container">
													';
													$filename = 'Projects//'.$row["project_name"].'/images/thumbnail.jpg';
													if (file_exists($filename)) {
													echo '<img src="Projects//'.$row["project_name"].'/images/thumbnail.jpg" alt="House" style="width:100%">';
													}else {
														echo '<img src="Projects/thumbnail.jpg" alt="House" style="width:100%">';
													}
													
													echo' <input type="hidden" value="'.$row["project_name"].'" name="project_name" id="project_name" />	
												 </div>
												  
												</button>
												</form>';
												$i++;
												if ($i == 4) {
													echo '</div>
													<div class="w3-row-padding">';
													$i = 0;
												}
									}
									
								  
								}
				  echo '</div><div class="w3-container w3-padding-32" > <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Hotels / Lodges</h3>';
				  $sel = "SELECT * FROM `projects` WHERE `project_type` = 'Hotel'";
								$i = 0;
								$run_user = mysqli_query($con, $sel);
								if (mysqli_num_rows($run_user) > 0) 
								{
									while($row = mysqli_fetch_assoc($run_user)) 
									{
										
										
										echo '	<form action="project.php" method="GET">  
												<button class="w3-col l3 m6 w3-margin-bottom w3-button w3-white w3-ripple" id="submit" type="submit">
												  <div class="w3-display-container">
													';
													$filename = 'Projects//'.$row["project_name"].'/images/thumbnail.jpg';
													if (file_exists($filename)) {
													echo '<img src="Projects//'.$row["project_name"].'/images/thumbnail.jpg" alt="House" style="width:100%">';
													}else {
														echo '<img src="Projects/thumbnail.jpg" alt="House" style="width:100%">';
													}
													
													echo' <input type="hidden" value="'.$row["project_name"].'" name="project_name" id="project_name" />	
												 </div>
												  
												</button>
												</form>';
												$i++;
												if ($i == 4) {
													echo '</div>
													<div class="w3-row-padding">';
													$i = 0;
												}
									}
									
								  
								}
					echo '</div><div class="w3-container w3-padding-32" > <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Offices</h3>';
				   $sel = "SELECT * FROM `projects` WHERE `project_type` = 'Offices'";
								$i = 0;
								$run_user = mysqli_query($con, $sel);
								if (mysqli_num_rows($run_user) > 0) 
								{
									while($row = mysqli_fetch_assoc($run_user)) 
									{
										echo '	<form action="project.php" method="GET">  
												<button class="w3-col l3 m6 w3-margin-bottom w3-button w3-white w3-ripple" id="submit" type="submit">
												  <div class="w3-display-container">
													';
													$filename = 'Projects//'.$row["project_name"].'/images/thumbnail.jpg';
													if (file_exists($filename)) {
													echo '<img src="Projects//'.$row["project_name"].'/images/thumbnail.jpg" alt="House" style="width:100%">';
													}else {
														echo '<img src="Projects/thumbnail.jpg" alt="House" style="width:100%">';
													}
													
													echo' <input type="hidden" value="'.$row["project_name"].'" name="project_name" id="project_name" />	
												 </div>
												  
												</button>
												</form>';
												$i++;
												if ($i == 4) {
													echo '</div>
													<div class="w3-row-padding">';
													$i = 0;
												}
									}
									
								  
								}
						  echo '</div><div class="w3-container w3-padding-32" > <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Shopping Malls</h3>';
				   $sel = "SELECT * FROM `projects` WHERE `project_type` = 'Shopping Malls'";
								$i = 0;
								$run_user = mysqli_query($con, $sel);
								if (mysqli_num_rows($run_user) > 0) 
								{
									while($row = mysqli_fetch_assoc($run_user)) 
									{
										echo '	<form action="project.php" method="GET">  
												<button class="w3-col l3 m6 w3-margin-bottom w3-button w3-white w3-ripple" id="submit" type="submit">
												  <div class="w3-display-container">
													';
													$filename = 'Projects//'.$row["project_name"].'/images/thumbnail.jpg';
													if (file_exists($filename)) {
													echo '<img src="Projects//'.$row["project_name"].'/images/thumbnail.jpg" alt="House" style="width:100%">';
													}else {
														echo '<img src="Projects/thumbnail.jpg" alt="House" style="width:100%">';
													}
													
													echo' <input type="hidden" value="'.$row["project_name"].'" name="project_name" id="project_name" />	
												 </div>
												  
												</button>
												</form>';
												$i++;
												if ($i == 4) {
													echo '</div>
													<div class="w3-row-padding">';
													$i = 0;
												}
									}
									
								  
								}
					  echo '</div><div class="w3-container w3-padding-32" > <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Religious Buildings</h3>';
					 $sel = "SELECT * FROM `projects` WHERE `project_type` = 'Religious Buildings'";
								$i = 0;
								$run_user = mysqli_query($con, $sel);
								if (mysqli_num_rows($run_user) > 0) 
								{
									while($row = mysqli_fetch_assoc($run_user)) 
									{
										echo '	<form action="project.php" method="GET">  
												<button class="w3-col l3 m6 w3-margin-bottom w3-button w3-white w3-ripple" id="submit" type="submit">
												  <div class="w3-display-container">
												';
													$filename = 'Projects//'.$row["project_name"].'/images/thumbnail.jpg';
													if (file_exists($filename)) {
													echo '<img src="Projects//'.$row["project_name"].'/images/thumbnail.jpg" alt="House" style="width:100%">';
													}else {
														echo '<img src="Projects/thumbnail.jpg" alt="House" style="width:100%">';
													}
													
													echo' <input type="hidden" value="'.$row["project_name"].'" name="project_name" id="project_name" />	
												 </div>
												  
												</button>
												</form>';
												$i++;
												if ($i == 4) {
													echo '</div>
													<div class="w3-row-padding">';
													$i = 0;
												}
									}
									
								  
								}
								
								
								
					echo '</div><div class="w3-container w3-padding-32" > <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Institutions</h3>';
					 $sel = "SELECT * FROM `projects` WHERE `project_type` = 'institutions'";
								$i = 0;
								$run_user = mysqli_query($con, $sel);
								if (mysqli_num_rows($run_user) > 0) 
								{
									while($row = mysqli_fetch_assoc($run_user)) 
									{
										echo '	<form action="project.php" method="GET">  
												<button class="w3-col l3 m6 w3-margin-bottom w3-button w3-white w3-ripple" id="submit" type="submit">
												  <div class="w3-display-container">
													';
													$filename = 'Projects//'.$row["project_name"].'/images/thumbnail.jpg';
													if (file_exists($filename)) {
													echo '<img src="Projects//'.$row["project_name"].'/images/thumbnail.jpg" alt="House" style="width:100%">';
													}else {
														echo '<img src="Projects/thumbnail.jpg" alt="House" style="width:100%">';
													}
													
													echo' <input type="hidden" value="'.$row["project_name"].'" name="project_name" id="project_name" />	
												 </div>
												  
												</button>
												</form>';
												$i++;
												if ($i == 4) {
													echo '</div>
													<div class="w3-row-padding">';
													$i = 0;
												}
									}
									
								  
								}
						echo '</div><div class="w3-container w3-padding-32" > <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Government Buildings</h3>';
					 $sel = "SELECT * FROM `projects` WHERE `project_type` = 'Government Buildings'";
								$i = 0;
								$run_user = mysqli_query($con, $sel);
								if (mysqli_num_rows($run_user) > 0) 
								{
									while($row = mysqli_fetch_assoc($run_user)) 
									{
										echo '	<form action="project.php" method="GET">  
												<button class="w3-col l3 m6 w3-margin-bottom w3-button w3-white w3-ripple" id="submit" type="submit">
												  <div class="w3-display-container">
													';
													$filename = 'Projects//'.$row["project_name"].'/images/thumbnail.jpg';
													if (file_exists($filename)) {
													echo '<img src="Projects//'.$row["project_name"].'/images/thumbnail.jpg" alt="House" style="width:100%">';
													}else {
														echo '<img src="Projects/thumbnail.jpg" alt="House" style="width:100%">';
													}
													
													echo' <input type="hidden" value="'.$row["project_name"].'" name="project_name" id="project_name" />	
												 </div>
												  
												</button>
												</form>';
												$i++;
												if ($i == 4) {
													echo '</div>
													<div class="w3-row-padding">';
													$i = 0;
												}
									}
									
								  
								}
								
								 echo ' </div>
								
			  <div class="w3-row-padding"> </div>'; 
							}
						   
		?>		 
				
    </div>

    <!-- End page content -->
    </div>

</body>

</html>