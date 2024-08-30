<?php
require "../../database/database.php";
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $user_id = $_GET['user_id'];

    // Prepare and bind
    $stmt = $conn->prepare("UPDATE `user` SET `user_isdeleted`=1 WHERE user_id = ?");
    $stmt->bind_param("s", $user_id);

    // Execute the query
    if ($stmt->execute()) {
        $message= "Record deleted successfully";
        header("Location: ../../view/user_list.php?message=$message");
        die();
    } else {
        $message= $stmt->error;
        header("Location: ../../view/user_list.php?message=$message");
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();