<?php


$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$mailheader = "From:" . $name . "<" . $email . ">\r\n";

$recepient = "digistormconsultancy@gmail.com";

mail($recepient, $subject, $message, $mailheader)
    or die("Error!");

echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Swiper css link -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    

   <!-- Font Awesome cdn link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
   <!-- custom css link -->
   <link rel="stylesheet" href="style.css">
    
    <title>DigiStorm Consultancy</title>
</head>
<body>
    
<!-- Header section starts -->

<section class="header">
    <a href="home.html" class="logo">DigiStorm Consultancy</a>

    <nav class="navbar">
        <a href="home.html">Home</a>
        <a href="about.html">About</a>
        <a href="services.html">Services</a>
        <a href="contact.html">Contact</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>
</section>

<!-- Header section ends -->
    
<!-- Contacts Starts -->
    <div class="container">
        <h1>Thank you for contacting us. We will get back to you as soon as possible!</h1>
        <p class="back">Go back to the <a href="home.html">homepage</a>.</p>
    </div>
<!-- Contacts Ends -->



<!-- Swiper JS Link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<!-- JQuery -->
<script src="script.js"></script>

</body>
</html>

';    
?>