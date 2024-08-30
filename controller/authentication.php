<?php 
require "../database/database.php";
session_start();
if(isset($_SESSION['username'])){
    header("Location: ../view/dashboard.php");
}
else{
    $username = $_POST['username'];
    $password = $_POST['password'];

if(empty($username)){
    $error_message= "Username cannot be empty";
    header("Location: ../index.php?error_message=$error_message");
    die();
}
if(empty($password)){
    $error_message= "Password cannot be empty";
    header("Location: ../index.php?error_message=$error_message");
    die();
}

//checking if user is in the database
$sql= "SELECT * FROM user WHERE user_username='$username'";
$result = $conn->query($sql);
//if the username is correct
if ($result->num_rows > 0) {
    $sql= "SELECT * FROM user WHERE user_username='$username' AND user_password='$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row=mysqli_fetch_assoc($result);
        $_SESSION['id']=$row['user_id'];
        $_SESSION['username']=$row['user_username'];
        header("Location: ../view/dashboard.php");
    }else{
        $error_message= "password missmatch!";
        header("Location: ../index.php?error_message=$error_message");
        die();
    }
}else{
    $error_message= "Username does not exist!";
    header("Location: ../index.php?error_message=$error_message");
    die();
}
}
