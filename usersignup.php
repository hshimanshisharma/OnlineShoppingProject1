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
<?php include ("header.php");?>
<div class="container">
    <div class="col-md-12 col-12">
        <form method="post" id="frmusersignup" action="usersignupaction.php" enctype="multipart/form-data">
            <h1 class="text-center text-success">User Signup</h1>
            <div class="col-md-6 col-6 offset-3">
                <label class="mt-3">Enter Email</label>
                <input type="email" class="form-control" id="email" name="email" data-rule-required="true" data-msg-required="Please enter email" >
                <label class="mt-3">Enter Password</label>
                <input type="password" class="form-control" id="password" name="password" data-rule-required="true" data-msg-required="Please enter password">
                <label class="mt-3">Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword" data-rule-equalto="#password" data-msg-required="Mismatched password">
                <label class="mt-3">Enter Fullname</label>
                <input type="text" class="form-control" id="fullname" name="fullname" data-rule-required="true" data-msg-required="Please enter fullname" >
                <label class="mt-3">Enter Mobile Number</label>
                <input type="text" class="form-control" id="mobileno" name="mobileno" data-rule-required="true" data-msg-required="Please enter mobile number" >
                <label class="mt-3">Enter Address</label>
                <textarea type="text" class="form-control" id="address" name="address" data-rule-required="true" data-msg-required="Please enter address" ></textarea>
                <label class="mt-3">Enter City</label>
                <input type="text" class="form-control" id="city" name="city" data-rule-required="true" data-msg-required="Please enter city" >
                <label class="mt-3">Enter State</label>
                <input type="text" class="form-control" id="state" name="state" data-rule-required="true" data-msg-required="Please enter state" >
                <label class="mt-3">Enter Photo</label>
                <input type="file" class="form-control" id="photo" name="photo"  >
                <button type="submit" class="btn btn-success mb-4 mt-4">Submit</button>
            </div>
        </form>
        <div class="text-center">
            <?php
            if(isset($_GET['err'])){
//                if($_GET['err']==1){
//                    echo "<alert class='alert alert-success'>Sign up successfull</alert>";
                if ($_GET['err']==2){
                    echo "<alert class='alert alert-danger'>signup failed</alert>";
                }elseif($_GET['err']==0){
                    echo "<alert class='alert alert-danger'>Email already exists</alert>";
                }
            }
            ?>
    </div>
</div>
<?php include ("footer.php")?>
    <script>
        $(document).ready(function(){
            $('#frmusersignup').validate();
        })
    </script>
</body>
</html>
