<!DOCTYPE html>
<html>
<body>

<?php
function calculateGrade($score) {
    if ($score < 60) {
        return 'F';
    } elseif ($score >= 60 && $score <= 70) {
        return 'D';
    } elseif ($score >= 71 && $score <= 80) {
        return 'C';
    } elseif ($score >= 81 && $score <= 90) {
        return 'B';
    } elseif ($score > 90) {
        return 'A';
    } else {
        return 'Invalid score';
    }
}
$grade = calculateGrade(73);
echo "Score: $score, Grade: $grade";

?>

</body>
</html>
