<?php
    include_once('../config.php');

    $userid= $_GET['eid'];
    $query = mysqli_query($db1, "delete from userlogindetails where userid = '$userid' ") or die("Could not delete");
    header('location: manageusers.php?msg=deleted');
?>