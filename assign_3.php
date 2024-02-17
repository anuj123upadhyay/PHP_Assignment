<html>
<body>

<?php

$numOfSteps=(int)readline("enter yout number of steps");
if($numOfSteps<5000){
echo "Fitness Level: Beginner";
}else if($numOfSteps>5000 && $numOfSteps <=10000){
echo "Fitness Level:Intermediate";
}else if($numOfSteps>10000){
echo "Fitness Level:Advanced";
}else{
echo "Invalid number of steps";
};
?>

</body>
</html>