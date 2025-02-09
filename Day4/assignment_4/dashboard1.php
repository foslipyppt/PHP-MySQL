<?php

// Start the session to retrieve user details
session_start();

// Check if the user is logged in (i.e., session is active)
if (isset($_SESSION['username'])) {
    echo "<h2>Welcome, " . $_SESSION['username'] . "!</h2>";
    echo "<p>Your username is: " . $_SESSION['username'] . "</p>";
    echo "<p>Your password is: " . $_SESSION['password'] . "</p>"; // In a real app, never display the password like this!

    // Optionally, provide a log-out option
    echo '<a href="logout.php">Logout</a>';
} else {
    echo "<p>You need to log in first.</p>";
}
?>
