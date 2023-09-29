<?php
session_start();
include('../connect.php'); 

$full_name = $_REQUEST['full_name'];
$email = $_REQUEST['email'];
if ($full_name == '') {
	header('Location:profile.php?msg=Full Name is required.!');
}  
else if ($email == '') {
	header('Location:profile.php?msg=Email is required.!');
}
else {
	// code to save data in database table
	$sql = "UPDATE users SET 
	full_name='$full_name', 
	email = '$email' 
	  
	WHERE id='" . $_SESSION['id'] . "'";
	
	if ($conn->query($sql) === TRUE) {
		header('Location:profile.php?msg=Profile Updated Successfully.!');
	} else {
		header('Location:profile.php?msg=Error in Profile Updation.!');
	}

}
