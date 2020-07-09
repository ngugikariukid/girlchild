<?php
include_once('../config.php');
session_start();
            if(!$_SESSION['email'])
            {
                header('location: ../login.php?msg=please_login');
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
                <li><a href="adminhome.php" class="page-scroll"> <strong><span class="color"> Admin Home</span></strong></a></li>
                  <li><a href="../logged/index.php" class="page-scroll"> <strong><span class="color"> Back to Website</span></strong></a></li>
                    <li><a href="logout.php" class="page-scroll"> <strong><span class="color"> Logout</span></strong></a></li>
                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
      <!-- Login Page
         ==========================================-->
         <div id="tf-contact" class="text-center">
             <div class="container">

                 <div class="row">
                     <div class="col-md-8 col-md-offset-2">

                         <div class="section-title center">
                             <h2>Feel free to <strong>Register an Account </strong></h2>
                             <div class="line">
                                 <hr>
                             </div>
                             <div class="clearfix"></div>
                              </div>

                         <form method="POST" action="../admininsert.php" enctype="multipart/form-data">
                         <div class="row">
                                  <div class="col-md-6">
                                       <div class="form-group">
                                          <label for="exampleInputEmail1">First Name</label>
                                          <input required type="text" class="form-control" id="exampleInputPassword1" name="firstname" class="form-control"  placeholder="Enter First Name">
                                       </div>
                                  </div>
                                  <div class="col-md-6">
                                       <div class="form-group">
                                           <label for="exampleInputEmail1" >Last Name</label>
                                           <input required class="form-control" type="text" id="exampleInputPassword1" name="lastname" class="form-control"  placeholder="Enter Last Name">
                                       </div>
                                  </div>
                          </div>
                             <div class="row">
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <label for="exampleInputEmail1">Email address</label>
                                         <input  type="email" name="useremail" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <label for="exampleInputPassword1">Password</label>
                                         <input type="password" name="userpass" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                     </div>
                                 </div>
                             </div>

                             <div class="row">

                               <div class="col-md-6">
                                  <div class="form-group">
                                        <label for="exampleInputEmail1">Select User Type: </label>
                                        <select name="usertype" class="form-control" id="exampleInputEmail1">
                                          <option value="lawyer">Lawyer</option>
                                          <option value="psychiatrist">Psychiatrist</option>
                                          <option value="admin">Admin</option>
                                        </select>
                                   </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                         <label for="exampleInputEmail1">Select your image: </label>
                                         <input type="file" name="file" class="form-control" id="exampleInputEmail1">
                                       </div>
                                     </div>
                             </div>
                            <button type="submit" class="btn tf-btn btn-default">Submit</button>
                         </form>
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