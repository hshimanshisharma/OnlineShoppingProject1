<?php
include ("connection.php");
$productid=$_GET['productid'];
$delete= "delete from producttable where productid='$productid'";
$res=mysqli_query($conn,$delete);
if($res){
    header("Location:viewproduct.php");
}
else{
    echo "<h1 class='text-center text-danger mt-5'>Something went wrong. Try again.</h1>";
    echo "<a href='viewproduct.php'>Go Back</a>";
}

