<?php
include "connection.php";
$first_name = mysqli_real_escape_string($conn, $_REQUEST['firstName']);	
$id = mysqli_real_escape_string($conn, $_REQUEST['registrationID']);	
$last_name = mysqli_real_escape_string($conn, $_REQUEST['lastName']);	
$birthday = mysqli_real_escape_string($conn, $_REQUEST['birthday']);	
$phone = mysqli_real_escape_string($conn, $_REQUEST['phoneNo']);	


$sql = "INSERT INTO registration (firstName, lastName, birthday, phoneNo) VALUES ('$first_name', '$last_name','$birthday','$phone')";
if(mysqli_query($conn, $sql)){
  echo '<script language="javascript">';
	echo 'alert("Registered Successfully")
	window.location.replace("main.php");';
	echo '</script>';

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
?>