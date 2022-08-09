<?php
include ("connection.php");
$orderid=$_POST['orderid'];
$personreceived=$_POST['personreceived'];
$deliveryremarks=$_POST['deliveryremarks'];
$remarks=$_POST['remarks'];
$date=date('y-m-d');
$status="Delivered";
$qr="update shippingtable set personreceived='$personreceived', deliveryremarks='$deliveryremarks', status='$status' where orderid=$orderid";
$res=mysqli_query($conn,$qr);
if($res){
    $up="update ordertable set status='$status' where id=$orderid";
    $res1=mysqli_query($conn,$up);
    if($res1){
        header("Location:shippedorder.php");
    }
}