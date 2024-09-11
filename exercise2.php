
     <!-- Create a PHP program that converts temperatures from Celsius to Fahrenheit. Ask the user for a temperature in Celsius and use a conditional statement to check if it's below freezing(below 0°C) or not. Provide an appropriate message. -->
   <?php
        $celsius = readline("Enter the temperature in celsius:");
        $fahrenheit = ($celsius * 9/5) + 32;

        echo "Temperature in Celsius: " . $celsius . "°C<br>";
        echo "Temperature in Fahrenheit: " . $fahrenheit . "°F<br>";

        if ($celsius < 0) {
            echo "It's below freezing!";
        } else {
            echo "It's not below freezing.";
        }
    
    ?>