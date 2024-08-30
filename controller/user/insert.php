<?php
require "../../database/database.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_firstname = $_POST['user_firstname'];
    $user_othername = $_POST['user_othername'];
    $user_lastname = $_POST['user_lastname'];
    $user_username = $_POST['user_username'];
    $user_password = $_POST['user_password'];
    $user_email = $_POST['user_email'];
    $user_date_created = $_POST['user_date_created'];
    $user_last_login = $_POST['user_last_login'];
    $user_type_user_type_id = $_POST['user_type_user_type_id'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO user (user_firstname, user_othername, user_lastname, user_username, user_password, user_email, user_date_created, user_last_login, user_type_user_type_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssss", $user_firstname, $user_othername, $user_lastname, $user_username, $user_password, $user_email, $user_date_created, $user_last_login,$user_type_user_type_id);

    // Execute the query
    if ($stmt->execute()) {
        $message= "New record created successfully";
        header("Location: ../../view/add_user.php?message=$message");
        die();
    } else {
        //echo "Error: " . $stmt->error;
    $message= "user records could not be created";
        header("Location: ../../view/add_user.php?message=$message");
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>