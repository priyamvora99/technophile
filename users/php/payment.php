<?php
	session_start();
	$totamount=$_SESSION["amount"];
	
?>


<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TechnophileRental:Spend less,enjoy more</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link rel="stylesheet" type="text/css" href="search.css">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="../html1/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="../html1/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <!-- Bootstrap Select-->
    <link rel="stylesheet" href="../html1/vendor/bootstrap-select/css/bootstrap-select.min.css">
    <!-- owl carousel-->
    <link rel="stylesheet" href="../html1/vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="../html1/vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="../html1/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="../html1/css/custom.css">
    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="../html1/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="../html1/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="../html1/img/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../html1/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../html1/img/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../html1/img/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../html1/img/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../html1/img/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../html1/img/apple-touch-icon-152x152.png">
</head>

<body>
 
	<form action="https://digipaym.000webhostapp.com/LoginPage.php" method="POST">

<!-- Amount: -->
<input type="hidden" name="a<div class="top-bar">
        
      

<!-- Merchant Username: -->
<input type="hidden" name="merchant" value="djscemerchant@gmail.com"> <br>

<!-- Merchant AccNo: -->
<input type="hidden" name="acc_no" value="1224671901923455  "> <br>


	 <div id="content">
        <div class="container">
          <div class="row">
            <div id="checkout" class="col-lg-10">
              <div class="box">
                <form method="post" action="shop-checkout4.html">
                  <ul class="nav nav-pills nav-fill">
                    <li class="nav-item"><a href="#" class="nav-link disabled"> <i class="fa fa-map-marker"></i><br>Address</a></li>
                    <li class="nav-item"><a href="shop-checkout3.html" class="nav-link active"><i class="fa fa-money"></i><br>Payment Method</a></li>
                  </ul>
                  <div class="row">
                  	<div class="col-lg-2"></div>
                  	<div class="col-lg-8">
                  		<div id="order-summary" class="box mb-4 p-0">
                <div class="box-header mt-0">
                  <h3>Order summary</h3>
                </div>
                <p class="text-muted text-small">Shipping and additional costs are calculated based on the values you have entered.</p>
                <div class="table-responsive">
                  <?php

                    echo "<table class='table'>
                    <tbody>
                      <tr>
                        <td>Order subtotal</td>
                        <th><i class='fa fa-rupee'><b>".$totamount."</b></th></i>
                      </tr>
                      <tr>
                        <td>No Shipping and handling</td>
                        <th>";
                          if($totamount<500){
                            $shipping=50;
                            $totamount=$totamount+$shipping;
                            echo "<i class='fa fa-rupee'><b>".$shipping."</b></th>";
                          }else{
                        echo"<i class='fa fa-rupee'><b>0.00</b></th>";
                      }echo "
                      </tr>
                      
                      <tr class='total'>
                        <td>Total</td>
                        <th><i class='fa fa-rupee'><b>".$totamount."</b></i></th>
                      </tr>
                    </tbody>
                  </table>";

                  ?>
                  
                </div>
              </div>

                  	</div>
                  	<div class="col-lg-2"></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-9">
                  <div class="box-footer d-flex flex-wrap align-items-center justify-content-between">
                    <div class="right-col">
                      <button type="submit" class="btn btn-template-main" style="margin-left:25px;margin-right:10px;width:160%">Proceed to DigiPay<i class="fa fa-chevron-right" ></i></button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-1"></div>
                </div>
                </form>
              </div>
            </div>
            <!-- <div class="col-lg-2">

            </div> -->
            
</div>

          </div>
        </div>
      
	



</form>

</body>
</html>


