<!DOCTYPE html>
<html>
<body>

<?php
echo ("Hello world!");
echo "<br>";
echo strlen("Hello world!"); //outputs12
echo "<br>";
echo str_word_count("Hello world!"); //outputs2
echo "<br>";
echo strrev("Hello world!"); //outputs !dlrow olleH
echo "<br>";
echo strpos("Hello world!", "world"); // outputs 6
echo "<br>";
echo strpos("Hello world!", "Hello"); // outputs 0
echo "<br>";
echo ("Melissa");
echo "<br>";
echo strpos("Melissa", "s"); // outputs 4
echo "<br>";
echo str_replace("world", "Melissa", "Hello world!"); // outputs Hello Melissa!
?>  
  
</body>
</html>