<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Universal - All In 1 Template</title>
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
              <form action="customer-orders.html" method="post">
                <div class="form-group">
                  <input id="email_modal" type="text" placeholder="email" class="form-control">
                </div>
                <div class="form-group">
                  <input id="password_modal" type="password" placeholder="password" class="form-control">
                </div>
                <p class="text-center">
                  <button class="btn btn-template-outlined"><i class="fa fa-sign-in"></i> Log in</button>
                </p>
              </form>
              <p class="text-center text-muted">Not registered yet?</p>
              <p class="text-center text-muted"><a href="customer-register.html"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Login modal end-->
      <!-- Navbar Start-->
      <header class="nav-holder make-sticky">
        <div id="navbar" role="navigation" class="navbar navbar-expand-lg">
          <div class="container"><a href="../html1/index.html" class="navbar-brand home"><img src="../html1/img/logo.png" alt="Universal logo" class="d-none d-md-inline-block"><img src="../html1/img/logo-small.png" alt="Universal logo" class="d-inline-block d-md-none"><span class="sr-only">Universal - go to homepage</span></a>
            <button type="button" data-toggle="collapse" data-target="#navigation" class="navbar-toggler btn-template-outlined"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
            <div id="navigation" class="navbar-collapse collapse">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item dropdown active"><a href="javascript: void(0)" data-toggle="dropdown" class="dropdown-toggle">Home <b class="caret"></b></a>
                  <!-- <ul class="dropdown-menu">
                    <li class="dropdown-item"><a href="index.html" class="nav-link">Option 1: Default Page</a></li>
                    <li class="dropdown-item"><a href="index2.html" class="nav-link">Option 2: Application</a></li>
                    <li class="dropdown-item"><a href="index3.html" class="nav-link">Option 3: Startup</a></li>
                    <li class="dropdown-item"><a href="index4.html" class="nav-link">Option 4: Agency</a></li>
                    <li class="dropdown-item"><a href="index5.html" class="nav-link">Option 5: Portfolio</a></li>
                  </ul> -->
                </li>
                <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Features<b class="caret"></b></a>
                  <ul class="dropdown-menu megamenu">
                    <li>
                      <div class="row">
                        <div class="col-lg-6"><img src="../html1/img/template-easy-customize.png" alt="" class="img-fluid d-none d-lg-block"></div>
                        <div class="col-lg-3 col-md-6">
                          <h5>Shortcodes</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="template-accordions.html" class="nav-link">Accordions</a></li>
                            <li class="nav-item"><a href="template-alerts.html" class="nav-link">Alerts</a></li>
                            <li class="nav-item"><a href="template-buttons.html" class="nav-link">Buttons</a></li>
                            <li class="nav-item"><a href="template-content-boxes.html" class="nav-link">Content boxes</a></li>
                            <li class="nav-item"><a href="template-blocks.html" class="nav-link">Horizontal blocks</a></li>
                            <li class="nav-item"><a href="template-pagination.html" class="nav-link">Pagination</a></li>
                            <li class="nav-item"><a href="template-tabs.html" class="nav-link">Tabs</a></li>
                            <li class="nav-item"><a href="template-typography.html" class="nav-link">Typography</a></li>
                          </ul>
                        </div>
                        <div class="col-lg-3 col-md-6">
                          <h5>Header variations</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="template-header-default.html" class="nav-link">Default sticky header</a></li>
                            <li class="nav-item"><a href="template-header-nosticky.html" class="nav-link">No sticky header</a></li>
                            <li class="nav-item"><a href="template-header-light.html" class="nav-link">Light header</a></li>
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
                            <li class="nav-item"><a href="portfolio-2.html" class="nav-link">Cart</a></li>
                            <li class="nav-item"><a href="portfolio-no-space-2.html" class="nav-link">Your Orders</a></li>
                            <li class="nav-item"><a href="portfolio-3.html" class="nav-link">Speacial Deals</a></li>
                          </ul>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Login <b class="caret"></b></a>
                  <ul class="dropdown-menu megamenu">
                    <li>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="portfolio-2.html" class="nav-link">Profile</a></li>
                            <li class="nav-item"><a href="portfolio-no-space-2.html" class="nav-link">Tour Cart</a></li>
                            <li class="nav-item"><a href="portfolio-3.html" class="nav-link">Logout</a></li>
                          </ul>
                    </li>
                  </ul>
                </li>

                <!-- ========== Contact dropdown ==================-->
                <li class="nav-item dropdown"><a href="javascript: void(0)" data-toggle="dropdown" class="dropdown-toggle">Contact Us <b class="caret"></b></a>
                </li>
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
      <!-- Navbar End-->


      <div id="content">
        <div class="container">
          <div class="row bar">
            <div class="col-md-3">
              <!-- MENUS AND FILTERS-->
              <div class="panel panel-default sidebar-menu">
                <div class="panel-heading">
                  <h3 class="h4 panel-title">Categories</h3>
                </div>
                <div class="panel-body">
                  <ul class="nav nav-pills flex-column text-sm category-menu">
                    <li class="nav-item"><a href="shop-category.html" class="nav-link d-flex align-items-center justify-content-between"><span>Men </span><span class="badge badge-secondary">42</span></a>
                      <ul class="nav nav-pills flex-column">
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">T-shirts</a></li>
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Shirts</a></li>
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Pants</a></li>
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Accessories</a></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a href="shop-category.html" class="nav-link active d-flex align-items-center justify-content-between"><span>Ladies  </span><span class="badge badge-light">123</span></a>
                      <ul class="nav nav-pills flex-column">
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">T-shirts</a></li>
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Skirts</a></li>
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Pants</a></li>
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Accessories</a></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a href="shop-category.html" class="nav-link d-flex align-items-center justify-content-between"><span>Kids  </span><span class="badge badge-secondary">11</span></a>
                      <ul class="nav nav-pills flex-column">
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">T-shirts</a></li>
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Skirts</a></li>
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Pants</a></li>
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Accessories</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="panel panel-default sidebar-menu">
                <div class="panel-heading d-flex align-items-center justify-content-between">
                  <h3 class="h4 panel-title">Brands</h3><a href="#" class="btn btn-sm btn-danger"><i class="fa fa-times-circle"></i><span class="d-none d-md-inline-block">Clear</span></a>
                </div>
                <div class="panel-body">
                  <form>
                    <div class="form-group">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Armani  (10)
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Versace  (12)
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Carlo Bruni  (15)
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Jack Honey  (14)
                        </label>
                      </div>
                    </div>
                    <button class="btn btn-sm btn-template-outlined"><i class="fa fa-pencil"></i> Apply</button>
                  </form>
                </div>
              </div>
              <div class="panel panel-default sidebar-menu">
                <div class="panel-heading d-flex align-items-center justify-content-between">
                  <h3 class="h4 panel-titlen">Colours</h3><a href="#" class="btn btn-sm btn-danger"><i class="fa fa-times-circle"></i><span class="d-none d-md-inline-block">Clear</span></a>
                </div>
                <div class="panel-body">
                  <form>
                    <div class="form-group">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"><span class="colour white"></span> White (14)
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"><span class="colour blue"></span> Blue (10)
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"><span class="colour green"></span>  Green (20)
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"><span class="colour yellow"></span>  Yellow (13)
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"><span class="colour red"></span>  Red (10)
                        </label>
                      </div>
                    </div>
                    <button class="btn btn-sm btn-template-outlined"><i class="fa fa-pencil"></i> Apply</button>
                  </form>
                </div>
              </div>

            </div>
            <div class="col-md-9">
              <p class="text-muted lead">In our Speakers department we offer wide selection of the best products we have found and carefully selected worldwide.</p>
              <div class="row products products-big">
                <div class="col-lg-4 col-md-6">
                  <div class="product">

                      <?php
                        include 'databaseconnection.php';
                        $sql="Select Description,Image from product_catalogue where Pid=1";
                        $result=mysqli_query($conn,$sql);
                        $row=mysqli_fetch_assoc($result);
                        echo "<div class='image'><a href='shop-detail.html'><img src='".$row['Image']."' alt='Cannot display image' class='img-fluid image1'></a></div>";


                       echo "<div class='text'>
                                      <h3 class='h5'><a href='shop-detail.html'>'".$row["Description"]."'</a></h3>
                                      <p class='price'>$143.00</p>
                              </div>";
                      ?>


                  </div>
                </div>

                <div class="col-lg-4 col-md-6">
                  <div class="product">
                    <?php
                        include 'databaseconnection.php';
                        $sql="Select Description,Image from product_catalogue where Pid=2";
                        $result=mysqli_query($conn,$sql);
                        $row=mysqli_fetch_assoc($result);
                        echo "<div class='image'><a href='shop-detail.html'><img src='".$row['Image']."' alt='Cannot display image' class='img-fluid image1'></a></div>";


                       echo "<div class='text'>
                                      <h3 class='h5'><a href='shop-detail.html'>'".$row['Description']."'</a></h3>
                                      <p class='price'>$143.00</p>
                              </div>";
                      ?>
                    <div class="ribbon-holder">
                      <div class="ribbon sale">SALE</div>
                      <div class="ribbon new">NEW</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="product">
                    <?php
                        include 'databaseconnection.php';
                        $sql="Select Description,Image from product_catalogue where Pid=3";
                        $result=mysqli_query($conn,$sql);
                        $row=mysqli_fetch_assoc($result);
                        echo "<div class='image'><a href='shop-detail.html'><img src='".$row['Image']."' alt='Cannot display image' class='img-fluid image1'></a></div>";


                       echo "<div class='text'>
                                      <h3 class='h5'><a href='shop-detail.html'>'".$row["Description"]."'</a></h3>
                                      <p class='price'>$143.00</p>
                              </div>";
                      ?>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="product">
                    <?php
                        include 'databaseconnection.php';
                        $sql="Select Description,Image from product_catalogue where Pid=4";
                        $result=mysqli_query($conn,$sql);
                        $row=mysqli_fetch_assoc($result);
                        echo "<div class='image'><a href='shop-detail.html'><img src='".$row['Image']."' alt='Cannot display image' class='img-fluid image1'></a></div>";


                       echo "<div class='text'>
                                      <h3 class='h5'><a href='shop-detail.html'>'".$row["Description"]."'</a></h3>
                                      <p class='price'>$143.00</p>
                              </div>";
                      ?>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="product">
                      <?php
                        include 'databaseconnection.php';
                        $sql="Select Description,Image from product_catalogue where Pid=5";
                        $result=mysqli_query($conn,$sql);
                        $row=mysqli_fetch_assoc($result);
                        echo "<div class='image'><a href='shop-detail.html'><img src='".$row['Image']."' alt='Cannot display image' class='img-fluid image1'></a></div>";


                       echo "<div class='text'>
                                      <h3 class='h5'><a href='shop-detail.html'>'".$row["Description"]."'</a></h3>
                                      <p class='price'>$143.00</p>
                              </div>";
                      ?>
                    <div class="ribbon-holder">
                      <div class="ribbon sale">SALE</div>
                      <div class="ribbon new">NEW</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="product">
                    <?php
                        include 'databaseconnection.php';
                        $sql="Select Description,Image from product_catalogue where Pid=6";
                        $result=mysqli_query($conn,$sql);
                        $row=mysqli_fetch_assoc($result);
                        echo "<div class='image'><a href='shop-detail.html'><img src='".$row['Image']."' alt='Cannot display image' class='img-fluid image1'></a></div>";


                       echo "<div class='text'>
                                      <h3 class='h5'><a href='shop-detail.html'>'".$row["Description"]."'</a></h3>
                                      <p class='price'>$143.00</p>
                              </div>";
                      ?>
                    <div class="ribbon-holder">
                      <div class="ribbon new">NEW</div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="pages">
                <p class="loadMore text-center"><a href="#" class="btn btn-template-outlined"><i class="fa fa-chevron-down"></i> Load more</a></p>
                <nav aria-label="Page navigation example" class="d-flex justify-content-center">
                  <ul class="pagination">
                    <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-double-left"></i></a></li>
                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
                  </ul>
                </nav>
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
