<!DOCTYPE html>
<html>
<body>

<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l") . "<br>";
echo "The time is " . date("h:i:sa") . "<br>";
echo "<br>";
echo "<br>";
date_default_timezone_set("America/New_York");
echo "The NY time is" . date("h:i:sa") . "<br>";
echo "<br>";
echo "<br>";
date_default_timezone_set("America/Chicago");
echo "The Chicago time is" . date("h:i:sa") . "<br>";
echo "<br>";
echo "<br>";
date_default_timezone_set("Europe/Paris");
echo "The Paris time is" . date("h:i:sa") . "<br>";
echo "<br>";
echo "<br>";
date_default_timezone_set("Australia/Sydney");
echo "The Sydney time is" . date("h:i:sa") . "<br>";
echo date("Y/m/d");


?>

</body>
</html>