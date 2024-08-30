<?php
require "../../database/database.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $patient_firstname = $_POST['patient_firstname'];
    $patient_othername = $_POST['patient_othername'];
    $patient_email = $_POST['patient_email'];
    $patient_phone_number = $_POST['patient_phone_number'];
    $patient_ghanacard = $_POST['patient_ghanacard'];
    $patient_address = $_POST['patient_address'];
    $user_user_id = $_POST['user_user_id'];
    $blood_type_blood_type_id = $_POST['blood_type_blood_type_id'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO patient (patient_firstname, patient_othername, patient_email, patient_phone_number, patient_ghanacard, patient_address, user_user_id, blood_type_blood_type_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $patient_firstname, $patient_othername, $patient_email, $patient_phone_number, $patient_ghanacard, $patient_address,$user_user_id, $blood_type_blood_type_id);

    // Execute the query
    if ($stmt->execute()) {
        $message= "New record created successfully";
        header("Location: ../../view/add_patient.php?message=$message");
        die();
    } else {
        //echo "Error: " . $stmt->error;
    $message= "Patient records could not be created";
        header("Location: ../../view/add_patient.php?message=$message");
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>