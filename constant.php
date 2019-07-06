<!DOCTYPE html>
<html>
<body>

<?php

$a=0;
$c=0;
$r=0;

// case-sensitive constant name
define("GREETING", "I am learning PHP!");
echo GREETING;
echo "<br>";
echo "<br>";
define(pi, 3.14);
echo pi;
echo "<br>";

$r=1000;
$c=2*pi*$r;
$a=pi*$r*$r;

echo "<br>";

echo "area is $a";
echo "<br>";
echo $a;
echo "<br>";
echo "<br>";


echo "radius is $r";
echo "<br>";
echo $r;
echo "<br>";
echo "<br>";

echo "circumference is $c";
echo "<br>";
echo $c;
echo "<br>";

?>  

</body>
</html>