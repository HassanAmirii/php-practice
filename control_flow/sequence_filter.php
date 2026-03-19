<?php 

/*
Exercise 2: Sequence Filter with Control Logic
Create a for loop that counts from 1 to 20.

Inside the loop, use an if statement with the modulo operator (%) to check if the number is even.

Use the continue keyword to skip even numbers so they are not printed.

Use an if statement to check if the current number is 15. If it is, use the break keyword to stop the loop entirely.

Echo the remaining numbers.

Expected Outcome: 1, 3, 5, 7, 9, 11, 13.
*/

for ($i = 1; $i < 21; $i++){
    if($i % 2 === 0) continue;
    if($i === 15) break;
    echo $i;
}


?>