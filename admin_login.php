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
<?php include("adminheader.php"); ?>
<div class="container">
    <form method="post" id="frmADMINLOGIN" action="adminloginaction.php">
    <div class="row">
        <div class="col-md-8 offset-3">
            <h1 class="text-center text-success">Admin Login</h1>
                <label>Enter Email</label>
                <input type="email" name="email" id="email" class="form-control" data-rule-required="true" data-msg-required="Please enter email">
            <label>Enter Password</label>
            <input type="password" name="password" id="password" class="form-control" data-rule-required="true" data-msg-required="Please enter password">
            <button type="submit" class="btn btn-success ">Login</button>
        </div>
        <p>
            <?php
            if(isset($_GET['err'])){
                echo "<alert class='alert alert-success'>Login Failed</alert> ";
            }
            ?>
        </p>
    </div>
    </form>
</div>
<?php include("footer.php"); ?>
<script>
    $(document).ready(function(){
        $('#frmADMINLOGIN').validate();
    })
</script>
</body>
</html>
