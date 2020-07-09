<?php

include_once('../config.php');
session_start();
$donater = $_SESSION['email'];

            if( !$_SESSION['email'] && !$_SESSION['firstname'] )
            {
                header('location: ../login.php?msg=please_login');
            }

echo $mobile = $_POST['mobile'];
echo $amount = $_POST['amount'];
echo $remarks = $_POST['remarks'];

echo $currentTime = date('Y-m-d H:i:s');

$insertQuery= "insert into donations (id, donationfrom, mobile, amount, date, remarks) values (0, '$donater', '$mobile', '$amount', '$currentTime', '$remarks' ) ";
mysqli_query($db1, $insertQuery);
header('location:index.php?msg=sent');


?>