<!DOCTYPE html>
<html>
<head>
  <title>Registration Area</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
 
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
  
</head>
<body>

<div class="container">
<br><br>
<h1>Registration Area</h1>
<a class="btn btn-outline-secondary" href="crud.php" role="button">Go to Registration Table >></a>
  <hr>
<form action="insert.php" method="POST">
  <label for="firstName">Registration ID:</label>
    <?php
    include "connection.php";
$sql="SELECT * FROM registration";

if ($result=mysqli_query($conn,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result) +1;
  ?>

  <input type="text" readonly="" style="width: 50%;" name="registrationID" value="<?php echo $rowcount; ?>" class="form-control">

  <?php 
  mysqli_free_result($result);
  }

?> 
<hr>
<div class="row">
  <div class="col">
  <input type="text" name="firstName" placeholder="Enter First Name" required="" class="form-control"><br>
   <input type="text" name="birthday" placeholder="Enter Birthday"  required="" class="form-control">
  </div>

  <div class="col">
    <input type="text" name="lastName" placeholder="Enter Last Name" required="" class="form-control">
    <br>
    <input type="text" name="phoneNo" placeholder="Enter Phone Number" required="" class="form-control">
  </div>
</div>



</select>
<input type="submit" value="Register" class="btn btn-primary btn-lg mt-4" style="float: right;">
</form>
<br><br><br><br><br><br>
</body>
</html>

