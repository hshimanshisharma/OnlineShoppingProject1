<?php
include ("connection.php");
$categoryid=$_GET['categoryid'];
$select="select * from subcategorytable where categoryid='$categoryid'";
$res=mysqli_query($conn,$select);
$s="<option value=''>-- Select --</option>";
while($row = mysqli_fetch_array($res)){
    $s .= "<option value='".$row['subcatid']."'>".$row['subcategoryname']."</option>";
}
echo $s;
