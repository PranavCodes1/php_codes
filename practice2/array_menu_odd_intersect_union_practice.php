<!DOCTYPE html>
<html>
<body>
<h2>Associative array operations</h2>

<form method="post">

Select operation to perform:
<select name="op">

<option value="odd">filter odd element</option>
<option value="intersection">intersection of two arrays</option>
<option value="union">union of two arrays</option>
</select>
<br><br>

<input type="submit" name="submit" value="perform operations">
</form>

<?php

if(isset($_POST['submit']))
{
	$arr = array("Sagar" => 31, "Vicky" => 41, "Leena"=>39,"Ramesh"=>40);
	echo "current array: ";
	print_r($arr);
	$op = $_POST['op'];

	switch($op)
	{
	case "odd":
		$odd = array_filter($arr, function($v)
		{
			return $v % 2 != 0;
		});
		echo "<br>odd values: ";
		print_r($odd);
		echo "<br>";
		break;

	case "intersection":
		$b = array("Atharva" => 18, "Leena"=>39,"Ramesh"=>40);
		$result = array_intersect_assoc($arr,$b);
		echo "<br>Array intersection: ";
		print_r($result);
		echo "<br>";
		break;

	case "union":
		$b = array("Atharva" => 18, "Leena"=>39,"Ramesh"=>40);
		$c = $arr + $b;
		echo "array union: ";
		print_r($c);
		break;
	}
}


?>
</body>
</html>
	


