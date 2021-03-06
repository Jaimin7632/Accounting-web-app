<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Material Dashboard by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons" rel='stylesheet'>
      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
   <style type="text/css">
       .mblock{
        height: auto; padding: 20px 0; background: linear-gradient(60deg, #ab47bc, #8e24aa); width: 100%;
        line-height: 100px; color: #fff;
       }
          .logo  img{
            width: 200px;
        }
   </style>
   
</head>

<body  ng-app="myApp" ng-controller="customersCtrl">
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                   <img src="assets/img/sutc.png">
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li >
                        <a href="index.php">
                            <i class="material-icons">trending_up</i>
                            <p>Sell / Invoice</p>
                        </a>
                    </li>
                    <li>
                        <a href="./purchase.php">
                            <i class="material-icons">playlist_add</i>
                            <p>Purchase</p>
                        </a>
                    </li>
                    <li>
                        <a href="./payment.php">
                            <i class="material-icons">swap_horizontal_circle</i>
                            <p>Payment / receipt</p>
                        </a>
                    </li>
                    <li>
                        <a href="./paymentreport.php">
                            <i class="material-icons">account_balance_wallet</i>
                            <p>Payment Report</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="./stock.php">
                            <i class="material-icons">line_style</i>
                            <p>Stock Report</p>
                        </a>
                    </li>
                    <li>
                        <a href="./aaddetails.php">
                            <i class="material-icons">bubble_chart</i>
                            <p>Add details</p>
                        </a>
                    </li>
                   <li >
                        <a href="./deleteinfo.php">
                            <i class="material-icons">restore_from_trash</i>
                            <p>Delete Details</p>
                        </a>
                    </li>
                    <li class="active-pro">
                        <a href="http://www.blackqr.com">
                            
                            <p><center>BLACKQR</center></p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#" >Stock Report{{qua.sell}} </a>
                    </div>
                    
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="card">
                            <div class="card-header"  data-background-color="purple">
                                <div class="row">
                                    <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <select class="form-control" id="product" ng-model="productname" ng-change="myfun()"  style="background: #f5f5f5; transform: translateY(-10%); ">
                                                        <option value="">Select Product</option>
                                                        <?php
                                                        include "php/connection.php";
                                                        $ww=$conn->query("SELECT * from product_detail");
                                                        while($w=mysqli_fetch_assoc($ww)){
                                                            echo '<option value="'.$w['name'].'">'.$w['name'].'</option>';
                                                        } 
                                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-3"></div>
                                </div>
                            </div>
                            <div class="card-content" >
                                
                                <hr>
                                <h4>Filters</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                         <select class="form-control" id="partyname" ng-model="pname" ng-change="myfun()">
                                                        <option value="">Party Name</option>
                                                        <?php
                                                             $res= $conn->query("SELECT * from party_detail");
                                                            while($r=mysqli_fetch_assoc($res)){
                                                            echo '<option value="'.$r['name'].'">'.$r['name'].'</option>';
                                                                }
                                                        ?>
                                                       
                                         </select>
                                    </div>
                                </div>
                                
                                <hr>
                                <div class="row" >
                                    <div class="col-md-1" >
                                         From :
                                    </div>
                                    <div class="col-md-2" >
                                         <input type="date" value="" class="" id="date1" ng-model="date1" ng-change="myfun()" >
                                    </div>
                                    <div class="col-md-1">
                                         To :
                                    </div>
                                    <div class="col-md-2" >
                                         <input type="date" value="" class="" id="date2" ng-model="date2" ng-change="myfun()">
                                    </div>
                                </div>
                                <hr>
                                

                                <div class="row">
                                    <center>
                                    <div class="col-md-4" >
                                        <div class="mblock"><h4>PURCHASE<b> : {{qua.purchase}}</b></h4></div>
                                    </div>
                                    <div class="col-md-4" >
                                        <div class="mblock"><h4>SELL<b> : {{qua.sell}}</b></h4></div>
                                    </div>
                                    <div class="col-md-4" >
                                        <div class="mblock"><h4>OVERALL<b> : {{qua.purchase-qua.sell}}</b></h4></div>
                                    </div>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid" >

                    <div class="row"  >
                            <div class="card" >
                                <div class="card-header" style="background: #5cb860;" >
                                    <h4 class="title">Sell Details</h4>
                                    <p class="category"></p>
                                </div>
                                <div class="card-content table-responsive" style="height:  250px; overflow-y: scroll;">
                                    <table class="table" >
                                        <thead class="text-primary">
                                            <th>No</th>
                                            <th>Date</th>
                                            <th>Party name</th>
                                            <th>Quantity</th>
                                            <th>Rate</th>
                                            <th>Amount</th>
                                            <th>SGST</th>
                                            <th>CGST</th>
                                            <th>IGST</th>
                                            <th>Total Amount</th>
                                            
                                        </thead>
                                        <tbody>
                                            <tr  ng-repeat="x in names">
                                                <td>{{$index + 1}}</td>
                                                <td >{{x.date}}</td>
                                                <td>{{x.partyname}}</td>
                                                <td class="text-primary">{{x.quantity}}</td>
                                                <td>{{x.rate}}</td>
                                                <td class="text-primary">{{x.amount}}</td>
                                                <td>{{x.sgst}}</td>
                                                <td>{{x.cgst}}</td>
                                                <td>{{x.igst}}</td>
                                                <td class="text-primary">{{x.totalamount}}</td>
                                            </tr>
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                      
                      
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="card">
                                <div class="card-header" style="background: #5cb860;" >
                                    <h4 class="title">Purchase Details</h4>
                                    <p class="category"></p>
                                </div>
                                <div class="card-content table-responsive" style="height:  250px; overflow-y: scroll;">
                                    <table class="table" >
                                        <thead class="text-primary">
                                            <th>No</th>
                                            <th>Date</th>
                                            <th>Party name</th>
                                            <th>Quantity</th>
                                            <th>Rate</th>
                                            <th>Amount</th>
                                            <th>SGST</th>
                                            <th>CGST</th>
                                            <th>IGST</th>
                                            <th>Total Amount</th>
                                            
                                        </thead>
                                        <tbody>
                                            <tr  ng-repeat="x in purch">
                                                <td>{{$index + 1}}</td>
                                                <td >{{x.date}}</td>
                                                <td>{{x.partyname}}</td>
                                                <td class="text-primary">{{x.quantity}}</td>
                                                <td>{{x.rate}}</td>
                                                <td class="text-primary">{{x.amount}}</td>
                                                <td>{{x.sgst}}</td>
                                                <td>{{x.cgst}}</td>
                                                <td>{{x.igst}}</td>
                                                <td class="text-primary">{{x.totalamount}}</td>
                                            </tr>
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
            
            </div>
            <footer class="footer">
                <div class="container-fluid" >
                 
                    <p class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="http://www.creative-tim.com">BlackQR</a>, the digital product agency
                    </p>
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>
<!--  Dynamic Elements plugin -->
<script src="assets/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="assets/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>
<!--  Google Maps Plugin    -->
<!-- Material Dashboard javascript methods -->
<script src="assets/js/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>
<script type="text/javascript">
    function showNoti(a,b){
         $.notify({
            icon: "notifications",
            message: b

        }, {
            type: a,
            timer: 1000,
            placement: {
                from: "top",
                align: "center"
            }
        });
}
var app = angular.module('myApp', []);
app.controller('customersCtrl', function($scope, $http) {


$scope.myfun = function(){
    //alert($('#partyname').val());
    if($scope.productname !=""){
        $http({
        method: "post",
        url: "php/getstockreport.php",
        data: {
            pname:  $('#partyname').val(),
            date1:  $('#date1').val(),
            date2:  $('#date2').val(),
            product: $scope.productname
        },
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
    }).then(function(response) {
        $scope.names = response.data.sell;
        $scope.purch = response.data.purchase;
        $scope.qua = response.data.qua;
     });
    
    }else{
         $('#partyname').val("");
          $('#date1').val("");
           $('#date2').val("");
    }

};

   

});
</script>

</html>