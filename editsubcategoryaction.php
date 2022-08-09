<?php
include ("connection.php");
$subcatid=$_POST['subcatid'];
$subcategoryname=$_POST['subcategoryname'];
$subcategorydescription=$_POST['subcategorydescription'];
$qr= "select * from subcategorytable where subcategoryname='$subcategoryname' and subcatid<>$subcatid";
$rs= mysqli_query($conn,$qr);
if(mysqli_num_rows($rs)>0){
    header("Location:editsubcategory.php?err=0&subcatid=$subcatid");
}
else{
    $insert="update subcategorytable set subcategoryname='$subcategoryname',description='$subcategorydescription' where subcatid='$subcatid'";
    $res=mysqli_query($conn,$insert);
    if($res){
        header("Location:editsubcategory.php?err=1&subcatid=$subcatid");
    }
    else{
        header("Location:editsubcategory.php?err=2&subcatid=$subcatid");
    }
}

