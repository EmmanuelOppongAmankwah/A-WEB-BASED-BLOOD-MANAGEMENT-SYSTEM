<?php
require "../../database/database.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $blood_type_name = $_POST['blood_type_name'];
    $user_user_id = $_POST['user_user_id'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO blood_type (blood_type_name, user_user_id) VALUES (?, ?)");
    $stmt->bind_param("ss", $blood_type_name, $user_user_id);

    // Execute the query
    if ($stmt->execute()) {
        $message= "New record created successfully";
        header("Location: ../../view/add_blood_type.php?message=$message");
        die();
    } else {
        //echo "Error: " . $stmt->error;
    $message= "type records could not be created";
        header("Location: ../../view/add_blood_type.php?message=$message");
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>