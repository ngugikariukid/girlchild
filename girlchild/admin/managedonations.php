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
      if(isset($_GET['msg']) && ($_GET['msg']=="insufficient"))
            {
                ?>
            <script type='text/javascript'>alert("Insufficient balance in account to Grant!");</script>
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
   <!-- Admin Manage Users Page
         ==========================================-->
         <div id="tf-contact" class="text-center">
             <div class="container">

             <?php
                     include_once('../config.php');
                     $q1=mysqli_query($db1, "select * from financerequests where status = 0 ");
             ?>
                       <h3 class="text-center" style="margin-top: 50px; color: #265a88">Manage Users Portal</h3>
                       <div class='page-header' style='background:skyblue'></div>
                        <?php if(mysqli_num_rows($q1)>0) { ?>
                    <table class="table table-responsive" style="margin-top: 30px;">
                           <th >Request ID</th>
                           <th>Requester</th>
                           <th>Amount</th>
                           <th>Request Date</th>
                           <th>Reason</th>
                           <th >Accept</th>
                           <th >Reject</th>
                    <?php
                           while($row=mysqli_fetch_array($q1)) {
                   			$i=1;
                                   echo " <tr> ";
                                   echo "<td>" . $row['id'] . "</td>";
                                   echo "<td>" . $row['requester'] ." </td>";
                                   echo "<td>"  . "Ksh " . $row['requestedamount'] . "</td>";
                                   echo "<td>" . $row['reqdate']."</td>";
                                   echo "<td>" . $row['reason']."</td>";
                                   echo "<td>  <a style='color: whitesmoke;'  href='distribute.php?amount=".$row['requestedamount']."&eid=" . $row['id'] . "'><button type='button' class='btn btn-success'>Grant</button> </a></td>";
                                   echo "<td>  <a style='color: whitesmoke;'  href='reject.php?eid=" . $row['id'] . "'><button  type='button' class='btn btn-success'>Reject</button> </a></td>";
                                   echo "</tr>";
                            }
                            $i=$i+1;
                    ?>
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