<?php
require "../../database/database.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_type_id = $_POST['user_type_id'];
    $user_type_name = $_POST['user_type_name'];
    $user_type_date_created = $_POST['user_type_date_created'];
    $user_type_isdeleted = $_POST['user_type_isdeleted'];

    // Prepare and bind
    $sql = "UPDATE user_type SET user_type_name = ? WHERE user_type_id = ?";

// Prepare statement
$stmt = $conn->prepare($sql);

// Bind parameters
$stmt->bind_param("si", $user_type_name, $user_type_id);

    // Execute the query
    if ($stmt->execute()) {
        $message= "user_type record updated successfully";
        header("Location: ../../view/edit_user_type.php?user_type_id=$user_type_id&message=$message");
        die();
    } else {
        //echo "Error: " . $stmt->error;
    $message= "Awww user_type records could not be upadte. Try Again";
        header("Location: ../../view/edit_user_type.php?user_type_id=$user_type_id&message=$message");
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>