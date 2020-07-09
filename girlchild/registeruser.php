<?php
include_once('config.php');
$firstname = $_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['useremail'];
$passd=$_POST['userpass'];
$hash = password_hash($passd, PASSWORD_DEFAULT);
$defaultUser = "user";

$insertQuery = "insert into userlogindetails (userid, useremail, firstname, lastname, password, usertype) values (0, '$email', '$firstname', '$lastname', '$hash', '$defaultUser')";
mysqli_query($db1, $insertQuery) or die("cant register");


    header('location:login.php?msg=registered');
?>