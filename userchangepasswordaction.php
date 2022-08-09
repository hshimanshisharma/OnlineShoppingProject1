<?php
include ("connection.php");
$email=$_POST['email'];
$oldpassword=$_POST['oldpassword'];
$newpassword=$_POST['newpassword'];
$select="select * from usertable where email='$email' and password='$oldpassword'";
$res=mysqli_query($conn,$select);
if(mysqli_num_rows($res)>0){
    $qr="update usertable set password='$newpassword' where email='$email'";
    $res1=mysqli_query($conn,$qr);
    if($res1){
        header("Location:userlogin.php?err=1");
    }else{
        header("Location:userlogin.php?err=2");
    }
}else{
    header("Location:userchangepassword.php?err=0");
}
