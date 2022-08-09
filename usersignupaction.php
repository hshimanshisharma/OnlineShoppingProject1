<?php
include ('connection.php');
$email=$_POST['email'];
$password=$_POST['password'];
$fullname=$_POST['fullname'];
$mobileno=$_POST['mobileno'];
$city=$_POST['city'];
$state=$_POST['state'];
$address=$_POST['address'];
$photo=$_POST['photo'];
$select="select * from usertable where email='$email'";
$res=mysqli_query($conn,$select);
if(mysqli_num_rows($res)>0){
    header("Location:usersignup.php?err=0");
}else {
    if (isset($_FILES['photo']['tmp_name'])) {
        $tmpname = $_FILES['photo']['tmp_name'];
        $filename = $_FILES['photo']['name'];
        move_uploaded_file($tmpname, "images/",);
    }
}
$qr="insert into usertable values('$email','$fullname','$mobileno','$address','$city','$state','$password','$photo')";
$res1=mysqli_query($conn,$qr);
if($res1){
    header("Location:userhomepage.php");
}else{
    header("Location:usersignup.php?err=2");
}