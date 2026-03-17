<?php 
/*Gemini said
Exercise 1: User Level Calculation
Initialize a variable for points with the integer 75.

Initialize a variable for required_points with the string "75".

Use a combined assignment operator to increase points by 25.

Create a boolean variable that checks if points is Identical to required_points.

Create a second boolean variable that checks if points is Greater Than or Equal to required_points.

Use var_dump on both boolean results.

Expected Outcome: The first check is false (type mismatch); the second check is true.*/

#code 
$points = 75;
$required_points = "75";

$points += 25;

$match = $points === $required_points;
$size = $points >= $required_points;

var_dump($match, $size);




?>

