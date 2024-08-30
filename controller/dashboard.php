<?php 
require "../database/database.php";
session_start();
if(isset($_SESSION['username'])){
    
}
else{
    header("Location: ../view/dashboard.php");
}
