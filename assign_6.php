
<!DOCTYPE html>
<html>
<body>
<?php


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