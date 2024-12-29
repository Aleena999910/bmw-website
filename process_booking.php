<?php
// Include the database connection
include 'db.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $main_product = $_POST['main_product'];
    $sub_category = isset($_POST['sub_category']) ? $_POST['sub_category'] : null;
    $quantity = $_POST['quantity'];
    $poster_printing = $_POST['poster_printing'];
    $notes = isset($_POST['notes']) ? $_POST['notes'] : null;

    // Prepare the SQL statement
    $sql = "INSERT INTO bookings (name, email, phone, main_product, sub_category, quantity, poster_printing, notes)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssss", $name, $email, $phone, $main_product, $sub_category, $quantity, $poster_printing, $notes);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Booking successfully submitted!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
