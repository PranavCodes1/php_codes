<!DOCTYPE html>
<html>
<body>
<h2>Associative array operations</h2>

<form method="post">

Select operation to perform:
<select name="op">
<option value="chunk">Split array into chunks</option>
<option value="odd">filter odd element</option>
<option value="intersection">intersection of two arrays</option>
</select>
<br><br>

<input type="submit" name="submit" value="perform operations">
</form>

<?php

if(isset($_POST['submit']))
{
	$arr = array("Sophia" => 31, "Jacob" => 41, "William"=>39,"Ramesh"=>40);
	$op = $_POST['op'];

	switch($op)
	{
	case "chunk":
		$result = array_chunk($arr,2,true);
		print_r($result);
		break;
	case "odd":
		$result = array_filter($arr,function($v)
		{
			return $v % 2 != 0;
		});
		print_r($result);
		break;
	case "intersection":
		$arr2 = array("Jacob" => 41,
                "Ramesh" => 40,
                "Amit" => 25);
		$result = array_intersect_assoc($arr,$arr2);
		print_r($result);
		break;
	}
}
?>
</body>
</html>
	

