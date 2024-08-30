<?php
require "../../database/database.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_type_id = $_POST['user_type_id'];
    $user_type_name = $_POST['user_type_name'];
    $user_type_date_created = $_POST['user_type_date_created'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO user_type (user_type_name) VALUES (?)");
    $stmt->bind_param("s", $user_type_name,);

    // Execute the query
    if ($stmt->execute()) {
        $message= "New record created successfully";
        header("Location: ../../view/add_user_type.php?message=$message");
        die();
    } else {
        //echo "Error: " . $stmt->error;
    $message= "user_type records could not be created";
        header("Location: ../../view/add_user_type.php?message=$message");
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>