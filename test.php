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
<body style="padding-top: 70px">
<div class="container-fluid"></div>
<header>
  <header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light"> <a class="navbar-brand" href="#"><img src="images/Untitled design.jpg" alt="" width="95" height="95" class="rounded-circle"/></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
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
<li class="contact us"> 
    <a class="nav-link" href="contact us.html">CONTACT US</a>
</li>
        </ul>
		  
  </div>
    </nav>
    <header>
		
      <nav>&nbsp;</nav>
    </header>
  </header>

  <nav class="navbar navbar-expand-lg navbar-light bg-light 67">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse 3" id="navbarSupportedContent2">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active"> <a href="#" class="BMW">BRILLIANT MILLION WORK <span class="sr-only">(current)</span></a> </li>
      </ul>
</div>
  </nav>
</header>
<nav>
  <ul class="navlist">  
    <li class="navlistitem"><a href="#">
      <h1><strong>BOOKING</strong></h1>
  </a></li></ul></nav>
	
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
	
	
	<style type="text/css">
  #navbarSupportedContent1 .navbar-nav.mr-auto .signup {
    font-family: "Bell MT";
    padding-left: 599px;
    text-shadow: 0px 0px #000000;
    margin-left: 133px;
}
.navbar.fixed-top.navbar-expand-lg.navbar-light.bg-light {
    background-color: #C70000;
    background-image: -webkit-linear-gradient(270deg,rgba(255,255,255,1.00) 0%,rgba(199,0,0,1.00) 0%);
    background-image: -moz-linear-gradient(270deg,rgba(255,255,255,1.00) 0%,rgba(199,0,0,1.00) 0%);
    background-image: -o-linear-gradient(270deg,rgba(255,255,255,1.00) 0%,rgba(199,0,0,1.00) 0%);
    background-image: linear-gradient(180deg,rgba(255,255,255,1.00) 0%,rgba(199,0,0,1.00) 0%);
    padding-bottom: 1px;
}
#navbarSupportedContent1 .navbar-nav.mr-auto .about.us {
    font-family: "Bell MT";
    text-shadow: 0px 0 #000000;
    margin-left: 22px;
    color: #C80003;
    text-decoration: none;
    text-align: left;
}
#navbarSupportedContent1 .navbar-nav.mr-auto .home {
    font-family: "Bell MT";
    text-shadow: 0px 0px #000000;
}
    #navbarSupportedContent1 .navbar-nav.mr-auto .signup {
    color: #CDA53D;
}
    #navbarSupportedContent1 .navbar-nav.mr-auto .contact.us {
    margin-left: 30px;
    font-family: "Bell MT";
    text-shadow: 0px 0px #000000;
}
    #navbarSupportedContent1 .navbar-nav.mr-auto .payment {
    font-family: "Bell MT";
    text-shadow: 0px 0px #CDA53D;
}
    #navbarSupportedContent1 .navbar-nav.mr-auto .gallery {
    padding-left: 14px;
    font-family: "Bell MT";
    text-shadow: 0px 0px #000000;
}
    #navbarSupportedContent1 .navbar-nav.mr-auto .services {
    padding-left: 22px;
    font-family: "Bell MT";
    text-shadow: 0 0px #000000;
}
    .navbar.fixed-top.navbar-expand-lg.navbar-light.bg-light {
}
    body header header {
    margin-bottom: 26px;
}
#navbarSupportedContent2 .form-inline.my-2.my-lg-0 .form-control.mr-sm-2 {
    color: #000000;
    text-shadow: 0px 0px #000000;
    background-image: -webkit-linear-gradient(270deg,rgba(255,0,0,1.00) 0%,rgba(255,255,255,1.00) 0%);
    background-image: -moz-linear-gradient(270deg,rgba(255,0,0,1.00) 0%,rgba(255,255,255,1.00) 0%);
    background-image: -o-linear-gradient(270deg,rgba(255,0,0,1.00) 0%,rgba(255,255,255,1.00) 0%);
    background-image: linear-gradient(180deg,rgba(255,0,0,1.00) 0%,rgba(255,255,255,1.00) 0%);
}
    .navbar-nav.mr-auto .nav-item.active .BMW {
    font-family: "Arial Rounded MT Bold";
    font-size: xx-large;
    color: #000000;
}
    #navbarSupportedContent2 .form-inline.my-2.my-lg-0 .btn.btn-outline-success.my-2.my-sm-0 {
    background-image: url(file:///C|/Users/User/Dropbox/PC/Downloads/FYP%202/INSTRUCTIONAL%20DESIGN/DESIGN%20FYP%20WEB/istockphoto-1470198552-612x612.jpg);
    text-shadow: 0px 0px #000000;
    color: #000000;
}
    body header header {
    background-image: url(file:///C|/Users/User/Dropbox/PC/Downloads/FYP%202/INSTRUCTIONAL%20DESIGN/DESIGN%20FYP%20WEB/background-white-sand.jpg);
    padding-bottom: 0px;
    margin-bottom: 22px;
}
    .navbar.fixed-top.navbar-expand-lg.navbar-light.bg-light {
}
    .navbar.navbar-expand-lg.navbar-light.bg-light.67 {
}
    .navbar.navbar-expand-lg.navbar-light.bg-light.67 {
    background-image: url(file:///C|/Users/User/Dropbox/PC/Downloads/FYP%202/INSTRUCTIONAL%20DESIGN/DESIGN%20FYP%20WEB/background-white-sand.jpg);
}
    #navbarSupportedContent2 .form-inline.my-2.my-lg-0 .rounded-circle {
}
    #navbarSupportedContent2 .form-inline.my-2.my-lg-0 .rounded-circle {
    margin-left: 12px;
}
    #navbarSupportedContent2 .form-inline.my-2.my-lg-0 .rounded-circle {
}
    header header header {
}
    body nav {
}
    nav {
    background-color: #C70000;
}
    body nav {
}
    .navlist {
    margin: 0;
    padding: 0;
    list-style-type: none;
    overflow: hidden;
}
    .navlistitem {
    float: left;
    margin-left: 52px;
}
    .navlistitem a {
    text-decoration: none;
    display: block;
    padding-top: 35px;
    padding-left: 1px;
    padding-bottom: 35px;
    color: #FFFFFF;
    font-family: "Bell MT";
}
    .navlistitem a:hover {
    color: #F9F9F9;
}
  .row .col-xl-3 {
    margin-left: 27px;
    padding-left: 213px;
}
.col-xl-3 h5 strong {
    margin-left: 43px;
}
.col-xl-3 .class strong {
}
  .col-xl-3 h5 strong {
}
  .col-xl-3 .class strong {
}
  .row .col-xl-6 img {
    margin-left: 155px;
}
  .col-xl-6 .form-group.offset-xl-4.col-xl-4 #select {
    padding-bottom: 10px;
    border-radius: 5px;
    padding-left: 70px;
    margin-left: -62px;
    padding-right: 93px;
    background-color: #FDFDFD;
    padding-top: 3px;
}
  .col-xl-6 .form-group.offset-xl-4.col-xl-4 #number {
    padding-bottom: 10px;
    border-radius: 5px;
    margin-left: -63px;
    padding-left: 169px;
    padding-top: 3px;
}
  .col-xl-6 .form-group.offset-xl-4.col-xl-4 #finishing {
    margin-left: -63px;
    padding-left: 8px;
    padding-right: 163px;
    padding-bottom: 10px;
    border-radius: 5px;
    padding-top: 3px;
}
  .col-xl-6 .form-group.offset-xl-4.col-xl-4 #textfield {
    margin-left: -60px;
    padding-right: 160px;
    padding-left: 10px;
    padding-bottom: 10px;
    padding-top: 3px;
    border-radius: 5px;
}
  .col-xl-6 .form-group.offset-xl-4.col-xl-4 label {
    margin-left: -20px;
    padding-left: 0px;
    padding-right: 0px;
    margin-bottom: 13px;
}
  .row .container img {
    margin-left: 1177px;
    margin-top: 77px;
}
  .col-xl-6 .container .text-center {
    margin-top: -1px;
}
  a h1 strong {
    color: #000000;
}
  .navlist .navlistitem a {
    color: #000000;
}
  .container.atas {
    margin-top: 93px;
}
  .text-center p {
    margin-top: 74px;
}
  .container-fluid {
    margin-left: -9px;
}
  .navlist .navlistitem a {
    margin-left: -38px;
}
  .container a .rounded {
    margin-left: 1030px;
    margin-top: 7px;
}
  .navbar-nav.mr-auto .nav-item.active .BMW {
    font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
    font-weight: bold;
}
  .col-xl-6 .form-group.offset-xl-4.col-xl-4 .text-center.process {
    margin-left: -144px;
}
  .form-group.offset-xl-4.col-xl-4 .text-center label {
}
.col-xl-6 .form-group.offset-xl-4.col-xl-4 .text-center.include {
}
  .col-xl-6 .form-group.offset-xl-4.col-xl-4 .text-center.finishing {
    margin-left: -415px;
}
  .col-xl-6 .form-group.offset-xl-4.col-xl-4 .text-center.Material {
    margin-left: -426px;
}
  .col-xl-6 .form-group.offset-xl-4.col-xl-4 .text-center.size {
    margin-left: -474px;
}
  .form-group.offset-xl-4.col-xl-4 .text-center.include label {
    margin-left: -329px;
}
  .col-xl-6 .form-group.offset-xl-4.col-xl-4 .text-center.thick {
    margin-left: -360px;
}
  .col-xl-6 .form-group.offset-xl-4.col-xl-4 .text-center.quantity {
    margin-left: -441px;
}
  .col-xl-6 .form-group.offset-xl-4.col-xl-4 #number {
    padding-top: 6px;
    padding-bottom: 6px;
    margin-left: -161px;
    padding-left: 393px;
}
  .col-xl-6 .form-group.offset-xl-4.col-xl-4 #thicknessSelect {
    padding-left: 202px;
    padding-right: 190px;
    margin-left: -157px;
    padding-top: 6px;
    padding-bottom: 6px;
    border-radius: 5px;
    background-color: #FFFFFF;
}
  .col-xl-6 .form-group.offset-xl-4.col-xl-4 #posterPrintingSelect {
    margin-left: -157px;
    padding-left: 202px;
    padding-right: 206px;
    padding-bottom: 6px;
    padding-top: 6px;
    border-radius: 5px;
    background-color: #FFFFFF;
}
  .col-xl-6 .form-group.offset-xl-4.col-xl-4 #processTime {
    margin-left: -156px;
    padding-left: 514px;
    padding-top: 6px;
    padding-bottom: 6px;
    background-color: #FFFFFF;
    border-radius: 5px;
    text-align: center;
}
.col-xl-6 .form-group.offset-xl-4.col-xl-4 .time {
}
  .col-xl-6 .form-group.offset-xl-4.col-xl-4 .process {
    margin-left: -157px;
    padding-left: 212px;
    padding-right: 181px;
    padding-top: 6px;
    padding-bottom: 6px;
    border-radius: 5px;
}
.col-xl-6 .form-group.offset-xl-4.col-xl-4 input {
}
  .col-xl-6 .form-group.offset-xl-4.col-xl-4 #sizeSelect {
    margin-left: -156px;
    padding-left: 208px;
    padding-right: 262px;
    padding-top: 6px;
    padding-bottom: 6px;
    border-radius: 5px;
    background-color: #FFFFFF;
}
  .col-xl-6 .form-group.offset-xl-4.col-xl-4 #select {
    margin-left: -155px;
    padding-left: 202px;
    padding-right: 233px;
    background-color: #FFFFFF;
}
  .col-xl-6 .form-group.offset-xl-4.col-xl-4 .text-center.process {
    padding-left: 120px;
    margin-left: -342px;
}
  .col-xl-6 .form-group.offset-xl-4.col-xl-4 .time {
    padding-left: 208px;
    margin-left: -155px;
    padding-right: 184px;
    padding-top: 6px;
    padding-bottom: 6px;
    border-radius: 5px;
}
  .row .col-xl-6 .rounded {
    margin-top: 124px;
    margin-left: 243px;
}
  .row .col-xl-6 .text-center.des {
    margin-top: 39px;
    margin-left: 72px;
    padding-top: 15px;
    padding-bottom: 15px;
    font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
    font-weight: bold;
    background-color: #8E7878;
    color: #FFFFFF;
}
  .row .col-xl-6 .text-center.tion {
    margin-left: 72px;
    padding-left: 20px;
    padding-right: 23px;
    background-color: #8E7878;
    padding-top: 30px;
    padding-bottom: 30px;
    color: #FFFFFF;
}
  .container a .rounded {
    margin-left: 1148px;
}
  .row .col-xl-6 .text-center {
    color: #333333;
}
  .col-xl-6 .container .text-center {
    color: #333333;
}
	   .navbar-nav .nav-item a {
        font-family: "Bell MT";
        color: #fff;
    }
    .navbar-nav .nav-item a:hover {
        color: #F9F9F9;
    }
    .container {
        margin-top: 80px;
    }
    .payment-confirmation {
        background-color: white; 
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
    }
    .text-center p {
        margin-top: 74px;
    }
    footer {
        text-align: center;
        margin-top: 50px;
    }
	   .payment-confirmation h2, .payment-confirmation h3, .payment-confirmation p {
        text-align: center;
    }
    .payment-confirmation form {
        text-align: center; 
    }
	  .container {
        margin-top: 80px;
    }
    .payment-confirmation {
        background-color: white;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 60%;
        margin: 0 auto;
    }
    .text-center p {
        margin-top: 74px;
    }
	      .navbar.fixed-top.navbar-expand-lg.navbar-light.bg-light {
        background-color: #C70000;
        background-image: linear-gradient(180deg, rgba(255,255,255,1.00) 0%, rgba(199,0,0,1.00) 0%);
        padding-bottom: 1px;
    }
    .navbar-nav .nav-item a {
        font-family: "Bell MT";
        color: #fff;
    }
    .navbar-nav .nav-item a:hover {
        color: #F9F9F9;
    }
    .container {
        margin-top: 80px;
    }
    .request-purchase {
        background-color: white; 
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
        max-width: 700px;  
        margin: 0 auto;  
    }
    .text-center p {
        margin-top: 74px;
    }
    footer {
        text-align: center;
        margin-top: 50px;
    }
  .request-purchase form button {
    margin-left: 507px;
}
  .request-purchase form button {
}
	  @media (max-width: 768px) {
    .dropdown-menu {
        display: block;
    }
.dropdown-menu {
    z-index: 9999;
}
.navbar {
    overflow: visible;
}
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	  }

  </style>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: auto;
        }
        h1 {
            text-align: center;
            color: #4CAF50;
        }
        .details div {
            margin-bottom: 10px;
        }
        .label {
            font-weight: bold;
            color: #333;
        }
        .value {
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Booking Confirmation</h1>
        <div class="details">
            <div><span class="label">Name:</span> <span class="value"><?php echo htmlspecialchars($booking_data['name']); ?></span></div>
            <div><span class="label">Email:</span> <span class="value"><?php echo htmlspecialchars($booking_data['email']); ?></span></div>
            <div><span class="label">Phone:</span> <span class="value"><?php echo htmlspecialchars($booking_data['phone']); ?></span></div>
            <div><span class="label">Main Product:</span> <span class="value"><?php echo htmlspecialchars($booking_data['main_product']); ?></span></div>
            <div><span class="label">Quantity:</span> <span class="value"><?php echo htmlspecialchars($booking_data['quantity']); ?></span></div>
            <div><span class="label">Poster Printing:</span> <span class="value"><?php echo htmlspecialchars($booking_data['poster_printing']); ?></span></div>
        </div>
        <div class="footer">
            Thank you for your booking!
        </div>
    </div>
</body>
</html>
	<footer>
	<br>
   <div class="text-center">
  
   <a href="https://www.facebook.com/bmwsprinting?mibextid=LQQJ4d" class="fb"><img src="images/fb.jpg" alt="" width="60" height="60" class="rounded-circle"/></a>
     
  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2FCopywritingturbo.wasap.my%2F&h=AT0150jD65jgSyU_uwLzdIKWpG2hyy_WAVNdhZOw82qknR9H8nvzu0PYphu0ISl1C6SQQMD9PG6La7VApf1MAgG_f1YDbRyxj5xX8O2QsFRNGVr6lmtIRF4J1VUa5eE5cHaCve9jM95oQU96VSbSrFPzLa2oRP6L2kkCOA" class="whatssap"><img src="images/ws.jpg" alt="" width="60" height="60" class="rounded-circle"/></a>
     
  <a href="https://www.google.com/maps/place/BMW's+Printing+(+Pusat+Percetakan)" class="location"><img src="images/maps.jpg" alt="" width="60" height="60" class="rounded-circle"/></a> 
     
  <a href="mailto:bmwprinting@gmail.com" class="email"><img src="images/email.jpg" alt="" width="60" height="60" class="rounded-circle"/></a>
 
</div>
    <p class="text-center">Copyright © 2024. BMW Bhd Enterprise All</p>
 <br>
	
</footer>
	</body><body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </body>
</html>