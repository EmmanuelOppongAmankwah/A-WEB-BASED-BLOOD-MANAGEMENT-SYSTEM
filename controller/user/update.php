<?php
require "../../database/database.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];
    $user_firstname = $_POST['user_firstname'];
    $user_othername = $_POST['user_othername'];
    $user_lastname = $_POST['user_lastname'];
    $user_username = $_POST['user_username'];
    $user_email = $_POST['user_email'];
    $user_type_user_type_id = $_POST['user_type_user_type_id'];

    // Prepare and bind
    $sql = "UPDATE user SET user_firstname = ?, user_othername = ?, user_lastname = ?, user_email = ?, user_password = ? WHERE user_id = ?";

// Prepare statement
$stmt = $conn->prepare($sql);

// Bind parameters
$stmt->bind_param("sssssi", $user_firstname, $user_othername, $user_lastname, $user_username, $user_email, $user_id);

    // Execute the query
    if ($stmt->execute()) {
        $message= "user record updated successfully";
        header("Location: ../../view/edit_user.php?user_id=$user_id&message=$message");
        die();
    } else {
        //echo "Error: " . $stmt->error;
    $message= "Awww user records could not be upadte. Try Again";
        header("Location: ../../view/edit_user.php?user_id=$user_id&message=$message");
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>