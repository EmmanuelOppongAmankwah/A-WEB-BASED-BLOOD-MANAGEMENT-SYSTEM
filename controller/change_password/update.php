<?php
session_start();
$host = "localhost";
$username = "root";
$password = "";
$database = "bms";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION['id']; // User ID stored in the session
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    // Validate that the new password and confirm password match
    if ($new_password !== $confirm_password) {
        header("Location: ../../view/change_password.php?message=New password and confirm password do not match");
        exit;
    }

    // Retrieve the user's current password from the database
    $query = "SELECT user_password FROM user WHERE user_id = ?";
    $stmt = $conn->prepare($query);
    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $stmt->bind_result($stored_password);
    $stmt->fetch();
    $stmt->close();

    // Debugging output
    error_log("Stored Password: " . $stored_password);
    error_log("Old Password: " . $old_password);

    // Check if the old password matches the stored password
    if ($old_password === $stored_password) {
        // Update the password in the database
        $update_query = "UPDATE user SET user_password = ? WHERE user_id = ?";
        $update_stmt = $conn->prepare($update_query);
        if ($update_stmt === false) {
            die("Prepare failed: " . $conn->error);
        }
        $update_stmt->bind_param("si", $new_password, $user_id);

        if ($update_stmt->execute()) {
            header("Location: ../../view/change_password.php?message=Password updated successfully");
        } else {
            header("Location: ../../view/change_password.php?message=Failed to update password");
        }
        $update_stmt->close();
    } else {
        header("Location: ../../view/change_password.php?message=Incorrect old password");
    }
}

$conn->close();
?>
