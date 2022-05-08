<?php
include("connection.php");	
$first_name = mysqli_real_escape_string($conn, $_REQUEST['firstName']);	
$id = mysqli_real_escape_string($conn, $_REQUEST['registrationID']);	
$last_name = mysqli_real_escape_string($conn, $_REQUEST['lastName']);	
$birthday = mysqli_real_escape_string($conn, $_REQUEST['birthday']);	
$phone = mysqli_real_escape_string($conn, $_REQUEST['phoneNo']);	

$sql = "UPDATE registration SET firstName='$first_name', lastName='$last_name', birthday='$birthday', phoneNo='$phone' WHERE registrationID=" .$id;
if(mysqli_query($conn, $sql)){
	echo '<script language= "javascript">';
	echo 'alert("Teachers Record Updated Successfully")
	window.location.replace("crud.php");';
	echo "</script>";
	}
 else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
?>