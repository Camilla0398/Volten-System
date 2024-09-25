<?php
session_start();
error_reporting(0);
include'dbconnection.php';
//Checking session is valid or not
  if(isset($_GET['id']))
{
$id=$_GET['id'];
$msg=mysqli_query($con,"update contactus set status='Read' where id='$id'");
if($msg)
{
echo "<script>alert('Query status is updated');</script>";
}
}
if(isset($_GET['eid']))
{
$eid=$_GET['eid'];
$msg=mysqli_query($con,"delete from contactus where id='$eid'");
if($msg)
{
echo "<script>alert('Query is deleted');</script>";
}
}
?>
<!DOCTYPE html>
<html>
<head>
 <title>Manage Queries</title>

 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
 
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

</head>
<body>
 <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-warning text-center"> Start Manage Your Queries Here <i class="fa fa-user"></i> </h1>
 <input type="button" class="btn btn-primary"  value="Home" onclick="parent.location='http://localhost/vvms/organizer/home.php'" ><br>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th>Query Id</th>
 <th>Name</th>
 <th>Email</th>
 <th>Contact</th>
 <th>Content</th>
 <th>Status</th>
 <th>Action</th>
 <th>Delete</th>
</tr>
 <?php

 include 'dbconnection.php'; 
 $q = "select * from contactus ";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td><?php echo $res['id'];?> </td>
 <td><?php echo $res['name'];?> </td>
 <td><?php echo $res['email']; ?> </td>
 <td><?php echo $res['contact'];?></td>
 <td><?php echo $res['content'];?></td>
 <td><?php echo $res['status'];?></td>
                                  
 <td> <button class="btn-primary btn" onClick="return confirm('Do you really want to update query status to read');"><a href="manage-query.php?id=<?php echo $res['id']; ?>" class="text-white"><?php echo $res['status'];?></i></a></button> </td>
 <td> <button class="btn-danger btn" onClick="return confirm('Do you really want to delete query');"><a href="manage-query.php?eid=<?php echo $res['id']; ?>" class="text-white">Delete</i></a></button> </td>
 </tr>

 <?php 
 }
  ?>
 
 </table>  

 </div>
 </div>

 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>

</body>