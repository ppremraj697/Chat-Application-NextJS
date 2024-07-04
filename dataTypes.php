<?php
//Variables can store data of different types.

//PHP supports: String, Integer, Float (floating point numbers - also called double), Boolean, Array, Object, NULL, Resource etc.

// var_dump() returns the data type and the value
//Integer
$x = 50;
var_dump($x);

//String(same with single quote also)
$y = "Hello world!";
var_dump($y);

//Float
$z = 10.365;
var_dump($z);

//Boolean
$a = true;
var_dump($a);

//Array
$cars = array("Volvo","BMW","Audi");
var_dump($cars);

//OBJECT --> A class is a template for objects, and an object is an instance of a class.
// If you create a __construct() function, PHP will automatically call this function when you create an object from a class.
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
}
  
$myCar = new Car("red", "Volvo");
var_dump($myCar);

//Null is a special data type which can have only one value: NULL
//A variable of data type NULL is a variable that has no value assigned to it.
//If a variable is created without a value, it is automatically assigned a value of NULL.
$p = "Premraj";
var_dump($p);
$p = null;
var_dump($p);

//Dynamically Typed behaviour of PHP --> Implicitely figures out data type of value stored in it
$k = 5;
var_dump($k);

$k = "Hello";
var_dump($k);

//Type Casting
$b = 5;
$b = (string) $b;
var_dump($b);

// The special resource type is not an actual data type. It is the storing of a reference to functions and resources external to PHP.
//A common example of using the resource data type is a database call.

?>