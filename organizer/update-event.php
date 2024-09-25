<?php
session_start();
include'dbconnection.php';
//Checking session is valid or not
// for updating event info    
if(isset($_POST['done']))
{
	$title=$_POST['title'];
	$date=$_POST['date'];
	$stime=$_POST['stime'];
	$etime=$_POST['etime'];
	$content=$_POST['content'];
	$address=$_POST['address'];
	$email=$_POST['email'];
	$eid=intval($_GET['eid']);
$query=mysqli_query($con,"update events set title='$title',date='$date',stime='$stime',etime='$etime',content='$content',address='$address',email='$email' where id='$eid'");
if($query) 
{
echo '<script type="text/javascript">'; 
echo 'alert("Events Detail Updated Successfully");'; 
echo 'window.location.href = "manage-event.php";';
echo '</script>';

}

}

$result = mysqli_query($con,"SELECT * FROM events WHERE id='" . $_GET['eid'] . "'");
$row= mysqli_fetch_array($result);
	  
?>
<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form method="post" action="" autocomplete="off">
 <div><?php if(isset($message)){ echo $message; } ?>
</div>
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">Update Event</h1>
 </div><br>

 <label>Event Name: </label>
 <input type="text" name="title" class="form-control" value="<?php echo $row['title']; ?>"> <br>
 
 <label>Event Date: </label>
 <input type="text" name="date" class="form-control" value="<?php echo $row['date']; ?>"> <br>
 
 <label>Event Starting Time: </label>
 <input type="text" name="stime" class="form-control" value="<?php echo $row['stime']; ?>"> <br>
 
 <label>Event Ending Time: </label>
 <input type="text" name="etime" class="form-control" value="<?php echo $row['etime']; ?>"> <br>
 
 <label>Event Description: </label>
 <input type="text" name="content" class="form-control" value="<?php echo $row['content']; ?>"> <br>
 
 <label>Venue: </label>
 <input type="text" name="address" class="form-control" value="<?php echo $row['address']; ?>"> <br>
 
 <label>Email: </label>
 <input type="text" name="email" class="form-control" value="<?php echo $row['email']; ?>"> <br>
  
 <label>Registration Date: </label>
 <input type="text" name="posting_date" class="form-control" value="<?php echo $row['posting_date']; ?>"readonly > <br>
 
 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>
 <button class="btn btn-primary" type="button" onclick="parent.location='http://localhost/vvms/organizer/manage-event.php'">Back</button
 </div>
 </form> 
 </div>
</body>
</html>