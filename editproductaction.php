<?php
include ("connection.php");
$productid=$_POST['productid'];
$productname=$_POST['productname'];
$mrp=$_POST['mrp'];
$discount=$_POST['discount'];
$price=$_POST['price'];
$productdescription=$_POST['productdescription'];
$qr= "select * from producttable where productname='productname' and productid<>$productid";
$rs= mysqli_query($conn,$qr);
if(mysqli_num_rows($rs)>0){
    header("Location:editproduct.php?err=0&productid=$productid");
}
else{
    $insert="update producttable set productname='$productname',mrp='$mrp', discount='$discount',price='$price', description='$productdescription' where productid='$productid'";
    $res=mysqli_query($conn,$insert);
    if($res){
        header("Location:editproduct.php?err=1&productid=$productid");
    }
    else{
        header("Location:editproduct.php?err=2&productid=$productid");
    }
}

