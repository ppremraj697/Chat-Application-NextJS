<?php

// PHP statements end with a semicolon --> Single Line Comment

/* 
In PHP, keywords, classes, functions, and user-defined functions are not
case-sensitive. However; all variable names are case-sensitive! --> Multiline Comment
*/

// Unlike other programming languages, PHP has no command for declaring a variable. It is created the moment you first assign a value to it.

/* Rules for PHP variables:

    1. A variable starts with the $ sign, followed by the name of the variable
    2. A variable name must start with a letter or the underscore character
    3. A variable name cannot start with a number
    4. A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
    5. Variable names are case-sensitive
*/
$color = "red";
echo "My car is ", $color;
echo "\nMy car is " . $color;
echo "\nMy car is $color\n";

$x = 5;
$y = 4;
echo $x + $y;

//Data type of variable and value stored in it.
echo "\n";
var_dump($x);

//PHP is a Loosely Typed Language 
//Supported data types: String, Integer, Float, Boolean, Array, Object, NULL, Resource

// All three variables get the value "Fruit":
$p = $q = $r = "Fruit";

?>