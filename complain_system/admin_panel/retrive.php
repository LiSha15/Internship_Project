<!-- retrieve.php -->

<?php
// Start the session
session_start();

// Retrieve the system-generated ID from the form submission
$sgId = $_POST['sgId'];

// Store the ID in the session
$_SESSION['sgId'] = $sgId;

// Redirect to the page that will display the retrieved data
header('Location: /statusShow.php');
exit();
?>
