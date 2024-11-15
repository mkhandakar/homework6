// gradeCalculator.php
function calculateFinalGrade($homework, $quiz, $midterm, $final_project) {
// Calculate weighted average for homework
$homework_avg = array_sum($homework) / count($homework) * 0.2;

// Sort quizzes, drop the lowest score, and calculate the average
sort($quiz);
  array_shift($quiz); // Remove lowest score
$quiz_avg = array_sum($quiz) / count($quiz) * 0.1;

// Calculate midterm and final project scores
 $midterm_score = $midterm * 0.3;
 $final_project_score = $final_project * 0.4;

// Compute the final grade
  return round($homework_avg + $quiz_avg + $midterm_score + $final_project_score);
}
