<?php
session_start();
error_reporting(0);
include('dbconnection.php');
?>
  
	<a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-teal" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="home.php" class="w3-bar-item w3-button w3-padding-large w3-hover-blue">Home</a>
    <a href="profile.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-blue">My Profile</a>
    <a href="booking.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-blue">Register/View Event Details</a>
    <a href="view-booking.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-blue">View All Registered Events</a>
	<a href="contact.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-red">Contact Us</a>
	<a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-blue">Logout</a>
	<a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-blue"><?php echo $_SESSION['login'];?></a>
    <h2 style="text-align:center;font-family: Tahoma"><b>Register Event</h2></b>
<?php
$q = "select * from events ";

 $query = mysqli_query($con,$q);
 while($res = mysqli_fetch_array($query))
 {
 ?>
<!DOCTYPE html>
<html>
<title>Event Registration</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<style>
body {
  background-color:LightGray;
  font-family: "Tahoma";

 
}

</style>
<body>

<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
    <form action="event-booking.php" method="post" autocomplete="off">	
  <h4 style=font-family:"Tahoma"><b><?php echo $res['title'];?></h4></b><br>
  <img src="../organizer/Assets/images/<?php echo $res ['img'];?>" width="350" height="300" alt="Poster Image">
  <h5>Organizer:<?php echo $res['orgname'];?></h5>
  <h5>Email:<?php echo $res['email'];?></h5>
  <h5>Date:<?php echo $res['date']; ?></h5>
  <h5>Time:<?php echo $res['stime']; ?>-<?php echo $res['etime']; ?></h5>
  <h5>Venue:<?php echo $res['address']; ?></h5>
  <h5>Description:<?php echo $res['content'];?></h5>
  <input type ="hidden" name="title" value="<?php echo $res["title"];?>"/>
  <input type ="hidden" name="dt" value="<?php echo $res["date"];?>"/>
  <input type ="hidden" name="address" value="<?php echo $res["address"];?>"/>
<input type="submit" name="submit"  class="w3-button w3-blue" value="Register Now" onclick="document.location='event-booking.php'">
  </div>
</div>
</form>
</div>
<?php
 }
 ?>

 </body>
 </html>