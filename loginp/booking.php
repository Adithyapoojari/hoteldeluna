<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
          crossorigin="anonymous">
    <style>
        /* Styling for the page background and container */
        body {
            margin: 0;
            padding: 0;
            background-image: url('/loginp/images/ht.jpg');
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
        }

        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 10px;
        }

        /* Styling for the room list */
        .room-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        /* Styling for individual room cards */
        .room-card {
            width: calc(16.66% - 16px); /* 6 cards per line with spacing */
            height: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 8px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        .room-card.booked {
            background-color: red;
        }

        .room-card.available {
            background-color: green;
        }

        /* Styling for the input and button */
        .book-input {
            width: 100%;
            padding: 6px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .book-button {
            background-color: blue;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .custom-button {
            background-color: blue;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Styling for confirmation message */
        .confirmation-message {
            color: white;
            font-weight: bold;
        }
    </style>
</head>
<body>
<?php require 'items/_nav.php'; ?>

<div class="container">
    <h1 style="color:blue;">Room Booking</h1>

    <div class="room-list">
        <?php
        // all 30 rooms data on booked and unbooked
        $rooms = array(
              array("101", "available"),
      array("102", "booked"),
      array("103", "available"),
      array("104", "booked"),
      array("105", "available"),
      array("106", "available"),
      array("107", "booked"),
      array("108", "available"),
      array("109", "available"),
      array("110", "booked"),
      array("111", "available"),
      array("112", "available"),
      array("113", "booked"),
      array("114", "available"),
      array("115", "available"),
      array("116", "booked"),
      array("117", "available"),
      array("118", "booked"),
      array("119", "available"),
      array("120", "available"),
      array("121", "available"),
      array("122", "booked"),
      array("123", "available"),
      array("124", "available"),
      array("125", "available"),
      array("126", "booked"),
      array("127", "available"),
      array("128", "booked"),
      array("129", "available"),
      array("130", "available")
        );

        // Repeat this block for each room
        foreach ($rooms as $room) {
            echo '<div class="room-card ' . $room[1] . '" onclick="Booking(this)">';
            echo $room[0];
            echo '</div>';
        }
        ?>
    </div>

    <form method="post">
        <input type="text" name="room_number" class="book-input" placeholder="Enter room number (eg. 101)">
        <center>
            <button type="submit" name="book_button" class="book-button">Book Now</button><br><br>
            <a href="homepage.php" class="custom-button">Back to Homepage</a>
        </center>
    </form>
    <br>
    <br>
    <?php // code for order confirmation
    if (isset($_POST['book_button'])) {
        $roomNumber = $_POST['room_number'];
        if (intval($roomNumber) >= 101 && intval($roomNumber) <= 130) {
            echo '<p class="confirmation-message">Your room (' . $roomNumber . ') is in the process of reservation. You will be notified soon.</p>';
        } else {
            echo '<p class="confirmation-message">Invalid room number. Please choose a room between 101 and 130.</p>';
        }
    }
    ?>
</div>

<script>
    function Booking(element) {
        if (element.classList.contains('available')) {
            element.classList.remove('available');
            element.classList.add('booked');
        } else if (element.classList.contains('booked')) {
            element.classList.remove('booked');
            element.classList.add('available');
        }
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>
</html>
