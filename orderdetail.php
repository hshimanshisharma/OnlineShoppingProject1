<?php
include ("connection.php");
@session_start();
if(!isset($_SESSION['USERMAIL'])){
    header("Location:userlogin.php");
}
    $orderid=$_GET['orderid'];
$select ="select orderdetail.*,producttable.productname,producttable.photo from orderdetail,producttable where orderdetail.productid=producttable.productid and orderid='$orderid'";
$res=mysqli_query($conn,$select);
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
<?php include ("userheader.php");?>
<div class="container m-5">
    <div class="col-md-12 col-12">
        <h1 class="text-center text-success">Order Details</h1>
        <table class="table table-bordered">
            <tr>
                <th>Product Name</th>
                <th>Photo</th>
                <th>Price (Rs)</th>
                <th>Quantity</th>
                <th>Total (Rs)</th>
            </tr>
                <?php
                while($row=mysqli_fetch_array($res)){
                    ?>
                    <tr>
                        <td><?php echo $row['productname'];?></td>
                        <?php echo "<td><img src='productimages/".$row['photo']."'width='100' height='90'></td>";?>
                        <td><?php echo $row['price'];?></td>
                        <td><?php echo $row['qty'];?></td>
                        <td><?php echo $row['total'];?></td>
                    </tr>
                <?php
                }
                ?>

        </table>

    </div>
</div>
<?php include ("footer.php");?>
</body>
</html>
