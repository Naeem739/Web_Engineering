<?php
	include "dbconnect.php";
	
	$id=$_GET['d_id'];
	
$name=$_POST['f_name'];
$desi=$_POST['f_desi'];
$phone=$_POST['f_phone'];
$dob=$_POST['f_dob'];

	
	$sql="UPDATE teacher SET name='$name', designation='$desi' ,
	phone='$phone', dob = '$dob' where id='$id'";
	
	if($conn->query($sql)){
		
		header('location:index.php');

		//echo "updated succesfully";
		}
	else 
	echo "update failed";

	$conn->close();
?>