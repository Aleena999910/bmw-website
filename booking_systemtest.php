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
    $main_product = htmlspecialchars($_POST['main_product']);
    $quantity = htmlspecialchars($_POST['quantity']);
    $poster_printing = htmlspecialchars($_POST['poster_printing']);

    // Insert into database (example query)
    $sql = "INSERT INTO bookings (name, email, phone, main_product, quantity, poster_printing) 
            VALUES ('$name', '$email', '$phone', '$main_product', '$quantity', '$poster_printing')";
    
    if ($conn->query($sql) === TRUE) {
        // Store booking data in session
        $_SESSION['booking_data'] = [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'main_product' => $main_product,
            'quantity' => $quantity,
            'poster_printing' => $poster_printing,
        ];
        
        // Redirect to confirmation page
        header("Location: confirmation.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
