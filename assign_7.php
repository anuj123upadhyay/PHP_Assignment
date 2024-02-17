<!DOCTYPE html>
<html>
<body>
<?php
function getWeatherRecommendation($temperature) {
    if ($temperature > 25) {
        return "It's a sunny day!";
    } else {
        return "Consider taking an umbrella";
    }
}

// Example 
$currentTemperature = 28; // Example temperature value, you can change this
$recommendation = getWeatherRecommendation($currentTemperature);
echo $recommendation;

?>
</body>
</html>