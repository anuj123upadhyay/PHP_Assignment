<!DOCTYPE html>
<html>
<body>
<?php
function truncateTitle($title) {
    if (strlen($title) > 50) {
        // Truncate the title to 50 characters
        $truncatedTitle = substr($title, 0, 50);
        return $truncatedTitle;
    } else {
        // Title length is within the limit, return the original title
        return $title;
    }
}


$articleTitle = "This is a very long article title that exceeds the limit of 50 characters"; // Example title
$truncatedTitle = truncateTitle($articleTitle);
echo "Original Title: $articleTitle\n";
echo "Truncated Title: $truncatedTitle";

?>
</body>
</html>

