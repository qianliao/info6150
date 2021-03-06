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


    <link href="https://fonts.googleapis.com/css?family=Comfortaa|Shadows+Into+Light" rel="stylesheet">
    <link rel="stylesheet" href="css/style 3.css" >
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


<section class="hidden-md-down" id="sportproducts">
    <h4>Cart</h4>
    <div class="container">
        <div class="row">
             <table border="1">
			    <tr>
				<td>product name</td>
				<td>price</td>
				
				</tr>
			
                <tr>
                    <td><?php echo $_SESSION["name"];?> </td>
                    <td><?php echo $_SESSION["price"];?></td>
               
                </tr>

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