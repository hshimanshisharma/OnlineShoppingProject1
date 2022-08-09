<?php
include ("connection.php");
include ("cart.php");
@session_start();
$email=$_SESSION['USERMAIL'];
$sel="select * from usertable where email='$email'";
$res=mysqli_query($conn,$sel);
$row=mysqli_fetch_array($res);
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
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>
<body>
<?php include ("userheader.php");?>
<div class="container">
    <div class="">
        <h1>Billing Information</h1>
        <div class="row">
        <div class="col-md-7 col-7">
            <h3>Billing Address</h3>
            <form method="post"  enctype="multipart/form-data" id="frmBilling">
                    <label class="mt-3">Enter Fullname</label>
                    <input type="text" class="form-control" id="fullname" name="fullname" data-rule-required="true" data-msg-required="Please enter fullname" value="<?php echo $row['fullname'];?>">
                    <label class="mt-3">Enter Mobile Number</label>
                    <input type="text" class="form-control" id="mobileno" name="mobileno" data-rule-required="true" data-msg-required="Please enter mobile number" value="<?php echo $row['mobileno']; ?>" >
                    <label class="mt-3">Enter Address</label>
                    <textarea type="text" class="form-control" id="address" name="address" data-rule-required="true" data-msg-required="Please enter address" ><?php echo $row['address'];?></textarea>
                    <label class="mt-3">Enter City</label>
                    <input type="text" class="form-control" id="city" name="city" data-rule-required="true" data-msg-required="Please enter city" value="<?php echo $row['city']; ?>">
                    <label class="mt-3">Enter State</label>
                    <input type="text" class="form-control" id="state" name="state" data-rule-required="true" data-msg-required="Please enter state" value="<?php echo $row['state']; ?>">
                    <label >Payment Method</label>
                    <select name="payment" id="payment" class="form-control">
                        <option value="">Select</option>
                        <option value="Card">BY Card</option>
                        <option value="COD">Cash On Delivery</option>
                    </select>
                    <button type="button" class="btn btn-success mb-4 mt-4" onclick="pay()">Confirm Order</button>
            </form>
        </div>
            <div class="col-md-5 col-5">
                <h3>Cart Detail</h3>
            <table class="table table-bordered">
                <tr>
                    <th>Srno</th>
                    <th>Product Name</th>
                    <th>Photo</th>
                    <th>Price(Rs)</th>
                    <th>Qty</th>
                    <th>Total(Rs)</th>
                </tr>
                <?php
                if(isset($_SESSION['products'])){
                    $ar = (array)($_SESSION['products']);
                    $grd_ttl =0;
                    for($i=0;$i<count($_SESSION['products']);$i++){
                        $grd_ttl = $grd_ttl + ($ar[$i]->price * $ar[$i]->qty);
                        ?>
                        <tr>
                            <td><?php echo ($i+1); ?></td>
                            <td><?php echo $ar[$i]->productname; ?></td>
                            <td><img width="80" height="60" src="productimages/<?php echo $ar[$i]->photo; ?>" /></td>
                            <td><?php echo $ar[$i]->price; ?></td>
                            <td><?php echo $ar[$i]->qty; ?></td>
                            <td><?php echo $ar[$i]->price * $ar[$i]->qty; ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                    <tr>
                        <th colspan="5" style="text-align: right;">Grand Total</th>
                        <th colspan="2">Rs.<?php echo $grd_ttl; ?></th>
                    </tr>
                    <?php
                    }
                    ?>
            </table>
                <input type="hidden" name="grandtotal" id="grandtotal" value="<?php echo $grd_ttl; ?>">
        </div>
        </div>
    </div>
</div>
<?php include ("footer.php");?>
<script>
    $(document).ready(function(){
        $('#frmBilling').validate();
    })
</script>
</body>
</html>
