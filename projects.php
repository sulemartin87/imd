<!DOCTYPE html>
<!-- saved from url=(0064)https://www.w3schools.com/w3css/tryw3css_templates_architect.htm -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style type="text/css">.gm-style .gm-style-mtc label,.gm-style .gm-style-mtc div{font-weight:400}</style><link type="text/css" rel="stylesheet" href="./architect_files/css"><style type="text/css">.gm-style .gm-style-cc span,.gm-style .gm-style-cc a,.gm-style .gm-style-mtc div{font-size:10px}</style><style type="text/css">@media print {  .gm-style .gmnoprint, .gmnoprint {    display:none  }}@media screen {  .gm-style .gmnoscreen, .gmnoscreen {    display:none  }}</style><title>IMD   Architects</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./architect_files/w3.css">
<script type="text/javascript" charset="UTF-8" src="./architect_files/common.js.download"></script><script type="text/javascript" charset="UTF-8" src="./architect_files/map.js.download"></script><script type="text/javascript" charset="UTF-8" src="./architect_files/util.js.download"></script><script type="text/javascript" charset="UTF-8" src="./architect_files/marker.js.download"></script><style type="text/css">.gm-style {
        font: 400 11px Roboto, Arial, sans-serif;
        text-decoration: none;
      }
      .gm-style img { max-width: none; }</style><script type="text/javascript" charset="UTF-8" src="./architect_files/onion.js.download"></script><script type="text/javascript" charset="UTF-8" src="./architect_files/ViewportInfoService.GetViewportInfo"></script><script type="text/javascript" charset="UTF-8" src="./architect_files/stats.js.download"></script><script type="text/javascript" charset="UTF-8" src="./architect_files/controls.js.download"></script><script type="text/javascript" charset="UTF-8" src="./architect_files/AuthenticationService.Authenticate"></script><script type="text/javascript" charset="UTF-8" src="./architect_files/vt"></script><script type="text/javascript" charset="UTF-8" src="./architect_files/QuotaService.RecordEvent"></script></head><body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card-2">
    <a href="index.php" class="w3-bar-item w3-button"><b>IMD</b>  Architects</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="projects.php" class="w3-bar-item w3-button">Projects</a>
      <a href="index.php#about" class="w3-bar-item w3-button">About</a>
      <a href="index.php#contact" class="w3-bar-item w3-button">Contact</a>
    </div>
  </div>
</div>

<!-- Header -->


<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Projects</h3>
  </div>

  <div class="w3-row-padding">
  <?php
                 
               include 'database.php';
			     if (mysqli_connect_errno())
                {
                 echo "MySQLi Connection was not established: please refer to the documentation and user guide to fix this problem" . mysqli_connect_error();
                 
                }

                else
                {
					$sel = "select * from projects";
					$i = 0;
					$run_user = mysqli_query($con, $sel);
					if (mysqli_num_rows($run_user) > 0) 
					{
						while($row = mysqli_fetch_assoc($run_user)) 
						{
							echo '	<form action="project.php" method="GET">  
									<button class="w3-col l3 m6 w3-margin-bottom w3-button w3-white w3-ripple" id="submit" type="submit">
									  <div class="w3-display-container">
										<div class="w3-display-topleft w3-black w3-padding">'.$row["project_name"].'</div>
										<img src="Projects\\'.$row["project_name"].'\images\thumbnail.jpg" alt="House" style="width:100%">
										 <input type="hidden" value="'.$row["project_name"].'" name="project_name" id="project_name" />	
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
				}
			   
	?>		 
    
  </div>




  
<!-- End page content -->
</div>

<!-- Google Map -->

<!-- Footer -->


<!-- Add Google Maps -->

<script src="./architect_files/js"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->


</body></html>