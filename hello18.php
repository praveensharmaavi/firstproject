<!DOCTYPE html>
<html>
<body>

<?php

echo "<br>";
echo " tommorrow  is ";
echo "<br>";


$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";


echo "<br>";
echo " next saturday   is ";
echo "<br>";
$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";



echo "<br>";
echo " next monday   is ";
echo "<br>";
$d=strtotime("next monday");
echo date("Y-m-d h:i:mo", $d) . "<br>";


echo "<br>";
echo " 3 months fron mow  rrow  is ";
echo "<br>";


$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";
?>

</body>
</html>