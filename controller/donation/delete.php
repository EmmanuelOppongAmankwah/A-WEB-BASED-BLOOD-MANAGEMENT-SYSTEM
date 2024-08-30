<?php
require "../../database/database.php";
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $blood_donation_id = $_GET['blood_donation_id'];

    // Prepare and bind
    $stmt = $conn->prepare("UPDATE `blood_donation` SET `blood_donation_isdeleted`=1 WHERE blood_donation_id = ?");
    $stmt->bind_param("s", $blood_donation_id);

    // Execute the query
    if ($stmt->execute()) {
        $message= "Record deleted successfully";
        header("Location: ../../view/donation_list.php?message=$message");
        die();
    } else {
        $message= $stmt->error;
        header("Location: ../../view/donation_list.php?message=$message");
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();