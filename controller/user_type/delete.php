<?php
require "../../database/database.php";
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $user_type_id = $_GET['user_type_id'];

    // Prepare and bind
    $stmt = $conn->prepare("UPDATE `user_type` SET `user_type_isdeleted`=1 WHERE user_type_id = ?");
    $stmt->bind_param("s", $user_type_id);

    // Execute the query
    if ($stmt->execute()) {
        $message= "Record deleted successfully";
        header("Location: ../../view/user_type_list.php?message=$message");
        die();
    } else {
        $message= $stmt->error;
        header("Location: ../../view/user_type_list.php?message=$message");
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();