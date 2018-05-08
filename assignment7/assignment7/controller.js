var app=angular.module('angularApp', []);
app.controller('appController', function($scope) {
    $scope.suppliers = [
        {product:'computer',price:'800',quantity:''},
        {product:'phone',price:'599',quantity:''},
        {product:'tv',price:'2000',quantity:''},
        {product:'shoes',price:'100',quantity:''},
        {product:'outwear',price:'80',quantity:''},
        {product:'jean',price:'25',quantity:''},
        {product:'pants',price:'25',quantity:''},
        {product:'t-shirt',price:'12',quantity:''},
        {product:'sweater',price:'40',quantity:''},
        {product:'toothbrush',price:'5',quantity:''}
    ];
    $scope.sum=0;
    $scope.total=0;
    $scope.sum_discount=0;
    $scope.carts=[];
    var tax=1.0625;

    $scope.add=function (sup) {
        var flag=0;
        if($scope.carts.length==0){
            $scope.carts.push({product:sup.product,price:sup.price,quantity:sup.quantity});
        }
        else{
            for (var i=0;i<$scope.carts.length;i++){
                if(sup.product==$scope.carts[i].product){
                    $scope.carts[i].quantity=Number($scope.carts[i].quantity)+Number(sup.quantity);
                    flag=1;
                }
            }
            if(flag==0){$scope.carts.push({product:sup.product,price:sup.price,quantity:sup.quantity});}
        }
    }
    $scope.caculate=function () {

        $scope.sum=0;
        for(var i=0;i<$scope.carts.length;i++){
            $scope.sum +=tax*$scope.carts[i].price*$scope.carts[i].quantity;
        }
        return $scope.sum;

    }
    $scope.discount=function (code) {
        var num=code.match(/[0-9]+/);
        if(num<=20)
        {
            num=(100-num)/100;
            $scope.sum_discount=$scope.sum*num;
        }
        else{$scope.sum_discount="there is no this discount";}

    }
    $scope.mailaddress = "";
    $scope.shipaddress = "";

    $scope.clearNoNum = function(obj,attr){
        obj[attr] = obj[attr].replace(/[^\d]/g,"");
        obj[attr] = obj[attr].replace(/^\./g,"");
    }




});