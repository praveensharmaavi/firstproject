<!DOCTYPE html>
<html>
<body>

<?php
$t = date("H");
$m = date ("M");
$d = date ("d");
$D = date ("D");

echo "Date is ";
echo date;
echo "<br>";

echo "Time is ";
echo $t;
echo "<br>";

echo "Month is ";
echo $m;
echo "<br>";

echo "Day is ";
echo $d;
echo "<br>";

echo "Day is ";
echo $D;
echo "<br>";
echo "<br>";

echo "Today is $D $m $d";
echo "<br>";
echo "<br>";



if ($t < "20") {
    echo "Have a good morning!";
} elseif ($t < "30") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
?>
  
</body>
</html>