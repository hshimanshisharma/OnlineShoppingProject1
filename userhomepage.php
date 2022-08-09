<?php
session_start();
if(!isset($_SESSION['USERMAIL'])) {
    header("Location:userlogin.php");
}
if(isset($_GET['email'])){
    $email=$_GET['email'];
}
include ("connection.php");
$sel="select * from usertable where email='$email'";
$res=mysqli_query($conn,$sel);
$row=mysqli_fetch_array($res);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include ("headerfiles.php");?>
</head>
<body>
<?php include ("userheader.php");?>
<div class="container">
    <div class="col-md-12 col-12">
<h1 class="text-warning">Welcome  <?php echo $row['fullname'];?> </h1>
    </div>
</div>
<?php include("footer.php");?>
</body>
</html>