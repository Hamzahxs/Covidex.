<?php
include('db/connection.php');

session_start();

if (!isset($_SESSION['auth']) || $_SESSION['auth'] !== true) {
    header("Location:usermore/ulogin.php");
    exit();
}
?>

<!doctype html>
<html lang="en">
<head>
  <title>Covidex.</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    

  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700;900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="fonts/flaticon-covid/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    
    <header class="site-navbar light js-sticky-header site-navbar-target" role="banner">
<div class="container">
  <div class="row align-items-center">

    <div class="col-6 col-xl-2">
      <div class="mb-0 site-logo"><a href="index.php" class="mb-0">Covidex<span class="text-primary">.</span> </a></div>
    </div>

    <div class="col-12 col-md-10 d-none d-xl-block">
    <nav class="site-navigation position-relative text-right" role="navigation">
  <ul class="site-menu main-menu js-clone-nav  p-0 mr-auto d-none d-lg-block">
    <li class="active"><a href="index.php" class="nav-link">Home</a></li>
    <li><a href="prevention.php" class="nav-link">Prevention</a></li>
    <li><a href="symptoms.php" class="nav-link">Symptoms</a></li>
    <li><a href="vaccinebanner.php" class="nav-link">Vaccine</a></li>
    <li><a href="about.php" class="nav-link">About</a></li>
    <li><a href="contact.php" class="nav-link">Contact</a></li>
    <li class="has-children">
      <a href="#" class="nav-link">Join us</a>
      <ul class="dropdown">
        <li><a href="../Covid-199/usermore/uregister.php" class="nav-link">sign up</a></li>
        <li><a href="../Covid-199/usermore/ulogin.php" class="nav-link">sign in</a></li>
      </ul>
    </li>
    <li class="has-children">
      <a href="#" class="nav-link"><?php echo isset($_SESSION['shownav']) ? $_SESSION['shownav'] : 'dxzzi'; ?></a>
      <ul class="dropdown">
        <li><a href="../Covid-199/usermore/ulogout.php" class="nav-link">Logout</a></li>
      </ul>
    </li>
  </ul>
</nav>

    </div>


    <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3 text-black"></span></a></div>

  </div>
</div>

</header>



    <div class="hero-v1">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-6 text-center mx-auto">
            <span class="d-block subheading">Updates</span>
            <h1 class="heading mb-3">Blog Posts</h1>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel a, nulla incidunt eaque sit praesentium porro consectetur optio!</p>
          </div>
          
        </div>
      </div>
    </div>


    <!-- MAIN -->




    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-7 mx-auto text-center">
            <h2 class="mb-4 section-heading">Latest News &amp; Articles</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex officia quas, modi sit eligendi numquam!</p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5">
            <div class="post-entry">
              <a href="#" class="thumb">
                <span class="date">30 Jul, 2020</span>
                <img src="images/hero_1.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="post-meta text-center">
                <a href="">
                  <span class="icon-user"></span>
                  <span>Admin</span>
                </a>
                <a href="#">
                  <span class="icon-comment"></span>
                  <span>3 Comments</span>
                </a>
              </div>
              <h3><a href="#">How Coronavirus Very Contigous</a></h3>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5">
            <div class="post-entry">
              <a href="#" class="thumb">
                <span class="date">30 Jul, 2020</span>
                <img src="images/hero_2.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="post-meta text-center">
                <a href="">
                  <span class="icon-user"></span>
                  <span>Admin</span>
                </a>
                <a href="#">
                  <span class="icon-comment"></span>
                  <span>3 Comments</span>
                </a>
              </div>
              <h3><a href="#">How Coronavirus Very Contigous</a></h3>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5">
            <div class="post-entry">
              <a href="#" class="thumb">
                <span class="date">30 Jul, 2020</span>
                <img src="images/hero_1.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="post-meta text-center">
                <a href="">
                  <span class="icon-user"></span>
                  <span>Admin</span>
                </a>
                <a href="#">
                  <span class="icon-comment"></span>
                  <span>3 Comments</span>
                </a>
              </div>
              <h3><a href="#">How Coronavirus Very Contigous</a></h3>
            </div>
          </div>

          <div class="col-sm-6 col-md-6 col-lg-4 mb-5">
            <div class="post-entry">
              <a href="#" class="thumb">
                <span class="date">30 Jul, 2020</span>
                <img src="images/hero_1.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="post-meta text-center">
                <a href="">
                  <span class="icon-user"></span>
                  <span>Admin</span>
                </a>
                <a href="#">
                  <span class="icon-comment"></span>
                  <span>3 Comments</span>
                </a>
              </div>
              <h3><a href="#">How Coronavirus Very Contigous</a></h3>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5">
            <div class="post-entry">
              <a href="#" class="thumb">
                <span class="date">30 Jul, 2020</span>
                <img src="images/hero_2.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="post-meta text-center">
                <a href="">
                  <span class="icon-user"></span>
                  <span>Admin</span>
                </a>
                <a href="#">
                  <span class="icon-comment"></span>
                  <span>3 Comments</span>
                </a>
              </div>
              <h3><a href="#">How Coronavirus Very Contigous</a></h3>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5">
            <div class="post-entry">
              <a href="#" class="thumb">
                <span class="date">30 Jul, 2020</span>
                <img src="images/hero_1.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="post-meta text-center">
                <a href="">
                  <span class="icon-user"></span>
                  <span>Admin</span>
                </a>
                <a href="#">
                  <span class="icon-comment"></span>
                  <span>3 Comments</span>
                </a>
              </div>
              <h3><a href="#">How Coronavirus Very Contigous</a></h3>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="custom-pagination">
              <a href="#">1</a>
              <a href="#" class="active">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
            </div>
          </div>
        </div>
      </div>
    </div>




    <div class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <h2 class="footer-heading mb-4">About</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi cumque tenetur inventore veniam, hic vel ipsa necessitatibus ducimus architecto fugiat!</p>
            <div class="my-5">
              <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="row">
              <div class="col-lg-4">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="symptoms.php">Symptoms</a></li>
                  <li><a href="prevention.php">Prevention</a></li>
                  <li><a href="#">FAQs</a></li>
                  <li><a href="about.php">About Coronavirus</a></li>
                  <li><a href="contact.php">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-lg-4">
                <h2 class="footer-heading mb-4">Helpful Link</h2>
                <ul class="list-unstyled">
                  <li><a href="#">Helathcare Professional</a></li>
                  <li><a href="#">LGU Facilities</a></li>
                  <li><a href="#">Protect Your Family</a></li>
                  <li><a href="#">World Health</a></li>
                </ul>
              </div>
              <div class="col-lg-4">
                <h2 class="footer-heading mb-4">Resources</h2>
                <ul class="list-unstyled">
                  <li><a href="#">WHO Website</a></li>
                  <li><a href="#">CDC Website</a></li>
                  <li><a href="#">Gov Website</a></li>
                  <li><a href="#">DOH Website</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p class="copyright"><small>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved Covidex <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="www.dxzzi.com" target="_blank" >Dxzziest</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small></p>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>


  <script src="js/main.js"></script>


</body>
</html>