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
}?>
<div class="products-breadcrumb">
    <div class="container">
        <ul>
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Home</a><span>|</span></li>
            <li>About Us</li>
        </ul>
    </div>
</div>
<!-- //products-breadcrumb -->
<!-- banner -->
<div class="banner">
    <div class="w3l_banner_nav_left">
        <?php   include ("categorylinks.php");?>
    </div>
    <div class="w3l_banner_nav_right">
        <!-- about -->
        <div class="privacy about">
            <h3>About Us</h3>
            <p class="animi">Corner Store is guided by four principles: customer obsession rather
                than competitor focus, passion for invention, commitment to operational excellence, and long-term thinking.
                Corner store strives to be Earth’s most customer-centric company, Earth’s best employer, and Earth’s safest place to work.
                Customer reviews, 1-Click shopping, personalized recommendations, Prime, Fulfillment by Corner store, AWS, Kindle Direct Publishing,
                Kindle, Career Choice, Fire tablets, Fire TV, Amazon Echo, Alexa, Just Walk Out technology, Amazon Studios,
                and The Climate Pledge are some of the things pioneered by Corner store.</p>
            <div class="row agile_about_grids">
                <div class="col-md-6 agile_about_grid_right">
                    <img src="images/31.jpg" alt=" " class="img-fluid radius-image" />
                </div>
                <div class="col-md-6 agile_about_grid_left">
                    <ol>
                        <li>laborum et dolorum fuga</li>
                        <li>corrupti quos dolores et quas</li>
                        <li>est et expedita distinctio</li>
                        <li>deleniti atque corrupti quos</li>
                        <li>excepturi sint occaecati cupiditate</li>
                        <li>accusamus et iusto odio</li>
                    </ol>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- //about -->
    </div>

    <div class="clearfix"></div>
</div>
<!-- //banner -->
<!-- team -->
<div class="team">
    <div class="container">
        <h3>Meet Our Amazing Team</h3>
        <div class="row agileits_team_grids">
            <div class="col-md-3 agileits_team_grid">
                <img src="images/32.jpg" alt=" " class="img-fluid radius-image" />
                <h4>Martin Paul</h4>
                <p>Manager</p>
                <ul class="agileits_social_icons agileits_social_icons_team">
                    <li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="col-md-3 agileits_team_grid">
                <img src="images/33.jpg" alt=" " class="img-fluid radius-image" />
                <h4>Michael Rick</h4>
                <p>Supervisor</p>
                <ul class="agileits_social_icons agileits_social_icons_team">
                    <li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="col-md-3 agileits_team_grid">
                <img src="images/34.jpg" alt=" " class="img-fluid radius-image" />
                <h4>Thomas Carl</h4>
                <p>Supervisor</p>
                <ul class="agileits_social_icons agileits_social_icons_team">
                    <li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="col-md-3 agileits_team_grid">
                <img src="images/35.jpg" alt=" " class="img-fluid radius-image" />
                <h4>Laura Lee</h4>
                <p>CEO</p>
                <ul class="agileits_social_icons agileits_social_icons_team">
                    <li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //team -->
<!-- testimonials -->
<div class="testimonials">
    <div class="container">
        <h3>Testimonials</h3>
        <div class="w3_testimonials_grids">
            <div class="wmuSlider example1 animated wow slideInUp" data-wow-delay=".5s">
                <div class="wmuSliderWrapper">
                    <article style="position: absolute; width: 100%; opacity: 0;">
                        <div class="row banner-wrap">
                            <div class="col-md-6 w3_testimonials_grid">
                                <p><i class="fa fa-quote-right" aria-hidden="true"></i>Itaque earum rerum hic
                                    tenetur a sapiente delectus, ut aut reiciendis
                                    voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
                                    repellat.</p>
                                <h4>Andrew Smith <span>Customer</span></h4>
                            </div>
                            <div class="col-md-6 w3_testimonials_grid">
                                <p><i class="fa fa-quote-right" aria-hidden="true"></i>Itaque earum rerum hic
                                    tenetur a sapiente delectus, ut aut reiciendis
                                    voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
                                    repellat.</p>
                                <h4>Thomson Richard <span>Customer</span></h4>
                            </div>

                        </div>
                    </article>
                    <article style="position: absolute; width: 100%; opacity: 0;">
                        <div class="row banner-wrap">
                            <div class="col-md-6 w3_testimonials_grid">
                                <p><i class="fa fa-quote-right" aria-hidden="true"></i>Itaque earum rerum hic
                                    tenetur a sapiente delectus, ut aut reiciendis
                                    voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
                                    repellat.</p>
                                <h4>Crisp Kale <span>Customer</span></h4>
                            </div>
                            <div class="col-md-6 w3_testimonials_grid">
                                <p><i class="fa fa-quote-right" aria-hidden="true"></i>Itaque earum rerum hic
                                    tenetur a sapiente delectus, ut aut reiciendis
                                    voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
                                    repellat.</p>
                                <h4>John Paul <span>Customer</span></h4>
                            </div>

                        </div>
                    </article>
                    <article style="position: absolute; width: 100%; opacity: 0;">
                        <div class="row banner-wrap">
                            <div class="col-md-6 w3_testimonials_grid">
                                <p><i class="fa fa-quote-right" aria-hidden="true"></i>Itaque earum rerum hic
                                    tenetur a sapiente delectus, ut aut reiciendis
                                    voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
                                    repellat.</p>
                                <h4>Rosy Carl <span>Customer</span></h4>
                            </div>
                            <div class="col-md-6 w3_testimonials_grid">
                                <p><i class="fa fa-quote-right" aria-hidden="true"></i>Itaque earum rerum hic
                                    tenetur a sapiente delectus, ut aut reiciendis
                                    voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
                                    repellat.</p>
                                <h4>Rockson Doe <span>Customer</span></h4>
                            </div>

                        </div>
                    </article>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- //testimonials -->

<?php include ("footer.php");?>
</body>
</html>