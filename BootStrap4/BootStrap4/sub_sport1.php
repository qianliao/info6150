<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>FITPLUS Sports</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script src = "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
    <script type="text/javascript" src="demo/js/jquery.min.js"></script>
    <script type="text/javascript" src="lib/jquery.raty.min.js"></script>
    <script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
    <script src="commentstart.js"></script>
    <script src = "sub_sport1.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Comfortaa|Shadows+Into+Light" rel="stylesheet">
    <link rel="stylesheet" href="css/style 3.css" >
    <link rel="stylesheet" href="css/font-awesome.min.css" >
    <link rel="icon" type="image/x-icon" href="images/logo.ico" />
    <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">


</head>
<body>

<section id ="shop">
    <nav class="navbar fixed-top navbar-inverse navbar-toggleable-md">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#myContent">
                <span class="navbar-toggler-icon"></span></button>
            <a href="#" class="navbar-brand"> <img src="images/logo-1.png"></a>
            <div class="collapse navbar-collapse" id="myContent">
                <div class="navbar-nav mr-auto">
                    <a class="nav-link nav-item active" href="#"> SHOP</a>
                    <div class="dropdown">
                        <a class="nav-link nav-item dropdown-toggle" data-toggle="dropdown" href="#"> PRODUCTS</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"> FitPlus Apparels</a>
                            <a class="dropdown-item" href="equipments.html"> FitPlus Equipments</a>
                            <a class="dropdown-item" href="sport.html"> FitPlus Sports</a>
                        </div>
                    </div>
                    <a class="nav-link nav-item" href="#"> OUR TEAM</a>
                    <a class="nav-link nav-item" href="#"> CONTACT US</a>
                    <a class="nav-link nav-item active" href="webview.php"> FeedBack</a>
                </div>
                <form class="form-inline">
                    <input class="form-control mr-2" placeholder="Userid/UserName">
                    <button class="btn btn-info">SignIn</button>
                </form>
            </div>
        </div><!--Container closing -->
    </nav>
</section>


<section class="marquee">
    <marquee behavior="scroll" scrollamount="15">Let's Find More DISCOUNTS！！！！！ </marquee>
</section>


<section class="hidden-md-down" id="sportproducts">
    <div class="container">
    <div class="row">

    <div class="col-md-3 subproduct" >

        <img src="images/sports/tr1.jpg" alt="tr1" id="bigpic" class="bigpic">

    <div class="subimage">
        <img src="images/sports/tr1.jpg"  id="s1" class="s1">
        <img src="images/sports/tr12.jpg"  id="s3" class="s3">
    </div>

    </div>


        <div class="col-md-6 des">
            <p style="color: #020100"><small>Wilson</small></p>
            <h4 style="font-weight: bold">Wilson Federer Adult Strung Tennis Racket</h4>
            <div class="jiaxingxing">
                <img src="images/sports/jiaxx.png">&nbsp;&nbsp;<span class="jiafont">50 views| see Details</span>
            </div>
            <p class="subprice">37.69</p>
            <p  class="jiafont">Select Different Color:</p>
            <div class="subimage">
                <img src="images/sports/tr1.jpg"  id="red" class="s1">
                <img src="images/sports/tr1_yellow.jpg"  id="yellow" class="s1">
                <img src="images/sports/tr1_blue.jpg"  id="blue" class="s1">
                <img src="images/sports/tr1_green.jpg"  id="green" class="s1">
                <img src="images/sports/tr1_purple.jpg"  id="purple" class="s1">
            </div>
            <div class="color_dis" id="aaa">aaaa</div>
            <p class="avi1">In Stock</p>
            <!--<p class="avi2">Only 5 left</p>-->
            <b>Product Description</b>
            <ul class="text">
                <li class="text"><i class="fa fa-tag" aria-hidden="true"></i>Volcanic Frame Technology for power and stability</li>
                <li class="text"><i class="fa fa-tag" aria-hidden="true"></i>Power strings - longer main strings for explosive power</li>
                <li class="text"><i class="fa fa-tag" aria-hidden="true"></i>Stop Shock pads for improved comfort</li>
                <li class="text"><i class="fa fa-tag" aria-hidden="true"></i>Slam Jam Breakaway Rim Design</li>
                <li class="text"><i class="fa fa-tag" aria-hidden="true"></i>Easily mounts with a pre-assembled bracket and over the Door Foam Padded Bracket</li>
            </ul>
            <div class="quantity_box">
                <span class="product-qty">
                    <label for="quantity" style="color: #020100;font-weight: bold; ">Quantity:</label>
                    <input type="number"id="quantity" class="form-control pro_qty">
                </span>
            </div>

            <div class="subbtn1">
            <button type="submit" class="btn btn-default spebtn"><a href="shoppingcart.php" style="color:black">Add to Cart</a></button>

            </div>

        </div>
        <div class="col-md-3">
            <div class="best_sell">


                <div class="best_sell1" style="position: relative; width: 200px; height: 180px;">
                    <a href="sub_sport1.php"><img src="images/sports/tr13.jpg" width="200px" height="180px" alt="" id="sb1"style="opacity: 0.7"></a>
                    <span style="position: absolute;top: 50px; left: 50px; font-size: larger ;color:#ffffff" class="text">Best Sell</span>
                </div>
                <!--<img src="images/sports/tr13.jpg" alt="tr1" width="200px" height="180px" class="best_sell1"id="b1">-->

                <div class="best_sell2" style="position: relative; width: 200px; height: 250px;">
                    <img src="images/sports/best1.jpg" width="200px" height="250px" alt=""id="sb2" style="opacity: 0.7">
                    <span style="position: absolute;top: 50px; left: 50px; font-size: larger " class="text">Best Sell</span>
                </div>
                <!--<img src="images/sports/best1.jpg" alt="tr1" width="200px" height="250px" class="best_sell2" id="b2">-->

            </div>

        </div>



    </div>
    </div>


</section>


<footer>
    <div class="container con1">
        <div class="row">
            <section class="col-sm-4">
                <h3>Location</h3>
                <p> 1163 Boylston St <br>
                    Apt# 30, MA, 02115</p>
            </section>

            <section class="col-sm-3 pl-3">
                <h3 class="pl-4">Around the web</h3>
                <ul>
                    <li><i class="icon-facebook icon-2x"></i></li>
                    <li><i class="icon-twitter icon-2x"></i></li>
                    <li><i class="icon-linkedin icon-2x"></i></li>
                    <li><i class="icon-google-plus icon-2x"></i></li>
                </ul>
            </section>

            <section class="col-sm-5 pl-4">
                <h3 class="pl-4">Payment Support</h3>
                <div class="payment">
                    <ul>
                        <li><a href="#"><img src="images/png/paypal-Six_Revisions.png"></a></li>
                        <li><a href="#"><img src="images/png/visa-Six_Revisions.png"></a></li>
                        <li><a href="#"><img src="images/png/ebay-Six_Revisions.png"></a></li>
                        <li><a href="#"><img src="images/png/maestro-Six_Revisions.png"></a></li>
                    </ul>
                </div>
            </section>
        </div>
    </div>

    <div class="container">
        <div class="row pr-4">
            <div class= "col-lg-12 pr-5">
                <b> Copyright © FitPlus</b>
            </div>
        </div>
    </div>
</footer>
</body>
</html>