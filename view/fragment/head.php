<?php 
require "../database/database.php";
session_start();
if(isset($_SESSION['username'])){
   
}else{ header("Location: ../index.php");}
?>
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
<title>Blood Management Application</title>
<meta charset="utf-8">
<meta name="description" content="Stay on top of your bloodwork. Easily track results, manage medications & improve your health.">
<meta name="keywords" content="Blood Management System, BMS">
<meta name="Emmanuel Oppong" content="BMS">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Vendor: Bootstrap Stylesheets http://getbootstrap.com -->

<!-- Our Website CSS Styles -->
<link rel="stylesheet" href="../assets/css/icons.css">
<link rel="stylesheet" href="../assets/css/main.css">
<link rel="stylesheet" href="../assets/css/responsive.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/2.1.3/css/dataTables.bootstrap4.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
<!-- Or for RTL support -->


</head>
<body>
<div class="se-pre-con"></div>