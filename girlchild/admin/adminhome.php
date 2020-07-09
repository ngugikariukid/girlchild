<?php
include_once('../config.php');
session_start();
$email = $_SESSION['email'];
            if( !$_SESSION['email'] && !$_SESSION['firstname'] )
            {
                header('location: ../login.php?msg=please_login');
            } else{
       $query = mysqli_query($db1, "select * from userlogindetails WHERE useremail = '$email' " );// or die("Selecting user profile failed");

       $result = mysqli_fetch_array($query, MYSQLI_ASSOC);
       if(($result>0)){
       $_SESSION['firstname'] = $result['firstname'];
       }
       }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Okoa Girl child Services</title>




    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="../img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../img/apple-touch-icon-114x114.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../fonts/font-awesome/css/font-awesome.css">

    <!-- Slider
    ================================================== -->
    <link href="../css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="../css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="../css/style.css">

    <link rel="stylesheet" type="text/css" href="../css/responsive.css">

    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="../js/modernizr.custom.js"></script>

  </head>

  <body>
   <nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
         <!-- <ul class="nospace inline pushright">
              <li><i class="fa fa-phone"></i> +254 (721) 456 7890</li>
              <li><i class="fa fa-envelope-o"></i> christine@usiu.com</li>
            </ul> -->
            <div class="container">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Okoa Services</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">

                  <li><a href="../logged/index.php?msg=logged" class="page-scroll"> <strong><span class="color"> Back to Website</span></strong></a></li>
                    <li><a href="logout.php" class="page-scroll"> <strong><span class="color"> Logout</span></strong></a></li>
                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
   <!-- Login Page
      ==========================================-->
      <div id="tf-contact" class="text-center">
          <div class="container">


            <div id="tf-services" class="text-center">
                    <div class="container">
                        <div class="section-title center">
                            <h2>Welcome:  <strong> <?php echo $_SESSION['firstname']; ?> </strong></h2>
                            <div class="line">
                                <hr>
                            </div>
                            <div class="clearfix"></div>

                        </div>
                        <div class="space"></div>
                        <div class="row">
                            <div class="col-md-3 col-sm-6 service">
                                <a href="addusers.php"> <i class="fa fa-desktop"></i> </a>
                                <h4><strong>Add Users</strong></h4>
                                <div class="line">
                                    <hr>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 service">
                               <a href="manageusers.php"> <i class="fa fa-mobile"></i> </a>
                                <h4><strong>Remove Users</strong></h4>
                                <div class="line">
                                    <hr>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 service">
                                <a href="viewdonations.php"> <i class="fa fa-bullhorn"> </i> </a>
                                <h4><strong>View Donations</strong></h4>
                                <div class="line">
                                    <hr>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 service">
                                <a href="managedonations.php"><i class="fa fa-camera"></i></a>
                                <h4><strong>Financial Requests</strong></h4>
                                <div class="line">
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



          </div>
      </div>

      <nav id="footer">
          <div class="container">
              <div class="pull-left fnav">
                  <p>ALL RIGHTS RESERVED. COPYRIGHT © 2020. Designed by Christine Nyambura for <a href="https://okoagirls.com">OKOA GIRL CHILD</a></p>
              </div>
              <div class="pull-right fnav">
                  <ul class="footer-social">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                      <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  </ul>
              </div>
          </div>
      </nav>

     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script type="text/javascript" src="../js/jquery.1.11.1.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script type="text/javascript" src="../js/bootstrap.js"></script>
      <script type="text/javascript" src="../js/SmoothScroll.js"></script>
      <script type="text/javascript" src="../js/jquery.isotope.js"></script>

      <script src="../js/owl.carousel.js"></script>

      <!-- Javascripts
      ================================================== -->
      <script type="text/javascript" src="../js/main.js"></script>

    </body>
  </html>