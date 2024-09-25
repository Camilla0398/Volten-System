<!DOCTYPE html>
<html lang="en-US">
  <head>
  <title>volunteers profile </title>
  <link rel="stylesheet" href="libs/css/bootstrap.min.css">
  <link rel="stylesheet" href="libs/style.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <?php
  include 'dbconnection.php';
  session_start();
$id=$_SESSION['id'];
$query=mysqli_query($con,"SELECT * FROM volunteers where id='$id'")or die(mysqli_error());
$row=mysqli_fetch_array($query);

  ?>
  
  <!DOCTYPE html>
<html lang="en">
<head>
  <title>Volunteer Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>


</style>
</head>
<body>
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-teal w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-small w3-hover-white w3-large w3-teal" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="home.php" class="w3-bar-item w3-button w3-padding-large w3-hover-red">Home</a>
    <a href="profile.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-red">My Profile</a>
    <a href="booking.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-red">Register/View Event Details</a>
    <a href="view-booking.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-red">View Registered Events</a>
	<a href="contact.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-red">Contact Us</a>
	<a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-red">Logout</a>
	<a class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-red"><?php echo $_SESSION['login'];?></a>
  </div>

</div>

<div class="container">
 <br>
 <br>
 <br>
  <h2>Volunteer Profile And Update</h2>
  <form method="post" action="#" autocomplete="off" >
    <div class="form-group">
      <label>Name:</label>
      <input type="text" class="form-control"  placeholder="Enter your organizer" name="fname" pattern="[a-zA-Z ]+" value="<?php echo $row['fname']; ?>" required >
    </div>
    <div class="form-group">
      <label>Username:</label>
      <input type="text" class="form-control" placeholder="Enter your email" name="username" value="<?php echo $row['username']; ?>" required>
    </div>
   
   <div class="form-group">
      <label>Email:</label>
      <input type="text" class="form-control" placeholder="Enter your contact" name="email" pattern="[^ @]*@[^ @]*" value="<?php echo $row['email']; ?>" required>
    </div>
	
	<div class="form-group">
      <label>Password:</label>
      <input type="text" class="form-control" placeholder="Enter your username" name="password" value="<?php echo $row['password']; ?>" required>
    </div>
   
   <div class="form-group">
      <label>Contact Number:</label>
       <input type="text" class="form-control" placeholder="Enter your contact" name="contact" pattern="(\+?6?01)[0-46-9]-*[0-9]{7,8}" maxlength="11" value="<?php echo $row['contactno']; ?>" required>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Update</button>


</form>
</div>

</body>
</html>
  
<?php
      if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$contact = $_POST['contact'];
      $query = "UPDATE volunteers SET fname = '$fname',username = '$username',email = '$email',password = '$password',contactno = '$contact'
              	  WHERE id = '$id'";
                    $result = mysqli_query($con, $query) or die(mysqli_error($con));
                    ?>
                     <script type="text/javascript">
            alert("Profile Updated Successfully.");
            window.location = "profile.php";
        </script>	          
   <?php
             }              
?>