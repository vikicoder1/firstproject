<?php 
$name="Harry is the good boy";

echo "The lenght of ". "my string is " .strlen($name);
echo "<br>";

echo str_word_count($name);
echo "<br>";
echo strrev($name);

echo "<br>";
echo strpos($name, "Harry");


echo "<br>";
echo str_replace("Harry", "Vikash", $name);

echo "<br>";
echo str_repeat($name,5);

echo "<br>";
echo "<pre>";
echo rtrim("  This is a good boy   ");
echo "<br>";

echo ltrim("   This is a good boy   ");
echo "</pre>";



?>