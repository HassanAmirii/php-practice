<?php 
/*

Exercise 1: The Calculator with Type Safety
Enable Strict Typing at the top of the script.

Define a function that accepts two float parameters and returns a float.

The function should multiply the two numbers.

Call the function with an integer and a float.

Call the function again, but pass a string number (e.g., "5.5") and observe the terminal error.

Expected Outcome: Success on the first call due to float/int compatibility in strict mode; Fatal Error on the second call.
*/

#enable strict typing 
declare(strict_types=1);

function multiplyFloat(float $a, float $b) :float {
    return $a * $b;
}

#call with an int and a float
echo multiplyFloat(4, 4.4);

#call with a string and a float

// echo multiplyFloat("40", 4.4);

?>