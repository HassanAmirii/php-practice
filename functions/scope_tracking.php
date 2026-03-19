<?php 

/*
Exercise 2: Global vs. Static Scope Tracking
Define a global variable count initialized to 0.

Create a function that uses a static variable to increment and echo a value every time the function is called.

Inside the same function, try to echo the global count variable.

Call the function three times.

Expected Outcome: The static variable increments (1, 2, 3) 
while the global variable remains inaccessible unless the global keyword is used.

*/

 $COUNT = 0;


function staticVar() {
    global $COUNT; // Connects to the variable defined outside
    static $count = 0;
    $count++;
    echo "Static: $count | Global: $COUNT <br>";
}

staticVar();
staticVar();
staticVar();

?>