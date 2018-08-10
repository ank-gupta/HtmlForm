<?php

function writemsg()
{
	echo"Hello\n Everyone<br>";
}
writemsg();

echo "Superb<br>";

$cars = array("Volvo", "BMW", "Toyota");
sort($cars);

$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
    echo $cars[$x];
    echo "<br>";
} 
echo $_SERVER['PHP_SELF']."<br>";
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
//echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);
?>