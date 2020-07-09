<?php
include_once('config.php');
$username = $_POST['useremail'];
$password = $_POST['userpass'];
$currentTime = date('Y-m-d H:i:s');

$loginQuery =mysqli_query($db1, "select * from userlogindetails where useremail = '$username' ") or die("Could not fetch");

$result = mysqli_fetch_array($loginQuery, MYSQLI_ASSOC);

if( ($result>0)  && (password_verify($password, $result['password']))){

    $auditQuery=mysqli_query($db1, " insert into auditTrail(trailid,user,timestamp) values(0, '$username', '$currentTime') ") or die("Could not insert");

    if ($result['usertype'] == "admin"){
            session_start();
            $_SESSION["email"] = $result['useremail'];
            $_SESSION["type"] == $result['usertype'];
            $_SESSION["firstname"] == $result['firstname'];

            header('location:admin/adminhome.php?msg=success');
        }

    elseif(($result['usertype'] == "user") || ($result['usertype'] == "lawyer") || ($result['usertype'] == "psychiatrist")){
        session_start();

        $_SESSION["email"] = $result['useremail'];
        $_SESSION["type"] == $result['usertype'];
        $_SESSION["firstname"] == $result['firstname'];

        header('location:logged/index.php?msg=success');
    }
    }

    else{
        echo "<script> alert('Invalid Details')</script>";
        header('location:login.php?msg=failed');
    }
?>