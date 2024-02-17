<!DOCTYPE html>
<html>
<body>
<?php
//Simulate a traffic light system using if-else statements. Log the appropriate message for each color of the traffic light (e.g., "Green - Go," "Yellow - Slow down," "Red - Stop").
$trafficLightColor = readline("enter the color of traffic light");
if ($trafficLightColor === "GREEN") {
    echo "GO";
} elseif ($trafficLightColor === "YELLOW") {
    echo "SLOW DOWN";
} elseif ($trafficLightColor === "RED") {
    echo " STOP";
} else {
    echo "Invalid traffic light color";
}

?>

</body>
</html>