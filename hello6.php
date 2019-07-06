<!DOCTYPE html>
<html>
<body>

<?php

echo "Hello world!";
echo "<br>";
echo strlen("Hello world!");
echo "<br>";

echo str_word_count("Hello world!"); // outputs 2
echo "<br>";
echo strrev("Hello world!"); // outputs !dlrow olleH
echo "<br>";

echo strpos("Hello world!", "world"); // outputs 6
echo "<br>";
echo strpos("Hello world!", "Hello"); // outputs 6
echo "<br>";

echo "Sam Sharma";
echo "<br>";
echo strpos("Sam Sharma", "h"); // outputs 6
echo "<br>";
echo "<br>";

echo "Hello world!";
echo "<br>";
echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
echo "<br>";

?>  
  
</body>
</html>