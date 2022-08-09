<?php
include ("connection.php");
$categoryid=$_POST['categoryid'];
$subcategoryname=$_POST['subcategoryname'];
$subcategorydescription=$_POST['subcategorydescription'];

$select="select * from subcategorytable where subcategoryname='$categoryid' and categoryid='$categoryid'";
$rs=mysqli_query($conn,$select);
if(mysqli_num_rows($rs)>0){
    header("Location:addsubcategory.php?err=0");
}else{
    $qr="insert into subcategorytable values(null,'$subcategoryname','$subcategorydescription','$categoryid')";
    $res=mysqli_query($conn,$qr);
    if($res){
        header("Location:addsubcategory.php?err=1");
    } else {
        header("Location:addsubcategory.php?err=2");
    }

}