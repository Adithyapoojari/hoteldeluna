<!DOCTYPE html>
<html>
<head>
    <title>De Luna Hotel Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            text-align: center;
        }

        h1 {
            color: #007BFF;
        }

        .container {
            margin: 20px auto;
            max-width: 600px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .contact-info {
            text-align: left;
            margin-bottom: 20px;
        }
        .custom-button {
            background-image: url('<?php echo "/loginp/images/hf.png"; ?>'); 
            background-size: cover;
            color: white;
            border: none;
            padding: 15px 30px;
            cursor: pointer;
            font-size: 18px;
            border-radius: 5px;
        }
    </style>
</head>
<body style="background-image: url('<?php echo "/loginp/images/ht.jpg"; ?>');  background-repeat: no-repeat; background-size:cover; background-position:0px 30%;">
    <h1>You Can Always Reach Us At</h1>
    <div class="container" style="background-color:lightgrey">
        <h2>Contact Information:</h2>
        <div class="contact-info">
            <p><strong>Hotel Name:</strong> De Luna Hotel</p>
            <p><strong>Address:</strong> 146 Main Street Manipal, Karnataka Branch</p>
            <p><strong>Email:</strong> weare@delunahotel.com</p>
            <p><strong>Phone:</strong> +91 7406790145, +91 7026365624</p>
        </div>

        <h2>Hotel Services:</h2>
        <ul>
            <li>Restaurant</li>
            <li>Swimming Pool</li>
            <li>Spa</li>
            <li>Gym</li>
            <li>Room Service</li>
        </ul>
        <ul>
            <li><h2>Our Other branches in India are:</h2></li>
            <li>Karnataka Branch</li>
            <li>Kerala Branch</li>
            <li>Tamilnadu Branch</li>
            <li>Kashmir Branch</li>
        </ul>
    </div>
    <div>
        <h2 style="color:white; background-color:grey; padding:10px; border-radius: 10px; margin-right:170px; margin-left:170px;"><q>Experience Unmatched Hospitality: Where Dreams Meet Reality!</q></h2>
    </div>
    <button class="custom-button" onclick="window.location.href='homepage.php'">Go to Home Page</button></h2>
</body>
</html>
