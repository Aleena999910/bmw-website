<?php
// Debug: Check if the form is being submitted and output the raw POST data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo '<pre>';
    print_r($_POST);  // Display all POST data
    echo '</pre>';
    
    // Collect form data
    $full_name = trim($_POST['full_name']);
    $email = trim($_POST['email']);
    $phone_number = trim($_POST['phone_number']);
    $request_date = trim($_POST['request_date']);
    $notes = isset($_POST['notes']) ? trim($_POST['notes']) : '';

    // Validate required fields
    if (empty($full_name) || empty($email) || empty($phone_number) || empty($request_date)) {
        die('All required fields must be filled out.');
    }

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'bmw');

    // Check for database connection errors
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO purchase_request (full_name, email, phone_number, notes, request_date) 
                            VALUES (?, ?, ?, ?, ?)");

    // Check if preparation was successful
    if ($stmt === false) {
        die('Error preparing statement: ' . $conn->error);
    }

    // Bind parameters to the SQL statement
    $stmt->bind_param("sssss", $full_name, $email, $phone_number, $notes, $request_date);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Your request has been submitted successfully.";
    } else {
        echo "Error executing statement: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
