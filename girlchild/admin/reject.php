<?php
    include_once('../config.php');
    $financeid= $_GET['eid'];

        $query = mysqli_query($db1, " update financerequests set status = 1 where id = '$financeid' ") or die("Could not delete");
        $query = mysqli_query($db1, " update financerequests set grantedamount = 0 where id = '$financeid' ") or die("Could not delete");
        header('location: managedonations.php?msg=updated');
?>