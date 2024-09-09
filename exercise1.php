
 <!-- 1. Develop a PHP program for an online store. If a user's cart total is over $100, apply a
 10% discount; if it's over $50, apply a 5% discount; otherwise, no discount. Display the
 final amount to be paid. -->


<?php
echo"Sanjeev Online Store<br/><br/>";
$cartTotal=readline("Enter the price in the cart:");

if ($cartTotal >= 100){
    $discount = 0.10;
}
elseif($cartTotal >= 50){
    $discount = 0.05;
}
if($discount > 0){
    $discountPrice = $cartTotal * $discount;
    $finalAmount = $cartTotal - $discountPrice;
}
echo "Cart Total: $". number_format($cartTotal,2)."<br>";
if($discount >  0){
    echo "Discount percent: ".($discount *100)."%\n"."<br>";
    echo "Discount Amount: ". number_format($discountPrice,2)."<br>";
}
echo "Final amount to be Paid: $". number_format($finalAmount,2);


?>