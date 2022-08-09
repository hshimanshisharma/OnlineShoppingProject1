<?php
include ("connection.php");
$productid=$_POST['productid'];
$filename="";
if (!empty($_FILES['photo']['name'])) {
    $tempname = $_FILES['photo']['tmp_name'];
    $filename = $_FILES['photo']['name'];
    move_uploaded_file($tempname, "productimages/$filename");
}
$qr="update producttable set photo='$filename' where productid='$productid'";
//echo $qr;
$res=mysqli_query($conn,$qr);
if ($res) {
    header("Location:addproductphoto.php?err=1");
} else {
    header("Location:addproductphoto.php?err=2");
}