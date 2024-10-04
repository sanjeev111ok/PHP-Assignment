<!--  In an academic institution, there's a need to calculate the final grades for students based
on their scores in different assignments and exams. The grading system has specific
weightage for each component, such as assignments, quizzes, midterm exams, and a final
exam.
a. Assignments: 20% of the final grade.
b. Quizzes: 10% of the final grade.
c. Midterm Exam: 30% of the final grade.
d. Final Exam: 40% of the final grade.
Problem:
Write a PHP function that calculates the final grade for a student given their scores in
each component. The program should also display the corresponding letter grade
based on the final score using a function.  -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }
        h1 {
            text-align: center;
        }
        form {
            max-width: 400px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Final Grade Calculator</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="text" name="studentName" placeholder="Enter Student Name" required>
        <input type="number" name="assignments" placeholder="Assignments Score" min="0" max="100" required>
        <input type="number" name="quizzes" placeholder="Quizzes Score" min="0" max="100" required>
        <input type="number" name="midterm" placeholder="Midterm Exam Score" min="0" max="100" required>
        <input type="number" name="finalExam" placeholder="Final Exam Score" min="0" max="100" required>
        <input type="submit" value="Calculate Final Grade">
    </form>
    <?php
function calculateFinalGrade($studentName, $assignments, $quizzes, $midterm, $finalExam) {
    // Weightage for each component
    $weightAssignments = 0.20;
    $weightQuizzes = 0.10;
    $weightMidterm = 0.30;
    $weightFinalExam = 0.40;

    // Calculate the final score
    $finalScore = ($assignments * $weightAssignments) +
                  ($quizzes * $weightQuizzes) +
                  ($midterm * $weightMidterm) +
                  ($finalExam * $weightFinalExam);

    // Determine the letter grade
    $letterGrade = '';
    if ($finalScore >= 90) {
        $letterGrade = 'A+';
    } elseif ($finalScore >= 80) {
        $letterGrade = 'A';
    } elseif ($finalScore >= 70) {
        $letterGrade = 'B+';
    } elseif ($finalScore >= 60) {
        $letterGrade = 'B';
    } elseif ($finalScore >= 50) {
        $letterGrade = 'C';
    }elseif ($finalScore >= 40) {
        $letterGrade = 'D';
    }
    else {
        $letterGrade = 'F';
    }
$remark='';
if($finalScore>=40){
    $remark=' You passed you exam';
}else{
    $remark=' Sorry! You failed study hard next time';
}
    // Display the results
    echo "Student Name: " . htmlspecialchars($studentName) . "<br>";
    echo "Final Score: " . number_format($finalScore, 2) . "<br>";
    echo "Grade: " . $letterGrade . "<br>";
    echo "Remark:" .$remark . "<br>";
}



// Example usage
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $studentName = $_POST['studentName'];
    $assignments = $_POST['assignments'];
    $quizzes = $_POST['quizzes'];
    $midterm = $_POST['midterm'];
    $finalExam = $_POST['finalExam'];

    calculateFinalGrade($studentName, $assignments, $quizzes, $midterm, $finalExam);
}
?>
</body>
</html>