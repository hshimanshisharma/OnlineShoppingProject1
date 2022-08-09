<?php
session_start();
include ("connection.php");
$email=$_POST['email'];
$password=$_POST['password'];
$qr ="Select * from usertable where email='$email' and password='$password'";
$result= mysqli_query($conn,$qr);
if(mysqli_num_rows($result)>0){
    $_SESSION['USERMAIL']=$email;
//    echo $qr;
    header("Location:userhomepage.php?email=$email");
}
else {
    header("Location:userlogin.php?err=Invalid Login");
}
