<?php
session_start(); // Start session to get username
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JAN SUVIDHA KENDRA</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-image: url('Images/Background.jpg');
            background-size: cover;
        }

        /* Main Navigation Bar */
        .top-nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 30px;
            border-radius: 0 0 10px 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .logo-section {
            display: flex;
            align-items: center;
        }

        .logo-section img {
            width: 60px;
            height: 60px;
        }

        .logo-section .title {
            font-size: 20px;
            font-weight: bold;
            color: white;
            margin-left: 10px;
        }

        .nav-links {
            display: flex;
        }

        .nav-links a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            font-size: 16px;
            padding: 10px 20px;
            margin-left: 10px;
            transition: all 0.3s ease;
        }

        .nav-links a:hover {
            text-decoration: underline;
        }

        /* Contact Information Bar */
        .contact-bar {
            display: flex;
            justify-content: center;
            gap: 20px;
            padding: 10px;
            font-weight: bold;
        }

        .contact-bar a {
            text-decoration: none;
            color: white;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .contact-bar img {
            width: 20px;
            height: 20px;
        }

        /* Services Section */
        .services {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            padding: 40px;
            
        }

        .service-card {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .service-card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.3);
        }

        .service-card img {
            width: 110px;
            height: 100px;
            margin-bottom: 15px;
        }

        .service-card h3 {
            font-size: 18px;
            color: #333;
        }
        .welcome-message {
            text-align: center;
            font-size: 28px;
            color: white;
            margin-top: 10px;
            font-weight: bold;
        }

    </style>
</head>
<body>

    <!-- Upper Navbar -->
    <nav class="top-nav">
        <div class="logo-section">
            <img src="Images/logo.png" alt="Logo">
            <span class="title">Jan Suvidha Kendra</span>
        </div>
        <div class="nav-links">
            <a href="login.php">LOGIN</a>
            <a href="Home.html">HOME</a>
            <a href="Pages/Aadhar.html">DOCUMENT</a>
            <a href="contact.html">CONTACT US</a>
            
        </div>
    </nav>

    <!-- Lower Contact Bar -->
    <div class="contact-bar">
        <a href="https://www.instagram.com/vikas_balva?igsh=MXgwcHlrNDJhZGcwZg==" target="_blank">
            <img src="Images/instagram.png" alt="Instagram"> @Vikas_Balva
        </a>
        <a href="https://twitter.com/your_twitter" target="_blank">
            <img src="Images/twitter.png" alt="Twitter"> @vikasbalva
        </a>
        <a href="jskkeshod@gmail.com">
            <img src="Images/gmail.png" alt="Email"> jskkeshod@gmail.com
        </a>
        <a href="tel:+919723826022">
            <img src="Images/phone.png" alt="Phone"> +91 97238 26022
        </a>
        <a href="https://www.facebook.com/share/1E3weRuVRr/">
            <img src="Images/facebook.png" alt="Phone">@Jan Suvidha Kendra Keshod
        </a>
    </div>

    <!-- Welcome Message -->
    <div class="welcome-message">
        <?php if (isset($_SESSION['user'])) { echo "Welcome, " . htmlspecialchars($_SESSION['user']) . "!"; } ?>
    </div>


    <!-- Services Section -->
    <section class="services">
        <div class="service-card">
            <a href="https://uidai.gov.in/en/" style="text-decoration: none; color: inherit;">
                <img src="Images/aadhar.png" alt="Aadhaar Service">
                <h3>AADHAAR SERVICE</h3>
            </a>
        </div>
        <div class="service-card">
            <a href="https://www.onlineservices.nsdl.com/paam/endUserRegisterContact.html" style="text-decoration: none; color: inherit;">
                <img src="Images/incometax.png" alt="PAN Card Service">
                <h3>PAN CARD SERVICE</h3>
            </a>
        </div>
        <div class="service-card">
            <a href="https://voters.eci.gov.in/" style="text-decoration: none; color: inherit;">
                <img src="Images/voteridcard.png" alt="Voter ID Service">
                <h3>VOTER ID CARD</h3>
            </a>
        </div>
        <div class="service-card">
            <a href="https://parivahan.gov.in/parivahan//en" style="text-decoration: none; color: inherit;">
                <img src="Images/drivinglicesece.png" alt="Driving License" style="width: 160px;">
                <h3>DRIVING LICENSE</h3>
            </a>
        </div>
        <div class="service-card">
            <a href="http://passportindia.gov.in" style="text-decoration: none; color: inherit;">
                <img src="Images/PASSPORT.png" alt="Passport Service">
                <h3>PASSPORT SERVICE</h3>
            </a>
        </div>
        <div class="service-card">
            <a href="http://digitalgujarat.gov.in" style="text-decoration: none; color: inherit;">
                <img src="Images/DIGITALGUJARAT.png" alt="Digital Gujarat Service" style="width: 200px;">
                <h3>DIGITAL GUJARAT</h3>
            </a>
        </div>
        <div class="service-card">
            <a href="http://cot.gujarat.gov.in" style="text-decoration: none; color: inherit;">
                <img src="Images/RTO.png" alt="Gujarat RTO Service">
                <h3>GUJARAT RTO</h3>
            </a>
        </div>
        <div class="service-card">
            <a href="http://guvnl.com" style="text-decoration: none; color: inherit;">
                <img src="Images/GUVNL.png" alt="GUVNL Board">
                <h3>GUVNL BOARD</h3>
            </a>
        </div>
        <div class="service-card">
            <a href="https://eshram.gov.in/indexmain" style="text-decoration: none; color: inherit;">
                <img src="Images/e-shram.png" alt="GUVNL Board" style="width: 200px;">
                <h3>E-SHRAM</h3>
            </a>
        </div>
        <div class="service-card">
            <a href="https://web.umang.gov.in/landing/" style="text-decoration: none; color: inherit;">
                <img src="Images/UMANG.png" alt="GUVNL Board" style="width: 200px;">
                <h3>UMANG</h3>
            </a>
        </div>
        <div class="service-card">
            <a href="https://www.gseb.org/" style="text-decoration: none; color: inherit;">
                <img src="Images/gseb-english-logo.png" alt="GUVNL Board">
                <h3>GSEB</h3>
            </a>
        </div>
        <div class="service-card">
            <a href="https://sanman.gujarat.gov.in/" style="text-decoration: none; color: inherit;">
                <img src="Images/ShramsetuLogoEng.png" alt="GUVNL Board">
                <h3>SANMAN</h3>
            </a>
        </div>
    </section>

</body>
</html>
