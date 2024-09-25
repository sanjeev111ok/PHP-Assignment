
<!-- Write a PHP program that asks the user to enter a password. Use a while loop to keep
prompting the user until they enter the correct password. Add a maximum number of
attempts (e.g., 3) and display an error message if the user exceeds that limit. -->

<?php
$correct_password = 'Sanjeev@123';
$maximumAttempts = 5;
$attempts = 0;


echo "Only five attempts:\n ";

while($maximumAttempts > $attempts){
    $input = trim(readline("Enter your password to move on:"));
    if ($input === $correct_password){
       echo "Access Granted! You can move on ";
       exit;
    }
    else{
        $attempts++;
        $remainingAttempts = $maximumAttempts - $attempts;
        echo "Incorrect Password! {$remainingAttempts} attempts left.\n";
    }

}
echo "You have reached your limit! Access Denied";