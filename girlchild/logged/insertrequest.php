<?php

include_once('../config.php');
session_start();
$requester = $_SESSION['email'];

            if( !$_SESSION['email'] && !$_SESSION['firstname'] )
            {
                header('location: ../login.php?msg=please_login');
            }

echo $reason = $_POST['reason'];
echo $amount = $_POST['amount'];

echo $currentTime = date('Y-m-d H:i:s');
echo $defaultStatus = 0;

$insertQuery= "insert into financerequests (id, requester, reason, requestedamount, reqdate, grantedamount, grantdate, status) values (0, '$requester', '$reason', '$amount', '$currentTime', 0, NULL, '$defaultStatus' ) ";
mysqli_query($db1, $insertQuery);
header('location:index.php?msg=sent');


?>