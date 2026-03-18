<?php
/*
Exercise 1: Multi-Tier Grading System
Initialize a variable score with an integer.

Use an if...elseif...else structure to assign a string grade based on these ranges:

90-100: "A"

80-89: "B"

70-79: "C"

Below 70: "F"

Use a switch statement on the grade variable to echo a custom message (e.g., "A" echoes "Excellent").

Include a default case for invalid grades.
*/

$score = 40;
$grade = null;

if ($score >= 90){
    $grade = "A";
}elseif($score >= 80){
    $grade = "B";
}elseif($score >= 70) {
    $grade = "C";
}else{
    $grade = "F";
}

#Use a switch statement on the grade variable to echo a custom message (e.g., "A" echoes "Excellent").

switch($grade){
    case ($grade === "A"):
        echo "Excellent";
        break;
    
    case ($grade === "B"):
        echo "Great";
        break;

    case ($grade === "C"):
        echo "Nice";
        break;
        
    default:
        echo "You failed";    

}

?>