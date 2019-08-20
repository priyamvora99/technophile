<?php
  include 'databaseconnection.php';
  session_start();

  if(!isset($_SESSION["user"])){
    header('Location:signup.php');
  }
  header('Content-Type: text/html; charset=ISO-8859-1');
  $email=$_SESSION["user"];
  $name;
  $perday;
  $image;
  if(isset($_GET["Pid"])){
  $pid=$_GET["Pid"];

/*if(isset($_GET["test"])){
  $test=$_GET["test"];
   $table="";
  if($test=="1"){
  		$table="product_catalogue";
  }else if($test=="2"){
  	$table="speaker";
  }else if($test=="3"){
  	$table="hoveranddrone";
  }else if($test=="4"){
  	$table="playstation";
  }else if($test=="5"){
  	$table="karoke";
  }else{
  	$table="boardgames";
  }
	}*/
	 $sql1="Select * from search where Pid=".$pid;

  $result1=mysqli_query($conn,$sql1);
  if(mysqli_num_rows($result1)>0){
  	$sql="Select * from cart where Pid= ".$pid." and email='".$email."'";

  	$result=mysqli_query($conn,$sql);
  	$succ="";
  	if(mysqli_num_rows($result)>0){

  		$succ="false";
 	 }else{

  		while($row=mysqli_fetch_assoc($result1)){

  			$name=$row["Name"];

  			$perday=$row["Perday"];
  			$image=$row["Image"];
  			$quantity=$row["Quantity"];

  			$sql2="Insert into cart values('$email',$pid,1,'$name',$perday,'$image',$quantity)";
  			$result2=mysqli_query($conn,$sql2);

  		if($result2){
  			$succ="true";
  		}else{
  			echo mysqli_error($conn);
  		}
  	}

  }

  }
}










?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TechnophileRental</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link rel="stylesheet" type="text/css" href="searchbarcss.css">
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
    <link rel="apple-touch-icon" sizes="152x152" href="../html1/img/apple-touch-icon-152x152.png"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

          <link rel="stylesheet" type="text/css" href="../css/footer.css">
  </head>
  <body>
    <div id="all">
      <!-- Navbar Start-->
      <header class="nav-holder make-sticky">
        <div id="navbar" role="navigation" class="navbar navbar-expand-lg">
          <div class="container"><a href="homepage1.php" class="navbar-brand home"><img src="logo.jpg" alt="logo" class="d-none d-md-inline-block"><img src="../html1/img/logo-small.png" alt="Universal logo" class="d-inline-block d-md-none"><span class="sr-only">Universal - go to homepage</span></a>
            <button type="button" data-toggle="collapse" data-target="#navigation" class="navbar-toggler btn-template-outlined"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
            <div id="navigation" class="navbar-collapse collapse">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item dropdown active"><a href="homepage1.php">Home <b class="caret"></b></a>
                </li>
                <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Features<b class="caret"></b></a>
                  <ul class="dropdown-menu megamenu">
                    <li>
                      <div class="row">
                        <div class="col-lg-6"><img src="../html1/img/template-easy-customize.png" alt="" class="img-fluid d-none d-lg-block"></div>
                        <div class="col-lg-3 col-md-6">
                          <h5>Best Sellers</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="speaker.php" class="nav-link">Speaker</a></li>
                            <li class="nav-item"><a href="hoverboard.php" class="nav-link">Hoverboards and Drones</a></li>
                            <li class="nav-item"><a href="playstation.php" class="nav-link">PlayStation</a></li>
                            <li class="nav-item"><a href="karoke.php" class="nav-link">karoke</a></li>
                            <li class="nav-item"><a href="karoke.php" class="nav-link">Remote control</a></li>
                            <li class="nav-item"><a href="board.php" class="nav-link">Board Games</a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Shop <b class="caret"></b></a>
                  <ul class="dropdown-menu megamenu">
                    <li>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="showcart.php" class="nav-link">Cart</a></li>
                            <li class="nav-item"><a href="speacialdeals.php" class="nav-link">Speacial Deals</a></li>
                          </ul>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" class="dropdown-toggle">
                      <?php
                                if(isset($_SESSION["user"])){
                                  echo "<div class='d-flex justify-content-md-end justify-content-between'>Hello, " .$_SESSION['user']."</div>";

                                  }else{
                                  echo "<div class='d-flex justify-content-md-end justify-content-between'>Login </div>";
                                }
                              ?>
      <b class="caret"></b></a>
                  <ul class="dropdown-menu megamenu">
                    <li>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="Profile.php" class="nav-link">Profile</a></li>
                            <li class="nav-item"><a href="showcart.php" class="nav-link">Your Cart
                                                <i class="fa fa-shopping-cart" style="font-size:24px;color:white;">
                                                   <?php
                                                    include 'countcart.php';
                                                    echo "<span class='badge' style='background-color:#6394F8;border-radius:10px;font-size:12px;padding:3px 7px;'>".$count."</span>";
                                                  ?>

                                              </i></a>
                                            </li>
                            <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
                          </ul>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Register <b class="caret"></b></a>
                  <ul class="dropdown-menu megamenu">
                    <li>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="signup.php" class="nav-link">Sign Up</a></li>
                            <li class="nav-item"><a href="signup.php" class="nav-link">Sign In</a></li>
                          </ul>
                    </li>
                  </ul>
                </li>
                <!-- ========== Contact dropdown ==================-->
                <li class="nav-item dropdown"><a href="contactus.php" data-toggle="dropdown" class="dropdown-toggle">Contact Us <b class="caret"></b></a>
                </li>
                <!-- ========== Contact dropdown end ==================-->
              </ul>

            </div>

<!--Navbar Ends-->

      <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modalLabel" aria-hidden="true" class="modal fade">
        <div role="document" class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 id="login-modalLabel" class="modal-title">Customer Login</h4>
              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
              <form action="log.php" method="post">
                <div class="form-group">
                  <input id="email_modal" type="text" placeholder="email" class="form-control" name="useremail">
                </div>
                <div class="form-group">
                  <input id="password_modal" type="password" placeholder="password" class="form-control" name="userpassword">
                </div>
                <p class="text-center">
                  <button class="btn btn-template-outlined"><i class="fa fa-sign-in"></i> Log in</button>
                </p>
              </form>
              <p class="text-center text-muted">Not registered yet?</p>
              <p class="text-center text-muted"><a href="signup.php"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Login modal end-->

      <header class="nav-holder make-sticky">
        <div id="navbar" role="navigation" class="navbar navbar-expand-lg" style="position:fixed;width:100%";>
          <div class="container"><a href="homepage1.php" class="navbar-brand home"><img src="logo.jpg" class="d-none d-md-inline-block" width="110" height="75"><img src="logo.jpg" class="d-inline-block d-md-none" width="110" height="75"></a>
            <button type="button" data-toggle="collapse" data-target="#navigation" class="navbar-toggler btn-template-outlined"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>

                <!-- ========== Contact dropdown end ==================-->
              </ul>
            </div>
            <div id="search" class="collapse clearfix">
              <form role="search" class="navbar-form">
                <div class="input-group">
                  <input type="text" placeholder="Search" class="form-control"><span class="input-group-btn">
                    <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button></span>
                </div>
              </form>
            </div>
          </div>
        </div>
      </header>

  <!--Cart starts-->
      <div id="content">
        <div class="container">
          <div class="row bar">
            <div class="col-lg-25">
            	 <?php
            		echo "<p class='text-muted lead'>You currently have ".$count." item(s) in your cart.</p>";
            	?>

            </div>
            <div id="basket" class="col-lg-9">
              <div class="box mt-0 pb-0 no-horizontal-padding">
                <form method="post" action="shop-checkout1.php">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th colspan="2">Product</th>
                          <th>Quantity</th>
                          <th>Daily Rental price</th>
                          <th>Discount</th>
                          <th colspan="2">Total</th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php
                        	include 'databaseconnection.php';
                        	$total;
                        	$bill=0;


                        		$sql="Select * from cart where email='".$email."'";
                        		$result=mysqli_query($conn,$sql);
                        		if(mysqli_num_rows($result)>0){
                        			while($row=mysqli_fetch_assoc($result)){

                        				$total=$row["Quantity"]*$row["Perday"];
                        				echo "<tr>
                        						<td colspan='2'>
                        							<a href='#'>
                        								<img src='".$row["Image"]."' alt='Cannot display image' class='img-fluid>
                        								<a href='#'>".$row["Name"]."</a>
                        							</a>
                        						</td>

                          						<td>
                          						<div class='row'>
                          							<div class='col-lg-4'>
                          									<a href='subquantity.php?Pid=".$row['Pid']."'><i class='fa fa-minus-circle'></i></a>
                          								</div>
                          								<div class='col-lg-4'>
                          								".$row["Quantity"]."
                          								</div>
                          								<div class='col-lg-4'>
                          									<a href='addquantity.php?Pid=".$row['Pid']."'><i class='fa fa-plus-circle'></i></a>

                          								</div>

                          						</div>
                          						</td>
                          						<td><b><i class='fa fa-rupee'>".$row["Perday"]."</b></i></td>
                          						<td><i class='fa fa-rupee'>0.00</i></td>
                          						<td><b><i class='fa fa-rupee'>".$total."</b></i></td>
                          						<td>
                          							<a href='deletefromcart.php?Pid=".$row['Pid']."'>
                          								<i class='fa fa-trash-o'></i>
                          							</a>
                          						</td>
                          					</tr>";
                          					$bill+=$total;
                        			}
                        		}

                        ?>




                      </tbody>
                      <tfoot>
                        <tr>
                          <th colspan="5">Total</th>
                          <?php
                          	echo "<th colspan='2'><i class='fa fa-rupee'>".$bill."<i></th>";
                          ?>

                        </tr>
                      </tfoot>
                    </table>
                  </div>
                  <div class="box-footer d-flex justify-content-between align-items-center">
                    <div class="left-col">
                      <a href="homepage1.php" class="btn btn-secondary mt-0"><i class="fa fa-chevron-left"></i> Continue shopping</a>
                    </div>
                    <div class="right-col">
                      <button type="submit" class="btn btn-template-outlined">Proceed to checkout <i class="fa fa-chevron-right"></i></button>
                    </div>
                  </div>
                </form>
              </div>

            </div>
            <div class="col-lg-3">
            	<?php
            	if(isset($succ)){
            		if($succ=="true"){
            			echo "<span class='alert alert-success'>Product added</span>";
            		}else{
            			echo "<span class='alert alert-warning'>Product already added</span>";
            		}
            	}
            	?>
            </div>

          </div>
        </div>
</div>
        <!-- FOOTER -->
        <!-- Site footer -->
          <footer class="site-footer">

            <div class="container">
              <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                  <p class="copyright-text">Developed with
               <a href="#"><i class="fa fa-heart"> by Technophile</i></a>.
                  </p>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                  <ul class="social-icons">
                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
      </footer>
        <!-- FOOTER -->

      </div>

<script src="../html1/vendor/jquery/jquery.min.js"></script>
    <script src="../html1/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="../html1/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../html1/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="../html1/vendor/waypoints/lib/jquery.waypoints.min.js"> </script>
    <script src="../html1/vendor/jquery.counterup/jquery.counterup.min.js"> </script>
    <script src="../html1/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="../html1/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
    <script src="../html1/js/jquery.parallax-1.1.3.js"></script>
    <script src="../html1/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="../html1/vendor/jquery.scrollto/jquery.scrollTo.min.js"></script>
    <script src="../html1/js/front.js"></script>
  </body>
</html>
