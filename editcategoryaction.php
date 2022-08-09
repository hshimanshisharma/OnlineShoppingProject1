<?php
include ("connection.php");
$categoryid=$_POST['categoryid'];
$categoryname=$_POST['categoryname'];
$categorydescription=$_POST['categorydescription'];
$qr= "select * from categorytable where categoryname='categoryname' and categoryid<>$categoryid";
$rs= mysqli_query($conn,$qr);
if(mysqli_num_rows($rs)>0){
    header("Location:editcategory.php?err=0&categoryid=$categoryid");
}
else{
    $insert="update categorytable set categoryname='$categoryname',description='$categorydescription' where categoryid='$categoryid'";
    $res=mysqli_query($conn,$insert);
    if($res){
        header("Location:editcategory.php?err=1&categoryid=$categoryid");
    }
    else{
        header("Location:editcategory.php?err=2&categoryid=$categoryid");
    }
}
