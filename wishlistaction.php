<?php
include ("connection.php");
session_start();
if (!isset($_SESSION['USERMAIL'])) {
    header("Location:userlogin.php");
}else{
    $useremail = $_SESSION['USERMAIL'];
}
$email=$_SESSION['USERMAIL'];
$productid=$_GET['productid'];
$page = $_GET['page'];
$sel="select * from producttable where productid='$productid'";
$res1=mysqli_query($conn,$sel);
$row=mysqli_fetch_array($res1);
$productname=$row['productname'];
if (isset($_GET['subcatid'])){
$subcatid=$_GET['subcatid'];
}
$mrp=$row['mrp'];
$discount=$row['discount'];
$price=$row['price'];
$photo=$row['photo'];
$description=$row['description'];
$check="select * from wishlist where productname='$productname'";
$re=mysqli_query($conn,$check);
if($row1=mysqli_fetch_array($re)>0){
    $del="delete from wishlist where productname='$productname'";
    $res2=mysqli_query($conn,$del);
    if ($res2) {
        if($page=='index'){
            header("Location:index.php");
        }else if($page=='products'){
            header("Location:productpage.php");
        }else if($page=='single'){
            header("Location:singleproduct.php?productid=$productid");
        }
    }
}else {
    $qr = "insert into wishlist values (null,'$email','$productname','$photo','$mrp','$discount','$price','$description')";
    $res = mysqli_query($conn, $qr);
    if ($res) {
        if($page=='index'){
            header("Location:index.php");
        }else if($page=='products'){
            header("Location:productpage.php?subcatid=$subcatid");
        }else if($page=='single'){
            header("Location:singleproduct.php?productid=$productid");
        }
    }
}


