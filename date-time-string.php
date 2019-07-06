<!DOCTYPE html>
<html>
<body>

<?php

echo "<br>";
echo " tomorrow is";
echo "<br>";


$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

echo "<br>";
echo " Next Saturday is";
echo "<br>";

$d=strtotime("tomorrow");
echo date("Y-m-d h:i:mo", $d) . "<br>";

echo "<br>";
echo " Next Monday is";
echo "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

echo "<br>";
echo " 3 months from now is";
echo "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";

echo "<br>";
echo " +3 months";
echo "<br>";

?>

</body>
</html>