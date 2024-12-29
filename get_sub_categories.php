<?php
// Assuming you have a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "booking_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch sub-categories based on main product ID
if (isset($_POST['main_product'])) {
    $main_product_id = $_POST['main_product'];

    // Debugging: Check if main product ID is being received correctly
    if (!$main_product_id) {
        echo json_encode(['error' => 'No main product ID received']);
        exit;
    }

    // Query the database for sub-categories
    $sql = "SELECT * FROM sub_categories WHERE main_product_id = $main_product_id";
    $result = $conn->query($sql);

    $sub_categories = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $sub_categories[] = $row;
        }
    }

    // Debugging: Check if sub-categories are fetched correctly
    if (empty($sub_categories)) {
        echo json_encode(['error' => 'No sub-categories found']);
    } else {
        echo json_encode($sub_categories);
    }
}
?>
