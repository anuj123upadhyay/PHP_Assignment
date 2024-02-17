<!DOCTYPE html>
<html>
<body>
 
<?php
// 12.Scenario: You are building a subscription-based service where users can choose between different subscription plans. However, you want to offer a trial period for new users. Write a PHP script that checks if the user is a new user and offers them a trial period if they haven't subscribed before.

// Function to check if the user is a new user (you would typically check this against your database)
function isNewUser($userId) {
    // Assuming userId 1 indicates a new user (you would replace this logic with your actual implementation)
    return $userId === 1;
}

// Function to offer a trial period to new users
function offerTrialPeriod($userId) {
    if (isNewUser($userId)) {
        echo "Welcome! You are eligible for a free trial period.\n";
        echo "Sign up now and enjoy our service for free!";
    } else {
        echo "Welcome back!";
    }
}

// Example usage:
$userId = 1; // Example user ID (you would replace this with the actual user ID)
offerTrialPeriod($userId);

?>
</body>
</html>
