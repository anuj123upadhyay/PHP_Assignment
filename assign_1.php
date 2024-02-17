<!DOCTYPE html>
<html>
<body>

<?php

//1.Create a program for a shopping cart. If the total price is over Rs. 5000, apply a 10% discount; otherwise, log the original price.

$tbill = 6000;
 if($tbill>5000){
 $discount = $tbill*(10/100);
 $payBill = $tbill-$discount;
 echo  "total got discount :$discount and have to pay $payBill out of $tbill";
 }else{
 echo " original price: $tbill";
 };

?>

</body>
</html>