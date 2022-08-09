<?php
session_start();
if (!isset($_SESSION['ADMINMAIL'])) {
    header("Location:admin_login.php");
}
include ("connection.php");
$productid=$_GET['productid'];
$select= "select * from producttable where productid='$productid'";
$res=mysqli_query($conn,$select);
if (mysqli_num_rows($res)>0){
    $row=mysqli_fetch_array($res);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include ("headerfiles.php");?>
</head>
<body>
<?php include ("adminheader.php");?>
<div class="container">
    <form method="post" action="editproductaction.php">
        <div class="row">
            <h1 class="text-center text-success">Edit Product</h1>
            <div class="col-md-6 col-6 offset-3">
                <input type="hidden" name="productid" value="<?php echo $productid;?>">
                <label>Enter Product Name</label>
                <input type="text" name="productname" class="form-control" value="<?php echo $row['productname'];?>">
                <label>Photo</label>
                <input type="file" name="photo" class="form-control" value="<?php echo $row['photo'];?>">
                <label>mrp</label>
                <input type="text" name="mrp" id="mrp" onkeyup="calculateprice()" class="form-control" value="<?php echo $row['mrp'];?>">
                <label>Discount</label>
                <input type="text" name="discount" id="discount" onkeyup="calculateprice()" class="form-control" value="<?php echo $row['discount'];?>">
                <label>Price</label>
                <input type="text" readonly name="price" id="price" class="form-control" id="price"  value="<?php echo $row['price'];?>">
                <label>Enter Description</label>
                <textarea class="form-control" name="productdescription" value="<?php echo $row['description'];?>"></textarea>
                <button type="submit" class="btn btn-success mt-2">Submit</button>
            </div>
        </div>
    </form>
    <div class="text-center">
        <?php
        if(isset($_GET['err'])){
            if($_GET['err']==1){
                echo "<alert class='alert alert-success'>Product updated Successfully</alert>";
            }elseif ($_GET['err']==2){
                echo "<alert class='alert alert-danger'>Product not updated</alert>";
            }elseif($_GET['err']==0){
                echo "<alert class='alert alert-danger'>Product Name already Exists</alert>";
            }
        }
        ?>
    </div>
</div>
<?php include ("footer.php");?>
</body>
</html>
