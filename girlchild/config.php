<?php
$host = "localhost";
$user  = "root";
$password =  "";
$database = "okoagirls";

$db1 = new mysqli($host, $user, $password, $database);

if($db1->connect_errno > 0){
    die('Unable to connect to database' . $db1->connect_error);
}else{
    //echo "Database is connected.";
}

?>