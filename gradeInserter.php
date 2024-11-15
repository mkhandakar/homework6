// gradeInserter.php
include 'db.php';

function insertGrades($student_id, $homework, $quiz, $midterm, $final_project, $final_grade) {
 $conn = getDatabaseConnection();

// SQL queries for each type of grade data
 $insert_homework_sql = "INSERT INTO homework (student_id, homework1, homework2, homework3, homework4, homework5) 
 VALUES ('$student_id', '{$homework[0]}', '{$homework[1]}', '{$homework[2]}', '{$homework[3]}', '{$homework[4]}')";

 $insert_quiz_sql = "INSERT INTO quizzes (student_id, quiz1, quiz2, quiz3, quiz4, quiz5) 
VALUES ('$student_id', '{$quiz[0]}', '{$quiz[1]}', '{$quiz[2]}', '{$quiz[3]}', '{$quiz[4]}')";

$insert_midterm_sql = "INSERT INTO midterm (student_id, midterm_score) VALUES ('$student_id', '$midterm')";
$insert_final_project_sql = "INSERT INTO final_project (student_id, final_project_score) VALUES ('$student_id', '$final_project')";
$insert_final_grade_sql = "INSERT INTO final_grades (student_id, final_grade) VALUES ('$student_id', '$final_grade')";

// Execute and check all insertions
 $success = $conn->query($insert_homework_sql) && 
$conn->query($insert_quiz_sql) && 
$conn->query($insert_midterm_sql) && 
$conn->query($insert_final_project_sql) && 
$conn->query($insert_final_grade_sql);

$conn->close();
return $success;
}
