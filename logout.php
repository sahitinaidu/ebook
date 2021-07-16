<?php
session_start();
include("includes/config.php");
$_SESSION['login']="";
date_default_timezone_set('Asia/Kolkata');
$ldate=date( 'd-m-Y h:i:s A', time () );

session_unset();
header("location:index.php");

?>

