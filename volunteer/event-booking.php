<?php
session_start();
$con=mysqli_connect("localhost", "root", "","volten_vms") or die("Cannot connect to
server.".mysqli_error($con));
 if (isset($_POST['submit'])) {	 
$_SESSION['title'] = $_POST['title'];  
$_SESSION['dt'] = $_POST['dt'];    
$_SESSION['address'] = $_POST['address']; 
 }
 if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  }
  else{
if(isset($_POST['send']))
{
 $uid=@$_SESSION['id'];
 $name=@$_POST["name"];
 $stid=@$_POST["stid"];
 $email=@$_POST["email"];
 $contact=@$_POST["contact"];
 $title=@$_SESSION["title"];
 $dt=@$_SESSION["dt"];
 $address=@$_SESSION["address"];
 $status=@$_POST["status"];
 $comment=@$_POST["comment"];
$sql="INSERT INTO booking(userid,name,stid,email,contact,title,date,venue,status,comments)VALUES('$uid','$name','$stid','$email','$contact','$title','$dt','$address','$status','$comment')";
if (mysqli_query($con, $sql)) {
echo "<script>alert('Your event registration is completed.Your application wil be verified by organizer');</script>";
}
}
mysqli_close($con);
?>



<!DOCTYPE html>
<html>
  <head>
    <title>Event Registration Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: black;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 36px;
      color: #fff;
      z-index: 2;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 50%;
      padding: 20px;
      border-radius: 6px;
      background: #fff ;
      
      }
      .banner {
      position: relative;
      height: 350px;
      background-image: url("images/call.jpg" ); 
	  background-size:cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, textarea, select {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      select {
      width: 100%;
      padding: 7px 0;
      background: transparent;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color: #333;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 6px 0 #333;
      color: #333;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
     
    
       
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background: #0080ff;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background: #666;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .city-item input {
      width: calc(50% - 20px);
      }
      .city-item select {
      width: calc(50% - 8px);
      }
      }
    </style>
  </head>
  <body>
  
  
  <br>
  
    <h2 style="color:black;text-align:center">Event Registration Form</h2>
    <div class="testbox">
      <form action="event-booking.php" method="post" autocomplete="off">
        <div class="banner">
        </div>
        <div class="item">
          <p>Full Name</p>
          <div class="item">
             <input type="text" name="name" pattern="[a-zA-Z ]+" required>
          </div>
        </div>
		<div class="item">
          <p>Student ID</p>
          <input type="text" name="stid" maxlength = "10' required >
        </div>
        <div class="item">
          <p>Email</p>
          <input type="text" name="email" pattern="[^ @]*@[^ @]*" required >
        </div>
		
		<div class="item">
          <p>Contact Number</p>
          <input type="text" name="contact" pattern="(\+?6?01)[0-46-9]-*[0-9]{7,8}" maxlength="11" required >
        </div>
		
      <input type="hidden" name="status"   value="Pending" >	 
	  <input type="hidden" name="comment"  value="In Process">	 

       <div class="btn-block">
          <button type="submit" name="send">Submit </button>
	  <div class="btn-block">
          <button type="submit" onclick="parent.location='http://localhost/vvms/volunteer/booking.php'">Back</button>

		 </div>
		 </div>
		 </form>
		 </body>
		 </html>
		 <?php }  ?>