<?php
  session_start();
  if(!isset($_SESSION["user"])){
    header('Location:signup.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>TechnophileRental</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="all,follow">


<!--Navbar and footer files-->
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
<footer css -->
		<link rel="stylesheet" type="text/css" href="../css/footer.css">
		<!-- <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif] -->
		<!--Search bar-->
<link rel="stylesheet" type="text/css" href="../css/searchbar.css">
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->

<!--Contact form files-->
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../ContactFrom/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="../ContactFrom/vendor/bootstrap/css/bootstrap.min.css"> -->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../ContactFrom/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../ContactFrom/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../ContactFrom/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../ContactFrom/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../ContactFrom/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../ContactFrom/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../ContactFrom/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../ContactFrom/css/util.css">
	<link rel="stylesheet" type="text/css" href="../ContactFrom/css/main.css">
<!--===============================================================================================-->



</head>
<body>

	<div id="all">
	<!-- Navbar Start-->
	<header class="nav-holder make-sticky">
		<div id="navbar" role="navigation" class="navbar navbar-expand-lg">
			<div class="container"><a href="../TechnophileRental/php/homepage1.php" class="navbar-brand home"><img src="../php/logo.jpg" alt="logo" class="d-none d-md-inline-block"><img src="logo.jpg" alt="logo" class="d-inline-block d-md-none"><span class="sr-only">Technophile - go to homepage</span></a>
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
						<li class="nav-item dropdown menu-large">
							<a href="showcart.php">
							 <i class="fa fa-shopping-cart" style="font-size:24px;color:black;">

										<?php
									 include '../php/countcart.php';
									 echo "<span class='badge' style='background-color:#6394F8;border-radius:10px;font-size:12px;padding:3px 7px;'>".$count."</span>";
								 ?>

						 </i>
					 </a>
							<!-- <a href="#" data-toggle="dropdown" class="dropdown-toggle">Shop <b class="caret"></b></a> -->
							<!-- <ul class="dropdown-menu megamenu">
								<li>
											<ul class="list-unstyled mb-3">
												<li class="nav-item"><a href="showcart.php" class="nav-link">Cart</a></li>
												<li class="nav-item"><a href="speacialdeals.php" class="nav-link">Speacial Deals</a></li>
											</ul>
								</li>
							</ul> -->
						</li>
						<!-- ========== Contact dropdown ==================-->
						<li class="nav-item dropdown"><a href="contactus.php">Contact Us <b class="caret"></b></a>
						</li>
						<!-- ========== Contact dropdown end ==================-->
					</ul>

				</div>


		<!-- Navbar End-->
		<!-- <div class="row">
			<div class="col-lg-8">
		<header class="nav-holder make-sticky"> -->
			<!-- <div id="navbar" role="navigation" class="navbar navbar-expand-lg" style="position:fixed;width:100%";>
				<div class="container"><a href="../html1/index.html" class="navbar-brand home"><a href="homepag1.php" class="navbar-brand home"><img src="../images/technophilerentalimages/logo.jpg" class="d-none d-md-inline-block" width="110" height="75"><img src="../images/technophilerentalimages/logo.jpg" class="d-inline-block d-md-none" width="110" height="75"></a>
					<button type="button" data-toggle="collapse" data-target="#navigation" class="navbar-toggler btn-template-outlined"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
					<div id="navigation" class="navbar-collapse collapse">
					</div>
					</div>


					</div> -->
					<!-- <div id="search" class="collapse clearfix">
						<form role="search" class="navbar-form">
							<div class="input-group">
								<input type="text" placeholder="Search" class="form-control"><span class="input-group-btn">
									<button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button></span>
							</div>
						</form>
					</div> -->
<!--
	<div class="searchbar">
		<input class="search_input" type="text" name="" placeholder="Search...">
		<a href="#" class="search_icon"><i class="fas fa-search"></i></a>
	</div>  -->
				</div>
			</div>
		</header>
		<!-- Navbar End-->
</div>

	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
					Send Us A Message
				</span>

				<label class="label-input100" for="first-name">Tell us your name *</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
					<input id="first-name" class="input100" type="text" name="first-name" placeholder="First name">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
					<input class="input100" type="text" name="last-name" placeholder="Last name">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="email">Enter your email *</label>
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input id="email" class="input100" type="text" name="email" placeholder="Eg. example@email.com">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="phone">Enter phone number</label>
				<div class="wrap-input100">
					<input id="phone" class="input100" type="text" name="phone" placeholder="Eg. +1 800 000000">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="message">Message *</label>
				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<textarea id="message" class="input100" name="message" placeholder="Write us a message"></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						Send Message
					</button>
				</div>
			</form>

			<div class="contact100-more flex-col-c-m" style="background-image: url('../ContactFrom/images/bg-01.jpg');">
				<div class="flex-w size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-map-marker"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Address
						</span>

						<span class="txt2">
							No. U-15, J.V.P.D. Scheme, Bhaktivedanta Swami Rd, Opp.Cooper Hospital, Navpada, Suvarna Nagar, Vile Parle, Mumbai, Maharashtra 400056
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-phone-handset"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Lets Talk
						</span>

						<span class="txt3">
							+91 9865478362
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-envelope"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							General Support
						</span>

						<span class="txt3">
							technophile@gmail.com
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

	      <!-- FOOTER -->
	      <!-- Site footer -->
	        <footer class="site-footer">

	          <div class="container">
	            <div class="row">
	              <div class="col-md-8 col-sm-6 col-xs-12">
	                <p class="copyright-text" style="color:white">Developed with
	             <a href="#" style="color:white"><i class="fa fa-heart"> by Technophile</i></a>.
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
<!--===============================================================================================-->
	<script src="../ContactFrom/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../ContactFrom/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../ContactFrom/vendor/bootstrap/js/popper.js"></script>
	<script src="../ContactFrom/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../ContactFrom/vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="../ContactFrom/vendor/daterangepicker/moment.min.js"></script>
	<script src="../ContactFrom/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../ContactFrom/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../ContactFrom/js/main.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>


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
