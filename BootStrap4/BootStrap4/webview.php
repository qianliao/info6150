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
<?php

$comment=$score="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $comment = test_input($_POST["comment"]);
	$score=$_POST["score"];
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<section class="hidden-md-down" >

        <div class="feedback">
            <h2 style="text-align: center">FeedBack</h2>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <p class="comtxt">Comment：</p>
            <div class="comtxt">

                <textarea name="comment" id="comment" cols="30" rows="40" style="opacity: 0.7"></textarea>
<!--                <script>-->
<!--                    $("#comment").click(function () {-->
<!--                        $(this).css("opacity:1");-->
<!--                    })-->
<!--                </script>-->
                <div id="starttwo"  class="block clearfix" >
                <div class="star_score"></div><br>
                <p>Your Comment：<span class="score"></span> scores</p>
                <input type="hidden" name="score" />
                <div class="attitude"></div>
                </div>
                <input type="submit" name="submit" value="Submit" class="btn btn-default spebtn">
            </div>
		</form>
        </div>  
<div class="container">
    <div class="exfeed">
        <h3 style="text-align: center">See Others Comment</h3>
        <div class="row">
            <div class="col-md-12 addline">
                <p class="extxt"><i class="fa fa-address-card" aria-hidden="true"></i>Tom</p>
                 <img src="images/logo-1.png" alt=""  />
                <p><span style="font-weight: bold">5</span>Scores</p>
                    <p><i class="fa fa-comments" aria-hidden="true"></i>Comments:</p>
                    <p>This web is awesome!!!A Division of Russell Brands, LLC, Spalding is the largest basketball
                        equipment supplier in the world, and America's first baseball company. Spalding is the official basketball
                        of the National Basketball Association (NBA) and Women's National Basketball Association (WNBA), the official backboard
                        of the NBA and NCAA, the official baseball of the Little League World Series, the official volleyball of the King of the
                        Beach Volleyball Tour .</p>
                </div>

            <div class="col-md-12 addline">
                <p class="extxt"><i class="fa fa-address-card" aria-hidden="true"></i>Amy</p>
                <img src="images/logo-1.png" alt="" />
                <p><span style="font-weight: bold">4</span>Scores</p>
                <p><i class="fa fa-comments" aria-hidden="true"></i>Comments:</p>
                <p>This web is awesome!!!The NBA Slam Jam set comes complete 4"
                    rubber basketball, which arrives deflated. This ball is also designed with the look of actual
                    NBA basketballs, featuring NBA Logoman graphics.</p>
            </div>
            <div class="col-md-12 addline">
                <p class="extxt"><i class="fa fa-address-card" aria-hidden="true"></i>xxx</p>
                <img src="images/logo-1.png" alt="" />
                <p><span style="font-weight: bold"><?php echo $score;?></span>Scores</p>
                <p><i class="fa fa-comments" aria-hidden="true"></i>Comments:</p>
                <p><?php echo $comment;?></p>
            </div>
    </div>
    </div>
</div>



                <script>
                    scoreFun($("#startone"))
                    scoreFun($("#starttwo"),{
                        fen_d:22,//每一个a的宽度
                        ScoreGrade:5//a的个数5
                    });
                    //显示分数
                    $(".show_number li p").each(function(index, element) {
                        var num=$(this).attr("tip");
                        var www=num*2*16;//
                        $(this).css("width",www);
                        $(this).parent(".atar_Show").siblings("span").text(num+"scores");
                    });
                </script>

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