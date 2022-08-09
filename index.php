<?php
session_start();
include ("connection.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/all.css">
    <?php include ("headerfiles.php");?>
</head>
<body>
<?php
if(isset($_SESSION['USERMAIL'])){
include ("userheader.php");
}else {
include("header.php");
}?>

</div>
<!-- //header -->
<!-- banner -->
<div class="banner">
    <?php include("categorylinks.php"); ?>
    <div class="w3l_banner_nav_right">
        <section class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <div class="w3l_banner_nav_right_banner" style="background:url('./images2/img_4.png') no-repeat 0px 0px;">
                            <h3>Stay home & get
                                <span>Trendy</span>Clothes</h3>
                            <div class="more">
                                <a href="productpage.php" class="button--saqui button--round-l button--text-thick"
                                   data-text="Shop now">Shop now</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="w3l_banner_nav_right_banner1" style="background:url('./images2/img_10.png') no-repeat 0px 0px;">
<!--                            <h3>Make your <span>food</span> with Spicy.</h3>-->
                            <div class="more">
<!--                                <a href="productpage.php" class="btn btn-success" -->
<!--                                   data-text="Shop now">Shop now</a>-->
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="w3l_banner_nav_right_banner2" style="background:url('./images2/img.png') no-repeat 0px 0px;">
                            <h3>DECEMBER <i style="color:#1da1f2 ">COLLECTION</i> </h3>
                            <div class="more">
                                <a href="productpage.php" class="button--saqui button--round-l button--text-thick"
                                   data-text="Shop now">Shop now</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </div>
    <div class="clearfix"></div>
</div>
<!-- banner -->
<div class="container-fluid mx-lg-0">
    <div class="banner_bottom">
        <div class="wthree_banner_bottom_left_grid_sub">
        </div>
        <div class="row wthree_banner_bottom_left_grid_sub1">
            <div class="col-lg-4 col-md-6 wthree_banner_bottom_left">
                <div class="wthree_banner_bottom_left_grid">
                    <img src="images2/image1.jpg" alt=" " class="img-fluid radius-image" />
                    <div class="wthree_banner_bottom_left_grid_pos">
                        <h4>Discount Offer <span>25%</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wthree_banner_bottom_left">
                <div class="wthree_banner_bottom_left_grid">
                    <img src="images2/image2.jpg" alt=" " height="380" width="360" />
                    <div class="wthree_banner_bottom_left_grid_pos">
                        <h4>Discount Offer <span>50%</span></h4>
                    </div>
<!--                        <h3 class="align-text-bottom">introducing <span>best store</span> for <i>groceries</i></h3>-->

                </div>
            </div>
            <div class="col-lg-4 col-md-6 wthree_banner_bottom_left mt-lg-0 mt-5">
                <div class="wthree_banner_bottom_left_grid">
                    <img src="images2/image4.jpg" alt=" " class="img-fluid radius-image" />
<!--                    <div class="wthree_banner_btm_pos1">-->
<!--                        <h3>Save <span>Upto</span> $10</h3>-->
<!--                    </div>-->
                    <div class="wthree_banner_bottom_left_grid_pos">
                        <h4>Discount Offer <span>70%</span></h4>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- top-brands -->
<div class="top-brands">
    <div class="container">
        <h3 class="text-info">SHOP WITH US</h3>
        <div class="row agile_top_brands_grids">
            <?php
            $qrprod="select * from producttable order by productid   LIMIT 0,4";
            $res=mysqli_query($conn,$qrprod);
            while($row=mysqli_fetch_array($res)){
            ?>
                <div class="col-lg-3 col-sm-6 top_brand_left">
                    <div class="hover14 column">
                        <div class="agile_top_brand_left_grid">
<!--                            <div class="tag"><img src="images/tag.png" alt=" " class="img-fluid" /></div>-->
                            <div class="agile_top_brand_left_grid1">
                                <figure>
                                    <div class="snipcart-item block">
                                        <div class="snipcart-thumb">
                                            <a href="singleproduct.php?productid=<?php echo $row[0];?>"><img title=" " alt=" " src="productimages/<?php echo $row['photo']; ?>"
                                                                       class="img-fluid" style="width:250px;height: 220px;" /></a>
                                            <p><?php echo $row[1] ?></p>
                                            <h4>Rs.
                                                <?php
                                                if($row['discount']!=0){
                                                    echo $row['price'];
                                                    ?>
                                                <span>Rs.<?php echo $row['mrp'] ?></span>
                                                <?php
                                                }else {
                                                    echo $row['price'];
                                                }
                                                ?>
                                            </h4>
                                            <form>
                                                <select>
                                                    <option>Select Size</option>
                                                    <option value="XS">XS</option>
                                                    <option value="S">S</option>
                                                    <option value="M">M</option>
                                                    <option value="L">L</option>
                                                    <option value="XL">XL</option>
                                                    <option value="XXL">XXL</option>
                                                </select>
                                            </form>
                                        </div>
                                        <a href='wishlistaction.php?productid=<?php echo $row['productid'] ?>&page=index'><i class="fa fa-heart text-danger"></i> </a>
                                        <div class="snipcart-details top_brand_home_details">
                                            <input type="button" onclick="addtocart(<?php echo $row['productid'];?>)" name="submit" value="Add to cart"
                                                   class="button" />

                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--<div class="container">-->
<!--    <h1 class="text-info text-center">Frequently Bought</h1>-->
<!--    --><?php
//    $frequent="select orderdetail.productid,count(*) as num,photo from ordertable,orderdetail,producttable where ordertable.id=orderdetail.orderid and producttable.productid=orderdetail.productid group by orderdetail.productid order by num DESC ";
////    echo $fre;
//    $query=mysqli_query($conn,$frequent);
//    while($row3=mysqli_fetch_array($query)){
//        $newrow1 = $row3[0];
//        $newrow2 = $row3[1];
//    }
////    $prod1= $row3[0];
////    $prod2= $row3[1];
////    print_r($newrow1);
//    ?>
<!--    <hr>-->
<!--<!--    <a href="">abc</a>-->-->
<!--    <a href="singleproduct.php?productid=--><?php //echo $newrow1[0];?><!--"><img title=" " alt=" " src="productimages/--><?php //echo $newrow1['photo']; ?><!--"-->
<!--                                                                     class="img-fluid" style="width:250px;height: 220px;" /></a>-->
<!--</div>-->
<!-- //top-brands -->
<!-- fresh-vegetables -->
<div class="fresh-vegetables">
    <div class="container">
        <h3 class="text-info">Top Products</h3>
        <div class="row w3l_fresh_vegetables_grids">
            <div class="col-lg-3 w3l_fresh_vegetables_grid w3l_fresh_vegetables_grid_left pl-lg-0">
                <div class="w3l_fresh_vegetables_grid2">
                    <ul>
                        <li><i class="fa fa-check" aria-hidden="true"></i><a href="productpage.php">All Categories</a>
                        </li>
                        <?php
                        $sel="select * from categorytable order by categoryname ";
                        $res=mysqli_query($conn,$sel);
                        while($row=mysqli_fetch_array($res)){
                            ?>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="productpage.php?categoryid=$row[0]"><?php echo $row['categoryname'];?></a>
                        </li>
                        <?php
                        }
                        ?>

                    </ul>
                </div>
            </div>
            <div class="col-lg-9 w3l_fresh_vegetables_grid_right mt-lg-0 mt-5">
                <div class="row">
                    <div class="col-lg-4 w3l_fresh_vegetables_grid">
                        <div class="w3l_fresh_vegetables_grid1">
                            <img src="images2/4afec31753aa0a18eddc57e924ec14a9.jpg" alt=" " class="img-fluid radius-image" />
                        </div>
                    </div>
                    <div class="col-lg-4 w3l_fresh_vegetables_grid">
                        <div class="w3l_fresh_vegetables_grid1">
                            <div class="w3l_fresh_vegetables_grid1_rel">
                                <img src="images2/vest.jpg" alt=" " height="200" width="250" />
                                <div class="w3l_fresh_vegetables_grid1_rel_pos">
                                    <div class="more m1">
                                        <a href="productpage.php"
                                           class="button--saqui button--round-l button--text-thick"
                                           data-text="Shop now">Shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w3l_fresh_vegetables_grid1_bottom">
                            <img src="images2/cloth.jpg" alt=" " height="200" width="250" />
                            <div class="w3l_fresh_vegetables_grid1_bottom_pos">
                                <h5>Special Offers</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 w3l_fresh_vegetables_grid mt-lg-0 mt-5">
                        <div class="w3l_fresh_vegetables_grid1">
                            <img src="images2/shorts.jpg" alt=" " height="200" width="250"  />
                        </div>
                        <div class="w3l_fresh_vegetables_grid1_bottom">
                            <img src="images2/necklace.jpg" alt=" " height="200" width="250" />
                        </div>
                    </div>

                </div>
                <div class="agileinfo_move_text">
                    <div class="agileinfo_marquee">
                        <h4>get <span class="blink_me">25% off</span> on first order and also get gift voucher</h4>
                    </div>
                    <div class="agileinfo_breaking_news">
                        <span> </span>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- //fresh-vegetables -->
<div style="margin: 8px auto; display: block; text-align:center;">

    <!---728x90--->


</div>

<?php include ("footer.php");?>
</body>
</html>
