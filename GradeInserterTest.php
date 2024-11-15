// tests/GradeInserterTest.php
use PHPUnit\Framework\TestCase;
require 'gradeInserter.php';

class GradeInserterTest extends TestCase {
 public function testInsertGrades() {
 // Create a mock connection and method expectations
 $dbMock = $this->createMock(mysqli::class);

 $dbMock->expects($this->any())
 ->method('query')
->willReturn(true);

 // Use the mock to test insertGrades functionality
$result = insertGrades("12345", [90, 85, 88, 92, 75], [70, 65, 88, 90, 80], 85, 95, 88);
 $this->assertTrue($result); // Expected success
}
}
