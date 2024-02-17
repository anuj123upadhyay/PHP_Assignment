<!DOCTYPE html>
<html>
<body>

<?php

function assignGrade($score) {
    if ($score >= 90) {
        return 'A';
    } elseif ($score >= 80) {
        return 'B';
    } elseif ($score >= 70) {
        return 'C';
    } elseif ($score >= 60) {
        return 'D';
    } else {
        return 'F';
    }
}

$score = 75; 
$grade = assignGrade($score);
echo "Score: $score, Grade: $grade";

?>

</body>
</html>