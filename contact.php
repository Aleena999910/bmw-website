<?php
// Database connection
$servername = "localhost"; // Change to your server name
$username = "root"; // Your DB username
$password = ""; // Your DB password
$dbname = "contact"; // Your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and capture form data
    $name = $conn->real_escape_string($_POST['name']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $message = $conn->real_escape_string($_POST['message']);
    
    // Insert into database
    $sql = "INSERT INTO contact_form (name, phone, message) VALUES ('$name', '$phone', '$message')";
    
    if ($conn->query($sql) === TRUE) {
      $successMessage = "Message sent successfully!";
  } else {
      $errorMessage = "Error: " . $sql . "<br>" . $conn->error;
  }
    
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Confirmation</title>
    <link href="css/bootstrap-4.4.1.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet" type="text/css">
    <style>
        .navbar {
            background-color: #C70000 !important;
        }

        /* Optional: Footer hover effect */
        .footer a:hover {
            opacity: 0.8;
        }

        .navbar-nav .nav-link {
            color: white !important;
        }
        /* Make sure body and html take full height */
html, body {
    height: 100%;
    margin: 0;
    padding: 0;
}

/* Container to ensure the footer is at the bottom of the page */
.container-fluid {
    min-height: calc(20vh - 50px); /* Subtract the height of the header and footer */
    padding-bottom: 50px; /* Space for footer */
}

/* Footer style */
footer {
    background-color: #f8f9fa; /* Light background for footer */
    padding: 20px 0;
    text-align: center;
    position: relative;
    bottom: 0;
    width: 100%;
    margin-top: auto; /* Make sure footer stays at the bottom of the page */
}

/* Add more styles to links or icons inside footer if needed */
footer a {
    color: #333;
    padding: 10px;
    text-decoration: none;
}

footer a:hover {
    opacity: 0.8;
}

    </style>
</head>

<body style="padding-top: 70px">
  <div class="container-fluid"></div>
  <header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #C70000;">
      <a class="navbar-brand" href="#"><img src="images/Untitled design.jpg" alt="" width="95" height="95" class="rounded-circle"/></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent1">
        <ul class="navbar-nav mr-auto">
          <li class="home"> 
            <a class="nav-link" href="home.html">HOME</a> 
          </li>
          <li class="about us"> 
            <a class="nav-link" href="about us.html">ABOUT US</a>
          </li>
          <li class="services"> 
            <a class="nav-link" href="services.html">SERVICES</a>
          </li>		
          <li class="gallery"> 
            <a class="nav-link" href="gallery.html">GALLERY</a>
          </li>
          <li class="booking"> 
            <a class="nav-link" href="booking.html">BOOKING</a>
          </li>
          <li class="contact us"> 
            <a class="nav-link" href="contact us.html">CONTACT US</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <div class="container-fluid mt-5">
    <br><br>
    <h1 class="text-center"><strong>Contact Confirmation</strong></h1>
    <div class="row justify-content-center">
        <div class="col-xl-6">
            <div class="text-center">
                <br><br>
                <h4>Thank you for contacting us!</h4>
                <table class="table table-bordered">
                </table>
                <p>Thank you for feedback! We're glad you took the time to share your thoughts with us.</p>
                <p>"Thank you for reaching out to us! 🌟 We truly appreciate your interest in our services<p>
                    <p>Your inquiry means a lot, and we’re here to assist you with anything you need. Have a wonderful day!"<p>
                <a href="home.html" class="btn btn-primary">Return to Home</a>
                <br><br>
            </div>
        </div>
    </div>
  </div>
  <br><br>

  <footer>
    <br>
    <div class="text-center">
        <a href="https://www.facebook.com/bmwsprinting?mibextid=LQQJ4d" class="fb"><img src="images/fb.jpg" alt="" width="60" height="60" class="rounded-circle"/></a>
        <a href="https://l.facebook.com/l.php?u=https%3A%2F%2FCopywritingturbo.wasap.my%2F&h=AT0150jD65jgSyU_uwLzdIKWpG2hyy_WAVNdhZOw82qknR9H8nvzu0PYphu0ISl1C6SQQMD9PG6La7VApf1MAgG_f1YDbRyxj5xX8O2QsFRNGVr6lmtIRF4J1VUa5eE5cHaCve9jM95oQU96VSbSrFPzLa2oRP6L2kkCOA" class="whatssap"><img src="images/ws.jpg" alt="" width="60" height="60" class="rounded-circle"/></a>
        <a href="https://www.google.com/maps/place/BMW's+Printing+(+Pusat+Percetakan)" class="location"><img src="images/maps.jpg" alt="" width="60" height="60" class="rounded-circle"/></a>
        <a href="mailto:bmwprinting@gmail.com" class="email"><img src="images/email.jpg" alt="" width="60" height="60" class="rounded-circle"/></a>
    </div>
    <p class="text-center">Copyright © 2024. BMW Bhd Enterprise All Rights Reserved</p>
    <br>
  </footer>

  <script src="js/jquery-3.5.1.slim.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
