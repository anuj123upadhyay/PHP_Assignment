<!DOCTYPE html>
<html>
<body>
<?php
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