<?php

// error_reporting(E_ERROR | E_PARSE);
include "./adminHeader.php";
include "../side.php";
         


// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the system-generated ID from the form submission
    $sgId = $_POST['sgId'];

    // Store the ID in the session
    $_SESSION['sgId'] = $sgId;

    // Redirect to the page that will display the retrieved data
    header('Location: statusShow.php');
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Status page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="./assets/css/style.css"> -->
</head>

<body style="background-image: url(../blue_train.jpg); background-size: cover;">
    <form action="statusShow.php" method="POST" style="margin-left: 40%; margin-top: 45px;">
        <div class="form-group">
            <label style="text-align: center;" for="sgId">System-generated ID:</label>
            <input type="text" id="sgId" name="sgId" class="form-control" style="width:300px; border:1px solid black"
                required>
            <input type="submit" class="btn btn-primary" value="Submit" style="margin-top: 1.5rem; margin-left: 5rem;">
        </div>
    </form>
</body>

</html>