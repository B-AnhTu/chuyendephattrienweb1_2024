<?php
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

// Ensure the user is logged in
if (!isset($_SESSION['user_id'])) {
    $_SESSION['error'] = 'You must be logged in to perform this action.';
    header('location: login.php');
    exit;
}

$id = NULL;
$currentUser = $_SESSION['user_id']; // Currently logged-in user

// Check if 'id' is present in the URL
if (!empty($_GET['id'])) {
    $id = base64_decode($_GET['id']); // Decode the ID

    // Find the user to be deleted
    $userToDelete = $userModel->findUserById($id);
    
    // If the user doesn't exist, show an error and redirect to user list
    if (!$userToDelete) {
        $_SESSION['error'] = 'User does not exist.';
        header('location: list_users.php');
        exit;
    }

    // Check if the logged-in user is trying to delete their own account
    if ($currentUser != $id) {
        $_SESSION['error'] = 'You can only delete your own account.';
        header('location: list_users.php');
        exit;
    }

    // Proceed to delete if the user matches
    $userModel->deleteUserById($id);
    
    // Destroy the session and log out the user after successful deletion
    $_SESSION['success'] = 'Your account has been deleted.';
    session_unset(); // Unset all session variables
    session_destroy(); // Destroy the session

    header('location: list_users.php'); // Redirect to user list after deletion
    exit;
} else {
    $_SESSION['error'] = 'No user ID provided.';
    header('location: list_users.php');
    exit;
}
