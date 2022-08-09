<?php
session_start();
include ("connection.php");
$email= $_POST['email'];
$password= $_POST['password'];

$qr ="Select * from admintable where email='$email' and password='$password'";
$result= mysqli_query($conn,$qr);
if(mysqli_num_rows($result)>0){
    $_SESSION['ADMINMAIL']=$email;
    header("Location:adminhomepage.php");
}
else {
    header("Location:admin_login.php?err=Invalid Login");
}
