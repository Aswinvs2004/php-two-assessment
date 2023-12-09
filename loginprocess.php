<?php
include('../includes/db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user_accounts WHERE username = '$username'";
    // Execute the query and fetch the user record

    if ($user && password_verify($password, $user['password'])) {
        session_start();
        $_SESSION['user_id'] = $user['id'];
        header("Location: ../pages/loginsuccesspage.php");
        exit();
    } else {
        header("Location: ../pages/signinpage.php?error=1");
        exit();
    }
}
?>
