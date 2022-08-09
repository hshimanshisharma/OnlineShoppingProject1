<?php
session_start();
if (!isset($_SESSION['ADMINMAIL'])) {
    header("Location:admin_login.php");
}
include ("connection.php");
$qr="select * from categorytable";
$res=mysqli_query($conn,$qr);
$qr1="select * from subcategorytable";
$res1=mysqli_query($conn,$qr1);
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
    <h1 class="text-primary">New Product</h1>
    <form method="post" action="addproductaction.php" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6 col-6 ">
                <div class="form-group form-row">
                    <label class="col-4">Select Category</label>
                    <div class="col-8">
                        <select name="categoryid" class="form-control" onchange="getSubCategories(this.value)">
                            <option>Select</option>
                            <?php
                            while($row=mysqli_fetch_array($res)){
                                echo "<option value='".$row['categoryid']."'>".$row['categoryname']."</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class="col-4">Select Sub Category</label>
                    <div class="col-8">
                        <select name="subcatid" id="subcatid" class="form-control">
                            <option value="">-- Select --</option>
                        </select>
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class="col-4">Enter Product Name</label>
                    <div class="col-8">
                        <input type="text" name="productname" class="form-control">
                    </div>
                </div>
<!--                <div class="form-group form-row">-->
<!--                    <label class="col-4">Select Photo</label>-->
<!--                    <div class="col-8">-->
<!--                        <div class="">-->
<!--                        <input type="file"  class="form-control">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
        </div>
        <div class="row">
                <div class="form-group ">
                    <label class="col-8">Enter MRP</label>
                    <div class="col-8">
                        <div class="">
                            <input type="text" name="mrp" onkeyup="calculateprice()" id="mrp" class="form-control">
                        </div>
                    </div>
                </div>
            <div class="form-group ">
                <label class="col-8">Enter Discount</label>
                <div class="col-8">
                    <div class="">
                        <input type="text" name="discount" id="discount" onkeyup="calculateprice()" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group ">
                <label class="col-8">Price</label>
                <div class="col-8">
                    <div class="">
                        <input type="text" name="price" id="price" readonly class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <div class="form-group">
                <label >Enter Description</label>

                    <div class="">
                        <textarea type="text" name="description" class="form-control"></textarea>
                    </div>

            </div>
            </div>
        </div>
        <div class="row">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>

</div>
<div class="text-center">
    <?php
    if(isset($_GET['err'])){
        if($_GET['err']==1){
            echo "<alert class='alert alert-success'>Product ADDED</alert> ";
        }elseif ($_GET['err']==2){
            echo "<alert class='alert alert-danger'>Product not added</alert>";
        }elseif($_GET['err']==0){
            echo "<alert class='alert alert-danger'>Product already Exists</alert>";
        }
    }
    ?>
</div>
<?php include ("footer.php");?>
</body>
</html>
