<!DOCTYPE html>
<html>
<body>

<h2>Add any num of parameters passed as argument to function</h2>

<?php

function add(...$numbers)
{
$sum=0;
foreach($numbers as $n)
{
	$sum = $sum + $n;
}
return $sum;
}

echo "Addition of numbers 1,2,3,4:".add(1,2,3,4);
?>

</body>
</html>

