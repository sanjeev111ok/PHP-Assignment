<!-- Develop an HTML page with a table that uses PHP code and loops to generate a
multiplication table for a specific number. -->

<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f2f2f2;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            text-align: center;
            margin-bottom: 20px;
        }
        input[type="number"] {
            padding: 5px;
            font-size: 16px;
            width: 100px;
        }
        input[type="submit"] {
            padding: 5px 10px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width:30%;
           margin-left: 480px;
        }
        th, td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Multiplication Table</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Enter a number: <input type="number" name="number" required>
        <input type="submit" name="submit" value="Generate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['number'];

        echo "<table>";
        echo "<tr><th>Multiplication</th></tr>";

        for ($i = 1; $i <= 10; $i++) {
            $result = $number * $i;
            echo "<tr><td>" . $number . " x " . $i . " = " . $result . "</td></tr>";
        }

        echo "</table>";
    }
    ?>
</body>
</html>