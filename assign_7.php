<!DOCTYPE html>
<html>
<body>
<?php


// 7.Scenario: Imagine you are developing a weather application. Depending on the current temperature, the application provides different recommendations. Write a PHP script that takes the current temperature as input and outputs a recommendation. For example, if the temperature is above 25°C, echo "It's a sunny day!"; otherwise, echo "Consider taking an umbrella".
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