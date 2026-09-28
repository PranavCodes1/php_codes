<!DOCTYPE html>
<html>
<body>

<form method="post">

Select an operation:
<select name="op">
<option value="display">Display the elements</option>
<option value="size">Size of array</option>
<option value="delete">Delete an element from an array</option>
</select>
<br><br>

Enter key to delete:
<input type="text" name="key"><br><br>

<input type="submit" name="submit" value="perform">

</form>

<?php

if(isset($_POST['submit']))
{

$op = $_POST['op'];
$arr = array("sophia" => 40, "Jacob" => 31, "Ram" => 25);
$key = $_POST['key'];

switch($op)
{
case "display":
	foreach($arr as $key => $value)
	{
		echo "$key => $value <br>";
	}
	break;

case "size":
	echo "Size of array: ".count($arr);
	break;

case "delete":
	if(array_key_exists($key,$arr))
	{
		unset($arr[$key]);


		echo "Array after deletion:<br>";

		foreach($arr as $key => $value)
		{
			echo "$key => $value <br>";
		}
	}
	else{
		echo "$key not found";
	}
	break;

}
}
?>
</body>
</html>
