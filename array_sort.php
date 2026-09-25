<!DOCTYPE html>
<html>
<body>
<h2>Associative Array Sorting </h2>

<?php

$arr = array("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40");

echo "<h2>Original Array: </h2>";
print_r($arr);

asort($arr);
echo "<h2> ascending order by value: </h2>";
print_r($arr);

ksort($arr);
echo "<h2> Ascending order by keys </h2>";
print_r($arr);

arsort($arr);
echo "<h2> Descending order by value: </h2>";
print_r($arr);

krsort($arr);
echo "<h2> Descending order by key: </h2>";
print_r($arr);
?>
</body>
</html>
