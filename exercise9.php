<!-- Create an HTML page that embeds PHP code to display the current date and time -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Current Date and Time</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f8ff;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }
        .container {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        p {
            font-size: 24px;
            color: #555;
        }
        .date-time {
            font-size: 20px;
            color: #007bff;
            font-weight: bold;
        }
    
    </style>
</head>
<body>
    <div class="container">
        <h1>Current Date and Time</h1>
        <p class="date-time">
            <?php
            date_default_timezone_set("Asia/Kathmandu"); 
            echo date("l, F j, Y, g:i A");
            ?>
        </p>
    </div>
</body>
</html>