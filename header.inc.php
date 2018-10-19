<?php

session_start();

if(empty($_SESSION['id'])){
  header("Location:accessdenied.php");
}

require 'connect.inc.php';
$rightnow = date("M jS, Y");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
  <link rel="shortcut icon" href="images/EliteIco.ico" type="image/x-icon">
	<title>Elite Image Detailing - Admin</title>
	<!-- linking css stylesheet -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
	<!-- linkin custom css -->
	<link rel="stylesheet" type="text/css" href="styles.css"/>
	<!-- adding font awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<!-- Adding jQuery -->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>



</head>
<body>
