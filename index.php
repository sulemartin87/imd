<!DOCTYPE html>
<!-- saved from url=(0064)https://www.w3schools.com/w3css/tryw3css_templates_architect.htm -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style type="text/css">.gm-style .gm-style-mtc label,.gm-style .gm-style-mtc div{font-weight:400}</style><link type="text/css" rel="stylesheet" href="./architect_files/css"><style type="text/css">.gm-style .gm-style-cc span,.gm-style .gm-style-cc a,.gm-style .gm-style-mtc div{font-size:10px}</style><style type="text/css">@media print {  .gm-style .gmnoprint, .gmnoprint {    display:none  }}@media screen {  .gm-style .gmnoscreen, .gmnoscreen {    display:none  }}</style><title>IMD   Architects</title>
<meta name="description" content="Ismail Mehmood Designs is Malawi's leading architectural firm">
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
    <a href="#home" class="w3-bar-item w3-button"><b>IMD</b>  Architects home</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-small">
      <a href="projects.php" class="w3-bar-item w3-button">Projects</a>
      <a href="#about" class="w3-bar-item w3-button">About</a>
      <a href="#contact" class="w3-bar-item w3-button">Contact</a>
	  
    </div>
  </div>
</div>

<!-- Header -->
<br/><br/><br/>
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="Projects/tm.jpg" alt="Architecture" width="1500" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>IMD</b></span> <span class="w3-hide-small w3-text-light-grey">  Architects</span></h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="projects">
  
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Featured Projects</h3>
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
					$sel = "select * from projects ORDER BY RAND() LIMIT 8 ";
					$i = 0;
					$run_user = mysqli_query($con, $sel);
					if (mysqli_num_rows($run_user) > 0) 
					{
						while($row = mysqli_fetch_assoc($run_user)) 
						{
							echo '	<form action="project.php" method="GET">  
									<button class="w3-col l3 m6 w3-margin-bottom w3-button w3-white w3-ripple" id="submit" type="submit">
									  <div class="w3-display-container">
										<div class="w3-display-topleft w3-black w3-padding">'.$row["project_name"].'</div>';
										$filename = 'Projects\\'.$row["project_name"].'\images\thumbnail.jpg';
										if (file_exists($filename)) {
										echo '<img src="Projects\\'.$row["project_name"].'\images\thumbnail.jpg" alt="House" style="width:100%">';
										}else {
											echo '<img src="Projects\thumbnail.jpg" alt="House" style="width:100%">';
										}
										//<img src="Projects\\'.$row["project_name"].'\images\thumbnail.jpg" alt="House" style="width:100%">
										echo ' <input type="hidden" value="'.$row["project_name"].'" name="project_name" id="project_name" />	
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



  <!-- About Section -->
  <div class="w3-container w3-padding-32" id="about">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">About</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
      occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
      laboris nisi ut aliquip ex ea commodo consequat.
    </p>
  </div>

  <div class="w3-row-padding w3-grayscale">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="./architect_files/team2.jpg" alt="John" style="width:100%">
      <h3>John Doe</h3>
      <p class="w3-opacity">CEO &amp; Founder</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="./architect_files/team1.jpg" alt="Jane" style="width:100%">
      <h3>Jane Doe</h3>
      <p class="w3-opacity">Architect</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="./architect_files/team3.jpg" alt="Mike" style="width:100%">
      <h3>Mike Ross</h3>
      <p class="w3-opacity">Architect</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="./architect_files/team4.jpg" alt="Dan" style="width:100%">
      <h3>Dan Star</h3>
      <p class="w3-opacity">Architect</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
  </div>

  <!-- Contact Section -->
  <div class="w3-container w3-padding-32" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Contact</h3>
    <p>Lets get in touch and talk about your and our next project.</p>
    <form action="https://www.w3schools.com/action_page.php" target="_blank">
      <input class="w3-input" type="text" placeholder="Name" required="" name="Name">
      <input class="w3-input w3-section" type="text" placeholder="Email" required="" name="Email">
      <input class="w3-input w3-section" type="text" placeholder="Subject" required="" name="Subject">
      <input class="w3-input w3-section" type="text" placeholder="Comment" required="" name="Comment">
      <button class="w3-button w3-black w3-section" type="submit">
        <i class="fa fa-paper-plane"></i> SEND MESSAGE
      </button>
    </form>
  </div>
  
<!-- End page content -->
</div>

<!-- Google Map -->
<div id="googleMap" class="w3-grayscale" style="width: 100%; height: 450px; position: relative; overflow: hidden;"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3871.513731389297!2d33.7754703154088!3d-13.987524990195283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTPCsDU5JzE1LjEiUyAzM8KwNDYnMzkuNiJF!5e0!3m2!1sen!2smw!4v1496356627372" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div> 

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
  <p><a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green"></a></p>
</footer>

<!-- Add Google Maps -->

<script src="./architect_files/js"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->


</body></html>