<?php
include_once('../config.php');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['useremail'];
$pass = $_POST['userpass'];
$hash = password_hash($pass, PASSWORD_DEFAULT);
$usertype = $_POST['usertype'];

$statusMsg = '';

// File upload path
$targetDir = "uploads/images/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = "../".$targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(!empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database

            $insertQuery = "insert into userlogindetails (userid, useremail, firstname, lastname, password, usertype, image) values (0, '$email', '$firstname', '$lastname',  '$hash', '$usertype', '$targetFilePath') ";
            mysqli_query($db1, $insertQuery) or die("Could not add");
            header('location:manageusers.php?msg=registered');
        }
        else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;


?>