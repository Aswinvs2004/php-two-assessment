<?php
include('../includes/db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Validate form data (additional validation can be added)

    // Insert user into the database
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";
    // Execute the query and handle success/failure
}

header("Location: ../pages/signinpage.php");
exit();
?>
