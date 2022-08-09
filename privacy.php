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
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Home</a><span>|</span></li>
            <li>Events</li>
        </ul>
    </div>
</div>
<div class="banner">
    <div class="w3l_banner_nav_left">
        <?php   include ("categorylinks.php");?>
    </div><div class="w3l_banner_nav_right"><div class="services">
            <div class="privacy">
                <div class="privacy1">
                    <h3>Privacy Policy</h3>
                    <div class="banner-bottom-grid1 privacy1-grid">
                        <ul>
                            <li><i class="fa fa-user" aria-hidden="true"></i></li>
                            <li>Profile <span>Excepteur sint occaecat cupidatat non proident, sunt in
							culpa qui officia deserunt mollit anim id est laborum.</span></li>
                        </ul>
                        <ul>
                            <li><i class="fa fa-search" aria-hidden="true"></i></li>
                            <li>Search <span>Excepteur sint occaecat cupidatat non proident, sunt in
							culpa qui officia deserunt mollit anim id est laborum.</span></li>
                        </ul>
                        <ul>
                            <li><i class="fa fa-paste" aria-hidden="true"></i></li>
                            <li>News Feed <span>Excepteur sint occaecat cupidatat non proident, sunt in
							culpa qui officia deserunt mollit anim id est laborum.</span></li>
                        </ul>
                        <ul>
                            <li><i class="fa fa-qrcode" aria-hidden="true"></i></li>
                            <li>Applications <span>Excepteur sint occaecat cupidatat non proident, sunt in
							culpa qui officia deserunt mollit anim id est laborum.</span></li>
                        </ul>
                    </div>
                </div>
                <div class="privacy1">
                    <h3>Terms of Use</h3>
                    <div class="banner-bottom-grid1 privacy2-grid">
                        <div class="privacy2-grid1">
                            <h4>deserunt mollit anim id est laborum?</h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                            <div class="privacy2-grid1-sub">
                                <h5>1. sint occaecat cupidatat non proident, sunt</h5>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in
                                    culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                            <div class="privacy2-grid1-sub">
                                <h5>2.perspiciatis unde omnis iste natus error</h5>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in
                                    culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                            <div class="privacy2-grid1-sub">
                                <h5>3. natus error sit voluptatem accusant</h5>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in
                                    culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                            <div class="privacy2-grid1-sub">
                                <h5>4. occaecat cupidatat non proident, sunt in</h5>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in
                                    culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                            <div class="privacy2-grid1-sub">
                                <h5>5. deserunt mollit anim id est laborum</h5>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in
                                    culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include ("footer.php");?>
</body>
</html>