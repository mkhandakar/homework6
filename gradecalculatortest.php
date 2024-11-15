// tests/GradeCalculatorTest.php
use PHPUnit\Framework\TestCase;
require 'gradeCalculator.php';

class GradeCalculatorTest extends TestCase {
 public function testCalculateFinalGrade() {
 $homework = [85, 90, 78, 92, 88];
 $quiz = [75, 80, 65, 70, 85];
 $midterm = 88;
 $final_project = 90;

 $final_grade = calculateFinalGrade($homework, $quiz, $midterm, $final_project);
 $this->assertEquals(83, $final_grade); // Expected final grade calculation
 }
}
