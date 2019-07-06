<!DOCTYPE html>
<html>
<body>

<?php
$startdate=strtotime("Saturday");
$enddate=strtotime("+6 weeks",$startdate);
$n=1;
while ($startdate <  $enddate) {
echo "week num   $n   ";
   echo date("M d", $startdate),"<br>";
   $n++;
   $startdate = strtotime("+1 week", $startdate);
}
?>

</body>
</html>