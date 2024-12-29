<?php
// Get the data from the form (if not already passed)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input to prevent XSS
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $main_product = htmlspecialchars($_POST['main_product']);
    $sub_category = isset($_POST['sub_category']) ? htmlspecialchars($_POST['sub_category']) : 'Not selected';  // Default value if no sub-category selected
    $quantity = htmlspecialchars($_POST['quantity']);
    $poster_printing = htmlspecialchars($_POST['poster_printing']);
    $notes = htmlspecialchars($_POST['notes']);

    // Validate required fields (e.g., email, phone)
    if (empty($name) || empty($email) || empty($phone) || empty($main_product) || empty($quantity)) {
        echo "<p>Please fill in all required fields.</p>";
        exit;
    }

    // Optionally validate the email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p>Invalid email format.</p>";
        exit;
    }

    // Display the booking details
    echo "<h2>Your booking has been successfully submitted!</h2>";
    echo "<h3>Booking Details:</h3>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Phone:</strong> $phone</p>";
    echo "<p><strong>Main Product:</strong> $main_product</p>";
    echo "<p><strong>Sub Category:</strong> $sub_category</p>"; // Display sub-category
    echo "<p><strong>Quantity:</strong> $quantity</p>";
    echo "<p><strong>Poster Printing:</strong> $poster_printing</p>";
    echo "<p><strong>Notes:</strong> $notes</p>";

    // You can remove the email part here
    // For now, we are simply displaying a message
    echo "<p>No confirmation email will be sent.</p>";
}
?>

