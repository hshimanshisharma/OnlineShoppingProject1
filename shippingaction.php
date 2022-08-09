<?php
include ("connection.php");
$orderid=$_POST['orderid'];
$trackingno=$_POST['trackingno'];
$companyname=$_POST['companyname'];
$remarks=$_POST['remarks'];
$date=date('y-m-d');
$status="Shipped";
$qr="insert into shippingtable values(null,'$trackingno','$companyname','$date','$remarks','','','$status','$orderid')";
$res=mysqli_query($conn,$qr);
if($res){
    $upt = "update ordertable set status='$status' where id='$orderid'";
    $res1 = mysqli_query($conn,$upt);
    if($res1){
        header("Location:allorders.php");
    }
}