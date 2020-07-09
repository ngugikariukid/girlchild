<?php
include_once('../config.php');
session_start();
            if(!$_SESSION['email'])
            {
                header('location: ../login.php?msg=please_login');
               }
?>
<?php
      if(isset($_GET['msg']) && ($_GET['msg']=="registered"))
      {
          ?>
      <script type='text/javascript'>alert("Successfully registered User!");</script>
          <?php
      }
      if(isset($_GET['msg']) && ($_GET['msg']=="deleted"))
            {
                ?>
            <script type='text/javascript'>alert("Successfully Deleted User!");</script>
                <?php
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
   <!-- Admin Donations Page
         ==========================================-->
         <div id="tf-contact" class="text-center">
             <div class="container">

             <?php
                $q = mysqli_query($db1, " select * from financerequests ") or die("error in getting distributed amount");
                if(mysqli_num_rows($q)>0){
                    $totalgiven = 0;
                    while($row=mysqli_fetch_array($q)) {
                    $x =1;
                    $individualGet=$row['grantedamount'];
                    $totalgiven = $totalgiven + $individualGet;
                    }
                    $x =$x +1;
                }

             ?>

             <?php

                     $q1=mysqli_query($db1, "select * from donations ");
             ?>

                       <h3 class="text-center" style="margin-top: 50px; color: #265a88">Donations Portal</h3>
                       <div class='page-header' style='background:skyblue'></div>
                        <?php if(mysqli_num_rows($q1)>0) { ?>
                    <table class="table table-responsive" style="margin-top: 30px;">
                           <th >Donation ID</th>
                           <th>Donater Email</th>
                           <th>Mobile Number</th>
                           <th>Date</th>
                           <th>Donater Remarks</th>
                           <th>Amount</th>
                    <?php
                           $total = 0;
                           while($row=mysqli_fetch_array($q1)) {
                   			$i=1;
                   			$amount = $row['amount'];
                                   echo " <tr> ";
                                   echo "<td>" . $row['id'] . "</td>";
                                   echo "<td>" . $row['donationfrom'] ." </td>";
                                   echo "<td>" . $row['mobile'] . "</td>";
                                   echo "<td>" . $row['date']."</td>";
                                   echo "<td>" . substr($row['remarks'],0,120) ." </td>";
                                   echo "<td>" . "Ksh ". $row['amount']."</td>";
                                   echo "</tr>";

                                   $total =$total + $amount;
                               }
                              $i=$i+1;

                    ?>
                    <th >TOTAL DONATIONS</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <th> <strong>Ksh <?php echo $total ;?> </strong></th>
                    <tr>
                    <th >Distributed Amount</th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                    <th> <strong>Ksh <?php echo $totalgiven ;?> </strong></th>
                    </tr>
                    <tr>
                                        <th >BALANCE</th>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                        <th> <strong>Ksh <?php $balance = $total-$totalgiven; echo $balance ;?> </strong></th>
                    </tr>

                   </table>

                       <?php } else {  echo " <div class='container'> <div class='alert alert-warning alert-dismissible' role='alert'>
                               <button type='button' class='close'  data-dismiss='alert' aria-label='Close'><span
                                       aria-hidden='true'>&times;</span></button>
                              <p style='font-size: 20px'><strong>Note:</strong> No Users Yet!</p>
                           </div> </div>";
                           }
                        ?>

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