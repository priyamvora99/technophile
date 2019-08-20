<?php
  session_start();
  if(!isset($_SESSION["user"])){
    header('Location:signup.php');
   

  }


 
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
     <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>

<link rel="stylesheet" href="../html1/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="search.css">
    <!-- Bootstrap CSS-->
    
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
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.css"/>
    
    




<!-- Bootstrap Date-Picker Plugin -->


    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   
  </head>
  <script type="text/javascript">
    var a=new Array();
    <?php
    include 'databaseconnection.php';
    $email=$_SESSION["user"];
    $sql="Select * from procorder where email<>'".$email."'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
      while($row=mysqli_fetch_assoc($result)){
          $date=$row["date"];
          ?>
            a.push('<?php echo $date;?>');
          
          <?php
      }
    }
?>
$(document).ready(function() {
    $('.attendanceDate').datepicker({
  
    
    startDate: '+1d',
    format: 'dd/mm/yyyy',
    datesDisabled:a,

  });
});


   
     

  </script>
  
  <body>
    <div id="all">
      <!-- Top bar-->
      <div class="top-bar">
        <div class="container">
          <div class="row d-flex align-items-center">
            <div class="col-md-4 d-md-block d-none">
              <div class="d-flex justify-content-md-left justify-content-between">
                <ul class="list-inline contact-info d-block d-md-none">
                  <li class="list-inline-item"><a href="#"><i class="fa fa-phone"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
                </ul>
                <div class="login"><a href="#" data-toggle="modal" data-target="#login-modal" class="login-btn"><i class="fa fa-sign-in"></i><span class="d-none d-md-inline-block">Sign In</span></a><a href="signup.php" class="signup-btn"><i class="fa fa-user"></i><span class="d-none d-md-inline-block">Sign Up</span></a></div>
                
              </div>
            </div>
            <div class="col-md-5">
              <?php
                if(isset($_SESSION["user"])){
                  echo "<div class='d-flex justify-content-md-end justify-content-between'>Hello, " .$_SESSION['user']."</div>";

                  }else{
                  echo "<div class='d-flex justify-content-md-end justify-content-between'>Hello user </div>";
                }
              ?>
              
            </div>
            
              <div class="col-md-2">
                <div class="d-flex justify-content-md-end justify-content-between">
                  <a href="logout.php" style="text-decoration:none;color:white;">Logout</a>
                </div>
              </div>
              <div class="col-md-1">
                <div class="d-flex justify-content-md-end justify-content-between">
                   <a href="showcart.php">
                    <i class="fa fa-shopping-cart" style="font-size:24px;color:white;">
                       <?php
                        include 'countcart.php';
                        echo "<span class='badge' style='background-color:#6394F8;border-radius:10px;font-size:12px;padding:3px 7px;'>".$count."</span>";
                      ?>
                      
                  </i>
                </a>

                </div>
              </div>
              
            
          </div>
        </div>
      </div>
      </div>
      <!-- Top bar end-->
      <!-- Login Modal-->
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
      <!-- Navbar Start-->
      <header class="nav-holder make-sticky">
        <div id="navbar" role="navigation" class="navbar navbar-expand-lg" style="position:fixed;width:100%;">
          <div class="container"><a href="homepag1.php" class="navbar-brand home"><img src="../images/technophilerentalimages/logo.jpg" alt="Universal logo" class="d-none d-md-inline-block" width="110" height="75"><img src="../images/technophilerentalimages/logo.jpg" alt="Universal logo" class="d-inline-block d-md-none" width="110" height="75"><span class="sr-only">Universal - go to homepage</span></a>
            <button type="button" data-toggle="collapse" data-target="#navigation" class="navbar-toggler btn-template-outlined"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
           
                <!-- ========== FULL WIDTH MEGAMENU END ==================-->
                <!-- ========== Contact dropdown ==================-->
               
                <!-- ========== Contact dropdown end ==================-->
              </ul>
            </div>
            
          </div>
        </div>
      </header>
      <!-- Navbar End-->
      
     
      <div id="content">
        <div class="container">
          <div class="row">
            <div id="checkout" class="col-lg-9">
              <div class="box border-bottom-0">
                <form method="post" action="orderdetails.php">
                  <ul class="nav nav-pills nav-fill">
                    <li class="nav-item"><a href="shop-checkout1.html" class="nav-link active"> <i class="fa fa-map-marker"></i><br>Address</a></li>
                    
                    <li class="nav-item"><a href="#" class="nav-link disabled"><i class="fa fa-money"></i><br>Payment Method</a></li>
                    
                  </ul>
                  <div class="content">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="form-group">

                                    <label for="name-login">Fisrt Name</label>
                                    <input id="name-login" type="text" class="form-control" name="fname" required style="width:100%">
                            </div>
                            <div class="form-group">
                                    <label for="lname-login">Last Name</label>
                                    <input id="lname-login" type="text" class="form-control" name="lname" required style="width:100%">
                            </div>
                      
                      
                            <div class="form-group">
                                  <label for="phone-login">Phone</label>
                                  <input type="number" class="form-control" name="userphone" required style="width:100%">
                            </div>
                            <div class="form-group">
                                  <label for="addres-login">Address</label>
                                  <input type="text" class="form-control" name="useraddress" required style="width:100%">
                            </div>
                        </div>
                              <div class="col-sm-3">
                                <div class="form-group">
                                  <label for="addres-login">Select date for delivery</label>
                                  <input type="text" class="form-control attendanceDate" placeholder="Select Date" name="userdate" required><br>
                                  <p>*-Products cannot be delivered on disabled dates due to other commitments</p>

                                </div>
                              </div>
                              
                    
                    </div>
                  </div>
              </div>
              

                  <div class="box-footer d-flex flex-wrap align-items-center justify-content-between" style="margin-top:70px;margin-bottom:30px;">
                    <div class="left-col"><a href="showcart.php" class="btn btn-secondary mt-0"><i class="fa fa-chevron-left"></i>Back to Cart</a></div>
                    <div class="right-col">
                          
                          
                              <button type="submit" class="btn btn-template-main">Continue to Payment Method<i class="fa fa-chevron-right"></i></button> 
                      
                    </div>
                  </div>
                </form>
              </div>
            </div>
            
      <!-- GET IT-->
     <!-- Javascript files-->
   
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
     <script type="text/javascript" src="datepick.js"></script>

     

  </body>
</html>