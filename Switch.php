<?php
$favcolor = "black";

echo "color selected is $favcolor";
echo "<br>";


switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
	case "purple":
        echo "Your favorite color is purple!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, purple, blue, nor green!";
}
?>