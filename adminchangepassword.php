<?php
session_start();
if(!isset($_SESSION['ADMINMAIL'])){
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
<?php include("adminheader.php"); ?>
<div class="container m-5">
    <div class="col-md-12 col-12">
        <h1 class="text-center text-success">Change Password</h1>
        <form method="post" action="adminchangepassaction.php" id="frmADMINCHANGEPASSWORD">
        <div class="col-8 col-md-8 offset-2">
            <label>Email</label>
            <input type="email" readonly name="email" class="form-control" value="<?php echo $_SESSION['ADMINMAIL']; ?>">
            <label>Old Password</label>
            <input type="password"  name="oldpassword" class="form-control" data-rule-required="true" data-msg-required="Please enter Password" >
            <label>New Password</label>
            <input type="password"  name="newpassword" id="newpassword" class="form-control" data-rule-required="true" data-msg-required="Please enter Password">
            <label>Confirm Password</label>
            <input type="password"  name="confirmpassword" class="form-control" data-rule-equalto="#newpassword" data-msg-equalto="Mismatched Password">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
        </form>
        <div class="text-center">
            <?php
            if(isset($_GET['err'])){
                if($_GET['err']==1){
                    echo "<alert class='alert alert-success'>Password Updated Successfully</alert>";
                }elseif ($_GET['err']==2){
                    echo "<alert class='alert alert-danger'>Password not updated</alert>";
                }elseif($_GET['err']==0){
                    echo "<alert class='alert alert-danger'>Incorrect Old Password</alert>";
                }
            }
            ?>
        </div>
    </div>
</div>
<?php include ("footer.php");?>
<script>
    $(document).ready(function(){
        $('#frmADMINCHANGEPASSWORD').validate();
    })
</script>
</body>
</html>
