<!--This is just a front end code no backend support is provided-->
<!DOCTYPE html>
<html>
<head>
    <title>Feedback</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .sidebar {/*For the left box with Feedback title*/
            background-color: #808080;
            width: 200px;
            padding: 20px;
            float: left;
            color:white;
            box-shadow: 1px 0 5px rgba(0, 0, 0, 0.1);
        }
        /*For the main box contents */
        .main-content {
            margin-left: 220px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        /*For the box where the actual feedbacks are stored */
        .feedback-box {
            margin-bottom: 20px;
            padding: 10px;
            margin-right:600px;
            border: 1px solid #ddd;
            background-color: transparent;
        }
        /*For the heading of the feedbacks indivisually */
        .feedback-header {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .feedback-content {
            margin-bottom: 5px;
        }

        .stars {
            color: gold;
        }
    </style>
</head>
<body  style="background-image: url('<?php echo "/loginp/images/ht.jpg"; ?>'); color:grey; background-repeat: no-repeat; background-size:cover; background-position:0px 30%;">
<?php require 'items/_nav.php'; ?>
<div class="sidebar">
        <h2>Feedback</h2>
    </div>

    <div class="main-content">
        <h1>    Don't Foget To Give Us Stars..</h1>

        <div class="feedback-box">
            <div class="feedback-header">Feedback 1</div>
            <div class="feedback-content">Great experience! The service was excellent.</div>
            <div class="stars">★★★★★</div>
        </div>

        <div class="feedback-box">
            <div class="feedback-header">Feedback 2</div>
            <div class="feedback-content">Good quality products. Will come again.</div>
            <div class="stars">★★★★☆</div>
        </div>

        <div class="feedback-box">
            <div class="feedback-header">Feedback 3</div>
            <div class="feedback-content">Best Service.Enjoyable Ecperience</div>
            <div class="stars">★★★☆☆</div>
        </div>

        <div class="feedback-box">
            <div class="feedback-header">Feedback 4</div>
            <div class="feedback-content">Overrated. Needs improvement.</div>
            <div class="stars">★★☆☆☆</div>
        </div>
        <!-- Code for the insertion box begins here-->
        <button onclick="openFeedbackModal()" style="border-radius:20px; background-color:grey;">Your Feedback</button>

        <div id="feedbackModal" style="display: none;">
            <h2>Provide Your Feedback</h2>
            <textarea rows="6" cols="40" maxlength="150" placeholder="Write your feedback here..."></textarea><br>
            <select>
                <option value="1">★</option>
                <option value="2">★★</option>
                <option value="3">★★★</option>
                <option value="4">★★★★</option>
                <option value="5">★★★★★</option>
            </select>
            <button onclick="submitFeedback()">OK</button>
        </div>

        <script>
            function openFeedbackModal() {
                document.getElementById("feedbackModal").style.display = "block";
            }

            function submitFeedback() {
                // Code to handle submission of feedback goes here
                alert("Feedback submitted!");
                document.getElementById("feedbackModal").style.display = "none";
            }
        </script>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
