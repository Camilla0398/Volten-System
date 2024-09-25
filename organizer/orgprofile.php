<!DOCTYPE html>
<html lang="en-US">
  <head>
  <title>Organizer Profile Update</title>
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
$query=mysqli_query($con,"SELECT * FROM organizers where id='$id'")or die(mysqli_error());
$row=mysqli_fetch_array($query);

  ?>
  
  <!DOCTYPE html>
<html lang="en">
<head>
  <title>Organizer Profile</title>
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
 </div>

<div class="container">
  <h2>Organizer Profile View And Update</h2>
  <form method="post" action="#" autocomplete="off" >
    <div class="form-group">
      <label>Organizer:</label>
      <input type="text" class="form-control"  placeholder="Enter your organizer" name="fname" pattern="[a-zA-Z ]+" title="Check your input field" value="<?php echo $row['fname']; ?>" required >
    </div>
    <div class="form-group">
      <label>Email:</label>
      <input type="text" class="form-control" placeholder="Enter your email" name="email" pattern="[^ @]*@[^ @]*" value="<?php echo $row['email']; ?>" required>
    </div>
   
   <div class="form-group">
      <label>Contact:</label>
      <input type="text" class="form-control" placeholder="Enter your contact" name="contact" pattern="(\+?6?01)[0-46-9]-*[0-9]{7,8}" maxlength="10" value="<?php echo $row['contact']; ?>" required>
    </div>
	
	<div class="form-group">
      <label>Username:</label>
      <input type="text" class="form-control" placeholder="Enter your username" name="username" value="<?php echo $row['username']; ?>" required>
    </div>
   
   <div class="form-group">
      <label>Password:</label>
      <input type="text" class="form-control" placeholder="Enter your password" name="password" value="<?php echo $row['password']; ?>" required>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Update</button>
	<input type="button" class="btn btn-primary"  value="Home" onclick="parent.location='http://localhost/vvms/organizer/home.php'" >

</form>
</div>

</body>
</html>
  
<?php
      if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $email = $_POST['email'];
		$contact = $_POST['contact'];
		$username = $_POST['username'];
		$password = $_POST['password'];
      $query = "UPDATE organizers SET fname = '$fname',email = '$email',contact = '$contact',username = '$username',password = '$password'
              	  WHERE id = '$id'";
                    $result = mysqli_query($con, $query) or die(mysqli_error($con));
                    ?>
                     <script type="text/javascript">
            alert("Profile Updated Successfully.");
            window.location = "orgprofile.php";
        </script>	          
   <?php
             }              
?>