<!DOCTYPE html>
<html>


<body style="background-color:lightblue;">


<h1 style="color:red;">This is a MATHS PHP </h1>


<h2 style="color:purple;">This is a LAB for  PHP </h2>

<?php
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 50;
$y = 50;
$z = 0;
$w = 0;
$a = 0;
$b = 0;
$c = 0;
$z = 0;
$e = 0;
$m = 0;

echo "<h2>" . $txt1 . "</h2>";
echo "Study PHP at " . $txt2 . "<br>";
echo "<br>";
echo "x is $x<br>";
echo "y is $y<br>";

// addition
echo "x + y is $x + $y<br>";
echo "<br>";
echo "<br>";
echo "$x + $y =";
echo $x + $y;

$z = $x + $y;

echo "<br>";
echo "z is addition $z";

// subtraction
echo "<br>";
echo "<br>";
echo "$x - $y =";
echo $x - $y;

$a = $x-$y;

echo "<br>";
echo "a is subtraction $a";

//division
echo "<br>";
echo "<br>";
echo "$x / $y =";
echo $x / $y;

$c = $x/$y;

echo "<br>";
echo "c is division $c";


//multiply
echo "<br>";
echo "<br>";
echo "$x * $y =";
echo $x * $y;

$b = $x*$y;

echo "<br>";
echo "b is multiply $b";

echo "<br>";
echo "<br>";
echo "$z + $a - $c =";
echo $z + $a - $c;

//mod
echo "<br>";
echo "<br>";
echo " x % y is $x % $y";
echo "<br>";
$w = $x % $y;

echo "w is $w";

//power
echo "<br>";
echo "<br>";
echo " x ** y is $x ** $y";
echo "<br>";
$e = $x ** $y;

echo "e is $e";


echo "<br>";
echo "<br>";
$m = $a+$b+$c+$e+$w+$x+$y;

echo "<br>";
echo "m is $m";


?>

</h2>

</body>
</html>