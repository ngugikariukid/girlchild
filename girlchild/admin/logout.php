<?php
include_once('../config.php');
session_start();
session_destroy();

header('location:../index.php?msg=success_logout');

?>