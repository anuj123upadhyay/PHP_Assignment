<!DOCTYPE html>
<html>
<body>

<?php

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