<!DOCTYPE html>
<html>
<body>

<?php

$t = date("H");
$m = date("M");
$d = date("d");
$D = date("D");

echo "<br>";
echo " Date is ";
echo date;
echo "<br>";

echo " time is  $t  ";
echo $t;
echo "<br>";

echo " month  is    ";
echo $m;
echo "<br>";
echo "<br>";

echo " day  is    ";
echo $d;
echo "<br>";
echo "<br>";

echo " day  is    ";
echo $D;
echo "<br>";
echo "<br>";

echo " today  is $D $m $d    ";

if ($t < "20") {
    echo "Have a good morning!";
} elseif ($t < "30") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}

echo "<br>";

?>
  
</body>
</html>

