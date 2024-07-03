<?php
// two basic ways to get output: "echo" and "print"
/* The differences are small: 
   1. echo has no return value while print has a return value of 1 so it can be used in expressions. 
   2. echo can take multiple parameters (although such usage is rare) while print can take one argument. 
   3. echo is marginally faster than print
*/

echo "Hello\n";
echo("World\n");
echo "This ", "string ", "was ", "made ", "with multiple parameters.\n";

// When using double quotes, variables can be inserted to the string as in the example below.
$txt1 = "w3School";
echo "Learning PHP from $txt1";

// When using single quotes, variables have to be inserted using the . operator, like this:
$txt2 = "GitHub";
$txt3 = "Git";
echo ' and uploading it to ' . $txt2 . ' using ' . $txt3;

print "\nHello World";
//same as print("Hello World")

$txt4 = "Premraj";
print "\nMy name is " . $txt4; //Same syntax with single quotes also

?>