<?php
session_start();
$con=mysqli_connect("localhost", "root", "","volten_vms") or die("Cannot connect to
server.".mysqli_error($con));
if(isset($_POST['send']))
{
 $name=@$_POST["name"];
 $email=@$_POST["email"];
 $contact=@$_POST["contact"];
 $content=@$_POST["content"];
 $status=@$_POST["status"];
 $sql="INSERT INTO contactus(name,email,contact,content,status)VALUES('$name','$email','$contact','$content','$status')";

if (mysqli_query($con, $sql)) {
echo "<script>alert('Form successfully sent');</script>";
}
}
mysqli_close($con);
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}
</style>
</head>
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

<title>Contact Us </title>
<h3>Contact Organizer Form</h3>

<div class="container">
  <form action="" method="post" autocomplete="off">
    <label>Name</label>
    <input type="text" id="name" name="name" pattern="[a-zA-Z ]+" required="required" placeholder="Your name..">

    <label>Email</label>
    <input type="text" id="email" name="email" required="required" pattern="[^ @]*@[^ @]*" placeholder="Your email..">

    <label>Contact Number</label>
    <input type="text" id="contact" name="contact" pattern="(\+?6?01)[0-46-9]-*[0-9]{7,8}" maxlength = "11" required="required" placeholder="Your contact number..">


    <label>Description</label>
    <textarea id="content" name="content" required="required" placeholder="Write something.." style="height:100px"></textarea>

   <input type="hidden"  name="status" value="Pending">
    
    <input type="submit" name="send" value="Submit">
   
  </form>
</div>

</body>
</html>
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
