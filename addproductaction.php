<?php
include ("connection.php");
$categoryid=$_POST['categoryid'];
$subcatid=$_POST['subcatid'];
$productname=$_POST['productname'];
$mrp=$_POST['mrp'];
$discount=$_POST['discount'];
$price=$_POST['price'];
$description=$_POST['description'];
$select="select * from producttable where productname='$productname' and subcatid='$subcatid'";
$res=mysqli_query($conn,$select);
if(mysqli_num_rows($res)>0){
header("Location:product.php?err=0");
}else {
    if (!empty($_FILES['photo']['name'])) {
        $tempname = $_FILES['photo']['tmp_name'];
        $filename = $_FILES['photo']['name'];
        move_uploaded_file($tempname, "productimages/$filesname");
    }
}
    $qr = "insert into producttable values (null,'$productname','','$mrp','$discount','$price','$subcatid','$description')";
    $res = mysqli_query($conn,$qr);
    if ($res) {
        header("Location:product.php?err=1");
    } else {
        header("Location:product.php?err=2");
    }
