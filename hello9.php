<!DOCTYPE html>
<html>
<body>

<?php
$favcolor = "purple";

echo " color selected  is $favcolor";
echo "<br>";
 
 

switch ($favcolor) {
     case "red":
         echo "Your favorite color is red!";
         break;
     case "blue":
         echo "Your favorite color is blue!";
         break;
     case "green":
         echo "Your favorite color is green!";
         break;
         
     case "purple":
         echo "Your favorite color is purple!";
         break;
         
     default:
         echo "Your favorite color is neither purple, red, blue, nor green!";
}
?>
  
</body>
</html>