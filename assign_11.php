
<!DOCTYPE html>
<html>
<body>

<?php
// 11.Scenario: Suppose you are developing a quiz application where users can attempt multiple-choice questions. You want to implement a feature that calculates the user's score based on the number of correct answers. Write a PHP script that calculates the user's score and displays it at the end of the quiz.

$correctAnswers = array(
    'question1' => 'option1',
    'question2' => 'option2',
    'question3' => 'option3',
    // Add more questions and their correct answers here
);

// User's answers (you would typically receive these from a form submission)
$userAnswers = array(
    'question1' => $_POST['question1'], // Assuming question1 answer is submitted via POST method
    'question2' => $_POST['question2'], // Assuming question2 answer is submitted via POST method
    'question3' => $_POST['question3'], // Assuming question3 answer is submitted via POST method
   
);

// Function to calculate user's score
function calculateScore($correctAnswers, $userAnswers) {
    $score = 0;
    foreach ($correctAnswers as $question => $correctOption) {
        if (isset($userAnswers[$question]) && $userAnswers[$question] === $correctOption) {
            $score++;
        }
    }
    return $score;
}


$userScore = calculateScore($correctAnswers, $userAnswers);

echo "Your score: $userScore";

?>
</body>
</html>
