<?php

//Scopes in PHP: Local, Global, Static

// A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function
// A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function

$x = 5; // global scope
$z = 20; // global scope
$p = 23; //global scope

// PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly.

function myTest() {
    $y = 10; //local scope
    echo "Variable x inside function is: $x"; //--> This will generate ERROR / WARNING
    echo "Variable y inside function is: $y";
    
    global $z;
    echo "Variable z inside function is: $z";
    
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    echo "Updated value of z inside function is: $z";
}
// myTest();

echo "Variable x outside function is: $x";
echo "Variable y outside function is: $y"; //--> This will generate ERROR / WARNING

// When a function completes its execution, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job. To do this, use the static keyword.

function myTest2(){
    static $x = 0;
    echo $x;
    $x++;
}

myTest2();
myTest2();
myTest2();

?>