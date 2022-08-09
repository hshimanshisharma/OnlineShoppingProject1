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
    </div><div class="w3l_banner_nav_right">
        <!-- events -->
        <div class="events">
            <div class="container">
                <h3>Events</h3>
                <div class="row w3agile_event_grids mt-5 pt-lg-3">
                    <div class="col-md-6 w3agile_event_grid">
                        <div class="row pro-grids-inn">
                            <div class="col-md-3 w3agile_event_grid_left">
                                <i class="fa fa-bullhorn" aria-hidden="true"></i>
                            </div>
                            <div class="col-md-9 w3agile_event_grid_right">
                                <h4>cum soluta nobis eligendi</h4>
                                <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                                    voluptatibus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 w3agile_event_grid pl-lg-5">
                        <div class="row pro-grids-inn">
                            <div class="col-md-3 w3agile_event_grid_left">
                                <i class="fa fa-bullseye" aria-hidden="true"></i>
                            </div>
                            <div class="col-md-9 w3agile_event_grid_right">
                                <h4>rerum hic tenetur a sapiente</h4>
                                <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                                    voluptatibus.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row w3agile_event_grids">
                    <div class="col-md-6 w3agile_event_grid">
                        <div class="row pro-grids-inn">
                            <div class="col-md-3 w3agile_event_grid_left">
                                <i class="fa fa-credit-card" aria-hidden="true"></i>
                            </div>
                            <div class="col-md-9 w3agile_event_grid_right">
                                <h4>earum rerum tenetur sapiente</h4>
                                <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                                    voluptatibus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 w3agile_event_grid pl-lg-5">
                        <div class="row pro-grids-inn">
                            <div class="col-md-3 w3agile_event_grid_left">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </div>
                            <div class="col-md-9 w3agile_event_grid_right">
                                <h4>quibu aut officiis debitis</h4>
                                <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                                    voluptatibus.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row w3agile_event_grids">

                    <div class="col-md-6 w3agile_event_grid">
                        <div class="row pro-grids-inn">
                            <div class="col-md-3 w3agile_event_grid_left">
                                <i class="fa fa-cog" aria-hidden="true"></i>
                            </div>
                            <div class="col-md-9 w3agile_event_grid_right">
                                <h4>necessitatibus saepe eveniet</h4>
                                <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                                    voluptatibus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 w3agile_event_grid pl-lg-5">
                        <div class="row pro-grids-inn">
                            <div class="col-md-3 w3agile_event_grid_left">
                                <i class="fa fa-trophy" aria-hidden="true"></i>
                            </div>
                            <div class="col-md-9 w3agile_event_grid_right">
                                <h4>repudiandae sint et molestiae</h4>
                                <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                                    voluptatibus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row events-bottom">
                <div class="col-md-6 events_bottom_left">
                    <div class="row pro-grids-inn">
                        <div class="col-md-4 events_bottom_left1">
                            <div class="events_bottom_left1_grid">
                                <h4>20</h4>
                                <p>July, 2021</p>
                            </div>
                        </div>
                        <div class="col-md-8 events_bottom_left2">
                            <img src="images2/event.jpg" alt=" " class="img-fluid" />
                            <h4>ut aut reiciendis facere possimus</h4>
                            <ul>
                                <li><i class="fa fa-clock-o" aria-hidden="true"></i>3:00 PM</li>
                                <li><i class="fa fa-user" aria-hidden="true"></i><a href="#">Admin</a></li>
                            </ul>
                            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                                impedit quo minus id quod maxime placeat facere possimus, omnis voluptas
                                assumenda est.</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 events_bottom_left">
                    <div class="row pro-grids-inn">
                        <div class="col-md-4 events_bottom_left1">
                            <div class="events_bottom_left1_grid">
                                <h4>21</h4>
                                <p>July, 2021</p>
                            </div>
                        </div>
                        <div class="col-md-8 events_bottom_left2">
                            <img src="images2/event2.jpg" alt=" " height="310" width="320" />
                            <h4>maxime placeat facere possimus</h4>
                            <ul>
                                <li><i class="fa fa-clock-o" aria-hidden="true"></i>3:30 PM</li>
                                <li><i class="fa fa-user" aria-hidden="true"></i><a href="#">Admin</a></li>
                            </ul>
                            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                                impedit quo minus id quod maxime placeat facere possimus, omnis voluptas
                                assumenda est.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //events -->
    </div>
</div>
<?php include ("footer.php");?>
</body>
</html>
