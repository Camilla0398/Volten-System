
<!DOCTYPE html>
<html>
<head>
 <title>Manage Registration</title>

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
 <h1 class="text-warning text-center"> Manage Volunteers Registration Here <i class="fa fa-folder-open"></i> </h1>
 <input type="button" class="btn btn-primary"  value="Home" onclick="parent.location='http://localhost/vvms/volunteer/home.php'" ><br>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th>Registration Id</th>
 <th>Name</th>
 <th>Student ID</th>
 <th>Email </th>
 <th>Contact</th>
 <th>Title</th>
 <th>Date</th>
 <th>Venue</th>
 <th>Status</th>
 <th>Comments</th>

 
</tr>
 <?php
  include 'dbconnection.php';
  session_start();
$id=$_SESSION['id'];
$query=mysqli_query($con,"SELECT * FROM booking where userid='$id'")or die(mysqli_error());
while($row = mysqli_fetch_array($query)){
  ?>
 <tr class="text-center">
 <td><?php echo $row['id'];?> </td>
 <td><?php echo $row['name'];?> </td>
 <td><?php echo $row['stid']; ?> </td>
 <td><?php echo $row['email'];?></td>
 <td><?php echo $row['contact'];?></td>
 <td><?php echo $row['title'];?></td>
 <td><?php echo $row['date'];?></td>
 <td><?php echo $row['venue'];?></td>
 <td><?php echo $row['status'];?></td> 
 <td><?php echo $row['comments'];?></td>    
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
</html>