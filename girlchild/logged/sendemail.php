<?php

include_once('../config.php');
session_start();
$helperemail = $_GET['to'];
$email = $_SESSION['email'];

            if( !$_SESSION['email'] && !$_SESSION['firstname'] )
            {
                header('location: ../login.php?msg=please_login');
            }

 $emailto = $helperemail;
 $emailfrom = $email;
 $subject = $_POST['subject'];
 $body = $_POST['message'];
 $currentTime = date('Y-m-d H:i:s');
 $defaultUnread = 0;

$insertQuery= "insert into emails (id, emailfrom, emailto, subject, sentdate, message, status) values (0, '$emailfrom', '$emailto', '$subject', '$currentTime', '$body', '$defaultUnread' ) ";
mysqli_query($db1, $insertQuery);
header('location:index.php?msg=sent');


?>