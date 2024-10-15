<?php
function calculateResult($marks) {
    $totalMarks = 0;
    $isFailed = false;

  
    foreach ($marks as $mark) {
        if ($mark < 0 || $mark > 100) {
            echo "Mark range is invalid.\n";
            return;
        }
        if ($mark < 33) {
            $isFailed = true;
        }
        $totalMarks += $mark;
    }

   
    if ($isFailed) {
        echo "The student has failed.\n";
        return;
    }

    
    $averageMarks = $totalMarks / count($marks);

    
    $grade = getGrade($averageMarks);

   
    echo "Total Marks: $totalMarks\n";
    echo "Average Marks: " . number_format($averageMarks, 2) . "\n";
    echo "Grade: $grade\n";
}

function getGrade($average) {
    switch (true) {
        case ($average >= 80):
            return "A+";
        case ($average >= 70):
            return "A";
        case ($average >= 60):
            return "A-";
        case ($average >= 50):
            return"B";
        case ($average >= 40):
            return "C";
        case ($average >= 33):
            return "D";
        default:
        return "F";
       
    }
}


$marks = [45, 67,40, 34, 33];


calculateResult($marks);
