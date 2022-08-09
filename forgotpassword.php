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
<div class="container">
    <div class="col-md-12 col-12">
        <form method="post" id="frmuserfp" action="userfpaction.php" >
            <h1 class="text-center text-success">User Forgot Password</h1>
            <label class="mt-3">Enter Email</label>
            <input type="email" name="email" id="email" class="form-control" data-rule-required="true" data-msg-required="Please enter email">
            <button type="submit" class="btn btn-success mt-4 mb-4">Submit</button>
        </form>
    </div>
    <div class="text-center">
        <?php
        if(isset($_GET['err'])){
            echo "<alert class='alert alert-success'>Incorrect email id</alert> ";
        }

        ?>
    </div>
</div>
<?php include ("footer.php");?>
<script>
    $(document).ready(function(){
        $('#frmuserfp').validate();
    })
</script>
</body>
</html>