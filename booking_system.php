<?php
session_start();

// Simulated database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "booking_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $product = htmlspecialchars($_POST['product']); // Ensure the field is named correctly
    $quantity = htmlspecialchars($_POST['quantity']);
    $poster_printing = htmlspecialchars($_POST['poster_printing']);
    $notes = htmlspecialchars($_POST['notes']); // You may want to include notes as well if needed

    // Insert into database (make sure column names match your database schema)
    $sql = "INSERT INTO bookings (name, email, phone, product, quantity, poster_printing, notes) 
            VALUES ('$name', '$email', '$phone', '$product', '$quantity', '$poster_printing', '$notes')";
    
    if ($conn->query($sql) === TRUE) {
        // Store booking data in session
        $_SESSION['booking_data'] = [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'product' => $product,
            'quantity' => $quantity,
            'poster_printing' => $poster_printing,
            'notes' => $notes
        ];
        
        // Redirect to confirmation page
        header("Location: confirmation.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
