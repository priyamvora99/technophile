<?php
  
  session_start();
  if(!isset($_SESSION["user"])){
    header('Location:signup.php');
  }
  header('Content-Type: text/html; charset=ISO-8859-1');
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
  </head>
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
        <div id="navbar" role="navigation" class="navbar navbar-expand-lg" style="position:fixed;width:100%";>
          <div class="container"><a href="homepag1.php" class="navbar-brand home"><a href="homepag1.php" class="navbar-brand home"><img src="../images/technophilerentalimages/logo.jpg" class="d-none d-md-inline-block" width="110" height="75" style="left:30px;float:left;position:fixed;"><img src="../images/technophilerentalimages/logo.jpg" class="d-inline-block d-md-none" width="110" height="75" style="left:30px;float:left;position:fixed;"></a>
            <button type="button" data-toggle="collapse" data-target="#navigation" class="navbar-toggler btn-template-outlined"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
        
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
      <!-- Navbar End-->
<!--       <div class="topnav">
        <form action="search1.php" method="GET">
        <input type="text" placeholder="Search.." name="search"><br>
        <input type="submit" name="submit">

        </form>
      </div>
    -->
      <div id="content">
        <div class="container">
          <div class="row bar">
      <?php
        include 'databaseconnection.php';
                      $pid=$_GET["Pid"];
                      
            $sql="Select * from description where pid=".$pid."";
            
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
              while($row=mysqli_fetch_assoc($result)){
                echo "<div class='col-lg-9' style='margin-top:30px;'><b><p class='lead'>".$row["description"]."</b></p></div>";
              }
            }

      ?>
            <!-- LEFT COLUMN _________________________________________________________-->
            <div class="col-lg-9">
              
              <p class="goToDescription"><a href="#details" class="scroll-to text-uppercase">Scroll to terms and conditions</a></p>
              <div id="productMain" class="row">
                <div class="col-sm-6">
                  <div data-slider-id="1" class="owl-carousel shop-detail-carousel">
                    <?php
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
                      
                    
                     $max=3;
                      $sql="Select Image,Perday from search where Pid=".$pid."";
                      if(!isset($_SESSION["lastviewed"]))     {
                          $_SESSION["lastviewed"] =array();
                     }
                      if (isset($_GET['Pid']) && $_GET['Pid'] <> "") {
                          if (in_array($_GET['Pid'], $_SESSION["lastviewed"])) { 
                            
                               $_SESSION["lastviewed"] = array_diff($_SESSION["lastviewed"],array($_GET['Pid'])) ; 
                              $_SESSION["lastviewed"] = array_values($_SESSION["lastviewed"]); 
                      }
                      if (count($_SESSION["lastviewed"]) >= $max) {
                        
                        $_SESSION["lastviewed"] = array_slice($_SESSION["lastviewed"],1); 
                        array_push($_SESSION["lastviewed"],$_GET['Pid']);
                    } else {
                              
                              array_push($_SESSION["lastviewed"],$_GET['Pid']);
                            }
                      }
                      
                     

                      $result=mysqli_query($conn,$sql);
                      if(mysqli_num_rows($result)>0){
                        while($row=mysqli_fetch_assoc($result)){
                        echo "<div> <img src='".$row['Image']."' alt='Cannot display image' class='img-fluid'></div>";
                        }    
                      }
                    ?>
                    
                    
                  </div>
                </div>
                <div class="col-sm-6">

                  <div class="box">
                    
                      <input type="hidden" name="pid" value="<?php echo $pid;?>"/>
                      <input type="hidden" name="test" value="<?php echo $test;?>"/>
                      <?php
                        include 'databaseconnection.php';
                        echo "<div class='Quantity'>
                        <h3>Quantity Available</h3>";
                        $sql="Select Perday,Deposit,Quantity from search where Pid=".$pid."";
                        $result=mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0){
                          while($row=mysqli_fetch_assoc($result)){
                          $qt=$row["Quantity"];
                          if($qt==0){
                            echo "<p class='price'><strike>Qunatity in stock: <b>0</b></strike></p>";
                            echo "</div>";
                          }else{
                        echo "<p class='price'>Quantity in stock: <b>".$row["Quantity"]."</b></p>";
                       echo "</div>";
                     }
                        echo "<p class='price'>Perday rent: <b><i class='fa fa-rupee'>".$row["Perday"]."</b></i></p>";
                        echo "<p class='price'>Deposit: <b><i class='fa fa-rupee'>".$row["Deposit"]."</b></i></p>";
                        echo "  <p class='text-center'>";
                        if($qt==0){
                            echo "<a style='text-decoration:none;' class='btn btn-secondary'><i class='fa fa-shopping-cart'></i>Add to cart</a> ";
                        }else{
                        echo "<a href='showcart.php?Pid=".$pid."' style='text-decoration:none;' class='btn btn-secondary'><i class='fa fa-shopping-cart'></i>Add to cart</a> ";
                        }
                      echo "</p>";
                        }  
                        }
                        
                      ?>
                        
                      
                      
                    
                    
                  </div>
                  
                </div>
              </div>
              <div id="details" class="box mb-4 mt-4">
                <p></p>
                <h4><u>Terms & Conditions:</u></h4>
                 <?php
                  include 'databaseconnection.php';
                  $sql="Select * from terms";
                  $res=mysqli_query($conn,$sql);
                  if(mysqli_num_rows($res)>0){
                    
                        while($row=mysqli_fetch_assoc($res)){
                          
                          echo "<h4>Order Confirmation Date</h4>";
                          echo"<p>".$row["OrderDate"]."</p>" ;
                          echo "<br>";
                          echo "<h4>Refund</h4>";
                          echo"<p>".$row["Refund"]."</p>" ;
                          echo "<br>";
                          echo "<h4>Damage</h4>";
                          echo"<p>".$row["Damage"]."</p>" ;
                          
                    
                        }
                      }


                ?> 
                <!-- <p>White lace top, woven, has a round neck, short sleeves, has knitted lining attached</p>
                <h4>Material & care</h4>
                <ul>
                  <li>Polyester</li>
                  <li>Machine wash</li>
                </ul>
                <h4>Size & Fit</h4>
                <ul>
                  <li>Regular fit</li>
                  <li>The model (height 5'8 "and chest 33") is wearing a size S</li>
                </ul> -->

              </div>
              
              
              <div class="row">
                <div class="col-lg-3 col-md-6">
                  <div class="box text-uppercase mt-0 mb-small">
                     <?php
                    $descr="";
                      if($test==1){
                          $descr="Best sellers";
                      }else if($test==2){
                        $descr="Speakers";
                      }else if($test==3){
                        $descr="Hoverboards and drones";
                      }else if($test==4){
                        $descr="PlayStation";
                      }else if($test==5){
                        $descr="Karaoke and remote controls";
                      }else{
                        $descr="Board games";
                      }
                      echo "<h3>Products viewed recently in"."<h3>".$descr."</h3>";
                    ?>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  
                  <div class="product">
                    <?php
                      include 'databaseconnection.php';
                        if(isset($_SESSION["lastviewed"][2])){
                      $mostRecent=$_SESSION["lastviewed"][2];
                      $sql="Select Pid,Image,Perday from ".$table." where Pid=".$mostRecent."";
                      $result=mysqli_query($conn,$sql);
                      if(mysqli_num_rows($result)>0){
                        while($row=mysqli_fetch_assoc($result)){
                          echo "<div class='image'><a href='display.php?Pid=".$row['Pid']."&test=$test''><img src='".$row['Image']."' alt='Cannot display image' class='img-fluid image1'></a></div>
                    <div class='text'>
                                          
                                          <p class='price'>Perday rent: <b>".$row["Perday"]."</b></p>
                    </div>";
                    
                        }
                      }


                    }
                ?>
                    
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="product">
                    <?php
                      include 'databaseconnection.php';
                      if(isset($_SESSION["lastviewed"][1])){
                      $middle=$_SESSION["lastviewed"][1];
                      $sql="Select Pid,Image,Perday from ".$table." where Pid=".$middle."";
                      $result=mysqli_query($conn,$sql);
                      if(mysqli_num_rows($result)>0){
                        while($row=mysqli_fetch_assoc($result)){
                          echo "<div class='image'><a href='display.php?Pid=".$row['Pid']."&test=$test''><img src='".$row['Image']."' alt='Cannot display image' class='img-fluid image1'></a></div>
                    <div class='text'>
                                          
                                          <p class='price'>Perday rent: <b>".$row["Perday"]."</b></p>
                    </div>";
                    
                        }
                      }

                    }
                      
                    ?>
                    
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="product">
                    <?php
                      include 'databaseconnection.php';
                         if(isset($_SESSION["lastviewed"][0])){
                      $leastRecent=$_SESSION["lastviewed"][0];
                       $sql="Select Pid,Image,Perday from ".$table." where Pid=".$leastRecent."";
                      $result=mysqli_query($conn,$sql);
                      if(mysqli_num_rows($result)>0){
                        while($row=mysqli_fetch_assoc($result)){
                          echo "<div class='image'><a href='display.php?Pid=".$row['Pid']."&test=$test''><img src='".$row['Image']."' alt='Cannot display image' class='img-fluid image1'></a></div>
                    <div class='text'>
                                          
                    <p class='price'>Perday rent: <b>".$row["Perday"]."</b></p>
                      </div>";
                    
                        }
                      }


                    }
                                         ?>
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <!-- MENUS AND FILTERS-->
            <div class="panel panel-default sidebar-menu">
                <div class="panel-heading">
                  <h3 class="h4 panel-title">Categories</h3>
                </div>
                <div class="panel-body">
                  <ul class="nav nav-pills flex-column text-sm category-menu">
                    <li class="nav-item"><a href="homepag1.php" class="nav-link  d-flex align-items-center justify-content-between"><span>Best Sellers </span><?php
                        include 'databaseconnection.php';
                        $sql="Select * from product_catalogue";
                        $result=mysqli_query($conn,$sql);
                        $count=mysqli_num_rows($result);
                        echo "<span class='badge badge-light'>$count</span>";

                    ?></a>

                      
                    </li>
                    <li class="nav-item"><a href="speaker.php" class="nav-link d-flex align-items-center justify-content-between"><span>Speakers </span><?php
                        include 'databaseconnection.php';
                        $sql="Select * from speaker";
                        $result=mysqli_query($conn,$sql);
                        $count=mysqli_num_rows($result);
                        echo "<span class='badge badge-light'>$count</span>";

                    ?></a>
                      
                    </li>
                    <li class="nav-item"><a href="hoverboard.php" class="nav-link d-flex align-items-center justify-content-between"><span>Hoverboards and Drones </span><?php
                        include 'databaseconnection.php';
                        $sql="Select * from hoveranddrone";
                        $result=mysqli_query($conn,$sql);
                        $count=mysqli_num_rows($result);
                        echo "<span class='badge badge-light'>$count</span>";

                    ?></a>
                      
                    </li>
                    <li class="nav-item"><a href="playstation.php" class="nav-link d-flex align-items-center justify-content-between"><span>PlayStation </span><?php
                        include 'databaseconnection.php';
                        $sql="Select * from playstation";
                        $result=mysqli_query($conn,$sql);
                        $count=mysqli_num_rows($result);
                        echo "<span class='badge badge-light'>$count</span>";

                    ?></a>
                      
                    </li>
                    <li class="nav-item"><a href="karoke.php" class="nav-link d-flex align-items-center justify-content-between"><span>Karaoke and remote controls </span><?php
                        include 'databaseconnection.php';
                        $sql="Select * from karoke";
                        $result=mysqli_query($conn,$sql);
                        $count=mysqli_num_rows($result);
                        echo "<span class='badge badge-light'>$count</span>";

                    ?></a>
                      
                    </li>
                    <li class="nav-item"><a href="board.php" class="nav-link d-flex align-items-center justify-content-between"><span>Board Games  </span><?php
                        include 'databaseconnection.php';
                        $sql="Select * from boardgames";
                        $result=mysqli_query($conn,$sql);
                        $count=mysqli_num_rows($result);
                        echo "<span class='badge badge-light'>$count</span>";

                    ?></a>
                     
                    </li>
                  </ul>
                </div>
              </div>
              
            </div>

      <!-- GET IT-->
      
      <!-- FOOTER -->
      
    </div>
    <!-- Javascript files-->
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