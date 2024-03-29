<?php
include ("connection.php");
//ob_start();
session_start();

if (!isset($_SESSION['ADMINMAIL'])) {
    header("Location:admin_login.php");
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
    <?php include("headerfiles.php") ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>
<?php include("adminheader.php"); ?>
<div class="container m-5">
    <div class="col-md-12 col-12">
        <h1 class="text-center text-success">VIEW Pending ORDERS</h1>
        <div class="col-12 col-md-12">
            <a href="shippedorder.php" class="btn btn-outline-secondary">Shipped Orders</a>
            <table class="table table-bordered">
                <!--                <tr>-->
                <!--                    <th>Srno</th>-->
                <!--                    <th>Order ID</th>-->
                <!--                    <th>Order Date</th>-->
                <!--                    <th>Customer Name</th>-->
                <!--                    <th>Mobileno</th>-->
                <!--                    <th>Address</th>-->
                <!--                    <th>City - State</th>-->
                <!--                    <th>Pay By</th>-->
                <!--                    <th>Grand Total</th>-->
                <!--                    <th>Status</th>-->
                <!--                    <th>UserEmail</th>-->
                <!--                </tr>-->
                <?php
                $select = "select * from ordertable where ordertable.status='Pending' order by id DESC";
                $res = mysqli_query($conn,$select);
                $num = 1;
                while($row = mysqli_fetch_array($res)){
                    ?>
                    <tr>
                        <td>
                            <h6>Srno - <?php echo $num; ?></h6>
                            <h6 style="padding-bottom:10px; padding-top: 10px ">Customer Name - <?php echo $row['fullname']; ?></h6>
                            <h6 style="padding-bottom:10px; padding-top: 10px ">Address - <?php echo $row['address']; ?></h6>
                            <h6 style="padding-bottom:10px; padding-top: 10px "><?php echo $row['city']; ?>, <?php echo $row['state']; ?></h6>
                        </td>
                        <td>
                            <h6>Order Date - <?php echo $row['orderdate']; ?></h6>
                            <h6 style="padding-bottom:10px; padding-top: 10px ">Mobileno - <?php echo $row['mobileno']; ?></h6>
                            <h6 style="padding-bottom:10px; padding-top: 10px ">UserEmail - <?php echo $row['email']; ?></h6>
                        </td>
                        <td>
                            <h6>Order ID - <?php echo $row['id']; ?></h6>
                            <h6 style="padding-bottom:10px; padding-top: 10px ">Payment Method - <?php echo $row['paymentmethod']; ?></h6>
                            <h6 style="padding-bottom:10px; padding-top: 10px ">Grand Total - Rs.<?php echo $row['grandtotal']; ?></h6>
                            <h6 style="padding-bottom:10px; padding-top: 10px ">Status - <?php echo $row['status']; ?></h6>
                            <button onclick="open_shipmodal(<?php echo $row['id']; ?>)" type="button" class="btn btn-warning">Shipping</button>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Product Name</th>
                                    <th>Photo</th>
                                    <th>Price</th>
                                    <th>Qty</th>
                                    <th>Total</th>
                                </tr>
                                <?php
                                $qr1 = "select orderdetail.*,producttable.productname,producttable.photo from orderdetail,producttable where orderdetail.productid=producttable.productid and orderid='$row[0]'";
                                $res1 = mysqli_query($conn,$qr1);
                                while($row1 = mysqli_fetch_array($res1)){
                                    ?>
                                    <tr>
                                        <td><?php echo $row1['productname']; ?></td>
                                        <td><img src="productimages/<?php echo $row1['photo']; ?>" width="80" height="70" /></td>
                                        <td><?php echo $row1['price']; ?></td>
                                        <td><?php echo $row1['qty']; ?></td>
                                        <td><?php echo $row1['total']; ?></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </table>
                        </td>

                    </tr>
                    <?php
                    $num++;
                }
                ?>
            </table>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>
<div class="modal fade" id="mdl_shipping">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h1>Shipping Details</h1>
        </div>
        <div class="modal-body">
            <div class="col-md-12 col-12">
                <form id="frm_shipping" method="post" action="shippingaction.php">
                    <input type="hidden" id="orderid" name="orderid">
                    <label>Enter Tracking No.</label>
                    <input type="text" name="trackingno" id="trackingno" class="form-control">
                    <label>Select Company</label>
                    <select name="companyname" id="companyname" class="form-control">
                        <option value="fedex">Fedex</option>
                        <option value="bluedart">BlueDart</option>
                        <option value="expressbees">ExpressBees</option>
                    </select>
                    <label>Enter Remarks (if any)</label>
                    <textarea name="remarks" id="remarks" class="form-control"></textarea>
                    <button type="submit" class="btn btn-success mt-3">Submit</button>
                </form>

            </div>
        </div>
        <div class="modal-footer">
            <button class="close text-danger" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
</div>
<script>
    function open_shipmodal(orderid){
        document.getElementById('orderid').value = orderid;
        $('#mdl_shipping').modal();
    }
</script>
</body>
</html>






