<!DOCTYPE html>
<html>
<body>
<?php

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