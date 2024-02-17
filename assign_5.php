<!DOCTYPE html>
<html>
<body>
<?php

// 5.Scenario: Suppose you are developing a website for an online store. The store offers a discount on orders over Rs. 1000. Write a piece of PHP code using conditional control structures to check if the total order amount qualifies for the discount and display an appropriate message to the user.
$totalAmount = (int)readline("enter total Amount"); 
/
if ($totalAmount > 1000) {
    $discount = 100; 
    $finalAmount = $totalAmount - $discount;
    echo "Congratulations! You qualify for a Rs. 100 discount. Your final amount is Rs. $finalAmount.";
} else {
    echo "Sorry, you do not qualify for any discounts. Your total amount is Rs. $totalAmount.";
}

?>
</body>
</html>