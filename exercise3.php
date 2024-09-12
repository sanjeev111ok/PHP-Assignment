
<!-- Write a PHP program that asks for a person's age and citizenship status. If the person is
both 18 or older and a citizen, display "You are eligible to vote"; otherwise, display "You
are not eligible to vote." -->
<?php

$age =readline("Please enter your age: ");


$citizen = strtolower(trim(readline("Do you have a citizenship?(Yes/No) ")));


if($age >= 18 && $citizen === "yes"){
    echo "you are eligible to vote."."<br>";
}else{
    echo "you are not eligible to vote."."<br>";
}
?>