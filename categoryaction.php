<?php
include ("connection.php");
$categoryname=$_POST['categoryname'];
$categorydescriptin=$_POST['categorydescription'];
$qr= "select * from categorytable where categoryname='$categoryname'";
$rs = mysqli_query($conn,$qr);
if (mysqli_num_rows($rs)>0){
    header("Location:category.php?err=0");
}
else {
    $insert = "insert into  `categorytable`values (null,'$categoryname','$categorydescriptin')";
    $res = mysqli_query($conn, $insert);
    if ($res) {
        header("Location:category.php?err=1");
    } else {
        header("Location:category.php?err=2");
    }
}
