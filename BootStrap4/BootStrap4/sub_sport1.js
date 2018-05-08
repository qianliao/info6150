
$(document).ready(function(){



        $("#s1").mouseover(function(){
            $("#bigpic").attr('src',$("#s1")[0].src);
        });
        $("#s3").mouseover(function(){
            $("#bigpic").attr('src',$("#s3")[0].src);
        });

    $("#red").on({
        click:function () {
            $("#bigpic").attr('src',$("#red")[0].src);
            $("#s1").show();
            $("#s3").show();
        },
        mouseover:function () {
            $(".color_dis").css({"display":"block",
                                    "background-color":"#8c2830",
                                    "color":"#8c2830",

            });
            $("#s1").show();
            $("#s3").show();

        },
        mouseleave:function () {
            $(".color_dis").css({
                "display": "none"

            });
            $("#s1").show();
            $("#s3").show();
        }

    });

    $("#yellow").on({
        click:function(){
        $("#bigpic").attr('src',$("#yellow")[0].src);
        $("#s1").hide();
        $("#s3").hide();
        },
        mouseover:function () {
            $(".color_dis").css({"display":"block",
                "background-color":"yellow",
                "color":"yellow",
            });
            $("#s1").hide();
            $("#s3").hide();

        },
        mouseleave:function () {
            $(".color_dis").css({
                "display": "none"

            });
            $("#s1").hide();
            $("#s3").hide();
        }

    });
    $("#blue").click(function(){
        $("#bigpic").attr('src',$("#blue")[0].src);
        $("#s1").hide();
        $("#s3").hide();
    });
    $("#green").click(function(){
        $("#bigpic").attr('src',$("#green")[0].src);
        $("#s1").hide();
        $("#s3").hide();
    });
    $("#purple").click(function(){
        $("#bigpic").attr('src',$("#purple")[0].src);
        $("#s1").hide();
        $("#s3").hide();
    });




})