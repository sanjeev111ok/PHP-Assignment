

 <!-- 6. Create a PHP script that simulates a shopping cart. Use a while loop to allow users to add
 items to their cart until they decide to check out. Display the items in the cart and the
 total cost. -->
    
<?php
$cart = [];
$total_cost = 0;

echo "Welcome to the shopping cart Simulator \n";

while(true){
    $item = trim(readline("Enter a item name(or checkout): "));

    if(strtolower($item === 'checkout')){
        break;
    }
    $price = floatval(trim(readline("Enter the price for the item: ")));

    $cart[] = ['name' => $item, 'price' => $price];
    $total_cost += $price;
    echo "$item added to cart.\n";

}
echo "your shopping cart contains.\n";
    foreach ($cart as $item){
        echo "- {$item['name']}: $" . number_format($item['price'], 2) . "\n";

    }
    echo "your total price is : $". number_format($total_cost,2)."\n";
echo "Thank you for shopping with us until next time!.";