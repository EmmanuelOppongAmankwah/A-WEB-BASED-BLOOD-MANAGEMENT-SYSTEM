<?php 
session_start();
if(isset($_SESSION['username'])){
    $error_message="Logout Successful";
    session_unset();
    session_destroy();
    header("Location: ../index.php?error_message=$error_message");
}
else{
    header("Location: ../index.php");
}