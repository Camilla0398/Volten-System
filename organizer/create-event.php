
<?php
session_start();
$con=mysqli_connect("localhost", "root", "","volten_vms") or die("Cannot connect to
server.".mysqli_error($con));
if(isset($_POST['submit']))
{
 $orgname=@$_POST["orgname"];
 $title=@$_POST["title"];
 $date=@$_POST["date"];
 $stime=@$_POST["stime"];
 $etime =@$_POST["etime"];
 $content=@$_POST["content"];
 $address=@$_POST["address"];
 $email=@$_POST["email"];
 $img=@$_POST["img"];
 $sql="INSERT INTO eventapprove(orgname,title,date,stime,etime,content,address,email,img)VALUES('$orgname','$title','$date','$stime','$etime','$content','$address','$email','$img')";

if (mysqli_query($con, $sql)) {
echo "<script>alert('The event you created need approval.We will email you after your event is verified.You can manage events after being approved by our staff');</script>";
}
}
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
  <head>
    <title>VVMS Create Event Form</title>
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
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 32px;
      color: #fff;
      z-index: 2;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 10px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 20px 0 #a82877; 
      }
      .banner {
      position: relative;
      height: 300px;
      background-image: url("assets/images/uni.jpg"); 
	  background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.5); 
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
      color:  #008080;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 6px 0 #a82877;
      color:  #008080;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #a9a9a9;
      }
      .item i {
      right: 1%;
      top: 30px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 0;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      input[type="time"]::-webkit-inner-spin-button {
      margin: 20px 50px 0 0;
      }
      input[type=radio], input.other {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 10px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      label.radio:before {
      content: "";
      position: absolute;
      top: 2px;
      left: 0;
      width: 15px;
      height: 15px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      #radio_5:checked ~ input.other {
      display: block;
      }
      input[type=radio]:checked + label.radio:before {
      border: 2px solid #a82877;
      background: #a82877;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 7px;
      left: 5px;
      width: 7px;
      height: 4px;
      border: 3px solid #fff;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
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
      background:  #008080;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background: #008080;
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
    <div class="testbox">
    <form action="create-event.php" method="post" autocomplete="off">	
        <div class="banner">
          <h1>Create New Event </h1>
        </div>
		 <div class="item">
          <p>Organizer </p>
          <input type="text" name="orgname" required="required"/>
        </div>
		
		 <div class="item">
          <p>Title of Event </p>
          <input type="text" name="title" required="required"/>
        </div>
		
        <div class="item">
          <p>Date of Event</p>
          <input type="date" name="date" required="required" />
          <i class="fas fa-calendar-alt"></i>
        </div>
		
        <div class="item">
          <p>Event Starting Time</p> 
         <select name="stime" required="required">
		 <option value="">Select Your Time Option</option>        	
         <option value="7:00 AM">7:00 AM</option> 
		 <option value="7:30 AM">7:30 AM</option> 
         <option value="8:00 AM">8:00 AM</option>
		 <option value="8:30 AM">8:30 AM</option>
		 <option value="9:00 AM">9:00 AM</option>
		 <option value="9:30 AM">9:30 AM</option>
		 <option value="10:00 AM">10:00 AM</option>
		 <option value="10:30 AM">10:30 AM</option>
		 <option value="11:00 AM">11:00 AM</option>
		 <option value="11:30 AM">11:30 AM</option>
		 <option value="12:00 PM">12:00 PM</option>
		 <option value="12:30 PM">12:30 PM</option>
         <option value="1:00 PM">1:00 PM</option>
		 <option value="1:30 PM">1:30 PM</option>
         <option value="2:00 PM">2:00 PM</option>
		 <option value="2:30 PM">2:30 PM</option>
         <option value="3:00 PM">3:00 PM</option>
		 <option value="3:30 PM">3:30 PM</option>
         <option value="4:00 PM">4:00 PM</option>
		 <option value="4:30 PM">4:30 PM</option>
         <option value="5:00 PM">5:00 PM</option>
		 <option value="5:30 PM">5:30 PM</option>
         <option value="6:00 PM">6:00 PM</option>
		 <option value="6:30 PM">6:30 PM</option>
		 <option value="7:00 PM">7:00 PM</option>
		 <option value="7:30 PM">7:30 PM</option>
		 <option value="8:00 PM">8:00 PM</option>
         <option value="8:30 PM">8:30 PM</option>
		 <option value="9:00 PM">9:00 PM</option>
        </div>
        </select>
		<div class="item">
          <p> Event Ending Time</p>  		 
		 <select name="etime" required="required">
		 <option value="">Select Your Time Option</option>        	
         <option value="7:00 AM">7:00 AM</option> 
		 <option value="7:30 AM">7:30 AM</option> 
         <option value="8:00 AM">8:00 AM</option>
		 <option value="8:30 AM">8:30 AM</option>
		 <option value="9:00 AM">9:00 AM</option>
		 <option value="9:30 AM">9:30 AM</option>
		 <option value="10:00 AM">10:00 AM</option>
		 <option value="10:30 AM">10:30 AM</option>
		 <option value="11:00 AM">11:00 AM</option>
		 <option value="11:30 AM">11:30 AM</option>
		 <option value="12:00 PM">12:00 PM</option>
		 <option value="12:30 PM">12:30 PM</option>
         <option value="1:00 PM">1:00 PM</option>
		 <option value="1:30 PM">1:30 PM</option>
         <option value="2:00 PM">2:00 PM</option>
		 <option value="2:30 PM">2:30 PM</option>
         <option value="3:00 PM">3:00 PM</option>
		 <option value="3:30 PM">3:30 PM</option>
         <option value="4:00 PM">4:00 PM</option>
		 <option value="4:30 PM">4:30 PM</option>
         <option value="5:00 PM">5:00 PM</option>
		 <option value="5:30 PM">5:30 PM</option>
         <option value="6:00 PM">6:00 PM</option>
		 <option value="6:30 PM">6:30 PM</option>
		 <option value="7:00 PM">7:00 PM</option>
		 <option value="7:30 PM">7:30 PM</option>
		 <option value="8:00 PM">8:00 PM</option>
         <option value="8:30 PM">8:30 PM</option>
		 <option value="9:00 PM">9:00 PM</opti  
        </div>
        </select>
        <div class="item">
          <p>Description of Event</p>
          <textarea rows="3"  input name="content" required="required"></textarea>
        </div>
    
        <div class="item">
          <p>Venue Address</p>
          <input type="text" name="address" required="required"/>
        </div>
		
        
        <div class="item">
          <p> Email</p>
          <input type="text" name="email" pattern="[^ @]*@[^ @]*" required="required"/>
        </div>
		
		<div class="item">
          <p>Insert Event Poster</p>
		  <input type="file"  name="img" value="">
		
        <div class="btn-block">
          <button type="submit" name="submit">Submit</button>
		  <button type="submit" name="home" onclick="parent.location='http://localhost/vvms/organizer/home.php'">Home</button>

		
		  
        </div>
      </form>
    </div>
	<script>
  </body>
</html>