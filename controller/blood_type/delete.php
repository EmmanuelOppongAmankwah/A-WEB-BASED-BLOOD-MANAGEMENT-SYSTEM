<?php
require "../../database/database.php";
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $blood_type_id = $_GET['blood_type_id'];

    // Prepare and bind
    $stmt = $conn->prepare("UPDATE `blood_type` SET `blood_type_iscreated`=1 WHERE blood_type_id = ?");
    $stmt->bind_param("s", $blood_type_id);

    // Execute the query
    if ($stmt->execute()) {
        $message= "Record deleted successfully";
        header("Location: ../../view/blood_type_list.php?message=$message");
        die();
    } else {
        $message= $stmt->error;
        header("Location: ../../view/blood_type_list.php?message=$message");
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();