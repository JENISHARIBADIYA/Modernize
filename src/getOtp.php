<?php
session_start();
include('connect.php');
// include('./common/header.php');
$email = $_REQUEST['email'];
$_SESSION['email'] = $email;
$sql = "SELECT * FROM users where email = '" . $email . "'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  header('Location:forgotpassword.php?msg=Password has been sent to your mail pls check your email.');
?>
<?php
} else 
{
  header('Location:forgotpassword.php?msg=No such user found.! Try Again.!');
}
?>