<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include("headerfiles.php"); ?>
</head>
<body>
<?php include("header.php"); ?>
<div class="container">
    <form method="post" id="frmUSERLOGIN" action="userloginaction.php">
        <div class="row">
            <div class="col-md-8 offset-3">
                <h1 class="text-center text-success">User Login</h1>
                <label>Enter Email</label>
                <input type="email" name="email" id="email" class="form-control" data-rule-required="true" data-msg-required="Please enter email">
                <label>Enter Password</label>
                <input type="password" name="password" id="password" class="form-control" data-rule-required="true" data-msg-required="Please enter password">
                <button type="submit" class="btn btn-success ">Login</button>
                <a href="forgotpassword.php" class="text-end text-danger" class="fpass">Forgot Password</a>
            </div>
            <p>
                <div class="text-center">
                <?php
                if(isset($_GET['err'])){
                    if($_GET['err']==1){
                        echo "<alert class='alert alert-success'>Password updated</alert> ";
                    }elseif ($_GET['err']==2){
                        echo "<alert class='alert alert-danger'>Password not updated.Please Try Again</alert>";
                    }

                }
                ?>
        </div>
            </p>
        </div>
    </form>
</div>
<?php include("footer.php"); ?>
<script>
    $(document).ready(function(){
        $('#frmUSERLOGIN').validate();
    })
</script>
<style>
    .fpass{
        font-size: 13px;
        text-align: right;
    }
</style>
</body>
</html>

