<?php
include ("connection.php");
session_start();
if (!isset($_SESSION['ADMINMAIL'])) {
    header("Location:admin_login.php");
}
include ("connection.php");
$qr="select * from producttable";
$res=mysqli_query($conn,$qr);
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
<?php include ("adminheader.php");?>
<div class="container">
    <form method="post" action="productphotoaction.php" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-12 col-12 m-5">
                <h1 class="text-center text-success">Add Photo</h1>
                <div class="col-md-6 col-6 offset-3">
<label>Product Nmae</label>
                    <select name="productid" class="form-control" >
                    <option>Select</option>
                    <?php
                    while($row=mysqli_fetch_array($res)){
                        echo "<option value='".$row['productid']."'>".$row['productname']."</option>";
                    }
                    ?>
                    </select>
                    <label>Select Photo</label>
<input type="file" name="photo" class="form-control">
                    <button type="submit" class="btn btn-success mt-4 mb-4">UPLOAD</button>
                </div>
            </div>
        </div>
    </form>
    <div class="text-center">
        <?php
        if(isset($_GET['err'])){
            if($_GET['err']==1){
                echo "<alert class='alert alert-success'>Photo ADDED</alert> ";
            }elseif ($_GET['err']==2){
                echo "<alert class='alert alert-danger'>Photo not added</alert>";
            }
        }
        ?>
</div>
<?php include ("footer.php");?>
</body>
</html>
