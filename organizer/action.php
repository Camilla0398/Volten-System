<?php
session_start();
error_reporting(0);
include'dbconnection.php';
if(isset($_POST['send']))
{
	$status=$_POST['status'];
	$comments=$_POST['comments'];
	$id=intval($_GET['id']);
$query=mysqli_query($con,"update booking set status='$status',comments='$comments'where id='$id'");
if($query) 
{
echo '<script type="text/javascript">'; 
echo 'alert("Volunteer Registration Status Updated Successfully");'; 
echo 'window.location.href = "view-booking.php";';
echo '</script>';

}	
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">

    <title>VOLTEN Status</title>
  </head>
  <body>
  <br>
    <h3>VOLTEN Volunteer Registration Status Update</h3>
<br>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <!-- Latest compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

        <!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/i18n/defaults-*.min.js"></script>

 <form action="" method="post" autocomplete="off">
 
<div class="container">
  <div class="row">
      <div class="col-6 col-md-4">

        <label>Update Status Here:</label>
        <select class="selectpicker" name="status" data-style="btn-info">
          <option value="Pending">Pending</option>
          <option value="Approve">Approve</option>
          <option value="Reject">Reject</option>
		  <option value="Cancel">Cancel</option> 
        </select>

	<div class="form-group">
    <label for="Textarea">Add Comments</label>
    <textarea class="form-control" id="Textarea" name="comments" rows="3" value="<?php echo $hows["comments"];?>"></textarea>
  </div>
	
   <input class="btn btn-primary" type="submit" name="send" value="Submit">  
   <input type="button" class="btn btn-primary"  value="Back" onclick="parent.location='http://localhost/vvms/organizer/view-booking.php'" >   	   
    
  </div>
</div>
</div>
  </form>
  </body>
</html>


