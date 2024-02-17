<!DOCTYPE html>
<html>
<body>

<?php
// 8.Scenario: You are creating a grading system for a school website. Based on the score obtained by a student in an exam, you need to assign a grade. Write a PHP script that takes the score as input and assigns a grade according to the following criteria:
//     Score >= 90: Grade A
//     Score >= 80: Grade B
//     Score >= 70: Grade C
//     Score >= 60: Grade D
//     Score < 60: Grade F
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