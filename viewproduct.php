<?php
session_start();
if (!isset($_SESSION['ADMINMAIL'])) {
    header("Location:admin_login.php");
}
include ("connection.php");

$select1 = "select * from producttable";
$res1 = mysqli_query($conn, $select1);
$row1=mysqli_fetch_array($res1);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include("headerfiles.php") ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <style>
        #bt{

        }
    </style>
</head>
<body>
<?php include("adminheader.php"); ?>
<div class="container m-5">
    <div class="col-md-12 col-12">
        <h1 class="text-center text-success">VIEW PRODUCTS</h1>
        <a href="addproductphoto.php" id="bt" class="btn btn-success btn-sm m-4 text-light">Add Photo</a>
<!--        --><?php //$productid=$row1['photo'];?>
        <a href="product.php" class="btn btn-success btn-sm m-4 text-light">Add Products</a>
        <div class="col-12 col-md-12">
            <table class="table table-bordered">
                <tr>
                    <th>Srno</th>
                    <th>Product Name</th>
                    <th>Photo</th>
                    <th>MRP</th>
                    <th>Discount</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th colspan="2">Action</th>
                </tr>
                <?php
                $select = "select * from producttable";
                $res = mysqli_query($conn,$select);
                $num = 1;
                while($row = mysqli_fetch_array($res)){
                    echo "<tr>";
                    echo "<td>".$num."</td>";
                    echo "<td>".$row['productname'];
//                    "."<strong>(".$row['subcatid']."</strong></td>";
                    echo "<td><img src='productimages/".$row['photo'] ."'width='100' height='90'></td>";
                    echo "<td>".$row['mrp']."</td>";
                    echo "<td>".$row['discount']."(%)</td>";
                    echo "<td>".$row['price']."</td>";
                    echo "<td>".$row['description']."</td>";
                    echo "<td><a href='editproduct.php?productid=".$row['productid']."'><i class='fa fa-pen'></i></a></td>";
                    echo "<td><a href='deleteproduct.php?productid=".$row['productid']."'><i class='fa fa-trash-alt text-danger'></i></a></td>";
                    echo "</tr>";
                    $num++;
                }
                ?>
            </table>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>
</body>
</html>

