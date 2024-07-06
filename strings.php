<?php
//A string is a sequence of characters(0-indexed), like "Hello world!" or 'Hello World!'.

//Double quotes process special characters, single quotes does not.

//When there is a variable in double quoted string, it returns the value of the variable
//Single quoted strings does not perform such actions, it returns the string like it was written, with the variable name

//Length of String in PHP
echo strlen("Premraj");
echo "\n";

$str = "I am a recent graduate from DYPIEMR, Pune";

echo str_word_count($str);
echo "\n";

echo strpos($str, "graduate");
echo "\n";

echo strpos($str, "an");

?>