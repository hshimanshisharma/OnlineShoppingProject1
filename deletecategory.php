<?php
include ("connection.php");
$categoryid=$_GET['categoryid'];
$select ="select * from subcategorytable where categoryid='$categoryid'";
$res=mysqli_query($conn,$select);
if(mysqli_num_rows($res)>0){
    echo "<h1 class='text-center text-danger mt-5'>Can't Delete This Data</h1>";
    echo "<a href='newcategory.php'>Go Back</a>";
}else {
    $delete = "delete from categorytable where categoryid='$categoryid'";
    $res = mysqli_query($conn, $delete);
    if ($res) {
        header("Location:newcategory.php");
    } else {
        echo "<h1 class='text-center text-danger mt-5'>Something went wrong. Try again.</h1>";
        echo "<a href='newcategory.php'>Go Back</a>";
    }
}