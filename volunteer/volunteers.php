<?php session_start();
require_once('dbconnection.php');

//Code for Registration 
if(isset($_POST['signup']))
{
	$fname=$_POST['fname'];
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$contact=$_POST['contact'];
	$enc_password=$password;
$sql=mysqli_query($con,"select id from volunteers where username='$username'");
$row=mysqli_num_rows($sql);
if($row>0)
{
	echo "<script>alert('Username already exist with another account. Please try with other username');</script>";
} 
else{
	$msg=mysqli_query($con,"insert into volunteers(fname,username,email,password,contactno) values('$fname','$username','$email','$enc_password','$contact')");

if($msg)
{
	echo "<script>alert('Registered successfully');</script>";
}
}
}

// Code for login 
if(isset($_POST['login']))
{
$password=$_POST['password'];
$dec_password=$password;
$username=$_POST['username'];
$ret= mysqli_query($con,"SELECT * FROM volunteers WHERE username='$username' and password='$dec_password'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="home.php";
$_SESSION['login']=$_POST['username'];
$_SESSION['id']=$num['id'];
$_SESSION['name']=$num['fname'];
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
echo "<script>alert('Invalid username or password');</script>";
echo"<a href=\"javascript:history.go(-1)\"></a>";

}
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Login System</title>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elegent Tab Forms,Login Forms,Sign up Forms,Registration Forms,News latter Forms,Elements"./>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<script src="js/jquery.min.js"></script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
				<script type="text/javascript">
					$(document).ready(function () {
						$('#horizontalTab').easyResponsiveTabs({
							type: 'default',       
							width: 'auto', 
							fit: true 
						});
					});
				   </script>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,600,700,200italic,300italic,400italic,600italic|Lora:400,700,400italic,700italic|Raleway:400,500,300,600,700,200,100' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="main">
		<h1></h1>
	 <div class="sap_tabs">	
			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
			  <ul class="resp-tabs-list">
			  	  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><div class="top-img"><img src="images/top-note.png" alt=""/></div><span>Register</span>
			  	  	
				</li>
				  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><div class="top-img"><img src="images/top-lock.png" alt=""/></div><span>Login</span></li>
				  <li class="resp-tab-item lost" aria-controls="tab_item-2" role="tab"><div class="top-img"><img src="images/top-key.png" alt=""/></div><span>Welcome</span></li>
				  <div class="clear"></div>
			  </ul>		
			  	 
			<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
					<div class="facts">
					
						<div class="register">
							<form name="registration" method="post" action="" enctype="multipart/form-data" autocomplete="off">
								<p>Full Name</p>
								<input type="text" class="text" value=""  name="fname" pattern="[a-zA-Z ]+" title="Please Check Your Input" required >
								<p>Username</p>
								<input type="text" class="text" value="" name="username"  required >
								<p>Email Address </p>
								<input type="text" class="text" value="" name="email" pattern="[^ @]*@[^ @]*" required  >
								<p>Password </p>
								<input type="password" value="" name="password" required>
								<p>Contact No. </p>
								<input type="text" value="" name="contact" pattern="(\+?6?01)[0-46-9]-*[0-9]{7,8}" maxlength="11" required>
								<div class="sign-up">
                                    <input type="reset" class="btn btn-primary"  value="Home" onclick="parent.location='http://localhost/vvms/welcome.php'">					
									<input type="submit" name="signup"  value="Sign Up" > 
									<div class="clear"> </div>
								</div> 
							</form>

						</div>
					</div>
				</div>		
			 <div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
					 	<div class="facts">
							 <div class="login">
							<div class="buttons">																
							</div>
							<form name="login" action="" method="post" autocomplete="off">
								<input type="text" class="text" name="username" value="" placeholder="Enter your username"><a href="#" class=" icon email"></a>

								<input type="password" value="" name="password" placeholder="Enter valid password"><a href="#" class="icon lock"></a>

								<div class="p-container">
								
									<div class="submit two">

									<input type="submit" name="login" value="Log In" >
									</div>
									<div class="clear"> </div>
								</div>

							</form>							
					</div>
				</div> 
			</div> 			        					 
			
		
		 <div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
					 	<div class="facts">
							 <div class="login">
							<div class="buttons">
								
								
							</div>
				
									</form>
									</div>
				         	</div>           	      
				        </div>	
				     </div>	
		        </div>
	        </div>
	     </div>
				   
</body>
</html>

