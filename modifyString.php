<?php
$str = "  My name is Premraj  ";

//Upper Case
echo strtoupper($str);
echo "\n";

//Lower Case
echo strtolower($str);
echo "\n";

//Replace String
echo str_replace("Premraj", "Premraj Patil", $str);
echo "\n";

//Random Timepass
// echo str_replace("me i", "abcdef", $str); // Output: My naabcdefs Premraj

//String Reverse
echo strrev($str);
echo "\n";

//Remove Whitespace
echo trim($str);
echo "\n";

//String to Array
$strToArray = explode(" ", $str);
print_r($strToArray);

?>