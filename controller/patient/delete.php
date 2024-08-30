<?php
require "../../database/database.php";
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $patient_id = $_GET['patient_id'];

    // Prepare and bind
    $stmt = $conn->prepare("UPDATE `patient` SET `patient_isdeleted`=1 WHERE patient_id = ?");
    $stmt->bind_param("s", $patient_id);

    // Execute the query
    if ($stmt->execute()) {
        $message= "Record deleted successfully";
        header("Location: ../../view/patient_list.php?message=$message");
        die();
    } else {
        $message= $stmt->error;
        header("Location: ../../view/patient_list.php?message=$message");
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();