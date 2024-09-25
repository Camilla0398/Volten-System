<?php
session_start();
error_reporting(0);
include("dbconnection.php");
if(isset($_POST['login']))
{
  $username=$_POST['username'];
  $pass=$_POST['password'];
$ret=mysqli_query($con,"SELECT * FROM organizers WHERE username='$username' and password='$pass'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="home.php";
$_SESSION['login']=$_POST['username'];
$_SESSION['id']=$num['id'];
echo "<script>window.location.href='".$extra."'</script>";  
exit();
}
else
{
$_SESSION['action1']="*Invalid username or password";
$extra="http://localhost/vvms/organizer/organizer.php";
echo "<script>alert('Your need to register your account to login.Your details are not in our database');</script>";
echo "<script>window.location.href='".$extra."'</script>";
exit();
}
}
?>
<!DOCTYPE html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
	
.wrapper {    
	margin-top: 80px;
	margin-bottom: 20px;
}

.form-signin {
  max-width: 500px;
  padding: 30px 38px 66px;
  margin: 0 auto;
  background-color: #eee;
  border: 3px dotted rgba(0,0,0,0.1);  
  }

.form-signin-heading {
  text-align:center;
  margin-bottom: 30px;
}

.form-control {
  position: relative;
  font-size: 16px;
  height: auto;
  padding: 10px;
}

input[type="text"] {
  margin-bottom: 0px;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}

input[type="password"] {
  margin-bottom: 20px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.colorgraph {
  height: 7px;
  border-top: 0;
  background: #c4e17f;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
}
</style>
</head>
<body>
<title>Organizer Login Form</title>
<body style background="assets/images/sign up.png">
<div class = "container">
	<div class="wrapper">
		<form action="" method="post" name="Login_Form" class="form-signin">
             <img src="assets/images/volten.jpg" alt="Admin" align="center" width="400" height="250">		
		    <h3 class="form-signin-heading">Welcome Please Login Here! </h3>
			  <hr class="colorgraph"><br>
			  
			  <input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="on" autocomplete="off" />
			  <input type="password" class="form-control" name="password" placeholder="Password" required=""/>     		  
			 
			  <button class="btn btn-lg btn-primary btn-block"  name="login" value="Login" type="Submit">Login</button>  
              <button class="btn btn-lg btn-primary btn-block"  value="Home" onclick="parent.location='http://localhost/vvms/welcome.php'">Home</button>  					  
		</form>			
	</div>
</div>
</body>