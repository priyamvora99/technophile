<html>
	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="../bootstrap-4/dist/css/bootstrap.css">
		  <link rel="stylesheet" href="mycss.css"/>
		  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
	
	<div class="row">
		
					<div class="col-lg-4"></div>
					<div class="col-lg-4">
							<div class="container">
								<div class="jumbo">

						<div id="carouselExampleControls" class="carousel slide" data-ride="carousel"  style="width:400px;">
			  				<div class="carousel-inner">
			    				<div class="carousel-item active">
			      					<img class="d-block w-100 img-circle" src="../images/technophilerentalimages/k.jpg" alt="First slide">
			      					<div class="carousel-caption d-none d-md-block">
			      						<h3>Kevin Shah</h3>
			      						<p>Currently pursuing diploma in Information Technology at Shri Bhagubai Mafatlal Polytechnic</p>
			      					</div>
			    				</div>
			    				<div class="carousel-item">
			      					<img class="d-block w-100 img-circle" src="../images/technophilerentalimages/p1.jpg" alt="Second slide">
			      						<div class="carousel-caption d-none d-md-block">
			      						<h3>Priyam Vora</h3>
			      						<p>Currently pursuing diploma in Information Technology at Shri Bhagubai Mafatlal Polytechnic</p>
			      					</div>
			    				</div>
			    				<div class="carousel-item">
			      					<img class="d-block w-100 img-circle" src="../images/technophilerentalimages/mi.jpg" alt="Third slide">

			      						<div class="carousel-caption d-none d-md-block">
			      						<h3>Mihir Shah</h3>
			      						<p>Currently pursuing diploma in Information Technology at Shri Bhagubai Mafatlal Polytechnic</p>
			      					</div>
			    				</div>
			  				</div>
			  				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			    				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    				<span class="sr-only">Previous</span>
			  				</a>
			  				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			    				<span class="carousel-control-next-icon" aria-hidden="true"></span>
			    				<span class="sr-only">Next</span>
			  				</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4"></div>	
					

			
	</div>
	<div class="row" id="divback" style="padding:10px; ">
		<div class="col-lg-6">
			<span id="spanid">Contact us: </span>
				<i class="fa fa-whatsapp" style="font-size: 36	px;color: white"></i><br>
				<span id="spanid1">Priyam Vora: +919029287010</span><br>
				<span id="spanid1">Kevin Shah : +919967410115</span><br>
				<span id="spanid1">Mihir Shah : +919920683580</span>
			
		</div>
		<div class="col-lg-6">
				<span id="spanid">You can even reach us at: </span>
					<i class="fa fa-envelope" style="font-size: 36px;color: white"></i><br>
					<span id="spanid1">priyamvora99@gmail.com</span><br>
					<span id="spanid1">kevinshah852@gmail.com</span><br>
					<span id="spanid1">mihir1999128@gmail.com</span>
		</div>
	</div>	
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
		</script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
		</script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous">
		</script>
	</body>
</html>