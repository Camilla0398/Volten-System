<?php
session_start();
error_reporting(0);
include("dbconnection.php");
if(isset($_POST['login']))
?>


<!DOCTYPE html>
<html lang="en">
<title>VOLTEN Volunteers</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-teal w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-teal" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="home.php" class="w3-bar-item w3-button w3-padding-large w3-hover-red">Home</a>
    <a href="profile.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-red">My Profile</a>
    <a href="booking.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-red">Register/View Event Details</a>
    <a href="view-booking.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-red">View Registered Events</a>
	<a href="contact.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-red">Contact Us</a>
	<a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-red">Logout</a>
	<a class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-red"><?php echo $_SESSION['login'];?></a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="home.php" class="w3-bar-item w3-button w3-padding-large">Home</a>
    <a href="profile.php" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
    <a href="booking.php" class="w3-bar-item w3-button w3-padding-large">Register/View Event</a>
    <a href="view-booking.php" class="w3-bar-item w3-button w3-padding-large">View Registered Event</a>
	<a href="contact.php" class="w3-bar-item w3-button w3-padding-large">Contact Us</a>
	<a href="logout.php" class="w3-bar-item w3-button w3-padding-large">Logout</a>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-picture w3-center" style="padding:50px 16px">
<img src="images/volunteers.jpg" alt="Volunteer Image" width="900" height="600">

  <p class="w3-margin w3-jumbo w3-teal">Volunteers Page</p>
  <p class="w3-xlarge">If we do good to others, it will definitely return to us one day</p>
  <a href="booking.php" class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Register Event Now</a>
</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h2>Why is Volunteering Important For You</h2>
      <h4 class="w3-padding-32">Volunteering Connects You With The People Around You </h4>

      <h5 class="w3-text-black">If you want to meet someone in your life, to express yourself or to widen your contact to express yourself or to widen your contact network volunteering with people of different races,ages,religious and sexes together for a common cause pump it up!</h5>
    </div>

    <div class="w3-third w3-center">
    <img src="images/volten1.jpg" alt="Volten Event" width="430" height="350">

    </div>
  </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
     <img src="images/volten2.jpg" alt="Volten Event" width="300" height="350">
    </div>

    <div class="w3-twothird">
     <h4 class="w3-padding-32">Volunteering is Important for a Sense of Purpose and Belonging</h4>

      <h5 class="w3-text-black">Volunteering means choosing to work without receiving money compensation,people often choose 
	  to give their time to issues or organizations they feel are important or have special connection</h5>
    </div>
  </div>
</div>

<!-- Third Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
     
      <h4 class="w3-padding-32">Volunteering Keeps you Physically and Mentally Alive and Kicking!</h4>

      <p class="w3-text-black">Indeed the social contact of helping others, help yourself counteract effects of stress, depression and anxiety.In overall well-being,it has direct profound effect in lowering your blood pressure and a longer lifespan based on growing body of experience</p>
    </div>

    <div class="w3-third w3-center">
    <img src="images/volten3.jpg" alt="Volten Event" width="400" height="350">

    </div>
  </div>
</div>

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">VOLTEN UNITEN</h1>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>
 <p>Powered by <a href="" target="_blank">VVMS</a></p>
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
