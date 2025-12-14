<?php
echo "========================================<br>";
echo "Exercise 4.3: Try...Catch Error Handling<br>";
echo "========================================<br>";
try {
    echo "Attempting a division operation...<br>";
    $dividend = 10;
    $divisor = 0;
    if ($divisor == 0) {
        throw new Exception("Division by zero is not allowed!");
    }
    $result = $dividend / $divisor;
    echo "Result: " . $result . "<br>";
} catch (Exception $e) {
    echo "Caught Exception: " . $e->getMessage() . "<br>";
    echo "Error handling prevents script crash and provides user-friendly message.<br>";
}
echo "<br>Script continues execution after exception handling.<br>";
?>
