<?php

function greetUser($name) {
    return "Hello, " . $name . "! Welcome to PHP.";
}

echo "<br>";

echo "Exercise 1.1: User-Defined Function<br>";
echo greetUser("John") . "<br>";
echo "<br>";

function calculateArea($length, $width) {
    return $length * $width;
}

echo "<br>";

echo "Exercise 1.2: Function with Multiple Arguments<br>";
$area = calculateArea(5, 10);
echo "Area of rectangle with length 5 and width 10: " . $area . "<br>";
echo "<br>";

$globalVar = "I am global";

echo "<br>";

echo "Exercise 1.3: Variable Scope<br><br>";

echo "Part 1: Without 'global' keyword (will not work as expected)<br>";
function testLocalScope() {
    if (isset($globalVar)) {
        echo "Inside function (no global): " . $globalVar . "<br>";
    } else {
        echo "Inside function (no global): Variable is not accessible<br>";
    }
}

testLocalScope();

echo "<br>";

echo "Part 2: With 'global' keyword (will work correctly)<br>";
function testGlobalScope() {
    global $globalVar;
    echo "Inside function (with global): " . $globalVar . "<br>";
}

testGlobalScope();
echo "<br>";

echo "Part 3: Access global variable outside function<br>";
echo "Outside function: " . $globalVar . "<br>";

?>
