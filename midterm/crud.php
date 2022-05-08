
<!DOCTYPE html>
<html>
<head>
  <title>Registration Table</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
 
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
	
</head>
<body>
<div class="container p-5">

<h1>Registration Table</h1>
<a class="btn btn-outline-secondary" href="main.php" role="button">Go to Registration Area >></a>
<hr><br>
<script>
$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>
<table class="table table-striped table-hover" id="table_id">
	<thead class="thead-light">
<tr>
    <th>Registration ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Birthday</th>
    <th>Phone Number</th>
    <th>Actions</th>
    

  </tr>
</thead>
<tbody>
<?php
include "connection.php";
$sql = "SELECT * FROM registration";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
  
  <tr>
    <td><?php echo $row["registrationID"]; ?></td>
    <td><?php echo $row["firstName"]; ?></td>
     <td><?php echo $row["lastName"]; ?></td>
    <td><?php echo $row["birthday"]; ?></td>
    <td><?php echo $row["phoneNo"]; ?></td>
    
        <td>   <div class="row"> <div class="col"> <a href="edit.php?id=<?php echo $row["registrationID"]; ?>" class="btn btn-outline-success">Update</a> </div> <div class="col"> <form action="delete.php"> <input type="text" style="display: none;" name= idd value="<?php echo $row["registrationID"]; ?>"><input type="submit" onclick="confirm('Are you sure you want to delete?');" class="btn btn-outline-danger" value="Delete"> </form></div></div></div></td>

</tr>
     <?php  }

 }


 ?>
</tbody>
 </table>
</div>
