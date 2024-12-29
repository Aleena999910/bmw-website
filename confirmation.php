<?php
session_start();

// Check if booking data is available
if (!isset($_SESSION['booking_data'])) {
    echo "No booking data found. Please try again.";
    exit;
}

$booking_data = $_SESSION['booking_data'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Booking Confirmation</title>
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
    </style>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Booking Confirmation</title>
    <link href="css/bootstrap-4.4.1.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet" type="text/css">
    <style>
        .navbar-nav .nav-link {
            color: white !important;
        }
    </style>
</head>

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
</body>



<div class="container-fluid mt-5">
  <br>
<br>
    <h1 class="text-center"><strong>Booking Confirmation</strong></h1>
    <div class="row justify-content-center">
        <div class="col-xl-6">
            <div class="text-center">
                <br>
                <br>
                <h4>Thank you for your booking!</h4>
                <p>Your booking details are as follows:</p>
                <table class="table table-bordered">
                    <tr>
                        <th>Booking Name</th>
                        <td><?php echo isset($booking_data['name']) ? htmlspecialchars($booking_data['name']) : 'Not available'; ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?php echo isset($booking_data['email']) ? htmlspecialchars($booking_data['email']) : 'Not available'; ?></td>
                    </tr>
                    <tr>
                        <th>Phone Number</th>
                        <td><?php echo isset($booking_data['phone']) ? htmlspecialchars($booking_data['phone']) : 'Not available'; ?></td>
                    </tr>
                    <tr>
                        <th>Product</th>
                        <td><?php echo isset($booking_data['product']) ? htmlspecialchars($booking_data['product']) : 'Not available'; ?></td>
                    </tr>
                    <tr>
                        <th>Quantity</th>
                        <td><?php echo isset($booking_data['quantity']) ? htmlspecialchars($booking_data['quantity']) : 'Not available'; ?></td>
                    </tr>
                    <tr>
                        <th>Poster Printing</th>
                        <td><?php echo isset($booking_data['poster_printing']) ? htmlspecialchars($booking_data['poster_printing']) : 'Not available'; ?></td>
                    </tr>
                    <tr>
                        <th>Notes</th>
                        <td><?php echo isset($booking_data['notes']) ? htmlspecialchars($booking_data['notes']) : 'Not available'; ?></td>
                    </tr>
                </table>
                <p>If everything looks correct, please contact us for further assistance.</p>
                <br>
                <br>
            </div>
        </div>
    </div>
</div>
<br>
<br>

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
