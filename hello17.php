<!DOCTYPE html>
<html>
<body>

<?php

echo "<br>";
echo " date  is ";
echo "<br>";

echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");

echo "<br>";
echo " time  is ";
echo "<br>";

echo "The time is " . date("h:i:sa");

echo "<br>";
echo " timezone nyc    is ";
echo "<br>";



date_default_timezone_set("America/New_York");
echo "The NY time is " . date("h:i:sa");

echo "<br>";
echo " timezone chicago    is ";
echo "<br>";

date_default_timezone_set("America/Chicago");
echo "The chicago  time is " . date("h:i:sa");



?>

</body>
</html>