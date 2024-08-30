<?php
require "../../database/database.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $patient_id = $_POST['patient_id'];
    $patient_firstname = $_POST['patient_firstname'];
    $patient_othername = $_POST['patient_othername'];
    $patient_email = $_POST['patient_email'];
    $patient_phone_number = $_POST['patient_phone_number'];
    $patient_ghanacard = $_POST['patient_ghanacard'];
    $patient_address = $_POST['patient_address'];
    $user_user_id = $_POST['user_user_id'];
    $blood_type_blood_type_id = $_POST['blood_type_blood_type_id'];

    // Prepare and bind
    $sql = "UPDATE patient SET patient_firstname = ?, patient_othername = ?, patient_email = ?, patient_phone_number = ?, 
    patient_ghanacard = ?,patient_address = ?, blood_type_blood_type_id = ? WHERE patient_id = ?";

// Prepare statement
$stmt = $conn->prepare($sql);

// Bind parameters
$stmt->bind_param("ssssssii", $patient_firstname, $patient_othername, $patient_email, $patient_phone_number, $patient_ghanacard, $patient_address, $blood_type_blood_type_id, $patient_id);

    // Execute the query
    if ($stmt->execute()) {
        $message= "Patient record updated successfully";
        header("Location: ../../view/edit_patient.php?patient_id=$patient_id&message=$message");
        die();
    } else {
        //echo "Error: " . $stmt->error;
    $message= "Awww Patient records could not be upadte. Try Again";
        header("Location: ../../view/edit_patient.php?patient_id=$patient_id&message=$message");
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>