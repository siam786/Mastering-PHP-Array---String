<?php
// Create a multidimensional array called $studentGrades to store the grades of three students. Each student has grades for three subjects: Math, English, and Science. Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student.


$studentGrades = [
    ['Math' => 85, 'English' => 78, 'Science' => 92],
    ['Math' => 92, 'English' => 88, 'Science' => 95],
    ['Math' => 78, 'English' => 84, 'Science' => 90]
];
    

    function AvgGrade($studentGrades){
        foreach($studentGrades as $grade){
           $total=array_sum($grade);
           $aveRage=$total/count($grade);
           echo "Average grade for this student: {$aveRage} \n";
        }
    }

  AvgGrade($studentGrades);