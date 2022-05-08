<?php
include("connection.php");	
$id = mysqli_real_escape_string($conn, $_REQUEST['idd']);	

$sql = "DELETE FROM registration WHERE registrationID=" .$id;
if(mysqli_query($conn, $sql)){
	echo '<script language= "javascript">';
	echo 'alert("Teachers Record Deleted Successfully")
	window.location.replace("crud.php");';
	echo "</script>";
	}
 else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
?>