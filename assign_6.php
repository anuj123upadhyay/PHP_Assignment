
<!DOCTYPE html>
<html>
<body>
<?php
// 6.Scenario: You are building a login system for a web application. After users submit their username and password, you need to verify if the credentials are correct before granting access. Write a PHP script that checks if the provided username and password match the stored credentials. If they match, echo "Login successful"; otherwise, echo "Invalid credentials".


$storedUsername = "user123";
$storedPassword = "password123";


$providedUsername = $_POST['username']; // Assuming username is submitted via POST method
$providedPassword = $_POST['password']; // Assuming password is submitted via POST method

// Check if the provided username and password match the stored credentials
if ($providedUsername === $storedUsername && $providedPassword === $storedPassword) {
    echo "Login successful";
} else {
    echo "Invalid credentials";
}

?>
</body>
</html>