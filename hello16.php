<!DOCTYPE html>
<html>
<body>

<?php
$numbers = array(4, 6, 2, 22, 11 , 55 , 999 , 88 , 77 , 66 , 5050 , 0  , -3 , -4 , -6 , 0.5 , .9);


// print unsorted
echo "<br>";
echo " print unsorted array ";
echo "<br>";

$arrlength = count($numbers);
for($x = 0; $x <  $arrlength; $x++) {
     echo $numbers[$x];
     echo "<br>";
}



// print sorted
echo "<br>";
echo " print sorted array ";
echo "<br>";


sort($numbers);

$arrlength = count($numbers);
for($x = 0; $x <  $arrlength; $x++) {
     echo $numbers[$x];
     echo "<br>";
}
?>

</body>
</html>