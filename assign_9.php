<!DOCTYPE html>
<html>
<body>
<?php
//9.Scenario: Suppose you are developing a user profile page for a social media platform. You want to display different messages to users based on their account type (e.g., basic or premium). Write a PHP script that checks the user's account type and displays a personalized message accordingly. For example, if the user has a premium account, echo "Welcome Premium User!"; otherwise, echo "Welcome Basic User!".

$userAccountType = "premium"; // Example account type, you can change this

// Check user's account type and display personalized message
if ($userAccountType === "premium") {
    echo "Welcome Premium User!";
} else {
    echo "Welcome Basic User!";
}

?>
</body>
</html>