<?php

function userLogin($username, $password) {
    // Retreive user from database
    // Verify password
    // Start session if successful
}

function userLogout() {
    // Destroy session
}

function isLoggedIn() {
    // Check if user session exists
    return isset($_SESSION['user_id']);
}

// Example usage:
// if (userLogin($username, $password)) {
//     echo 'Login successful!';
// } else {
//     echo 'Login failed!';
// }