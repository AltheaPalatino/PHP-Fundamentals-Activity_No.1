<?php 
session_start();

if (isset($_POST['submitBtn'])) {
    // Check if someone is already logged in
    if (isset($_SESSION['username'])) {
        // Store the message that another user is already logged in
        $loggedInUser = $_SESSION['username'];
        $_SESSION['error_message'] = "$loggedInUser is already logged in. Wait for him/her to log out first.";
        
        // Redirect back to index.php to display the message
        header('Location: index.php');
        exit();
    } else {
        // Proceed with login if no one is logged in
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;

        // Clear any previous error messages
        unset($_SESSION['error_message']);

        header('Location: index.php');
        exit();
    }
}
?>
