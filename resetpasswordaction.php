<?php
include ("connection.php");
$email=$_POST['email'];
$password=$_POST['password'];
$qr="update usertable set password='$password' where email='$email'";
$res=mysqli_query($conn,$qr);
if($res){
    header("Location:userlogin.php?err=1");
}else{
    header("Location:resetpassword.php?err=2");
}