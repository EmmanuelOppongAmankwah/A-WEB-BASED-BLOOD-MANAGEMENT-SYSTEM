<?php
require "../../database/database.php";
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $blood_recepient_id = $_GET['blood_recepient_id'];

    // Prepare and bind
    $stmt = $conn->prepare("UPDATE `blood_recepient` SET `blood_recepient_isdeleted`=1 WHERE blood_recepient_id = ?");
    $stmt->bind_param("s", $blood_recepient_id);

    // Execute the query
    if ($stmt->execute()) {
        $message= "Record deleted successfully";
        header("Location: ../../view/recepient_list.php?message=$message");
        die();
    } else {
        $message= $stmt->error;
        header("Location: ../../view/recepient_list.php?message=$message");
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();