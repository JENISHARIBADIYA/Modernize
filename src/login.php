<?php 
session_start();
include('./connect.php'); 
  $email = $_REQUEST['email'];
  $password = $_REQUEST['password'];
      $sql = "SELECT * FROM users where password= '".$password."' and email= '".$email."'";   
      $result = $conn->query($sql);
      
      if ($result->num_rows > 0) {

        $row = $result->fetch_assoc();
        $_SESSION["isLogin"] = $email;
        $_SESSION["id"] = $row['id'];
        header('Location:home/dashboard.php');
      } else {
      header('Location:index.php?msg=Incorrent Username or Password.! Try Again.!');
      }
