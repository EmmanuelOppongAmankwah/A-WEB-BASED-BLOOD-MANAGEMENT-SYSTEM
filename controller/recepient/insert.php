<?php
require "../../database/database.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $no_of_bottles = $_POST['no_of_bottles'];
    $user_user_id = $_POST['user_user_id'];
    $patient_patient_id = $_POST['patient_patient_id'];
    $sql= "SELECT blood_type_blood_type_id FROM patient WHERE patient_id=$patient_patient_id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {$row=mysqli_fetch_assoc($result);$blood_type_id= $row['blood_type_blood_type_id'];
    }else{}
    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO blood_recepient (no_of_bottles, user_user_id, patient_patient_id,blood_type_id) VALUES (?, ?, ?,?)");
    $stmt->bind_param("ssss", $no_of_bottles, $user_user_id, $patient_patient_id,$blood_type_id);

    // Execute the query
    if ($stmt->execute()) {
        $message= "New record created successfully";
        header("Location: ../../view/add_recepient.php?message=$message");
        die();
    } else {
        //echo "Error: " . $stmt->error;
    $message= "recepient records could not be created";
        header("Location: ../../view/add_recepient.php?message=$message");
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>