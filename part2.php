<?php
echo "<br>";
echo "Exercise 2.1: Common String Functions<br>";
echo "<br>";
$string = "Full Stack Development with PHP";
echo "Original String: " . $string . "<br><br>";
echo "strlen(): " . strlen($string) . " characters<br>";
echo "str_word_count(): " . str_word_count($string) . " words<br>";
echo "strrev(): " . strrev($string) . "<br>";
echo "strpos('PHP'): Position " . strpos($string, "PHP") . "<br>";
$replaced = str_replace("PHP", "JavaScript", $string);
echo "str_replace(): " . $replaced . "<br><br>";
echo "<br>";
echo "Exercise 2.2: Explode & Implode<br>";
echo "<br>";
$fruits = "apple,banana,grape,orange";
echo "Original String: " . $fruits . "<br><br>";
$fruitArray = explode(",", $fruits);
echo "Array after explode():<br>";
foreach ($fruitArray as $fruit) {
    echo $fruit . "<br>";
}
echo "<br>";
$joined = implode(" | ", $fruitArray);
echo "After implode() with ' | ' separator:<br>";
echo $joined . "<br><br>";
echo "<br>";
echo "Exercise 2.3: String Security<br>";
echo "<br>";
$userInput = "<script>alert('hack');</script> Welcome";
echo "Original User Input: " . $userInput . "<br><br>";
$safeOutput = htmlspecialchars($userInput);
echo "After htmlspecialchars():<br>";
echo $safeOutput . "<br><br>";
$untrimmed = "  Hello World  ";
echo "trim() Example:<br>";
echo "Before: '" . $untrimmed . "' (length: " . strlen($untrimmed) . ")<br>";
echo "After: '" . trim($untrimmed) . "' (length: " . strlen(trim($untrimmed)) . ")<br>";
?>
