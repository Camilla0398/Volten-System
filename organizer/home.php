<?php
session_start();
error_reporting(0);
include("dbconnection.php");
if(isset($_POST['login']))
?>

<!DOCTYPE html>
<html>
<title>Organizers Homepage</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body id="myPage">

<!-- Sidebar on click -->
<nav class="w3-sidebar w3-bar-block w3-white w3-card w3-animate-left w3-xxlarge" style="display:none;z-index:2" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-display-topright w3-text-teal">Close
    <i class="fa fa-remove"></i>
  </a>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
  <a href="#" class="w3-bar-item w3-button">Link 4</a>
  <a href="#" class="w3-bar-item w3-button">Link 5</a>
</nav>

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="home.php" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Home</a>
  <a href="orgprofile.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">My Profile</a>
  <a href="create-event.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Register Events</a>
  <a href="manage-event.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Manage Events</a>
  <a href="view-booking.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Manage Volunteers Event Registration</a>
  <a href="manage-query.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Manage Queries</a>
  <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Logout</a>
  <a href="" class="w3-bar-item w3-button"> <?php echo $_SESSION['login'];?></a>
 </div>
  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
    <a href="orgprofile.php" class="w3-bar-item w3-button">My Profile</a>
    <a href="create-event.php" class="w3-bar-item w3-button">Register Events</a>
    <a href="manage-event.php" class="w3-bar-item w3-button">Manage Events</a>
    <a href="view-booking.php" class="w3-bar-item w3-button">Manage Volunteers Event Registration</a>
    <a href="logout.php" class="w3-bar-item w3-button">Logout</a>&nbsp; 
	<a href="" class="w3-bar-item w3-button"><?php echo $_SESSION['login'];?></a>
	
  </div>
</div>
<!-- Image Header -->
<div class="w3-display-container w3-animate-opacity">
  <img src="assets/images/organizer.jpg" alt="boat" style="width:100%;min-height:650px;max-height:550px;"> 
</div>

<!-- Modal -->
<script>
// Script for side navigation
function w3_open() {
  var x = document.getElementById("mySidebar");
  x.style.width = "300px";
  x.style.paddingTop = "10%";
  x.style.display = "block";
}

// Close side navigation
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
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



