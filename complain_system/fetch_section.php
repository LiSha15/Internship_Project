<?php
// Database connection
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'complain-regd';

$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

// Fetch categories from the database
$query = "SELECT * FROM section_master";
$result = mysqli_query($conn, $query);

$options = '<option value="">Select SECTION</option>';

while ($row = mysqli_fetch_assoc($result)) {
    $options .= '<option value="' . $row['SECTIONCODE'] . '">'. $row['SECTIONDESC'] . '</option>';
}

echo $options;
?>
