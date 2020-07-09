<?php

include_once('../config.php');
session_start();

$replyemail = $_GET['email'];
$fromemail = $_SESSION['email'];
$emailId = $_GET['emailid'];

            if( !$_SESSION['email'] && !$_SESSION['firstname'] )
            {
                header('location: ../login.php?msg=please_login');
            }

 $emailto = $replyemail;
$emailfrom = $fromemail;
$subject = "reply";
 $body = $_POST['message'];
 $currentTime = date('Y-m-d H:i:s');
 $defaultUnread = 0;

 $q1 = mysqli_query($db1, "update emails set status = 1 where id = $emailId " ) or die("Error in update");

$insertQuery= "insert into emails (id, emailfrom, emailto, subject, sentdate, message, status) values (0, '$emailfrom', '$emailto', '$subject', '$currentTime', '$body', '$defaultUnread' ) ";
mysqli_query($db1, $insertQuery);
header('location:index.php?msg=replied');


?>