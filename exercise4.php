<!-- You are developing a simple coffee ordering system. Write a PHP script that presents a
menu of coffee options to the user, such as "Espresso," "Latte," "Cappuccino," and
"Mocha." The user should enter their choice, and the program should use a switch
statement to display the price of the selected coffee. If an invalid option is chosen,
display an error message -->

<!DOCTYPE html>
<html>
<head>
    <title>Coffee Ordering System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            max-width: 400px;
            
        }
        h1 {
            color: #6f4c3e;
        }
        label {
            font-weight: bold;
            font-size: 20px;
        }
        select, input[type="submit"] {
            margin-top: 10px;
            padding: 5px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <h1>Coffee Ordering System</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="coffee">Choose your coffee:</label>
        <select name="coffee" id="coffee" required>
            <option value="">--Select Coffee--</option>
            <option value="Espresso">Espresso</option>
            <option value="Latte">Latte</option>
            <option value="Cappuccino">Cappuccino</option>
            <option value="Mocha">Mocha</option>
        </select>
        <br><br>
        <input type="submit" name="submit" value="Order">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $coffee = $_POST['coffee'];
        $price = 0;

        switch ($coffee) {
            case "Espresso":
                $price = 2.50;
                break;
            case "Latte":
                $price = 3.00;
                break;
            case "Cappuccino":
                $price = 3.50;
                break;
            case "Mocha":
                $price = 4.00;
                break;
            default:
                echo "Invalid coffee option selected.";
                exit; 
        }

        echo "<h2>Your Order</h2>";
        echo "You have selected: <strong>" . $coffee . "</strong><br>";
        echo "The price of " . $coffee . " is: <strong>$" . number_format($price, 2) . "</strong>";
    }
    ?>
</body>
</html>