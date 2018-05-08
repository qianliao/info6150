$(document).ready(function(){
    $("#totop").click(function () {
        location.href = "#top";
    });
    $("#tr").click(function () {
        $(".product-left").not(".tennis").hide();
        $(".product-left").filter(".tennis").show();
    });
    $("#tb").click(function () {
        $(".product-left").filter(".tennisball").show();
        $(".product-left").not(".tennisball").hide();
    });
    $("#br").click(function () {
        $(".product-left").filter(".badracket").show();
        $(".product-left").not(".badracket").hide();
    });
    $("#bd").click(function () {
        $(".product-left").filter(".badmin").show();
        $(".product-left").not(".badmin").hide();
    });
    $("#bas").click(function () {
        $(".product-left").filter(".basketball").show();
        $(".product-left").not(".basketball").hide();
    });
    $("#soc").click(function () {
        $(".product-left").filter(".soccer").show();
        $(".product-left").not(".soccer").hide();
    });

});
$(document).ready(function(){
    var domArr=[];
    var arr=[];
    function getDom(){
        $(".product-left").each(function( m ){
            domArr[m] = $(this);
        });
    }

    function smallToBig(){
        getDom();
        domArr.sort(function (item1,item2) {
            var n1 = item1.find(".item_price").text();
            var n2 = item2.find(".item_price").text();
            return n1-n2;
        });

    }

    function BigTosmall(){
        getDom();

        domArr.sort(function (item1,item2) {
            var n1 = item1.find(".item_price").text();
            var n2 = item2.find(".item_price").text();
            return n2-n1;
        });

    }

    $("#p1").click(function () {
        smallToBig();
        var htmls = [];
        for (var m=0; m<domArr.length; m++) {
            htmls[m] = domArr[m].html();
        }
        $(".product-left").each(function (m) {
            $(this).html(htmls[m]);
        });
    });

    $("#p2").click(function () {
        BigTosmall()
        var htmls = [];
        for (var m=0; m<domArr.length; m++) {
            htmls[m] = domArr[m].html();
        }
        $(".product-left").each(function (m) {
            $(this).html(htmls[m]);
        });
    })
});