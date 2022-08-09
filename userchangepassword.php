<?php
session_start();
if(!isset($_SESSION['USERMAIL'])){
    header("Location:admin_login.php");
}
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
<?php include("userheader.php"); ?>
<div class="container m-5">
    <div class="col-md-12 col-12">
        <h1 class="text-center text-success">Change Password</h1>
        <form method="post" action="userchangepasswordaction.php">
            <div class="col-8 col-md-8 offset-2">
                <label>Email</label>
                <input type="email" readonly name="email" class="form-control" value="<?php echo $_SESSION['USERMAIL']; ?>">
                <label>Old Password</label>
                <input type="password"  name="oldpassword" class="form-control">
                <label>New Password</label>
                <input type="password"  name="newpassword" class="form-control">
                <label>Confirm Password</label>
                <input type="password"  name="confirmpassword" class="form-control">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>
</div>
<?php include ("footer.php");?>
</body>
</html>

