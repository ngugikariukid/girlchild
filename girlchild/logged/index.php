<?php
include_once('../config.php');
session_start();
$email = $_SESSION['email'];

            if( !$_SESSION['email'] )
            {
                header('location: ../login.php?msg=please_login');
            }
            else
       $query = mysqli_query($db1, "select * from userlogindetails WHERE useremail = '$email' " );// or die("Selecting user profile failed");
       $result = mysqli_fetch_array($query, MYSQLI_ASSOC);
       if(($result>0)){
            $_SESSION['firstname'] = $result['firstname'];
       }

?>

<?php
    $result1 = mysqli_query($db1, "select * from emails WHERE emailto = '$email' and status = 0 " );
    $rows1 = mysqli_num_rows($result1);

?>

<?php
    $query = mysqli_query($db1, "select * from emails WHERE emailto = '$email' and status = 0 " );// or die("Selecting user profile failed");
    $result = mysqli_fetch_array($query, MYSQLI_ASSOC);
    if(($result>0)){
       $p = count($result);

       $body = $result['message'];
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
    <!-- Navigation
    ==========================================-->

    <nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
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

          <li><a href="" class="page-scroll">Welcome: <strong> <span class="color"><?php echo $_SESSION['firstname']?> </span></strong></a></li>
            <li><a href="chats.php" class="page-scroll"> <strong>  Inbox </strong> <span class="color"> <?php echo $rows1 ?></span> </a></li>

            <li><a href="#tf-home" class="page-scroll">Home</a></li>
            <li><a href="#tf-about" class="page-scroll">About Us</a></li><li><a href="#tf-services" class="page-scroll">Services</a></li>
            <li><a href="#tf-works" class="page-scroll">Our Team</a></li>
              <li><a href="#tf-testimonials" class="page-scroll">FAQ</a></li>

            <li><a href="#tf-contact" class="page-scroll">Contact</a></li>
              <li><a href="logout.php" class="page-scroll"> <strong><span class="color">Logout</span></strong></a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <!-- Home Page
    ==========================================-->
    <div id="tf-home" class="text-center">
        <div class="overlay">
            <div class="content">
                <h1>Welcome to <strong><span class="color">Okoa Girl Child Services</span></strong></h1>
                <p class="lead"> Okoa Girl Child Donation system is a web-based system that is designed to offer psychological and financial support to girls in the society. </p>
                <a href="#tf-about" class="fa fa-angle-down page-scroll"></a>
            </div>
        </div>
    </div>

    <!-- About Us Page
    ==========================================-->
    <div id="tf-about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-5">
                    <img src="../img/02.png" class="img-responsive">
                </div>
                <div class="col-md-6">
                    <div class="about-text">
                        <div class="section-title">
                            <h4>About us </h4>
                            <h2>Some words <strong>about us</strong></h2>
                            <hr>
                            <div class="clearfix"></div>
                        </div>
                        <p class="intro"> Okoa Girl Child Donation system is a web-based system that is designed to offer psychological and financial support to girls in the society by providing essential services such as psychological help as well as proper presentation in a court of law The website provides  Pro bono lawyer services, trained and qualified psychologist services, donation platform and a FAQ platform. The site allows member registration and enables them to view their own profile once they have created an account. It allows both psychological and financial help for members the site also enables members of the society to make contributions in helping the girl child. "
     </p>
                        <ul class="about-list">
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>Mission</strong> - <em>We empower the girl child</em>
                            </li>
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>Our Methods</strong> - <em>Access to services such as probono and donations</em>
                            </li>
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>Our Success</strong> - <em>More than 10 girls have received representation</em>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Services Section
 ==========================================-->

    <div id="tf-team" class="text-center">
        <div class="overlay">
            <div class="container">
                <div id="tf-services" class="text-center">
                        <div class="container">
                            <div class="section-title center">
                                <h2>Take a look at <strong>our services</strong></h2>
                                <div class="line">
                                    <hr>
                                </div>
                                <div class="clearfix"></div>
                                <small><em>The system aims to ensure that all the challenges faced by the girl child such as lack of proper legal representation in a   court of law, stigmatization from the society due to lack of awareness as well as help in resolving mental issues that are faced by the girl child are addressed efficiently. The web-based system will allow members to sign up either as a girl child, psychologist or lawyer using their personal details thus creating their own account. The members will be able to interact and view their account details. The girl child will be able to consult the lawyers for legal advice and the psychologist for their mental health. The donor will be able to make a donation. The system will have an administration portal to allow efficient running of the system. The administrators will be able to track amount of money donated, allocate the money to needing girl child, update user accounts and their contributions.
                                </em></small>
                            </div>
                            <div class="space"></div>
                            <div class="row">
                                <div class="col-md-3 col-sm-6 service">
                                    <a href='#tf-works'> <i class="fa fa-desktop"></i> </a>
                                    <h4><strong>Consult a Lawyer</strong></h4>
                                    <div class="line">
                                        <hr>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 service">
                                   <a href='#tf-works'> <i class="fa fa-mobile"></i> </a>
                                    <h4><strong>Consult a Psychiatrist</strong></h4>
                                    <div class="line">
                                        <hr>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 service">
                                    <a href="requesthelp.php?user=<?php echo $email ?>"> <i class="fa fa-bullhorn"> </i> </a>
                                    <h4><strong>Financial Assistance</strong></h4>
                                    <div class="line">
                                        <hr>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 service">
                                    <a href="donate.php?donater=<?php  echo $email?>"><i class="fa fa-camera"></i></a>
                                    <h4><strong>Donate</strong></h4>
                                    <div class="line">
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>

    <!-- Portfolio Section
   ==========================================-->
    <div id="tf-works">
        <div class="container"> <!-- Container -->
            <div class="section-title text-center center">
                <h2>OUR EXPERT <strong>TEAM</strong></h2>
                <div class="line">
                    <hr>
                </div>
                <div class="clearfix"></div>
                <small><em> Below is a team of our network that we collaborate with to ensure the girlchild has access to services </em></small>
            </div>
            <div class="space"></div>

            <div class="categories">

                <ul class="cat">
                    <li class="pull-left"><h4>Filter by Type:</h4></li>
                    <li class="pull-right">
                        <ol class="type">

                            <li><a href="#" data-filter="*" class="active">All</a></li>
                            <li><a href="#" data-filter=".psychiatrist">Psychiatrists</a></li>
                            <li><a href="#" data-filter=".lawyer">Lawyers</a></li>

                        </ol>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>

            <?php
                                          include_once('../config.php');
                                                $query = "select * from userlogindetails where usertype = 'lawyer' or usertype = 'psychiatrist' " ;
                                                $result = mysqli_query($db1, $query);
                                                if (mysqli_num_rows($result) > 0){

                                          echo "<div id='lightbox' class='row'>";
                                              while ($row = mysqli_fetch_array($result)){
                                              echo "<div class='col-sm-6 col-md-3 col-lg-3 ".$row['usertype']." '>";
                                              echo "<div class='portfolio-item'>";
                                              echo "<div class='hover-bg'>";
                                              echo "<a href='gethelp.php?email=".$row['useremail']."'> ";
                                                              echo "<div class='hover-text'>";
                                                              echo   "<h4>". $row['firstname'] ." ".$row['lastname'] ."</h4>";
                                                              echo    "<small>" .$row['usertype']. "</small>";
                                                              echo    "<div class='clearfix'>"; echo "</div>";
                                                              echo    "<i class='fa fa-plus'>"; echo "</i>";
                                                              echo "</div>";
                                                              $image = "../".$row['image'];
                                                              echo "<img src='$image' class='img-responsive' alt='...'>";
                                                          echo "</a>";
                                                      echo "</div>";
                                                  echo "</div>";
                                              echo "</div>";
                                              }
                                      echo "</div>";
                                      }
            ?>

    <!-- FAQs Section
    ==========================================-->
    <div id="tf-testimonials" class="text-center">
        <div class="overlay">
            <div class="container">
                <div class="section-title center">
                    <h2><strong>Some of your </strong> FAQs</h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div id="testimonial" class="owl-carousel owl-theme">
                            <div class="item">
                                <h5>Where is your office located?</h5>
                                <p><strong>Our office is in </strong> Kileleshwa.</p>
                            </div>

                            <div class="item">
                                <h5> Who is the CEO.</h5>
                                <p><strong>Our CEO is </strong> Christine Njeri.</p>
                            </div>

                            <div class="item">
                                <h5> When was the company founded? .</h5>
                                <p><strong>The company was founded in </strong> 2020.</p>
                            </div>

                            <div class="item">
                                <h5> Who can access financial Aid? </h5>
                                <p><strong>Financial Aid is intended foR </strong> Any Girl CHild</p>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section
    ==========================================-->
    <div id="tf-contact" class="text-center">
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">

                    <div class="section-title center">
                        <h2>Feel free to <strong>contact us</strong></h2>
                        <div class="line">
                            <hr>
                        </div>
                        <div class="clearfix"></div>
                        <small><em>Leave us a message or Testimonial. We;d love to hear from you and share with your ideas.</em></small>
                    </div>

                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Message</label>
                            <textarea class="form-control" rows="3"></textarea>
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