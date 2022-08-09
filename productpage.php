<?php
session_start();
include ("connection.php");
$subcatid="";
$search="";
if(isset($_GET['subcatid'])){
    $subcatid=$_GET['subcatid'];
    $qrsubcat="select subcategoryname from subcategorytable where subcatid='$subcatid'";
    $ressubcat=mysqli_query($conn,$qrsubcat);
    $rowsubcat=mysqli_fetch_array($ressubcat);
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
    <?php include("headerfiles.php"); ?>
</head>
<body>

<?php
if(isset($_SESSION['USERMAIL'])){
    include ("userheader.php");
}else {
    include("header.php");
}
if(isset($_GET['search'])) {
    $search = $_GET['search'];
}
?>

<!-- products-breadcrumb -->
<div class="products-breadcrumb">
    <div class="container">
        <ul>
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="index.html">Home</a><span>|</span></li>
            <li>Products</li>
        </ul>
    </div>
</div>
<!-- banner -->
<div class="banner">
    <?php include("categorylinks.php"); ?>
    <div class="w3l_banner_nav_right">
<!--        <div class="w3l_banner_nav_right_banner3">-->
<!--            <h3>Best Deals For New Products<span class="blink_me"></span></h3>-->
<!--        </div>-->
        <div class="container">

                <div class="w3ls_w3l_banner_nav_right_grid1">
                    <h3 class="mt-4">Products</h3>
                    <div class="w3ls_w3l_banner_nav_right_grid1">
                    <?php
                    if($subcatid==''){
                        echo "<h6></h6>";
                        }else if($subcatid!=''){
                            echo "<h6>".$rowsubcat['subcategoryname']."</h6>";
                        }

                    ?>
                    <div class="row pro-grids-inn">
                        <?php
                        if($subcatid=='' && $search=="") {
                            $selprod = "select * from producttable order by productid  LIMIT 0,12 ";
                        }elseif($subcatid!=""){
                            $selprod="select * from producttable where subcatid='$subcatid'";
                        }else if($search!=""){
                            $selprod="select * from producttable where productname LIKE '%$search%' ";

                        }
                        $resprod=mysqli_query($conn,$selprod);
                        while($rowprod=mysqli_fetch_array($resprod)){
                        ?>
                        <div class="col-lg-3 col-sm-6 w3ls_w3l_banner_left">
                            <div class="hover14 column">
                                <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
<!--                                    <div class="agile_top_brand_left_grid_pos">-->
<!--                                        <img src="images/offer.png" alt=" " class="img-fluid" />-->
<!--                                    </div>-->
                                    <div class="agile_top_brand_left_grid1">
                                        <figure>
                                            <div class="snipcart-item block">
                                                <div class="snipcart-thumb">
                                                    <a href="singleproduct.php?productid=<?php echo $rowprod[0];?>"><img src="productimages/<?php echo$rowprod['photo'];?>" class="img-fluid" alt=" " style="width:200px;height:180px; " class="img-fluid" /></a>
                                                    <p><?php echo $rowprod['productname']; ?></p>

                                                    <h4>Rs.
                                                        <?php
                                                        if($rowprod['discount']!=0){
                                                            echo $rowprod['price'];
                                                            ?>
                                                            <span>Rs.<?php echo $rowprod['mrp'] ?></span>
                                                            <?php
                                                        }else {
                                                            echo $rowprod['price'];
                                                        }
                                                        ?>
                                                    </h4>
                                                </div>
                                                <a href='wishlistaction.php?productid=<?php echo $rowprod['productid'] ?>&page=products&subcatid=<?php echo $rowprod['subcatid'];?>><i class="fa fa-heart text-danger"></i> </a>
                                                <div class="snipcart-details">
                                                    <input type="button" onclick="addtocart(<?php echo $rowprod['productid'];?>)" name="submit" value="Add to cart"
                                                           class="button" />
                                                </div>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        }?>

                    </div>
                </div>
<!--
            </div>
        </div>
    </div>
</div>
<!-- //banner -->
<div style="margin: 8px auto; display: block; text-align:center;">
    <!---728x90--->
</div>

                </div>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>
</body>
</html>