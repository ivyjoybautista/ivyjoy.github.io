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
  <div class="container p-5 "> 
    <h1>Update Register Information Table</h1>
<hr>
<br>

<?php
include("connection.php");
$id = mysqli_real_escape_string($conn, $_REQUEST['id']);	
$sql = "SELECT * FROM registration WHERE registrationID=" .$id;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    ?>
  	<form action="process.php">

<label>RegistrationID :</label>
<input type="text" readonly value="<?php echo $id; ?>" class="form-control" name="registrationID">
<br>
<label>First Name :</label>
<input type="text" value="<?php echo $row["firstName"]; ?>" class="form-control" name="firstName">
<br>
<label>Last Name :</label>
<input type="text" value="<?php echo $row["lastName"]; ?>" class="form-control" name="lastName">
<br>
<label>Birthday :</label>
<input type="text" value="<?php echo $row["birthday"]; ?>" class="form-control" name="birthday">
<br>
<label>Phone Number :</label>
<input type="text" value="<?php echo $row["phoneNo"]; ?>" class="form-control" name="phoneNo">
<input type="submit" value="Update" class="btn btn-success mt-4" style="float:right;">
</form>

<?php    }
}
?>