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
            <li>Mail Us</li>
        </ul>
    </div>
</div>
<div class="banner">
    <div class="w3l_banner_nav_left">
        <?php   include ("categorylinks.php");?>
    </div>
    <div class="w3l_banner_nav_right">
        <div class="mail">
            <h3>Mail Us</h3>
            <div class="row agileinfo_mail_grids">
                <div class="col-md-4 agileinfo_mail_grid_left">
                    <ul>
                        <li><i class="fa fa-home" aria-hidden="true"></i></li>
                        <li>address<span>868 1st Avenue NYC.</span></li>
                    </ul>
                    <ul>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i></li>
                        <li>email<span><a href="mailto:himanshisharma0512@gmail.com">aanayaa1998gmail.com</a></span></li>
                    </ul>
                    <ul>
                        <li><i class="fa fa-phone" aria-hidden="true"></i></li>
                        <li>call to us<span>(+123) 233 2362 826</span></li>
                    </ul>
                </div>
                <div class="col-md-8 agileinfo_mail_grid_right">
                    <form action="#" method="post">
                        <div class="row mail-row-in">
                            <div class="col-md-6 wthree_contact_left_grid">
                                <input type="text" class="form-control" name="w3lName" id="w3lName" placeholder="Name" required="">
                                <input type="email" class="form-control" name="w3lSender" id="w3lSender" placeholder="Email" required="">
                            </div>
                            <div class="col-md-6 wthree_contact_left_grid">
                                <input type="text" class="form-control" name="w3lSubject" id="w3lSubject" placeholder="Subject" required="">
                                <input type="text" class="form-control" name="w3lPone" id="w3lPhone" placeholder="Phone" required="">
                            </div>
                        </div>
                        <textarea name="Message" required="" placeholder="Write your comments here"></textarea>
                        <button class="btn btn-primary btn-style" type="submit">Submit</button>
                        <button class="reset btn btn-primary btn-style" type="reset">Clear</button>


                    </form>
                </div>

            </div>
        </div>
        <!-- //mail -->
    </div>
</div>
<div class="map map-ifram">
    <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2spl!4v1562654563739!5m2!1sen!2spl"
            width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe>
</div>
        <?php include ("footer.php");?>
</body>
</html>
