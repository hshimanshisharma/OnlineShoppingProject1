<?php
include ("connection.php");
//ob_start();
session_start();


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
        h6.d1{
            padding:7px 2px;
            font-weight: 700;
        }
        h6.d1 span{
            font-weight: 600;
        }
    </style>
</head>
<body>
<?php include("adminheader.php"); ?>
<div class="container m-5">
    <div class="col-md-12 col-12">
        <h1 class="text-center text-success">VIEW SHIPPED ORDERS</h1>
        <a href="deliveredorder.php" class="btn btn-outline-secondary">Delivered Orders</a>
        <div class="col-12 col-md-12">
            <table class="table table-bordered">
                <?php
                $select = "select * from ordertable  where ordertable.status='Shipped' order by id DESC";
                $res = mysqli_query($conn,$select);
                $num = 1;
                while($row = mysqli_fetch_array($res)){
                    ?>
                    <tr>
                        <td>
                            <h6 class="d1">Srno - <span><?php echo $num; ?></span></h6>
                            <h6 class="d1">Customer Name - <span><?php echo $row['fullname']; ?></span></h6>
                            <h6 class="d1">Address - <span><?php echo $row['address']; ?>, <?php echo $row['city']; ?>, <?php echo $row['state'];
                                    ?></span></h6>
                        </td>
                        <td>
                            <h6 class="d1">Order Date - <span><?php echo $row['orderdate']; ?></span></h6>
                            <h6 class="d1">Mobileno - <span><?php echo $row['mobileno']; ?></span></h6>
                            <h6 class="d1">UserEmail - <span><?php echo $row['email']; ?></span></h6>
                        </td>
                        <td>
                            <h6 class="d1">Order ID - <span><?php echo $row['id']; ?></span></h6>
                            <h6 class="d1">Payment Method - <span><?php echo $row['paymentmethod']; ?></span></h6>
                            <h6 class="d1">Grand Total - <span>Rs.<?php echo $row['grandtotal']; ?></span></h6>
                            <h6 class="d1">Status - <span><?php echo $row['status']; ?></span></h6>
                            <button onclick="open_delivermodal(<?php echo $row['id']; ?>)" type="button" class="btn btn-warning">Delivered</button>
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
                                //                            echo $qr1;
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
<div class="modal fade" id="mdl_delivered">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1>Delivery Details</h1>
            </div>
            <div class="modal-body">
                <div class="col-md-12 col-12">
                    <form id="frm_delivered" method="post" action="deliveredaction.php">
                        <input type="hidden" id="orderid" name="orderid">
                        <label>Enter Received Person Name</label>
                        <input type="text" name="receivedperson" id="receivedperson" class="form-control">

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
    function open_delivermodal(orderid){
        document.getElementById('orderid').value = orderid;
        $('#mdl_delivered').modal();
    }
</script>
</body>
</html>







