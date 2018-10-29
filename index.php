<!DOCTYPE html>
<html>
<title>STBI Unisbank</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.php?page=home" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="index.php?page=upload" class="w3-bar-item w3-button w3-padding-large w3-hide-small">UPLOAD</a>
    <a href="index.php?page=query" class="w3-bar-item w3-button w3-padding-large w3-hide-small">QUERY</a>
    <a href="index.php?page=awalquery" class="w3-bar-item w3-button w3-padding-large w3-hide-small">AWAL QUERY</a>
    <a href="index.php?page=tokenisasi" class="w3-bar-item w3-button w3-padding-large w3-hide-small">TOKENISASI</a>
    <a href="index.php?page=dokumen" class="w3-bar-item w3-button w3-padding-large w3-hide-small">DOKUMEN</a>
    <a href="index.php?page=hitungbobot" class="w3-bar-item w3-button w3-padding-large w3-hide-small">HITUNG BOBOT</a>
    <a href="index.php?page=hitungvektor" class="w3-bar-item w3-button w3-padding-large w3-hide-small">HITUNG VEKTOR</a>
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="index.php?page=upload" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">UPLOAD</a>
  <a href="index.php?page=query" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">QUERY</a>
  <a href="index.php?page=awalquery" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">AWAL QUERY</a>
  <a href="index.php?page=tokenisasi" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">TOKENISASI</a>
  <a href="index.php?page=dokumen" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">DOKUMEN</a>
  <a href="index.php?page=hitungbobot" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">HITUNG BOBOT</a>
  <a href="index.php?page=hitungvektor" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">HITUNG VEKTOR</a>
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <?php
            include("page.php");
    ?>
  
<!-- End Page Content -->
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>
<script>
    // Used to toggle the menu on small screens when clicking on the menu button
    function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
</body>
</html>
