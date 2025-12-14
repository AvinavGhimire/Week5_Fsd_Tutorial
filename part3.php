<?php
echo "========================================<br>";
echo "Exercise 3.1: Create and Write to a File<br>";
echo "========================================<br>";
$file = fopen("note.txt", "w");
fwrite($file, "This is the first line of text.<br>");
fwrite($file, "This is the second line of text.");
fclose($file);
echo "File 'note.txt' created and written successfully!<br><br>";
echo "========================================<br>";
echo "Exercise 3.2: Read from a File<br>";
echo "========================================<br>";
$file = fopen("note.txt", "r");
$content = fread($file, filesize("note.txt"));
fclose($file);
echo "File content:<br>";
echo $content . "<br><br>";
echo "========================================<br>";
echo "Exercise 3.3: Read Line by Line<br>";
echo "========================================<br>";
$file = fopen("note.txt", "r");
echo "Reading line by line:<br>";
while (!feof($file)) {
    $line = fgets($file);
    if ($line !== false) {
        echo $line . "<br>";
    }
}
fclose($file);
echo "<br>";
echo "========================================<br>";
echo "Exercise 3.4: Append to a File<br>";
echo "========================================<br>";
$file = fopen("note.txt", "a");
fwrite($file, "<br>Appended via PHP tutorial.");
fclose($file);
echo "New line appended to file!<br><br>";
echo "Updated file content:<br>";
$file = fopen("note.txt", "r");
$updatedContent = fread($file, filesize("note.txt"));
fclose($file);
echo $updatedContent . "<br>";
?>
