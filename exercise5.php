<!-- You are building a simple menu-driven program in PHP. Create a PHP script that
displays a menu to the user with options to perform different actions. Use a switch
statement to execute the corresponding action based on the user's selection. The menu
should include options like:
a. View Profile
b. Edit Profile
c. View Orders
d. Place an Order
e. Logout
Implement each option as a separate case in the switch statement.  -->

<?php
$result = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $action = $_POST["action"];
    switch ($action) {
        case "View Profile":
            $result = "You are viewing your profile.";
            break;
        case "Edit Profile":
            $result = "You are editing your profile.";
            break;
        case "View Orders":
            $result = "You are viewing your orders.";
            break;
        case "Place an Order":
            $result = "You are placing a new order.";
            break;
        case "Logout":
            $result = "Logging out... See you next time!";
            break;
        default:
            $result = "Invalid action. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu-Driven Program</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #e9ecef;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #343a40;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        input[type="submit"] {
            padding: 15px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            color: white;
            transition: background-color 0.3s, transform 0.2s;
        }
        input[type="submit"]:nth-child(1) {
            background-color: #007bff;
        }
        input[type="submit"]:nth-child(2) {
            background-color: #28a745; 
        }
        input[type="submit"]:nth-child(3) {
            background-color: #ffc107;
        }
        input[type="submit"]:nth-child(4) {
            background-color: #17a2b8;
        }
        input[type="submit"]:nth-child(5) {
            background-color: #dc3545; 
        }
        input[type="submit"]:hover {
            transform: scale(1.05);
        }
        #result {
            margin-top: 20px;
            padding: 15px;
            background-color: #f0f8ff;
            border-radius: 5px;
            border: 1px solid #007bff;
            color: #343a40;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Menu-Driven Program</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="submit" name="action" value="View Profile">
        <input type="submit" name="action" value="Edit Profile">
        <input type="submit" name="action" value="View Orders">
        <input type="submit" name="action" value="Place an Order">
        <input type="submit" name="action" value="Logout">
    </form>

    <?php
    if (!empty($result)) {
        echo "<div id='result'>" . htmlspecialchars($result) . "</div>";
    }
    ?>
</body>
</html>