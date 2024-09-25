<?php
session_start();
error_reporting(0);
include'dbconnection.php';
?>
<!DOCTYPE html>
<html>
<head>
 <title>Manage Booking</title>

 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

</head>
<body>
 <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-warning text-center"> Manage And Search Volunteers Registration <i class="fa fa-folder-open"></i> </h1>
 
 <input type="button" class="btn btn-primary"  value="Home" onclick="parent.location='http://localhost/vvms/organizer/home.php'" ><br><br>
<form action="" method="GET" autocomplete="off"> 
     <div class="col-md-6">
        <input type="text" name="search" class='form-control' placeholder="Search By Name" value=<?php echo @$_GET['search']; ?> > 
     </div>
     <div class="col-md-6 text-left">
      <button class="btn">Search</button>
     </div>
   </form>
   <br> 
   <br>
   <br>
</div>
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
 <th>Action</th>
</tr>
 <?php
include 'dbconnection.php'; 
 if(isset($_GET['search'])){
        $searchKey = $_GET['search'];
 $q = "select * from booking WHERE name LIKE '%$searchKey%'";
 }else
  $q = "SELECT * FROM booking";
 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td><?php echo $res['id'];?> </td>
 <td><?php echo $res['name'];?> </td>
 <td><?php echo $res['stid']; ?> </td>
 <td><?php echo $res['email'];?></td>
 <td><?php echo $res['contact'];?></td>
 <td><?php echo $res['title'];?></td>
 <td><?php echo $res['date'];?></td>
 <td><?php echo $res['venue'];?></td>
 <td><?php echo $res['status'];?></td> 
 <td><?php echo $res['comments'];?></td>  
 <td><button class="btn-primary btn" onClick="return confirm('Do you really want to change volunteer registration status');"><a href="action.php?id=<?php echo $res['id']; ?>" class="text-white">Action</i></a></button> </td> 
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