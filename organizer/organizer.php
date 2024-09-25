<?php
session_start();
$con=mysqli_connect("localhost", "root", "","volten_vms") or die("Cannot connect to
server.".mysqli_error($con));
if(isset($_POST['signup']))
{
 $fname=@$_POST["fname"];
 $email=@$_POST["email"];
 $contact=@$_POST["contact"];
 $username=@$_POST["username"];
 $password=@$_POST["password"];
 $sql="INSERT INTO orgapprove(fname,email,contact,username,password)VALUES('$fname','$email','$contact','$username','$password')";

if (mysqli_query($con, $sql)) {
echo "<script>alert('Your account need approval.You can login to the system after being approved by our staff');</script>";
}
}
mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
<title>VVMS Organizer Sign Up Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style>
	body {
		color: black;
		background: #e2e2e2;
		font-family: 'Roboto', sans-serif;
	}
	.form-control{
		min-height: 41px;
		box-shadow: none;
		border-color: #e1e1e1;
		color: black;
	}
	.form-control:focus{
		border-color: #00cb82;
	}	
    .form-control, .btn{        
        border-radius: 3px;
    }
	.form-header{
		margin: -30px -30px 20px;
		padding: 30px 30px 10px;
		text-align: center;
		background: #00cb82;
		border-bottom: 1px solid #eee;
		color: #fff;
	}
	.form-header h2{
		font-size: 34px;
		font-weight: bold;
        margin: 0 0 10px;
		font-family: 'Pacifico', sans-serif;
    }
	.form-header p{
		margin: 20px 0 15px;
		font-size: 17px;
		line-height: normal;
		font-family: 'Courgette', sans-serif;
	}
    .signup-form{
		width: 500px;
		margin: 0 auto;	
		padding: 30px 0;	
	}
    .signup-form form{
		color: black;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #f0f0f0;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form .form-group{
		margin-bottom: 20px;
	}		
	.signup-form label{
		font-weight: normal;
		font-size: 13px;
	}
    .signup-form input[type="checkbox"]{
		margin-top: 2px;
	}
    .signup-form .btn{        
        font-size: 16px;
        font-weight: bold;
		background: #00cb82;
		border: none;
		min-width: 200px;
    }
	.signup-form .btn:hover, .signup-form .btn:focus{
		background: #00b073 !important;
        outline: none;
	}
    .signup-form a{
		color: #00cb82;		
	}
    .signup-form a:hover{
		text-decoration: underline;
	
	}
</style>
</head>
<body>
<div class="signup-form">
    <form action="organizer.php" method="post" autocomplete="off">
		<div class="form-header">
			<h2>Sign Up</h2>
			<p>Fill out this form to be a organizer!</p>
		</div>
        <div class="form-group">
			<label>Organizer</label>
        	<input type="text" class="form-control" name="fname"  pattern="[a-zA-Z ]+" title="Check your input field"  required="required">
        </div>
        <div class="form-group">
			<label>Email Address</label>
        	<input type="email" class="form-control" name="email" required="required">
        </div>
		<div class="form-group">
			<label>Contact Number</label>
        	<input type="text"  class="form-control" name="contact" pattern="(\+?6?01)[0-46-9]-*[0-9]{7,8}" maxlength="11" required="required">
        </div>
		<div class="form-group">
			<label>Username</label>
        	<input type="text" class="form-control" name="username" required="required">
        </div>
		<div class="form-group">
			<label>Password</label>
            <input type="password" class="form-control" name="password" required="required">
        </div>		  
		<div class="form-group">
			<button type="submit"name="signup" class="btn btn-primary btn-block btn-lg">Sign Up</button>
		</div>	
    </form>
	<div class="text-center small">Already have an account? <a href="login.php">Login here</a></div>
</div>
</body>
</html>