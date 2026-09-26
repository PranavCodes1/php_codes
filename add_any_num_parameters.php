<!DOCTYPE html>
<html>
<body>

<h2> Addition using function which accepts any num of parameters</h2>

<?php

function add(...$num)

{
$sum = 0;
foreach($num as $n)
{
	$sum = $sum + $n;
}
return $sum;
}

echo "Sum = ".add(10,20,30);
?>
</body>
</html>
