// Assuming the uploaded receipt is saved on the server
$receipt_file = 'path/to/receipt.jpg';  // Path of the uploaded receipt

// Get the request_id from the previous inserted purchase request
$request_id = $_POST['request_id'];  // Assuming request_id is available, possibly from session or previous data

// SQL query to insert the payment receipt data into the payment_receipts table
$sql = "INSERT INTO payment_receipts (request_id, receipt_file) 
        VALUES ('$request_id', '$receipt_file')";
