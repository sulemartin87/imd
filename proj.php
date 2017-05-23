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
    <a href="#home" class="w3-bar-item w3-button"><b>IMD</b>  Architects</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="#projects" class="w3-bar-item w3-button">Projects</a>
      <a href="#about" class="w3-bar-item w3-button">About</a>
      <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    </div>
  </div>
</div>

<!-- Header -->


<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Projects</h3>
		<div class="w3-content w3-display-container" style="max-width:800px">
  <img class="mySlides" src="Projects\Manobec Building\images\1.jpg" style="width:100%">
  <img class="mySlides" src="Projects\Manobec Building\images\2.jpg" style="width:100%">
  <img class="mySlides" src="Projects\Manobec Building\images\3.jpg" style="width:100%">
  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
  </div>
</div>
  </div>

 
  </div>




  
<!-- End page content -->
</div>

<!-- Google Map -->

<!-- Footer -->
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

<!-- Add Google Maps -->

<script src="./architect_files/js"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->


</body></html>