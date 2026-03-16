<?php 
/*
Exercise 1: The "Price Tag" Fixer
Create a script where you have a float representing a price (e.g., 15.75).

Use Type Casting to turn that price into an integer (to show the "dollars" only).

Create a string using Double Quotes that says: "The total price is $price, but for you, it's only $integerPrice!"

Use var_dump at the end to check if your message is still a string.
*/

$price = 15.75;

$integerPrice = (int)$price;
$message = "The total price is $price, but for you, it's only $integerPrice!";

var_dump($message);
#echo $message;

?>