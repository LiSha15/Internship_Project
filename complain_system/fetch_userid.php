<?php
if (isset($_POST['section'])) {
    // Database connection
    $db_host = 'localhost';
    $db_username = 'root';
    $db_password = '';
    $db_name = 'complain-regd';

    $conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

    $section_id = $_POST['section'];

    // Fetch subcategories based on selected category
    $query = "SELECT * FROM section_waise_userid WHERE SECTIONCODE = $section_id";
    $result = mysqli_query($conn, $query);

    $options = '<option value="">Select Subcategory</option>';

    // Iterate over the result set and generate options
    while ($row = mysqli_fetch_assoc($result)) {
        $secwise_userId = $row['USER_ID'];
        $useridName = $row['USER_ID'];
        $options .= "<option value='$secwise_userId'>$useridName</option>";
    }

    echo $options;
}
?>
