<?php
include ("connection.php");
$email=$_GET['email'];
$select="select * from usertable where email='$email'";
$res=mysqli_query($conn,$select);
if (mysqli_num_rows($res)>0) {
    $row = mysqli_fetch_array($res);
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
<?php include ("header.php");?>
<div class="container">
    <div class="col-md-6 col-6 offset-3">
    <form action="resetpasswordaction.php" method="post" id="frmRESETPASSWORD">


            <h1 class="text-center text-success">Reset Password</h1>

            <label>Email</label>
            <input type="email" name="email" id="email" readonly value="<?php echo $row['email'] ?>" >
            <label>New Password</label>
            <input type="password" name="password" id="password" data-rule-required="true" data-msg-required="Enter New Password">
            <label>Confirm Password</label>
            <input type="password" name="cpassword" id="cpassword" data-rule-equalto="#password" data-msg-equalto="Mismatched Password">
            <button type="submit" class="btn btn-success mt-4 mb-4">Submit</button>
        <p class="text-center m-3">
            <?php
            if(isset($_GET['err'])){
            ?>
            <div class='alert alert-danger'>
                <?php
                echo $_GET['err'];
                ?>
        </p>
            </div>
            <?php
            }
            ?>
    </form>
    </div>
</div>

<?php include ("footer.php");?>
<script>
    $(document).ready(function(){
        $('#frmRESETPASSWORD').validate();
    })
</script>
</body>
</html>
