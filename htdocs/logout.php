<?php
require_once('private/functions.php');
$_SESSION['message'] = "Logged out successfully";
unset($_SESSION['user']);
unset($_SESSION['loggedin']);
unset($_SESSION['admin']);
header("Location: " . "index.php");
?>