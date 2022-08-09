<?php
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
    <?php include ("headerfiles.php");?>
</head>
<body>
<?php
if(isset($_SESSION['USERMAIL'])){
    include ("userheader.php");
}else {
    include("header.php");
}
?>
<div class="products-breadcrumb">
    <div class="container">
        <ul>
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="index.html">Home</a><span>|</span></li>
            <li>Events</li>
        </ul>
    </div>
</div>
<div class="banner">
    <div class="w3l_banner_nav_left">
        <?php   include ("categorylinks.php");?>
    </div><div class="w3l_banner_nav_right"><div class="services">

            <h3>Services</h3>
            <div class="row w3ls_service_grids">
                <div class="col-md-5 w3ls_service_grid_left">
                    <h4>cum soluta nobis est</h4>
                    <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                        voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
                        repellat.</p>
                </div>
                <div class="col-md-7 w3ls_service_grid_right">
                    <div class="row">
                        <div class="col-md-4 w3ls_service_grid_right_1">
                            <img src="bw1.jpg" alt=" " height="130" width="200" class="radius-image" />
                        </div>
                        <div class="col-md-4 w3ls_service_grid_right_1">
                            <img src="bw2.jpg" alt=" " height="130" width="200" class="radius-image" />
                        </div>
                        <div class="col-md-4 w3ls_service_grid_right_1">
                            <img src="bw3.jpg" alt=" " class="img-fluid radius-image" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row w3ls_service_grids1 pb-5 mb-lg-5">
            <div class="col-md-6 w3ls_service_grids1_left pr-lg-5">
                <img src="images2/men.jpg" alt=" " height="350" width="450" />
            </div>
            <div class="col-md-6 w3ls_service_grids1_right">
                <ul>
                    <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>et voluptates repudiandae sint
                        et
                        molestiae</li>
                    <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>rerum necessitatibus saepe
                        eveniet
                        ut</li>
                    <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>placeat facere possimus, omnis
                        voluptas</li>
                    <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Et harum quidem rerum facilis
                        est
                        et expedita</li>
                    <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>similique sunt in culpa qui
                        officia
                        deserunt</li>
                    <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>odio dignissimos ducimus qui
                        blanditiis</li>
                </ul>
                <a href="singleproduct.php">Shop Now</a>
            </div>
        </div>
    </div>
</div>
<!-- //services -->
<div class="services-bottom">
    <div class="container">
        <div class="row pt-lg-4">
            <div class="col-md-3 col-6 about_counter_left mt-md-0 mt-4">
                <i class="fa fa-user" aria-hidden="true"></i>
                <p class="counter">89,147</p>
                <h3>Followers</h3>
            </div>
            <div class="col-md-3 col-6 about_counter_left mt-md-0 mt-4">
                <i class="fa fa-archive" aria-hidden="true"></i>
                <p class="counter">54,598</p>
                <h3>Savings</h3>
            </div>
            <div class="col-md-3 col-6 about_counter_left mt-md-0 mt-4">
                <i class="fa fa-life-ring" aria-hidden="true"></i>
                <p class="counter">83,983</p>
                <h3>Support</h3>
            </div>
            <div class="col-md-3 col-6 about_counter_left mt-md-0 mt-4">
                <i class="fa fa-bullhorn" aria-hidden="true"></i>
                <p class="counter">45,894</p>
                <h3>Popularity</h3>
            </div>
        </div>
    </div>
</div>
<div class="newsletter-top-serv-btm">
    <div class="container">
        <div class="row">
            <div class="col-md-4 wthree_news_top_serv_btm_grid">
                <div class="wthree_news_top_serv_btm_grid_icon">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                </div>
                <h3>Nam libero tempore</h3>
                <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus
                    saepe eveniet ut et voluptates repudiandae sint et.</p>
            </div>
            <div class="col-md-4 wthree_news_top_serv_btm_grid">
                <div class="wthree_news_top_serv_btm_grid_icon">
                    <i class="fa fa-bar-chart" aria-hidden="true"></i>
                </div>
                <h3>officiis debitis aut rerum</h3>
                <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus
                    saepe eveniet ut et voluptates repudiandae sint et.</p>
            </div>
            <div class="col-md-4 wthree_news_top_serv_btm_grid">
                <div class="wthree_news_top_serv_btm_grid_icon">
                    <i class="fa fa-truck" aria-hidden="true"></i>
                </div>
                <h3>eveniet ut et voluptates</h3>
                <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus
                    saepe eveniet ut et voluptates repudiandae sint et.</p>
            </div>
        </div>
    </div>
</div>
<?php include ("footer.php");?>
</body>
</html>

