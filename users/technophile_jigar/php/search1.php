<?php
  session_start();
  if(!isset($_SESSION["user"])){
    header('Location:signup.php');
  }
  if(!isset($_POST["search"])){
   header('Location:homepag1.php');	
  }
  header('Content-Type: text/html; charset=ISO-8859-1');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TechnophileRental:Spend less,enjoy more</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
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
    <link rel="stylesheet" type="text/css" href="search.css">
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
              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">x</span></button>
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
              <p class="text-center text-muted"><a href="signup.php"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Login modal end-->
      <!-- Navbar Start-->
      <header class="nav-holder make-sticky">
        <div id="navbar" role="navigation" class="navbar navbar-expand-lg" style="position:fixed;width:100%";>
          <div class="container"><a href="homepag1.php" class="navbar-brand home"><img src="../images/technophilerentalimages/logo.jpg" class="d-none d-md-inline-block" width="110" height="75"><img src="../images/technophilerentalimages/logo.jpg" class="d-inline-block d-md-none" width="110" height="75"></a>
          </div>
        </div>
      </header>
      <!-- Navbar End-->
     
      

      </div>
    </form>
      <div id="content">
        <div class="container">
          <div class="row bar">
            <div class="col-md-3">
              <!-- MENUS AND FILTERS-->
              <div class="panel panel-default sidebar-menu" style="margin-top:30px;">
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
            <div class="col-md-9">
              <p class="text-muted lead">Here are your search results..</p>
              <div class="row products products-big">
	                <?php
	                
					include 'databaseconnection.php';
					$tab="";
					if (isset($_POST['search'])) {
	                $query = $_POST['search'];
	                $sql = "SELECT * from search WHERE Name LIKE '%{$query}%'";
	                $result=mysqli_query($conn,$sql);
	                if(mysqli_num_rows($result)>0){

	                	while ($row = mysqli_fetch_array($result)) {
	            						
	                				
	                			
			                		$pid=$row["Pid"];
	                				$sql1="Select Image,Perday from ".$row["tab"]." where Pid=".$pid;
	                				$result1=mysqli_query($conn,$sql1);
	                				
	                				while($row1=mysqli_fetch_assoc($result1)){
	                					if($row["tab"]=="speaker"){
	                					
	                					$test=2;
	                				}else if($row["tab"]=="hoveranddrone"){
	                					
	                					$test=3;
	                				}else if($row["tab"]=="playstation"){
	                					
	                					$test=4;
	                				}else if($row["tab"]=="karoke"){
	                						                					$test=5;
	                				}else{
	                					
	                					$test=6;
	                				}
	                					 echo "<div class='col-lg-4 col-md-6'>
                                  <div class='product'>
                                            <div class='image'><a href='display.php?Pid=".$row['Pid']."&test=".$test."'><img src='".$row1['Image']."' alt='Cannot display image' class='img-fluid image1'></a></div>
                                      
                                          <h3 class='h5'><a href='display.php?Pid=".$row['Pid']."&test=".$test."'>".$row["Name"]."'</a></h3>
                                          
                                          
                                      
                                      
                                      <div class='text'>
                                          
                                          <p class='price'>Perday rent: <b>".$row1["Perday"]."</b></p>
                                      </div>
                                  </div>
                              </div>";
                        
	                				}
	                 				

	    						}
					}else{

	                echo "<div class=' col-lg-12 alert alert-warning'><span>Sorry no results found</span></div>";
				}
	                			
	     }

	?>
	                    
                     
              </div>
              
                          </div>
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


