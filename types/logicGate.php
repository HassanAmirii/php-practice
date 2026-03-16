<?php 
/*
Create a variable $input and set it to the string "0".

Create a second variable $boolVersion and cast $input to a boolean.

Use var_dump($boolVersion) to see the result.

Challenge: Did you expect true or false? In PHP, "0", 0, and an empty string are all considered false when cast to a boolean.


*/

$input = 0;
$boolVersion = (bool)$input;
var_dump($boolVersion);
?>