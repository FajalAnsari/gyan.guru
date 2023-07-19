
<?php

$connection = mysqli_connect("localhost", "root", "", "eduprix");
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {

$answers = $_POST;

 $query = "SELECT question_id, option_id FROM quiz_options WHERE is_correct = 1";
$result = mysqli_query($connection, $query);


 $correctAnswers = [];
 while ($row = mysqli_fetch_assoc($result)) {
$questionId = $row['question_id'];
 $optionId = $row['option_id'];
 $correctAnswers[$questionId] = $optionId;
}


 $totalQuestions = count($correctAnswers);
 $score = 0;
 foreach ($correctAnswers as $questionId => $correctOptionId) {
if (isset($answers['question_' . $questionId]) && $answers['question_' . $questionId] == $correctOptionId) {
$score++;
}
}


 $percentage = ($score / $totalQuestions) * 100;


echo "<h3>Your score: $score</h3>";
 echo "<h3>Your percentage: $percentage%</h3>";
}
?>


