<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form</title>
</head>
<body>
    <h2>Booking Form</h2>
    <form action="process_booking.php" method="POST">
        <label for="name">Full Name: *</label>
        <input type="text" id="name" name="name" required><br>

        <label for="email">Email: *</label>
        <input type="email" id="email" name="email" required><br>

        <label for="phone">Phone Number: *</label>
        <input type="tel" id="phone" name="phone" required><br>

        <!-- Product selection (simplified for this example) -->
        <label for="main-product">Main Product:</label>
        <select id="main-product" name="main_product" required>
            <option value="">Select a Product</option>
            <option value="acrylic">Acrylic Sheet</option>
            <option value="display">Display System</option>
            <!-- Add more options as needed -->
        </select><br>

        <label for="quantity">Quantity: *</label>
        <input type="number" id="quantity" name="quantity" min="1" required><br>

        <label for="poster-printing">Include Poster Printing:</label>
        <select id="poster-printing" name="poster_printing" required>
            <option value="">Select an option</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select><br>

        <label for="notes">Additional Notes (Optional):</label><br>
        <textarea id="notes" name="notes" rows="4" cols="50"></textarea><br>

        <button type="submit">Submit Booking</button>
    </form>
</body>
</html>
