<?php 
/*  
Exercise 2: Firewall Access Logic
Define three boolean variables: is_trusted_ip, has_valid_token, and is_brute_force_detected.

Set is_trusted_ip to false.

Set has_valid_token to true.

Set is_brute_force_detected to false.

Create a variable allow_entry. The logic is: Access is allowed if the user has a Trusted IP OR a Valid Token,
 provided that Brute Force is NOT detected.

Use var_dump to output the final allow_entry status.

Expected Outcome: bool(true)
*/


#code 

$is_trusted = false;
$has_valid_token = true;
$is_brute_force = false;
$allow_entry = (($is_trusted || $has_valid_token) && ($is_brute_force));

var_dump($allow_entry)






?>