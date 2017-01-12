<?php
$file = 'people.txt';
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file
$line = readline("Enter your message to save to file: ");
// $current = "Goodbye World!\n";
// Write the contents back to the file
file_put_contents($file, $line);
?>